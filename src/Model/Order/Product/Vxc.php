<?php

namespace Megaport\Model\Order\Product;

use JMS\Serializer\Annotation as Serializer;

class Vxc implements OrderableProduct
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $productUid;
    /**
     * @var AssocVxc[AssocVxc]
     * @Serializer\Type("array<Megaport\Model\Order\Product\AssocVxc>")
     */
    private $associatedVxcs;

    /**
     * Vxc constructor.
     *
     * @param string $name
     * @param PortVlan $aEnd
     * @param PortVlan $bEnd
     * @param int $rateLimit
     */
    public function __construct(string $name, PortVlan $aEnd, PortVlan $bEnd, $rateLimit = 550)
    {
        $this->productUid = $aEnd->getPortUid();
        $this->associatedVxcs = [new AssocVxc($name, $aEnd, $bEnd, $rateLimit)];
    }

    public function validate(): bool
    {
        return true;
    }
}
