<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('gugus_kendali', function ($user) {
            return $user->role == 'gugus_kendali';
        });

        Gate::define('dosen_koor', function ($user) {
            return $user->role == 'dosen_koor';
        });

        Gate::define('dosen_pengampu', function ($user) {
            return $user->role == 'dosen_pengampu';
        });

        Gate::define('mahasiswa', function ($user) {
            return $user->role == 'mahasiswa';
        });
    }
}
