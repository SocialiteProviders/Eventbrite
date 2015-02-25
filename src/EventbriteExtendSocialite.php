<?php
namespace SocialiteProviders\Eventbrite;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EventbriteExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'eventbrite', __NAMESPACE__.'\Provider'
        );
    }
}
