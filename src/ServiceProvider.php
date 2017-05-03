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
        $configPath = __DIR__.'/../config/microsoftcognitiveservices.php';
        $this->mergeConfigFrom($configPath, 'microsoftcognitiveservices');

        $this->app->singleton('microsoftcognitiveservices', function ($app) {
            $microsoftCognitiveServies = new MicrosoftCognitiveServices($app);

            return $microsoftCognitiveServies;
        }
        );
    }

    /**
     * Get the config path
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return config_path('microsoftcognitiveservices.php');
    }
    /**
     * Publish the config file
     *
     * @param  string $configPath
     */
    protected function publishConfig($configPath)
    {
        $this->publishes([$configPath => config_path('microsoftcognitiveservices.php')], 'config');
    }

}