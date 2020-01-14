<?php

namespace Megaport\Exception;

class ProductValidationException extends MegaportException
{
    /**
     * ProductValidationException constructor.
     *
     * @param string $message
     */
    public function __construct(string $message = 'Unknown error occurred')
    {
        parent::__construct(MegaportException::CODE_PRODUCT_VALIDATION_FAILED, $message);
    }
}