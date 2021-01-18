<?php

namespace App\Http\Controllers\Panel;

use App\Http\Resources\Sidebar\Sidebar as SidebarResource;
use App\Http\Resources\User\User as UserResource;
use App\Http\Requests\Sidebar\UpdateSidebar;
use App\Http\Controllers\Controller;
use App\Models\Sidebar\Sidebar;

class SidebarController extends Controller
{
    /**
     * @note CRUD For Sidebars
     * @note You Should Have Key Permission , And We Use Of Api Resources
     * @note You Can See Array Return, { @see \App\Http\Resources\Sidebar\Sidebar }
     */

    // Show All Sidebars
    public function index()
    {
        $this->authorize('browse', Sidebar::class);

        return (SidebarResource::collection(Sidebar::all()))
            ->additional([
                'welcome' => 'خوش آمدید',
                'profile' => UserResource::make(auth()->user()),
                'message'=>[
                    ['پیام سرور: منو ها با رابطه زیرمنو ها از سرور فرستاده شد']
                ]
            ]);
    }

    // Show One Sidebars
    public function show(Sidebar $sidebar)
    {
        $this->authorize('read', Sidebar::class);

        return (SidebarResource::make(Sidebar::find($sidebar->id)))
            ->additional([
                'message'=>[
                    ['منو ' .$sidebar->title .' با موفقیت ارسال شد.']
                ]
            ]);
    }

    // Save One Sidebars
    public function store()
    {
        $this->authorize('add', Sidebar::class);

        return response()->json(null, 204);
    }

    // Show Edit Sidebars, And Validate UpdateSidebar
    public function update(UpdateSidebar $request, Sidebar $sidebar)
    {
        $this->authorize('edit', Sidebar::class);

        $sidebar->update($request->all());
        foreach ($request->sub_title as $sub => $value) {
            $sidebar->sidebarItems[$sub]->update(['title' => $value]);
         // $sidebar->sidebarItems[$sub]->title = $value; $sidebar->push();
        }

        return (SidebarResource::make(Sidebar::find($sidebar->id)))
            ->additional([
                'message'=>[
                    ['منو ' .$sidebar->title .' تغییر یافت.']
                ]
            ]);
    }

    // Delete One Sidebars
    public function destroy($id)
    {
        $this->authorize('delete', Sidebar::class);

        return response()->json(null, 204);
    }
}
