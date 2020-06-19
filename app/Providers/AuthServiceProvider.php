<?php

namespace App\Providers;

use App\Model\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model\Post' => 'App\Policies\PostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // admin, editor, author// user
        Gate::define('edit-profile', function($user) {
            return true;
        });

        Gate::before(function($user) {
            if ($user->id == 3) {
                return true;
            }
        });

        if (! $this->app->runningInConsole()) {
            foreach (Permission::all() as $permission) {
                Gate::define($permission->name, function($user) use ($permission) {
                    return $user->hasPermission($permission);
                });
            }
        }
    }
}
