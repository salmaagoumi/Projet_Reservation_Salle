<?php

namespace ContainerGanjQYS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromosControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3RXteeR.App\Controller\PromosController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3RXteeR.App\\Controller\\PromosController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'promo' => ['privates', '.errored..service_locator.3RXteeR.App\\Entity\\Promos', NULL, 'Cannot autowire service ".service_locator.3RXteeR": it needs an instance of "App\\Entity\\Promos" but this type has been excluded in "config/services.yaml".'],
        ], [
            'promo' => 'App\\Entity\\Promos',
        ]))->withContext('App\\Controller\\PromosController::show()', $container);
    }
}