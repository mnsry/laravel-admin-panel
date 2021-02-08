<?php

namespace App\Http\Controllers\Panel;

use App\Http\Resources\User\User as UserResource;
use App\Http\Resources\Role\Role as RoleResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\User\UpdateUser;
use App\Http\Requests\User\StoreUser;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\Role\Role;

class UserController extends Controller
{
    /**
     * @note CRUD For Users
     * @note You Should Have Key Permission , And We Use Of Api Resources
     * @note You Can See Array Return, { @see \App\Http\Resources\User\User }
     */

    // Show All Users
    public function index()
    {
        $this->authorize('browse', User::class);

        return (UserResource::collection(User::all()))
            ->additional([
                'message'=>[
                    ['کاربران با رابطه نقش ها از سرور فرستاده شد']
                ]
            ]);
    }

    // Show One User
    public function show(User $user)
    {
        $this->authorize('read', User::class);

        return (UserResource::make(User::find($user->id)))
            ->additional([
                'roles' => RoleResource::collection(Role::all()),
                'roles_selected' => $user->roles->flatten()->pluck('id')->toArray(),
                'message'=>[
                    ['کاربر ' .$user->name .' با موفقیت ارسال شد.']
                ]
            ]);
    }

    // Save One User
    public function store(StoreUser $request)
    {
        $this->authorize('add', User::class);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return (UserResource::make(User::find($user->id)))
            ->additional([
                'message'=>[
                    ['کاربر ' .$user->name .' با موفقیت ایجاد شد.']
                ]
            ])->response()->setStatusCode(201);
    }

    // Edit One User
    public function update(UpdateUser $request, User $user)
    {
        $this->authorize('edit', User::class);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store("image/user/{$user->id}");
            Storage::delete($user->avatar);
        } else {
            $path = $user->avatar;
        }
        $user->update([
            'name' => $request->name,
            'family' => $request->family,
            'mobile' => $request->mobile,
            'avatar' => $path
        ]);

        $roles = json_decode($request->roles);

        // Cant Remove Role Admin Of User
        if ($user->id == 1) {
            if (! in_array(1, $roles)) {
                return (UserResource::make(User::find($user->id)))
                    ->additional([
                        'message'=>[
                            ['پیام سرور: برای تست پنل نقش ادمین را نمی توانید بردارید']
                        ]
                    ]);
            }
        }

        $user->roles()->sync($roles);

        return (UserResource::make(User::find($user->id)))
            ->additional([
                'message'=>[
                    ['کاربر ' .$user->name .' تغییر یافت.']
                ]
            ]);
    }

    // Delete One User
    public function destroy(User $user)
    {
        $this->authorize('delete', User::class);

        // cant seeder delete
        $dontDelete = [1, 2, 3];
        if (!in_array($user->id, $dontDelete)) {
             $user->delete();
            return response()->json([
                'message'=>[
                    ['پیام سرور: حذف شد']
                ]
            ], 200);
        }

        return response()->json([
            'message'=>[
                ['پیام سرور: برای تست پنل کاربر حذف نمی شود']
            ]
        ], 200);
    }
}
