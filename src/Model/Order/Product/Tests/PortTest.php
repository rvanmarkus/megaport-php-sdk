<?php

namespace Megaport\Model\Order\Product\Tests;

use Megaport\Exception\MegaportException;
use Megaport\Exception\ProductValidationException;
use Megaport\Model\Order\Location;
use Megaport\Model\Order\Product\Port;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class PortTest extends TestCase
{
    /** @var MockObject | Location */
    private $mockLocation;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->mockLocation = $this->getMockBuilder(Location::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testSuccessfulConstructs()
    {
        $this->assertInstanceOf(Port::class, new Port($this->mockLocation, 'test', 1000));
        $this->assertInstanceOf(Port::class, new Port($this->mockLocation, 'test', 10000));
        $this->assertInstanceOf(Port::class, new Port($this->mockLocation, 'test', 100000));
    }

    public function testExceptionOnLowSpeed()
    {
        $this->expectException(ProductValidationException::class);
        $this->expectExceptionMessage('Given port speed not available for Megaport\Model\Order\Product\Port');
        $this->expectExceptionCode(MegaportException::CODE_PRODUCT_VALIDATION_FAILED);
        new Port($this->mockLocation, 'test', 10);
    }

    public function testExceptionOnHighSpeed()
    {
        $this->expectException(ProductValidationException::class);
        $this->expectExceptionMessage('Given port speed not available for Megaport\Model\Order\Product\Port');
        $this->expectExceptionCode(MegaportException::CODE_PRODUCT_VALIDATION_FAILED);
        $this->assertInstanceOf(Port::class, new Port($this->mockLocation, 'test', 1000000));
    }
}
