<?php

namespace AntoanPopov\MicrosoftCognitiveServices;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'antoanpopov.microsoft-cognitive-services.config');

        $this->app->singleton(
            'microsoftcognitiveservices',
            function ($app) {
                $microsoftCognitiveServies = new MicrosoftCognitiveServices($app);

                return $microsoftCognitiveServies;
            }
        );
    }

    public function boot()
    {

        $this->publishes(
            [
                __DIR__.'/../config/config.php' => config_path('antoanpopov/microsoft-cognitive-services/config.php'),
            ]
        );
    }

}