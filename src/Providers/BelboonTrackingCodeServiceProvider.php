<?php

namespace BelboonTrackingCode\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

/**
 * Class BelboonTrackingCodeServiceProvider
 * @package BelboonTrackingCode\Providers
 */
class BelboonTrackingCodeServiceProvider extends ServiceProvider
{
    /**
     * Register the core functions
     */
    public function register()
    {
    }
    
    /**
     * boot twig extensions and services
     * @param Twig $twig
     */
    public function boot(Twig $twig)
    {
    }
}
