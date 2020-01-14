<?php

namespace Megaport\Model\Order\Product;

class PortVlan implements ConnectableProduct
{
    /**
     * @var string
     */
    private $portUid;

    /**
     * @var int
     */
    private $vlan;

    /**
     * PortVlan constructor.
     *
     * @param string $portUid
     * @param int $vlan
     */
    public function __construct(string $portUid, int $vlan)
    {
        $this->portUid = $portUid;
        $this->vlan = $vlan;
    }

    /**
     * @return int
     */
    public function getVlan(): int
    {
        return $this->vlan;
    }

    /**
     * @inheritDoc
     */
    public function getPortUid(): string
    {
        return $this->portUid;
    }

    /**
     * @inheritDoc
     */
    public function getBEndConfig(): array
    {
        return [
            'productUid' => $this->getPortUid(),
            'vlan' => $this->getVlan(),
        ];
    }
}