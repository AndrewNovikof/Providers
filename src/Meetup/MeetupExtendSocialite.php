<?php

namespace SocialiteProviders\Meetup;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MeetupExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('meetup', __NAMESPACE__.'\Provider');
    }
}
