<?php

function yandex_map_parse($data)
{
    return app()->make(\Tarik02\YandexMapsEmbed\Contracts\YandexMapEmbed::class)->parse($data);
}

function yandex_map_make($string, $options = [])
{
    return app()->make(\Tarik02\YandexMapsEmbed\Contracts\YandexMapEmbed::class)->make($string, $options);
}
