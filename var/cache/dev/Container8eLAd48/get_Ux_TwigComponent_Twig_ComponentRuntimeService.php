<?php

namespace Container8eLAd48;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Ux_TwigComponent_Twig_ComponentRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux.twig_component.twig.component_runtime' shared service.
     *
     * @return \Symfony\UX\TwigComponent\Twig\ComponentRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'ComponentRuntime.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentStack.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['.ux.twig_component.twig.component_runtime'])) {
            return $container->privates['.ux.twig_component.twig.component_runtime'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['.ux.twig_component.twig.component_runtime'])) {
            return $container->privates['.ux.twig_component.twig.component_runtime'];
        }
        $c = ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService'));

        if (isset($container->privates['.ux.twig_component.twig.component_runtime'])) {
            return $container->privates['.ux.twig_component.twig.component_runtime'];
        }

        return $container->privates['.ux.twig_component.twig.component_runtime'] = new \Symfony\UX\TwigComponent\Twig\ComponentRuntime(new \Symfony\UX\TwigComponent\ComponentRenderer($a, $b, $c, ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), new \Symfony\UX\TwigComponent\ComponentStack()));
    }
}
