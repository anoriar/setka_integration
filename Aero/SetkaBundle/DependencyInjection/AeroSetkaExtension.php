<?php

namespace Aero\SetkaBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Routing\RouteCollectionBuilder;

/**
 * Class AeroSetkaExtension
 * @package Aero\SetkaBundle\DependencyInjection
 * @author Alexey Borisov
 */
class AeroSetkaExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $this->processConfiguration($configuration, $configs);
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        $routes = new RouteCollectionBuilder($loader);
        $routes->import(__DIR__ . '/../Resources/config/routes.yml');
    }
}