<?php

namespace ContainerGanjQYS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_EnvVarProcessorsLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'not' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'enum' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'shuffle' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'defined' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'urlencode' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
        ], [
            'base64' => '?',
            'bool' => '?',
            'not' => '?',
            'const' => '?',
            'csv' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'url' => '?',
            'query_string' => '?',
            'resolve' => '?',
            'default' => '?',
            'string' => '?',
            'trim' => '?',
            'require' => '?',
            'enum' => '?',
            'shuffle' => '?',
            'defined' => '?',
            'urlencode' => '?',
        ]);
    }
}
