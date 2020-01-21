<?php

namespace Megaport\Model\Order\Product\Cloud;

use Megaport\Model\Order\Product\AssocVxc;
use Megaport\Model\Order\Product\CloudVlan;
use Megaport\Model\Order\Product\PortVlan;
use Megaport\Model\Product\Cloud\CloudMegaport;
use JMS\Serializer\Annotation as Serializer;

class Azure extends CloudProduct
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
     * @param PortVlan $primary
     * @param CloudMegaport $cloudMegaport\
     * @param int $rateLimit
     */
    public function __construct(
        string $name,
        PortVlan $primary,
        CloudMegaport $cloudMegaport,
        int $rateLimit = 550
    ) {
        parent::__construct();
        $this->productUid = $primary->getPortUid();

        $this->associatedVxcs[] = new AssocVxc(
            $name,
            $primary,
            new CloudVlan(
                $cloudMegaport->getProductUid(),
                self::CLOUD_TYPE_AZURE,
                $cloudMegaport->getServiceKey()
            ),
            $rateLimit
        );
    }
}