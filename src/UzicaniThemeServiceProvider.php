<?php

namespace Visiosoft\UzicaniTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

class UzicaniThemeServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Visiosoft\UzicaniTheme\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Visiosoft\UzicaniTheme\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Visiosoft\UzicaniTheme\Event\ExampleEvent::class => [
        //    Visiosoft\UzicaniTheme\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Visiosoft\UzicaniTheme\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        'visiosoft.module.advs::ad-detail/detail' => 'visiosoft.theme.sahibinden::addons/visiosoft/advs-module/ad-detail/detail',
        'visiosoft.module.advs::new-ad/preview/partials/preview-window' => 'visiosoft.theme.sahibinden::addons/visiosoft/advs-module/new-ad/preview/partials/preview-window',
        'visiosoft.module.advs::list/list' => 'visiosoft.theme.sahibinden::addons/visiosoft/advs-module/list/list',
        'visiosoft.module.advs::list/partials/ads' => 'visiosoft.theme.sahibinden::addons/visiosoft/advs-module/list/partials/ads',
        'visiosoft.module.advs::list/partials/breadcrumb' => 'visiosoft.theme.sahibinden::addons/visiosoft/advs-module/list/partials/breadcrumb',
        'visiosoft.module.cats::ads-list/partials/breadcrumb' => 'visiosoft.theme.sahibinden::addons/visiosoft/cats-module/ads-list/partials/breadcrumb',
        'visiosoft.module.cats::ads-list/partials/list-filter' => 'visiosoft.theme.sahibinden::addons/visiosoft/cats-module/ads-list/partials/list-filter',
        'visiosoft.module.complaints::ad-detail/title/button' => 'visiosoft.theme.sahibinden::addons/visiosoft/complaints-module/ad-detail/title/button',
        'visiosoft.module.customfields::ad-detail/checkboxes' => 'visiosoft.theme.sahibinden::addons/visiosoft/customfields-module/ad-detail/checkboxes',
        'visiosoft.module.customfields::ad-detail/content' => 'visiosoft.theme.sahibinden::addons/visiosoft/customfields-module/ad-detail/content',
        'visiosoft.module.customfields::ad-detail/content-tab' => 'visiosoft.theme.sahibinden::addons/visiosoft/customfields-module/ad-detail/content-tab',
        'visiosoft.module.dopings::ad-list/partials/ads' => 'visiosoft.theme.sahibinden::addons/visiosoft/dopings-module/ad-list/partials/ads',
        'visiosoft.module.dopings::ad-list/partials/table' => 'visiosoft.theme.sahibinden::addons/visiosoft/dopings-module/ad-list/partials/table',
        'visiosoft.module.dopings::index_top' => 'visiosoft.theme.sahibinden::addons/visiosoft/dopings-module/index_top',
        'visiosoft.module.location::ads-list/partials/list-filter' => 'visiosoft.theme.sahibinden::addons/visiosoft/location-module/ads-list/partials/list-filter',
        'anomaly.module.users::login' => 'visiosoft.theme.base::addons/anomaly/users-module/login',
        'anomaly.module.users::register' => 'visiosoft.theme.base::addons/anomaly/users-module/register',
        'visiosoft.module.pricehistory::ad-detail/content' => 'visiosoft.theme.sahibinden::addons/visiosoft/pricehistory-module/ad-detail/content',
        'visiosoft.module.pricehistory::ad-detail/content-tab' => 'visiosoft.theme.sahibinden::addons/visiosoft/pricehistory-module/ad-detail/content-tab',
        'visiosoft.module.qrcontact::ad-detail/content' => 'visiosoft.theme.sahibinden::addons/visiosoft/qrcontact-module/ad-detail/content',
        'visiosoft.module.recentlyviewedads::index' => 'visiosoft.theme.sahibinden::addons/visiosoft/recentlyviewedads-module/index',
        'visiosoft.module.recommendedads::ad-detail/section' => 'visiosoft.theme.sahibinden::addons/visiosoft/recommendedads-module/ad-detail/section',
        'visiosoft.module.recommendedads::recommended-horizonal' => 'visiosoft.theme.sahibinden::addons/visiosoft/recommendedads-module/recommended-horizonal',
        'visiosoft.module.recommendedads::recommended-vertical' => 'visiosoft.theme.sahibinden::addons/visiosoft/recommendedads-module/recommended-vertical',
        'visiosoft.module.streetview::ad-detail/content' => 'visiosoft.theme.sahibinden::addons/visiosoft/streetview-module/ad-detail/content',
        'visiosoft.module.streetview::ad-detail/content-tab' => 'visiosoft.theme.sahibinden::addons/visiosoft/streetview-module/ad-detail/content-tab',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }
}
