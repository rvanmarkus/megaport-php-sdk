<?php

namespace Megaport\Model\Order\Product;

interface ConnectableProduct
{
    /**
     * @return string
     */
    public function getPortUid(): string;

    /**
     * @return array
     */
    public function getBEndConfig(): array;
}