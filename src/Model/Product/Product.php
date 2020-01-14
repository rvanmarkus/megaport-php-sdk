<?php

namespace Megaport\Model\Product;

use JMS\Serializer\Annotation as Serializer;

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