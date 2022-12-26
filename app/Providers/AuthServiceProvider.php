<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
//Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('read',function($user,$modParam){
            return $user->isRole(\App\Models\Role::SUPERADMIN) || $user->hasPermission('read',$modParam);
        });

        Gate::define('modify',function($user,$ability){
            return $user->isRole(\App\Models\Role::SUPERADMIN) || $user->hasPermission('modify',$ability);
        });

    /*
        Gate::define('create',function($user,$modParam){
            return $user->hasPermission('create',$modParam);
        });

        Gate::define('update',function($user,$modParam){
            return $user->hasPermission('update',$modParam);
        });

        Gate::define('delete',function($user,$modParam){
            return $user->hasPermission('delete',$modParam);
        });

        Gate::define('show',function($user,$modParam){
            return $user->hasPermission('show',$modParam);
        });

        Gate::define('read-own',function($user,$modParam){
            return $user->hasPermission('read-own',$modParam);
        });

        Gate::define('update-own',function($user,$modParam){
            return $user->hasPermission('update-own',$modParam);
        });

        Gate::define('delete-own',function($user,$modParam){
            return $user->hasPermission('delete-own',$modParam);
        });

        Gate::define('show-own',function($user,$modParam){
            return $user->hasPermission('show-own',$modParam);
        }); */
        //
    }
}
