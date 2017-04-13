<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace ServiceProvider\EnvServiceProvider;


use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;

class EnvServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function register(Container $container)
    {
        if (file_exists(app()->getPath() . '/.env.yml')) {
            config()->load(app()->getPath().'/.env.yml');
        }
    }
}