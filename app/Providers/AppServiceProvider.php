<?php

namespace Fedn\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'article' => 'Fedn\Models\Article',
            'quote'   => 'Fedn\Models\Quote',
            'tag'     => 'Fedn\Models\Tag',
            'category' => 'Fedn\Models\Category',
            'user'     => 'Fedn\Models\User'
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) {
            $this->app->register('Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');
            $this->app->register('Barryvdh\Debugbar\ServiceProvider');
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias(\Barryvdh\Debugbar\Facade::class, 'Debugbar');
        }

        if ($this->app->enviroment('production')) {
            $this->app->register(\Jenssegers\Rollbar\RollbarServiceProvider::class);
        }
    }
}
