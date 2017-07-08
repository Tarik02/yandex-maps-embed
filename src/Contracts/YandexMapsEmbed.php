<?php

namespace Tarik02\YandexMapsEmbed\Contracts;

interface YandexMapsEmbed
{
    public function parse($data);

    public function make($string);
}