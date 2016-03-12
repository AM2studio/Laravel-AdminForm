<?php

namespace AM2Studio\LaravelAdminForm;

use Illuminate\Support\ServiceProvider;

class AdminFormServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (is_dir(base_path().'/resources/views/packages/am2studio/adminForm')) {
            $this->loadViewsFrom(
                base_path() . '/resources/views/packages/am2studio/adminForm',
                'adminForm'
            );
        } else {
            $this->loadViewsFrom(
                __DIR__ . '/../views/partials/form',
                'adminForm'
            );
        }

        $this->publishes([
            __DIR__.'/../views/partials/form' => base_path(
                'resources/views/packages/am2studio/adminForm'
            )
        ], 'views');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAdminForm();
    }

    public function registerAdminForm()
    {
        $this->app->bind('AdminForm', function ($app) {
            return new AdminForm($app['html'], $app['url'], $app['view'], $app['session.store']->getToken());
        });
    }
}
