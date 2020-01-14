<?php

namespace Megaport\Model\Order\Product\Cloud;

use Megaport\Model\Order\Product\AssocVxc;
use Megaport\Model\Order\Product\CloudVlan;
use Megaport\Model\Order\Product\PortVlan;
use Megaport\Model\Order\Product\Product;
use Megaport\Model\Product\Cloud\CloudMegaport;
use JMS\Serializer\Annotation as Serializer;

class Azure extends Product
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $productUid;
    /**
     * @var AssocVxc[]
     * @Serializer\Type("array<Megaport\Model\Order\Product\AssocVxc>")
     */
    private $associatedVxcs = [];

    /**
     * Azure constructor.
     *
     * @param string $name
     * @param CloudMegaport $cloudMegaport
     * @param PortVlan $primary
     * @param int $rateLimit
     */
    public function __construct(
        string $name,
        CloudMegaport $cloudMegaport,
        PortVlan $primary,
        int $rateLimit = 550
    ) {
        parent::__construct();
        $this->productUid = $primary->getPortUid();

        $this->associatedVxcs[] = new AssocVxc(
            $name,
            $primary,
            new CloudVlan(
                $cloudMegaport->getProductUid(),
                'AZURE',
                $cloudMegaport->getServiceKey()
            ),
            $rateLimit
        );
    }
}