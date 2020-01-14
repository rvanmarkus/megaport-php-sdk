<?php

namespace Megaport\model\order\product\Tests;

use Megaport\Model\Order\Location;
use Megaport\Model\Order\Product\Mcr\Config;
use Megaport\Model\Order\Product\Mcr1;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class Mcr1Test extends TestCase
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

    public function testWithoutAsn()
    {

        $mcr = new Mcr1($this->mockLocation, 'mcr1test', 1000);
        $this->assertInstanceOf(Mcr1::class, $mcr);
        $this->assertNull($mcr->getConfig());
    }

    public function testWithAsn()
    {
        $mcr = new Mcr1($this->mockLocation, 'test', 1000, 12, 42);
        $this->assertInstanceOf(Mcr1::class, $mcr);
        $this->assertInstanceOf(Config::class, $mcr->getConfig());
        $this->assertEquals(42, $mcr->getConfig()->getMcrAsn());
    }
}
