<?php

namespace App\Providers;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\TasksRowComposer;
use Illuminate\Support\Facades\{Schema, Blade, View};
use App\Models\Taks;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Builder::defaultStringLength(191);

        View::composer(['task.index', 'task.edit'], TasksRowComposer::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
    }
}
