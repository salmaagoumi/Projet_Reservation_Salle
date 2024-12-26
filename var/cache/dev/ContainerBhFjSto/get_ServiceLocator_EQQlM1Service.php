<?php

namespace ContainerBhFjSto;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EQQlM1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._EQQlM1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._EQQlM1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservation' => ['privates', '.errored..service_locator._EQQlM1.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator._EQQlM1": it needs an instance of "App\\Entity\\Reservation" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'reservation' => 'App\\Entity\\Reservation',
            'entityManager' => '?',
        ]);
    }
}
