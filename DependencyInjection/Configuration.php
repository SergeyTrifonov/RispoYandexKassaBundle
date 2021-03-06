<?php

namespace Rispo\YandexKassaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('rispo_yandex_kassa');

        $rootNode->children()
            ->scalarNode('rispo_yandexkassa_shopId')->isRequired()->end()
            ->scalarNode('rispo_yandexkassa_scid')->isRequired()->end()
            ->scalarNode('rispo_yandexkassa_ShopPassword')->isRequired()->end()
            ->scalarNode('rispo_yandexkassa_test')->defaultTrue()->end()
            ->end();

        return $treeBuilder;
    }
}
