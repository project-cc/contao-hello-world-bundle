<?php

/*
 * This file is part of Contao Hello World Bundle.
 *
 * (c) Project CC
 *
 * @license LGPL-3.0-or-later
 */

namespace ProjectCc\ContaoHelloWorldBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ProjectCc\ContaoHelloWorldBundle\ContaoHelloWorldBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoHelloWorldBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
