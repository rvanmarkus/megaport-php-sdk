<?php

namespace Megaport\Model\Order\Product\Tests;

use Megaport\Model\Order\Product\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test__construct()
    {
        self::assertInstanceOf(Product::class, new Product());
    }
}
