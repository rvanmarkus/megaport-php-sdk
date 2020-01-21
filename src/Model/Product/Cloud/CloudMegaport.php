<?php

namespace Megaport\Model\Product\Cloud;

use JMS\Serializer\Annotation as Serializer;

class CloudMegaport
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $productUid;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $serviceKey;

    /**
     * Port
     *
     * @var int
     * @Serializer\Type("integer")
     */
    private $port;

    /**
     * Type
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $type;

    /**
     * Existing linked VXC
     *
     * @var int
     * @Serializer\Type("integer")
     */
    private $vxc;

    /**
     * Name
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * N Service ID
     *
     * @var int
     * @Serializer\Type("integer")
     */
    private $nServiceId;

    /**
     * Description of the port
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $description;

    /**
     * Company ID
     *
     * @var int
     * @Serializer\Type("integer")
     */
    private $companyId;

    /**
     * Company UID
     *
     * @var string 
     * @Serializer\Type("string")
     */
    private $companyUid;

    /**
     * Company name
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $companyName;

    /**
     * Port portSpeed
     *
     * @var int
     * @Serializer\Type("integer")
     */
    private $portSpeed;

    /**
     * locationId
     *
     * @var int
     * @Serializer\Type("integer")
     */
    private $locationId;

    /**
     * State (in the form of a state of the united states for example)
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $state;

    /**
     * Country
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $country;


    public function __construct(string $productUid, string $serviceKey) {
        $this->productUid = $productUid;
        $this->serviceKey = $serviceKey;
    }

    /**
     * @return string
     */
    public function getProductUid(): string
    {
        return $this->productUid;
    }

    /**
     * @param string $productUid
     */
    public function setProductUid(string $productUid): void
    {
        $this->productUid = $productUid;
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
    public function setServiceKey(string $serviceKey)
    {
        $this->serviceKey = $serviceKey;
    }

    

    /**
     * Get port
     *
     * @return  int
     */ 
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Get type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get existing linked VXC
     *
     * @return  int
     */ 
    public function getVxc()
    {
        return $this->vxc;
    }

    /**
     * Get name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get n Service ID
     *
     * @return  int
     */ 
    public function getNServiceId()
    {
        return $this->nServiceId;
    }

    /**
     * Get description of the port
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get company ID
     *
     * @return  int
     */ 
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Get company UID
     *
     * @return  string
     */ 
    public function getCompanyUid()
    {
        return $this->companyUid;
    }

    /**
     * Get company name
     *
     * @return  string
     */ 
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Get port portSpeed
     *
     * @return  int
     */ 
    public function getPortSpeed()
    {
        return $this->portSpeed;
    }

    /**
     * Get locationId
     *
     * @return  int
     */ 
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Get state (in the form of a state of the united states for example)
     *
     * @return  string
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get country
     *
     * @return  string
     */ 
    public function getCountry()
    {
        return $this->country;
    }
}