<?php

namespace ContainerBhFjSto;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I892w8WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i892w8W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i892w8W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'promo' => ['privates', '.errored..service_locator.i892w8W.App\\Entity\\Promos', NULL, 'Cannot autowire service ".service_locator.i892w8W": it needs an instance of "App\\Entity\\Promos" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'promo' => 'App\\Entity\\Promos',
            'entityManager' => '?',
        ]);
    }
}
