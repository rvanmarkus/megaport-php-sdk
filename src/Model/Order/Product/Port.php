<?php

namespace Megaport\Model\Order\Product;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\VirtualProperty;
use Megaport\Exception\ProductValidationException;
use Megaport\Model\Order\Location;

/**
 * Port class defining a megaport instance.
 */
class Port extends Product
{
    /** @var array */
    protected static $possible_port_speeds = [1000, 10000, 100000];
    /**
     * The port speed.
     *
     * @Type("integer")
     */
    private $portSpeed;
    /**
     * The ID of the location.
     *
     * @var Location
     */
    private $location;
    /**
     * Is virtual.
     *
     * @Type("boolean")
     */
    private $virtual;
    /**
     * The market abbreviation.
     *
     * @Type("string")
     */
    private $market;

    /**
     * Constructor
     *
     * @param Location $location
     * @param string $name Name of the product instance.
     * @param integer $portSpeed The speed of the port.
     * @param int $term
     */
    public function __construct(
        Location $location,
        string $name,
        int $portSpeed,
        int $term = 1
    ) {
        $this->productType = 'MEGAPORT';
        $this->productName = $name;
        $this->term = $term;
        $this->market = 'NL';
        $this->portSpeed = $portSpeed;
        $this->location = $location;
        $this->virtual = false;
        parent::__construct();
        $this->validate();
    }

    /**
     * Get the value of market
     *
     * @return string.
     */
    public function getMarket(): string
    {
        return $this->market;
    }

    /**
     * @param string $market
     *
     * @return self
     */
    public function setMarket(string $market): self
    {
        $this->market = $market;
        $this->validate();

        return $this;
    }

    /**
     * @return int
     */
    public function getPortSpeed(): int
    {
        return $this->portSpeed;
    }

    /**
     * @return boolean
     */
    public function getVirtual(): bool
    {
        return $this->virtual;
    }

    /**
     * @param bool $virtual
     *
     * @return self
     */
    public function setVirtual(bool $virtual): self
    {
        $this->virtual = $virtual;
        $this->validate();

        return $this;
    }

    /**
     * Get the value of locationId
     *
     * @VirtualProperty
     * @Serializer\SerializedName("locationId")
     * @return integer
     */
    public function getLocationId(): int
    {
        return $this->location->getId();
    }

    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if (!in_array($this->getPortSpeed(), $this::$possible_port_speeds, false)) {
            throw new ProductValidationException('Given port speed not available for ' . get_class($this));
        }

        return parent::validate();
    }
}
