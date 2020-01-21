<?php

namespace Megaport\Model\Product;

use JMS\Serializer\Annotation as Serializer;
use Megaport\Model\Order\Product\AssocVxc;

class Product
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $productUid;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $productName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $productType;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $provisioningStatus;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $createDate;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $terminateDate;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $contractStartDate;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $contractEndDate;

    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    private $contractTermMonths;

    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    private $portSpeed;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $market;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $aggregationId;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    private $lagPrimary;
    /**
     * @var AssocVxc[]
     * @Serializer\Type("array<Megaport\Model\Order\Product\AssocVxc>")
     */
    private $associatedVxcs = [];

    /**
     * @return float
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @return float
     */
    public function getTerminateDate()
    {
        return $this->terminateDate;
    }

    /**
     * @return float
     */
    public function getContractStartDate()
    {
        return $this->contractStartDate;
    }

    /**
     * @return float
     */
    public function getContractEndDate()
    {
        return $this->contractEndDate;
    }

    /**
     * @return int
     */
    public function getContractTermMonths()
    {
        return $this->contractTermMonths;
    }

    /**
     * @return int
     */
    public function getPortSpeed()
    {
        return $this->portSpeed;
    }

    /**
     * @return string
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @return int
     */
    public function getAggregationId()
    {
        return $this->aggregationId;
    }

    /**
     * @return bool
     */
    public function isLagPrimary()
    {
        return $this->lagPrimary;
    }

    /**
     * @return \Megaport\Model\Order\Product\AssocVxc[]
     */
    public function getAssociatedVxcs()
    {
        return $this->associatedVxcs;
    }

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
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * @return string
     */
    public function getProvisioningStatus(): string
    {
        return $this->provisioningStatus;
    }
}