<?php

namespace Sunnysideup\SetMySiteAsPreferredSourceInGoogle;

use SilverStripe\Control\Director;

class GetLink
{

    public static function link_only(): string
    {
        return 'https://google.com/preferences/source?q=' . urlencode(Director::hostName());
    }

    public static function a_tag(): string
    {
        return '<a href="' . self::link_only() . '" rel="noopener">Prefer us on Google</a>';
    }
}
