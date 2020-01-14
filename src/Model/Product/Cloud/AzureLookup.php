<?php

namespace Megaport\Model\Product\Cloud;

use JMS\Serializer\Annotation as Serializer;

class AzureLookup
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $bandwidth;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $vlan;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("service_key")
     */
    private $serviceKey;

    /**
     * @var CloudMegaport[]
     * @Serializer\Type("array<Megaport\Model\Product\Cloud\CloudMegaport>")
     */
    private $megaports;

    /**
     * @return int
     */
    public function getBandwidth(): int
    {
        return $this->bandwidth;
    }

    /**
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth): void
    {
        $this->bandwidth = $bandwidth;
    }

    /**
     * @return int
     */
    public function getVlan(): int
    {
        return $this->vlan;
    }

    /**
     * @param int $vlan
     */
    public function setVlan(int $vlan): void
    {
        $this->vlan = $vlan;
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
    public function setServiceKey(string $serviceKey): void
    {
        $this->serviceKey = $serviceKey;
    }

    /**
     * @return CloudMegaport[]
     */
    public function getMegaports(): array
    {
        return $this->megaports;
    }

    /**
     * @param CloudMegaport[] $megaports
     */
    public function setMegaports(array $megaports): void
    {
        $this->megaports = $megaports;
    }
}