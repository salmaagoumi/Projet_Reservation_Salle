<?php

namespace ContainerBhFjSto;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Connection.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Schema'.\DIRECTORY_SEPARATOR.'SchemaManagerFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Schema'.\DIRECTORY_SEPARATOR.'LegacySchemaManagerFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'Middleware.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'ConnectionNameAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'DebugMiddleware.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'IdleConnectionMiddleware.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'DsnParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'DebugDataHolder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'BacktraceDebugDataHolder.php';

        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware(($container->privates['doctrine.debug_data_holder'] ??= new \Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder(['default'])), ($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $b->setConnectionName('default');
        $c = new \Doctrine\Bundle\DoctrineBundle\Middleware\IdleConnectionMiddleware(($container->privates['doctrine.dbal.connection_expiries'] ??= new \ArrayObject()), ['default' => 600]);
        $c->setConnectionName('default');

        $a->setSchemaManagerFactory(new \Doctrine\DBAL\Schema\LegacySchemaManagerFactory());
        $a->setMiddlewares([$b, $c]);

        $container->services['doctrine.dbal.default_connection'] = $instance = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([], new \Doctrine\DBAL\Tools\DsnParser(['db2' => 'ibm_db2', 'mssql' => 'pdo_sqlsrv', 'mysql' => 'pdo_mysql', 'mysql2' => 'pdo_mysql', 'postgres' => 'pdo_pgsql', 'postgresql' => 'pdo_pgsql', 'pgsql' => 'pdo_pgsql', 'sqlite' => 'pdo_sqlite', 'sqlite3' => 'pdo_sqlite'])))->createConnection(['url' => $container->getEnv('resolve:DATABASE_URL'), 'use_savepoints' => true, 'driver' => 'pdo_mysql', 'idle_connection_ttl' => 600, 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], $a, ($container->privates['doctrine.dbal.default_connection.event_manager'] ?? $container->load('getDoctrine_Dbal_DefaultConnection_EventManagerService')), []);

        $instance->setNestTransactionsWithSavepoints(true);

        return $instance;
    }
}
