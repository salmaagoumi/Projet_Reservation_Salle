<?php

namespace ContainerGanjQYS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservationControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wO_eRYZ.App\Controller\ReservationController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wO_eRYZ.App\\Controller\\ReservationController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservation' => ['privates', '.errored..service_locator.wO_eRYZ.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.wO_eRYZ": it needs an instance of "App\\Entity\\Reservation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'reservation' => 'App\\Entity\\Reservation',
        ]))->withContext('App\\Controller\\ReservationController::show()', $container);
    }
}
