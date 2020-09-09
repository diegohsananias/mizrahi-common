<?php


namespace Mizrahi\Infrastructure\Crosscutting\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class MizrahiServiceProvider
 * @package Mizrahi\Infrastructure\Crosscutting\Providers
 * @author Diego Ananias <diego.ananias@dhsa.dev>
 * @copyright DHSA Technology Inc
 */
class MizrahiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->mergeConfigFrom([
            __DIR__.'/config/aws.php' => 'aws',
        ]);
    }
}