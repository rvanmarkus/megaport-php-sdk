<?php

namespace Megaport\Model\Product\Cloud;

use JMS\Serializer\Annotation as Serializer;

class CloudMegaport
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $productUid;

    /**
     * @var string
     */
    private $serviceKey;

    public function __construct(string $productUid, string $serviceKey) {
        $this->productUid = $productUid;
        $this->serviceKey = $serviceKey;
    }

    /**
     * @return string
     */
    public function getProductUid(): string
    {
        return $this->productUid;
    }

    /**
     * @param string $productUid
     */
    public function setProductUid(string $productUid): void
    {
        $this->productUid = $productUid;
    }

    /**
     * @return string
     */
    public function getServiceKey(): string
    {
        return $this->serviceKey;
    }

    /**
     * @param string $serviceKey
     */
    public function setServiceKey(string $serviceKey)
    {
        $this->serviceKey = $serviceKey;
    }
}