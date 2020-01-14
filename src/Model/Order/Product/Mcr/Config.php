<?php

namespace Megaport\Model\Order\Product\Mcr;

use JMS\Serializer\Annotation as Serializer;

class Config
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $mcrAsn;

    /**
     * Config constructor.
     *
     * @param int $asn
     */
    public function __construct(int $asn)
    {
        $this->mcrAsn = $asn;
    }

    /**
     * @return int
     */
    public function getMcrAsn(): int
    {
        return $this->mcrAsn;
    }
}