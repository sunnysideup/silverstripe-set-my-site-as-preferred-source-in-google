# tl;dr

Anywhere in your php code you can add:

```php

use Sunnysideup\SetMySiteAsPreferredSourceInGoogle\GetLink;

class MyClass 
{

    function MyLink(): string
    {
        return return GetLink::link_only();
    }


    function MyATag(): string
    {
        return return GetLink::a_tag();
    }
}

```
