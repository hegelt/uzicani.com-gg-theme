<?php

namespace Visiosoft\UzicaniTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

class UzicaniThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        'visiosoft.module.advs::ad-detail/detail' => 'visiosoft.theme.sahibinden::addons/visiosoft/advs-module/ad-detail/detail',
        'visiosoft.module.advs::new-ad/preview/partials/preview-window' => 'visiosoft.theme.sahibinden::addons/visiosoft/advs-module/new-ad/preview/partials/preview-window',
        'visiosoft.module.complaints::ad-detail/title/button' => 'visiosoft.theme.sahibinden::addons/visiosoft/complaints-module/ad-detail/title/button',
        'visiosoft.module.customfields::ad-detail/checkboxes' => 'visiosoft.theme.sahibinden::addons/visiosoft/customfields-module/ad-detail/checkboxes',
        'visiosoft.module.customfields::ad-detail/content' => 'visiosoft.theme.sahibinden::addons/visiosoft/customfields-module/ad-detail/content',
        'visiosoft.module.customfields::ad-detail/content-tab' => 'visiosoft.theme.sahibinden::addons/visiosoft/customfields-module/ad-detail/content-tab',
        'visiosoft.module.dopings::index_top' => 'visiosoft.theme.sahibinden::addons/visiosoft/dopings-module/index_top',
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
        'visiosoft.module.comments::ad-detail/content' => 'visiosoft.theme.sahibinden::addons/visiosoft/comments-module/ad-detail/content',
        'visiosoft.module.comments::ad-detail/content-tab' => 'visiosoft.theme.sahibinden::addons/visiosoft/comments-module/ad-detail/content-tab',
    ];
}
