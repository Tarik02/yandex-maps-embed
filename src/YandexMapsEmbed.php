<?php

namespace Tarik02\YandexMapsEmbed;

use Tarik02\YandexMapsEmbed\Contracts\YandexMapsEmbed as YandexMapsEmbedContract;
use Tarik02\YandexMapsEmbed\Exceptions\InvalidDataException;

class YandexMapsEmbed implements YandexMapsEmbedContract
{
    const REGEXES = [
        '~(?:http|https)://[^/]+/map-widget/v1/-/([A-Za-z0-9\-]+)~',
        '~(?:http|https)://yandex.com/maps/-/([A-Za-z0-9\-]+)~',
        '~^([A-Za-z0-9\-]+)$~',
    ];

    private $defaultOptions = [
        'width' => 560,
        'height' => 400
    ];

    public function parse($data)
    {
        foreach (static::REGEXES as $regex) {
            if (preg_match($regex, $data, $matches)) {
                return $matches[1];
            }
        }

        throw new InvalidDataException();
    }

    public function make($string, $options = [])
    {
        $options = $this->defaultOptions + $options;

        return implode('', [
            '<iframe src="https://yandex.com/map-widget/v1/-/',
            $string,
            '" width="',
            $options['width'],
            '" height="',
            $options['height'],
            '" frameborder="0"></iframe>',
        ]);
    }
}