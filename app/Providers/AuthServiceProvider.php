<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //service gates
        Gate::define('service-anyView', function () {
            return permission('service-anyView');
        });
        Gate::define('service-create', function () {
            return permission('service-create');
        });
        Gate::define('service-edit', function () {
            return permission('service-edit');
        });
        Gate::define('service-view', function () {
            return permission('service-view');
        });
        Gate::define('service-delete', function () {
            return permission('service-delete');
        });
        //feature gates
        Gate::define('feature-create', function () {
            return permission('feature-create');
        });
        Gate::define('feature-edit', function () {
            return permission('feature-edit');
        });
        Gate::define('feature-view', function () {
            return permission('feature-view');
        });
        Gate::define('feature-delete', function () {
            return permission('feature-delete');
        });
        //message gates
        Gate::define('message-view', function () {
            return permission('message-view');
        });
        Gate::define('message-delete', function () {
            return permission('message-delete');
        });
        //subscriber gates
        Gate::define('subscriber-delete', function () {
            return permission('subscriber-delete');
        });
        //testmonial gates
        Gate::define('testmonial-create', function () {
            return permission('testmonial-create');
        });
        Gate::define('testmonial-edit', function () {
            return permission('testmonial-edit');
        });
        Gate::define('testmonial-view', function () {
            return permission('testmonial-view');
        });
        Gate::define('testmonial-delete', function () {
            return permission('testmonial-delete');
        });
        //member gates
        Gate::define('member-create', function () {
            return permission('member-create');
        });
        Gate::define('member-edit', function () {
            return permission('member-edit');
        });
        Gate::define('member-view', function () {
            return permission('member-view');
        });
        Gate::define('member-delete', function () {
            return permission('member-delete');
        });
        //client gates
        Gate::define('client-create', function () {
            return permission('client-create');
        });
        Gate::define('client-edit', function () {
            return permission('client-edit');
        });
        Gate::define('client-view', function () {
            return permission('client-view');
        });
        Gate::define('client-delete', function () {
            return permission('client-delete');
        });
        //user gates
        Gate::define('user-create', function () {
            return permission('user-create');
        });
        Gate::define('user-edit', function () {
            return permission('user-edit');
        });
        Gate::define('user-view', function () {
            return permission('user-view');
        });
        Gate::define('user-delete', function () {
            return permission('user-delete');
        });
    }
}
