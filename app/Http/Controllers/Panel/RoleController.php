<?php

namespace App\Http\Controllers\Panel;

use App\Http\Resources\Role\Role as RoleResource;
use App\Http\Requests\Role\UpdateRole;
use App\Http\Requests\Role\StoreRole;
use App\Http\Controllers\Controller;
use App\Models\Role\Permission;
use App\Models\Role\Role;

class RoleController extends Controller
{
    /**
     * @note CRUD For Roles
     * @note You Should Have Key Permission , And We Use Of Api Resources
     * @note You Can See Array Return, { @see \App\Http\Resources\Role\Role }
     */

    // Show All Roles
    public function index()
    {
        $this->authorize('browse', Role::class);

        return (RoleResource::collection(Role::all()))
            ->additional([
                'message' => [
                    ['نقش ها با رابطه کلیدها و رابطه با کاربران از سرور فرستاده شد']
                ],
            ]);
    }

    // Show One Role
    public function show(Role $role)
    {
        $this->authorize('read', Role::class);

        return (RoleResource::make(Role::find($role->id)))
            ->additional([
                'permissions' => Permission::all(),
                'permissions_selected' => $role->permissions->pluck('id'),
                'permissions_display_table' => $role->permissions->pluck('display_table')->unique()->flatten(),
                'message' => [
                    ['نقش ' .$role->display_name .' با موفقیت ارسال شد.']
                ],
            ]);
    }

    // Save One Role, And Validate StoreRole
    public function store(StoreRole $request)
    {
        $this->authorize('add', Role::class);

        $role = Role::create($request->all());

        return (RoleResource::make(Role::find($role->id)))
            ->additional([
                'message'=>[
                    ['نقش ' .$role->display_name .' با موفقیت ایجاد شد.']
                ]
            ])->response()->setStatusCode(201);
    }

    // Edit One Role, And Validate UpdateRole
    public function update(UpdateRole $request, Role $role)
    {
        $this->authorize('edit', Role::class);

        $role->update($request->all());

        // Cant Remove Permissions Of Role
        if ($role->id == 1) {
            return (RoleResource::make(Role::find($role->id)))
                ->additional([
                    'message'=>[
                        ['نقش ' .$role->display_name .' تغییر یافت.'],
                        [' برای تست پنل کلید ها را نقش ادمین نمی توانید بردارید']
                    ]
                ]);
        }

        $role->permissions()->sync($request->permissions);

        return (RoleResource::make(Role::find($role->id)))
            ->additional([
                'message'=>[
                    ['نقش ' .$role->display_name .' تغییر یافت.']
                ]
            ]);
    }

    // Delete One Role
    public function destroy(Role $role)
    {
        $this->authorize('delete', Role::class);

        // cant seeder delete
        $dontDelete = [1, 2];
        if (!in_array($role->id, $dontDelete)) {
            $role->delete();
            return response()->json([
                'message'=>[
                    ['پیام سرور: حذف شد']
                ]
            ], 200);
        }

        return response()->json([
            'message'=>[
                ['پیام سرور: برای تست پنل نقش حذف نمی شود']
            ]
        ], 200);
    }
}
