<?php

namespace Megaport\Model\Order\Product\Tests;

use Megaport\Exception\MegaportException;
use Megaport\Exception\ProductValidationException;
use Megaport\Model\Order\Location;
use Megaport\Model\Order\Product\Mcr2;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class Mcr2Test extends TestCase
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
        parent::setUp();
    }

    public function testSuccessfulConstructs()
    {
        $this->assertInstanceOf(Mcr2::class, new Mcr2($this->mockLocation, 'test', 1000));
        $this->assertInstanceOf(Mcr2::class, new Mcr2($this->mockLocation, 'test', 2500));
        $this->assertInstanceOf(Mcr2::class, new Mcr2($this->mockLocation, 'test', 5000));
        $this->assertInstanceOf(Mcr2::class, new Mcr2($this->mockLocation, 'test', 10000));
    }

    public function testExceptionOnLowSpeed()
    {
        $this->expectException(ProductValidationException::class);
        $this->expectExceptionMessage('Given port speed not available for Megaport\Model\Order\Product\Mcr2');
        $this->expectExceptionCode(MegaportException::CODE_PRODUCT_VALIDATION_FAILED);
        new Mcr2($this->mockLocation, 'test', 100);
    }

    public function testExceptionOnHighSpeed()
    {
        $this->expectException(ProductValidationException::class);
        $this->expectExceptionMessage('Given port speed not available for Megaport\Model\Order\Product\Mcr2');
        $this->expectExceptionCode(MegaportException::CODE_PRODUCT_VALIDATION_FAILED);
        $this->assertInstanceOf(Mcr2::class, new Mcr2($this->mockLocation, 'test', 100000));
    }
}
