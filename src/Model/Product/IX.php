<?php

namespace Megaport\Model\Product;

use JMS\Serializer\Annotation\Type;

/**
 * Internet Exchange
 */
class IX
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $secondaryIPv4;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $secondaryIPv6;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $primaryIPv4;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $primaryIPv6;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $name;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $state;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $asn;

    /**
     * @return string
     */
    public function getSecondaryIPv4(): string
    {
        return $this->secondaryIPv4;
    }

    /**
     * Get secondary IPv6
     *
     * @return string
     */
    public function getSecondaryIPv6(): string
    {
        return $this->secondaryIPv6;
    }

    /**
     * Get primary IPv4
     *
     * @return string
     */
    public function getPrimaryIPv4(): string
    {
        return $this->primaryIPv4;
    }

    /**
     * Get primary IPv6
     *
     * @return string
     */
    public function getPrimaryIPv6(): string
    {
        return $this->primaryIPv6;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getAsn(): string
    {
        return $this->asn;
    }
}
