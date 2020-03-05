<?php

namespace Megaport\Model\Order;

use JMS\Serializer\Annotation\Type;

/**
 * Location on which megaport delivers.
 */
class Location
{
    /**
     * @Type("integer")
     *
     * @var integer
     */
    private $id;

    /**
     * @Type("string")
     */
    private $name;

    /**
     * @Type("string")
     */
    private $country;

    /**
     * @Type("float")
     */
    private $latitude;

    /**
     * @Type("float")
     */
    private $longitude;

    /**
     * @Type("string")
     */
    private $market;

    /**
     * @Type("array")
     *
     * @var array
     */
    private $products;

    /**
     * @Type("Megaport\Model\Order\Address")
     */
    private $address;

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function getMarket(): string
    {
        return $this->market;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
