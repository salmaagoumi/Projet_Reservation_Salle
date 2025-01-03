<?php

namespace ContainerBhFjSto;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SWu3q7EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sWu3q7E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sWu3q7E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filiere' => ['privates', '.errored..service_locator.sWu3q7E.App\\Entity\\Filiere', NULL, 'Cannot autowire service ".service_locator.sWu3q7E": it needs an instance of "App\\Entity\\Filiere" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'filiere' => 'App\\Entity\\Filiere',
            'entityManager' => '?',
        ]);
    }
}
