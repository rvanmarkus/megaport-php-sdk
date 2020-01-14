<?php

namespace Megaport\Model\Order\Product;

use Megaport\Model\Order\Location;

class Mcr2 extends Mcr1
{
    /** @var array */
    protected static $possible_port_speeds = [1000, 2500, 5000, 10000];

    /**
     * Mcr2 constructor.
     *
     * @param Location $location
     * @param string $name
     * @param int $portSpeed
     * @param int $term
     */
    public function __construct(Location $location, string $name, int $portSpeed, $term = 1)
    {
        parent::__construct($location, $name, $portSpeed, $term);
        $this->setProductType('MCR2');
    }
}