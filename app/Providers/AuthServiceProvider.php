<?php

namespace App\Providers;

<<<<<<< HEAD
// use Illuminate\Support\Facades\Gate;

use App\Models\koordinator;
use Illuminate\Support\Facades\Gate;
=======
use App\Models\Dosen;
use App\Models\gugus_kendali;
use App\Models\jadwal;
use App\Models\koordinator;
use Illuminate\Support\Facades\Gate;

>>>>>>> cda134fb455d054f5a786c80d4ade462877a5abe
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Do_;

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
        Gate::define('isDosenOnly', function($user) {
            return Auth::guard('dosen')->user()->id == Dosen::where('id')->count();
         });
        Gate::define('isDosenGkm', function($user) {
            return Auth::guard('dosen')->user()->id == gugus_kendali::where("id_dosen")->count();
         });
         Gate::define('isDosenKoor', function($user) {
            return Auth::guard('dosen')->user()->id == koordinator::where("id_dosen")->count();
         });
         Gate::define('isDosenMatkul', function($user) {
            return Auth::guard('dosen')->user()->id == jadwal::where("id_dosen")->count();
         });

<<<<<<< HEAD
        // Gate::define('koor', function(koordinator $koor) {
        //     return $koor->dosen()->id_dosen;
        //  });
=======
>>>>>>> cda134fb455d054f5a786c80d4ade462877a5abe
    }
}
