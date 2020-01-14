<?php

namespace Megaport\Model\Order\Product;

interface OrderableProduct
{
    /**
     * @return bool
     */
    public function validate(): bool;
}