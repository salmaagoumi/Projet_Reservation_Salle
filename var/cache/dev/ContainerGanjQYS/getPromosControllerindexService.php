<?php

namespace ContainerGanjQYS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromosControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FIf1DO1.App\Controller\PromosController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FIf1DO1.App\\Controller\\PromosController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'promosRepository' => ['privates', 'App\\Repository\\PromosRepository', 'getPromosRepositoryService', true],
        ], [
            'promosRepository' => 'App\\Repository\\PromosRepository',
        ]))->withContext('App\\Controller\\PromosController::index()', $container);
    }
}
