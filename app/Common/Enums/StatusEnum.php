<?php

namespace App\Common\Enums;

class StatusEnum extends BaseEnum
{
    const ENABLED = 1;
    const DISABLED = 0;
    const DELETE = -1;

    /**
     * @return array
     */
    public static function getMap(): array
    {
        return [
            self::ENABLED => '启用',
            self::DISABLED => '禁用',
            self::DELETE => '已删除',
        ];
    }
}
