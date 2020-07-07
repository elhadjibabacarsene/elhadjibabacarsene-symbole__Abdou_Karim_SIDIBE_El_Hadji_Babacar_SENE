<?php

namespace ContainerMBxGhco;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeBourseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TypeBourseController' shared autowired service.
     *
     * @return \App\Controller\TypeBourseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TypeBourseController.php';

        $container->services['App\\Controller\\TypeBourseController'] = $instance = new \App\Controller\TypeBourseController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\TypeBourseController', $container));

        return $instance;
    }
}
