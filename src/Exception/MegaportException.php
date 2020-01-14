<?php

namespace Megaport\Exception;

use RuntimeException;

class MegaportException extends RuntimeException
{
    public const CODE_MEGAPORT_ORDER_VALIDATION_FAILED = 100;
    public const CODE_PRODUCT_VALIDATION_FAILED = 101;
    public const CODE_OTHER = 999;

    /**
     * @var mixed
     */
    private $details;

    /**
     * MegaportException constructor.
     *
     * @param int $code
     * @param string $message
     * @param null $details
     */
    public function __construct(int $code = 999, string $message = 'Unknown error occurred', $details = null)
    {
        parent::__construct($message, $code);
        $this->details = $details;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return 'Error ' . $this->getCode() . ': ' . $this->getMessage();
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }
}