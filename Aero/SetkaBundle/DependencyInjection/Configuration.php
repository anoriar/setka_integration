<?php

namespace Aero\SetkaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Aero\SetkaBundle\DependencyInjection
 * @author Alexey Borisov
 */
class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('aero_setka');
        $rootNode = $treeBuilder->getRootNode();
        return $treeBuilder;
    }
}