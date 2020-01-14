<?php

namespace Megaport\Model\Order\Product;

use JMS\Serializer\Annotation as Serializer;
use Megaport\Model\Order\Location;

/**
 * Class Link Aggregation Group.
 */
class Lag extends Port
{
    protected static $possible_port_speeds = [10000, 100000];

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $lagPortCount;

    /**
     * Lag constructor.
     *
     * @param Location $location
     * @param string $name
     * @param int $portSpeed
     * @param int $term
     * @param int $lagPortCount
     */
    public function __construct(
        Location $location,
        string $name,
        int $portSpeed,
        int $term = 1,
        int $lagPortCount = 1
    ) {
        $this->lagPortCount = $lagPortCount;
        parent::__construct($location, $name, $portSpeed, $term);
    }
}