<?php

namespace ContainerXOYcEP7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilitiesControllergetCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.brzH9uj.App\Controller\UtilitiesController::getCollection()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.brzH9uj.App\\Controller\\UtilitiesController::getCollection()'] = ($container->privates['.service_locator.brzH9uj'] ?? $container->load('get_ServiceLocator_BrzH9ujService'))->withContext('App\\Controller\\UtilitiesController::getCollection()', $container);
    }
}
