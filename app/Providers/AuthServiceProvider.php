<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Category\Category;
use App\Policies\CategoryPolicy;
use App\Models\Product\Product;
use App\Policies\ProductPolicy;
use App\Models\Role\Role;
use App\Policies\RolePolicy;
use App\Models\Sidebar\Sidebar;
use App\Policies\SidebarPolicy;
use App\Models\User\User;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * @note Register Model Whit Policy
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Category::class => CategoryPolicy::class,
        Product::class => ProductPolicy::class,
        Role::class => RolePolicy::class,
        Sidebar::class => SidebarPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
