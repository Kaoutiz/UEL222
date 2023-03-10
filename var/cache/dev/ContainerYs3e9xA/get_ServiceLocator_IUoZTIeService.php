<?php

namespace ContainerYs3e9xA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IUoZTIeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IUoZTIe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IUoZTIe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::delete' => ['privates', '.service_locator.NcUNQMU', 'get_ServiceLocator_NcUNQMUService', true],
            'App\\Controller\\ArticleController::edit' => ['privates', '.service_locator.NcUNQMU', 'get_ServiceLocator_NcUNQMUService', true],
            'App\\Controller\\ArticleController::index' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\ArticleController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.bmG4G8k', 'get_ServiceLocator_BmG4G8kService', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.bmG4G8k', 'get_ServiceLocator_BmG4G8kService', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoryController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\CategoryController::show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\ArticleController:delete' => ['privates', '.service_locator.NcUNQMU', 'get_ServiceLocator_NcUNQMUService', true],
            'App\\Controller\\ArticleController:edit' => ['privates', '.service_locator.NcUNQMU', 'get_ServiceLocator_NcUNQMUService', true],
            'App\\Controller\\ArticleController:index' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\ArticleController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.bmG4G8k', 'get_ServiceLocator_BmG4G8kService', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.bmG4G8k', 'get_ServiceLocator_BmG4G8kService', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoryController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\CategoryController:show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\ArticleController::delete' => '?',
            'App\\Controller\\ArticleController::edit' => '?',
            'App\\Controller\\ArticleController::index' => '?',
            'App\\Controller\\ArticleController::new' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::new' => '?',
            'App\\Controller\\CategoryController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:delete' => '?',
            'App\\Controller\\ArticleController:edit' => '?',
            'App\\Controller\\ArticleController:index' => '?',
            'App\\Controller\\ArticleController:new' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:new' => '?',
            'App\\Controller\\CategoryController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
