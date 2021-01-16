<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Sidebar\Sidebar;
use App\Http\Resources\Sidebar\Sidebar as SidebarResource;
use App\Http\Requests\Sidebar\StoreSidebar;
use App\Http\Resources\User\User as UserResource;

class SidebarController extends Controller
{
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

    public function update(StoreSidebar $request, Sidebar $sidebar)
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

    public function store()
    {
        $this->authorize('add', Sidebar::class);

        return response()->json(null, 204);
    }

    public function destroy($id)
    {
        $this->authorize('delete', Sidebar::class);

        return response()->json(null, 204);
    }
}
