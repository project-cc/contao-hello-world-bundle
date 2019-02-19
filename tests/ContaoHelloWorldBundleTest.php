<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace ProjectCc\ContaoHelloWorldBundle\Tests;

use ProjectCc\ContaoHelloWorldBundle\ContaoSkeletonBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('ProjectCc\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
