<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Modules\Service\Entities\Service;
use Modules\Setting\Entities\SocialMedia;
use Modules\Solution\Entities\Solution;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        JsonResource::withoutWrapping();
        Paginator::defaultView('pagination::bootstrap-4');
        view()->share([
            'locales' => config('translatable.locales'),
            'allServices' => Service::all()->sortByDesc('id'),
            'allSolutions' => Solution::all()->sortByDesc('id'),
            'links' => SocialMedia::all()
        ]);
    }
}
