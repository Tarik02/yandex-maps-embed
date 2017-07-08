<?php

namespace Tarik02\YandexMapsEmbed\Contracts;

interface YandexMapEmbed
{
    public function parse($data);

    public function make($string);
}