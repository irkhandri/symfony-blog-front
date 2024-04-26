<?php

namespace Container3SurGHZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\BlogController' shared autowired service.
     *
     * @return \App\Controller\BlogController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\BlogController'] = $instance = new \App\Controller\BlogController(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\BlogController', $container));

        return $instance;
    }
}