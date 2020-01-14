<?php

namespace Megaport\Model\Order\Product;

use JMS\Serializer\Annotation as Serializer;
use Megaport\Model\Order\Location;
use Megaport\Model\Order\Product\Mcr\Config;

class Mcr1 extends Port
{
    /**
     * @var Config
     * @Serializer\Type("Megaport\Model\Order\product\Mcr\Config")
     */
    private $config = null;

    /**
     * Mcr1 constructor.
     *
     * @param Location $location
     * @param string $name
     * @param int $portSpeed
     * @param int $term
     * @param int|null $asn
     */
    public function __construct(Location $location, string $name, int $portSpeed, $term = 1, int $asn = null)
    {
        parent::__construct($location, $name, $portSpeed, $term);
        $this->setVirtual(true);
        if ($asn) {
            $this->config = new Config($asn);
        }
        $this->validate();
    }

    /**
     * @return Config
     */
    public function getConfig(): ?Config
    {
        return $this->config;
    }
}