<?php

namespace Tarik02\YandexMapsEmbed\Facades;

use Illuminate\Support\Facades\Facade;

class YandexMapEmbed extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yandex-map-embed';
    }
}