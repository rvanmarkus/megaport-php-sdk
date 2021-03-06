<?php

namespace Megaport\Model\Order\Product;

use JMS\Serializer\Annotation as SerializerX;

class AssocVxc
{
    /**
     * @var string
     * @SerializerX\Type("string")
     * @SerializerX\SerializedName("productName")
     */
    private $name;

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
     * @param string $name
     * @param \Megaport\Model\Order\Product\PortVlan $aEnd
     * @param \Megaport\Model\Order\Product\ConnectableProduct $bEnd
     * @param int $rateLimit
     */
    public function __construct(string $name, PortVlan $aEnd, ConnectableProduct $bEnd, $rateLimit = 550)
    {
        $this->name = $name;
        $this->rateLimit = $rateLimit;
        $this->aEnd = ['vlan' => $aEnd->getVlan()];
        $this->bEnd = $bEnd->getBEndConfig();
    }
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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