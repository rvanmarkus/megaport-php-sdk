<?php

namespace Megaport\Model\Order\Product;

class CloudVlan implements ConnectableProduct
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $key;
    /**
     * @var string
     */
    private $portUid;

    /**
     * CloudVlan constructor.
     *
     * @param string $portUid
     * @param string $type
     * @param string $key
     */
    public function __construct(string $portUid, string $type, string $key)
    {
        $this->portUid = $portUid;
        $this->setType($type);
        $this->setKey($key);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getPortUid(): string
    {
        return $this->portUid;
    }

    /**
     * @return array
     */
    public function getBEndConfig(): array
    {
        return [
            'productUid' => $this->getPortUid(),
            'partnerConfig' => [
                'connectType' => $this->getType(),
                'serviceKey' => $this->getKey()
            ],
        ];
    }
}