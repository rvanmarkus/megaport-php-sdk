<?php

namespace Megaport\Model\Order\Product;

use JMS\Serializer\Annotation as SerializerX;

class AssocVxc
{
    /**
     * @var string
     * @SerializerX\Type("string")
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
     * @param \Megaport\Model\Order\Product\ConnectableProduct $aEnd
     * @param \Megaport\Model\Order\Product\ConnectableProduct $bEnd
     * @param int $rateLimit
     */
    public function __construct(string $name, ConnectableProduct $aEnd, ConnectableProduct $bEnd, $rateLimit = 550)
    {
        $this->name = $name;
        $this->rateLimit = $rateLimit;
        $this->aEnd = ['vlan' => $aEnd->getVlan()];
        $this->bEnd = $bEnd->getBEndConfig();
    }
}