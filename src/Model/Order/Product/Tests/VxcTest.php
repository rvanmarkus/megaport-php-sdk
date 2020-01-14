<?php

use Megaport\Model\Order\Product\OrderableProduct;
use Megaport\Model\Order\Product\PortVlan;
use Megaport\Model\Order\Product\Vxc;
use PHPUnit\Framework\TestCase;

class VxcTest extends TestCase {

    public function testInstance() {
        $vxc = new Vxc('name', new PortVlan('1', 1), new PortVlan('1', 1));
        $this->assertInstanceOf(Vxc::class, $vxc);
        $this->assertInstanceOf(OrderableProduct::class, $vxc);
    }

    public function testValidate() {
        $vxc = new Vxc('name', new PortVlan('1', 1), new PortVlan('1', 1));
        $this->assertTrue($vxc->validate()); 
    }

}