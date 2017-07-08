<?php

namespace Tarik02\YandexMapsEmbed\Exceptions;

class InvalidDataException extends \RuntimeException
{
    /**
     * InvalidDataException constructor.
     */
    public function __construct()
    {
        parent::__construct('Invalid data provided.');
    }
}