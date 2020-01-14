<?php

namespace Megaport\Model\Order;

use JMS\Serializer\Annotation\Type;

class Address
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $country;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $city;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $street;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $postcode;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $suburb;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $state;

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Get the city.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Get the state.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Get the suburb
     *
     * @return string
     */
    public function getSuburb(): string
    {
        return $this->suburb;
    }

    /**
     * Get the postal code
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
}
