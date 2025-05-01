<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use App\Models\Link;
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
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        Schema::defaultStringLength(191);

        $sharedViews = [];

        if (Schema::hasTable('links')) {
            $sharedViews['links'] = \App\Models\Link::where('status', '1')->get();
        } else {
            $sharedViews['links'] = collect();
        }

        if (Schema::hasTable('information')) {
            $sharedViews['information'] = \App\Models\Information::first();
        } else {
            $sharedViews['information'] = collect();
        }

        // Share all view data at once
        view()->share($sharedViews);
    }

}
