<?php

namespace ContainerBhFjSto;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservationControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._EQQlM1.App\Controller\ReservationController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._EQQlM1.App\\Controller\\ReservationController::delete()'] = ($container->privates['.service_locator._EQQlM1'] ?? $container->load('get_ServiceLocator_EQQlM1Service'))->withContext('App\\Controller\\ReservationController::delete()', $container);
    }
}
