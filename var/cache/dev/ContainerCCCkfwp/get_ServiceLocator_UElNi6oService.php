<?php

namespace ContainerCCCkfwp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UElNi6oService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uElNi6o' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uElNi6o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CompetencesController::delete' => ['privates', '.service_locator.kvkaJ38', 'get_ServiceLocator_KvkaJ38Service', true],
            'App\\Controller\\CompetencesController::edit' => ['privates', '.service_locator.kvkaJ38', 'get_ServiceLocator_KvkaJ38Service', true],
            'App\\Controller\\CompetencesController::index' => ['privates', '.service_locator.43ajRrC', 'get_ServiceLocator_43ajRrCService', true],
            'App\\Controller\\CompetencesController::show' => ['privates', '.service_locator.kvkaJ38', 'get_ServiceLocator_KvkaJ38Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CompetencesController:delete' => ['privates', '.service_locator.kvkaJ38', 'get_ServiceLocator_KvkaJ38Service', true],
            'App\\Controller\\CompetencesController:edit' => ['privates', '.service_locator.kvkaJ38', 'get_ServiceLocator_KvkaJ38Service', true],
            'App\\Controller\\CompetencesController:index' => ['privates', '.service_locator.43ajRrC', 'get_ServiceLocator_43ajRrCService', true],
            'App\\Controller\\CompetencesController:show' => ['privates', '.service_locator.kvkaJ38', 'get_ServiceLocator_KvkaJ38Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CompetencesController::delete' => '?',
            'App\\Controller\\CompetencesController::edit' => '?',
            'App\\Controller\\CompetencesController::index' => '?',
            'App\\Controller\\CompetencesController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CompetencesController:delete' => '?',
            'App\\Controller\\CompetencesController:edit' => '?',
            'App\\Controller\\CompetencesController:index' => '?',
            'App\\Controller\\CompetencesController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
