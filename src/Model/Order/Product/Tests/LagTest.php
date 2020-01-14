<?php

namespace Megaport\Model\Order\Product\Tests;

use Megaport\Exception\MegaportException;
use Megaport\Exception\ProductValidationException;
use Megaport\Model\Order\Location;
use Megaport\Model\Order\Product\Lag;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class LagTest extends TestCase
{
    /** @var MockObject | Location */
    private $mockLocation;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->mockLocation = $this->getMockBuilder(Location::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testSuccessfulConstructs()
    {
        $lag = new Lag($this->mockLocation, '', 10000);
        $this->assertInstanceOf(Lag::class, $lag);
        $this->assertInstanceOf(Lag::class, new Lag($this->mockLocation, 'test', 10000));
    }

    public function testExceptionOnLowSpeed()
    {
        $this->expectException(ProductValidationException::class);
        $this->expectExceptionMessage('Given port speed not available for ' . Lag::class);
        new Lag($this->mockLocation, 'test', 1000);
        $this->expectExceptionCode(MegaportException::CODE_PRODUCT_VALIDATION_FAILED);
    }

    public function testExceptionOnHighSpeed()
    {
        $this->expectException(ProductValidationException::class);
        $this->expectExceptionMessage('Given port speed not available for ' . Lag::class);
        $this->expectExceptionCode(MegaportException::CODE_PRODUCT_VALIDATION_FAILED);
        $this->assertInstanceOf(Lag::class, new Lag($this->mockLocation, 'test', 1000000));
    }
}
