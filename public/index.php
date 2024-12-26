<?php

use App\Kernel;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    // Initialize and boot the Kernel
    $kernel = new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
    $kernel->boot(); // Ensure the kernel is booted before accessing the container

    // Optional: Access services if needed
    $container = $kernel->getContainer();

    return $kernel;
};
