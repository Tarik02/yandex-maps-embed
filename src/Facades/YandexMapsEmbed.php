<?php

namespace Tarik02\YandexMapsEmbed\Facades;

use Illuminate\Support\Facades\Facade;

class YandexMapsEmbed extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yandex-maps-embed';
    }
}