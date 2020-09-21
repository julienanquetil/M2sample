<?php

namespace JulienAnquetil\m2sample;

use PHPUnit\Framework\TestCase;
use Magento\TestFramework\Helper\Bootstrap;

/**
 * @magentoAppIsolation enabled
 */
class ExampleTest extends TestCase
{
    /** @test */
    public function WeCanUseTheObjectManager()
    {
        $this->assertInstanceOf(\Magento\TestFramework\ObjectManager::class, Bootstrap::getObjectManager());
    }
}
