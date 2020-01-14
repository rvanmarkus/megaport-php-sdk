<?php

use Megaport\Model\Order\Product\Cloud\Azure;
use Megaport\Model\Order\Product\OrderableProduct;
use Megaport\Model\Order\Product\PortVlan;
use Megaport\Model\Product\Cloud\CloudMegaport;
use PHPUnit\Framework\TestCase;

class AzureTest extends TestCase {
    public function testInstance() {
        $azure = new Azure('name', new CloudMegaport('1', '1'), new PortVlan('1', 1));
        $this->assertInstanceOf(Azure::class, $azure);
        $this->assertInstanceOf(OrderableProduct::class, $azure);
    }
}