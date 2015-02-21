<?php
namespace SocialiteProviders\Eventbrite;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EventbriteExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('eventbrite', __NAMESPACE__.'\Provider');
    }
}
