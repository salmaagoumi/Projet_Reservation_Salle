<?php

namespace ContainerGanjQYS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMatiereControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VaQzs3t.App\Controller\MatiereController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VaQzs3t.App\\Controller\\MatiereController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'matiereRepository' => ['privates', 'App\\Repository\\MatiereRepository', 'getMatiereRepositoryService', true],
        ], [
            'matiereRepository' => 'App\\Repository\\MatiereRepository',
        ]))->withContext('App\\Controller\\MatiereController::index()', $container);
    }
}
