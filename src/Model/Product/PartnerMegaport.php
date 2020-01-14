<?php

namespace Megaport\Model\Product;

use JMS\Serializer\Annotation\Type;

/**
 * The partner megaport object defines a public partner megaport.
 */
class PartnerMegaport
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $connectType;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $productUid;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $productName;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $companyUid;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $companyName;

    /**
     * @Type("integer")
     *
     * @var integer
     */
    private $locationId;

    /**
     * @Type("integer")
     *
     * @var integer
     */
    private $speed;

    /**
     * @Type("integer")
     *
     * @var integer
     */
    private $rank;

    /**
     * @Type("boolean")
     *
     * @var boolean
     */
    private $vxcPermitted;

    /**
     * @return string
     */
    public function getProductUid(): string
    {
        return $this->productUid;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @return string
     */
    public function getCompanyUid(): string
    {
        return $this->companyUid;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @return integer
     */
    public function getLocationId(): int
    {
        return $this->locationId;
    }

    /**
     * @return integer
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return integer
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @return boolean
     */
    public function getVxcPermitted(): bool
    {
        return $this->vxcPermitted;
    }

    /**
     * @return string
     */
    public function getConnectType(): string
    {
        return $this->connectType;
    }
}
