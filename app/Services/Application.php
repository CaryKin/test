<?php

namespace App\Services;


use Illuminate\Support\Facades\Facade;
use JsonSchema\Exception\InvalidConfigException;


class Application extends Facade
{

    /**
     * @var array
     */
    public $childService;


    /**
     * 已实例化的子服务
     *
     * @var
     */
    protected $_childService;


    /**
     * 获取 services 里面配置的子服务 childService 的实例
     *
     * @param $childServiceName
     * @return \Closure|mixed|object|null
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function getChildService($childServiceName)
    {
        if (!isset($this->childService)) {
            $this->childService = config("application.services");
        }

        if (!isset($this->_childService[$childServiceName])) {
            $childService = $this->childService;

            if (isset($childService[$childServiceName])) {

                $container = \Illuminate\Container\Container::getInstance();
                $service = $childService[$childServiceName];
                $this->_childService[$childServiceName] = $container->make($service);
            } else {
                throw new InvalidConfigException('Child Service [' . $childServiceName . '] is not find in ' . get_called_class() . ', you must config it! ');
            }
        }

        return $this->_childService[$childServiceName] ?? null;
    }

    public function __call($name, $arguments)
    {
        return $this->getChildService($name);
    }
}
