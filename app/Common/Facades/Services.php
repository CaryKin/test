<?php

namespace App\Common\Facades;



use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Services\Shop\ProductDtkService productDtk()
 * @method static \App\Services\Shop\ProductService product()
 * @method static \App\Services\Shop\WechatToolService wechatTool()
 */
class Services extends Facade
{
    protected static function getFacadeAccessor()
    {

        return 'Services';
    }
}
