<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Http\Resources\User\User as UserResource;
use App\Http\Requests\User\StoreUser;
use App\Http\Requests\User\UpdateUser;
use App\Http\Resources\Role\Role as RoleResource;
use App\Models\Role\Role;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
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
        $user->roles()->sync(json_decode($request->roles));

        return (UserResource::make(User::find($user->id)))
            ->additional([
                'message'=>[
                    ['کاربر ' .$user->name .' تغییر یافت.']
                ]
            ]);
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', User::class);

        $user->delete();

        return response()->json([
            'message'=>[
                ['پیام سرور: کاربر حذف شد']
            ]
        ], 200);
    }
}
