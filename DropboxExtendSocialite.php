<?php

namespace SocialiteProviders\Pandi;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PandiExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'pandi',
            __NAMESPACE__ . '\Provider'
        );
    }
}
