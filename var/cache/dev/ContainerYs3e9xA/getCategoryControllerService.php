<?php

namespace ContainerYs3e9xA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CategoryController' shared autowired service.
     *
     * @return \App\Controller\CategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CategoryController.php';

        $container->services['App\\Controller\\CategoryController'] = $instance = new \App\Controller\CategoryController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\CategoryController', $container));

        return $instance;
    }
}
