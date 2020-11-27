<?php

namespace Megaport\Model\Order\Product;

use JMS\Serializer\Annotation as SerializerX;

class AssocVxc
{
    /**
     * @var string
     * @SerializerX\Type("string")
     */
    private $productName;

    /**
     * @var int
     * @SerializerX\Type("integer")
     */
    private $rateLimit;

    /**
     * @var array
     * @SerializerX\Type("array")
     */
    private $aEnd;

    /**
     * @var array
     * @SerializerX\Type("array")
     */
    private $bEnd;

    /**
     * AssocVxc constructor.
     *
     * @param string $productName
     * @param \Megaport\Model\Order\Product\ConnectableProduct $aEnd
     * @param \Megaport\Model\Order\Product\ConnectableProduct $bEnd
     * @param int $rateLimit
     */
    public function __construct(string $productName, ConnectableProduct $aEnd, ConnectableProduct $bEnd, $rateLimit = 550)
    {
        $this->productName = $productName;
        $this->rateLimit = $rateLimit;
        $this->aEnd = ['vlan' => $aEnd->getVlan()];
        $this->bEnd = $bEnd->getBEndConfig();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->productName;
    }

    /**
     * @return int
     */
    public function getRateLimit(): int
    {
        return $this->rateLimit;
    }

    /**
     * @return array
     */
    public function getAEnd(): array
    {
        return $this->aEnd;
    }

    /**
     * @return array
     */
    public function getBEnd(): array
    {
        return $this->bEnd;
    }
}