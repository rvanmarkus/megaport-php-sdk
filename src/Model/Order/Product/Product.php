<?php

namespace Megaport\Model\Order\Product;

use JMS\Serializer\Annotation\Type;
use Megaport\Exception\ProductValidationException;

/**
 * Abstract product.
 */
class Product implements OrderableProduct
{
    /**
     * The product name.
     *
     * @Type("string")
     */
    protected $productName;

    /**
     * The contract term.
     *
     * @Type("int")
     */
    protected $term;

    /**
     * The product type.
     *
     * @Type("string")
     */
    protected $productType;

    /**
     * The created date.
     *
     * @Type("integer")
     */
    protected $createdDate;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->createdDate = time();
        $this->validate();
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @return int
     */
    public function getTerm(): int
    {
        return $this->term;
    }

    /**
     * @param int $term
     *
     * @return self
     */
    public function setTerm(int $term): self
    {
        $this->term = $term;
        $this->validate();

        return $this;
    }

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     *
     * @return self
     */
    public function setProductType(string $productType): self
    {
        $this->productType = $productType;
        $this->validate();

        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    /**
     * @return bool
     *
     * @throws ProductValidationException
     */
    public function validate(): bool
    {
        return true;
    }
}
