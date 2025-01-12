<?php

namespace Helious\SeatBusaOnboarding;

use Seat\Services\AbstractSeatPlugin;

/**
 * Class YourPackageServiceProvider.
 *
 * @package Author\Seat\YourPackage
 */
class OnboardingServivceProvider extends AbstractSeatPlugin
{
    public function boot()
    {
        $this->injectIntoSettingsSidebar();

        $this->add_routes();

        $this->add_views();

        $this->add_migrations();

    }

    public function register()
    {
        // Overload sidebar with your package menu entries
        $this->mergeConfigFrom(__DIR__ . '/Config/Menu/package.sidebar.php', 'package.sidebar');

       
        // Register generic permissions
        $this->registerPermissions(__DIR__ . '/Config/Permissions/other.php', 'onboarding');
    }

    /**
     * Inject a custom entry into the settings section of the sidebar.
    */
    private function injectIntoSettingsSidebar()
    {
        // Get the existing sidebar menu configuration
        $menu = config('package.sidebar');

        // Define your custom entry for the settings menu
        $custom_entry = [
            'name' => 'edit onboarding',
            'label' => 'Edit Onboarding',
            'icon' => 'fas fa-pen',
            'route' => 'seat-busa-onboarding::edit'
        ];

        // Add the custom entry into the settings menu
        if (isset($menu['settings']['entries'])) {
            $menu['settings']['entries'][] = $custom_entry;
        } else {
            $menu['settings'] = [
                'entries' => [$custom_entry],
            ];
        }

        // Update the configuration
        config(['package.sidebar' => $menu]);
    }

    /**
     * Include routes.
     */
    private function add_routes()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }

    /**
     * Import views.
     */
    private function add_views()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'seat-busa-onboarding');
    }

    /**
     * Import database migrations.
     */
    private function add_migrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
    }

    /**
     * Return the plugin public name as it should be displayed into settings.
     *
     * @return string
     * @example SeAT Web
     *
     */
    public function getName(): string
    {
        return 'SeAT BUSA Onboarding';
    }

    /**
     * Return the plugin repository address.
     *
     * @example https://github.com/eveseat/web
     *
     * @return string
     */
    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/mackenziexD/seat-busa-onboarding';
    }

    /**
     * Return the plugin technical name as published on package manager.
     *
     * @return string
     * @example web
     *
     */
    public function getPackagistPackageName(): string
    {
        return 'seat-busa-onboarding';
    }

    /**
     * Return the plugin vendor tag as published on package manager.
     *
     * @return string
     * @example eveseat
     *
     */
    public function getPackagistVendorName(): string
    {
        return 'helious';
    }
}