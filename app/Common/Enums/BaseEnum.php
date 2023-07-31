<?php

namespace App\Common\Enums;

/**
 * Class BaseEnum
 * @package common\enums
 */
abstract class BaseEnum
{
    /**
     * @return array
     */
    abstract public static function getMap(): array;

    /**
     * @param $key
     * @return string
     */
    public static function getValue($key): string
    {
        return static::getMap()[$key] ?? '';
    }


    /**
     * @return array
     */
    public static function getKeys(): array
    {
        return array_keys(static::getMap());
    }
}
