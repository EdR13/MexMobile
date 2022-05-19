<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use App\Models\Phone;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('hasPermission', function (User $user) {
            return $user->type === "Admin";
        });
        Gate::define('can', function (User $user) {
            return $user->type === "Client";
        });
    }
}
