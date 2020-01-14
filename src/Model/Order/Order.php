<?php

namespace Megaport\Model\Order;

use JMS\Serializer\Annotation as Serializer;

class Order
{
    /**
     * @var String
     * @Serializer\Type("string")
     */
    private $serviceName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $technicalServiceId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $technicalServiceUid;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $requestedDate;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $currentEstimatedDelivery;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $companyName;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $companyId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $billingContactName;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $billingContactId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $adminContactName;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $adminContactId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $technicalContactName;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $technicalContactId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $salesName;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $salesId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $billableId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $billableUsageAlgorithm;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $productType;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $provisioningStatus;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $inAdvanceBillingStatus;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private $provisioningItems;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private $tags;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $vxcDistanceBand;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $intercapPath;

    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    private $marketplaceVisibility;

    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    private $vxcPermitted;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $createDate;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $terminationDate;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $contractStartDate;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $rateType;

    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    private $trialAgreement;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $payerCompanyId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $minimumSpeed;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $maximumSpeed;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $errorMessage;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $market;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $accountManager;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $promptUid;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private $components;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private $attributes;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $aLocation;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $bLocation;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $aLocationId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $bLocationId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $shortTechnicalServiceUid;

    /**
     * @return String
     */
    public function getServiceName(): String
    {
        return $this->serviceName;
    }

    /**
     * @param String $serviceName
     */
    public function setServiceName(String $serviceName): void
    {
        $this->serviceName = $serviceName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getTechnicalServiceId(): int
    {
        return $this->technicalServiceId;
    }

    /**
     * @param int $technicalServiceId
     */
    public function setTechnicalServiceId(int $technicalServiceId): void
    {
        $this->technicalServiceId = $technicalServiceId;
    }

    /**
     * @return string
     */
    public function getTechnicalServiceUid(): string
    {
        return $this->technicalServiceUid;
    }

    /**
     * @param string $technicalServiceUid
     */
    public function setTechnicalServiceUid(string $technicalServiceUid): void
    {
        $this->technicalServiceUid = $technicalServiceUid;
    }

    /**
     * @return float
     */
    public function getRequestedDate(): float
    {
        return $this->requestedDate;
    }

    /**
     * @param float $requestedDate
     */
    public function setRequestedDate(float $requestedDate): void
    {
        $this->requestedDate = $requestedDate;
    }

    /**
     * @return string
     */
    public function getCurrentEstimatedDelivery(): string
    {
        return $this->currentEstimatedDelivery;
    }

    /**
     * @param string $currentEstimatedDelivery
     */
    public function setCurrentEstimatedDelivery(string $currentEstimatedDelivery): void
    {
        $this->currentEstimatedDelivery = $currentEstimatedDelivery;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     */
    public function setCompanyId(int $companyId): void
    {
        $this->companyId = $companyId;
    }

    /**
     * @return string
     */
    public function getBillingContactName(): string
    {
        return $this->billingContactName;
    }

    /**
     * @param string $billingContactName
     */
    public function setBillingContactName(string $billingContactName): void
    {
        $this->billingContactName = $billingContactName;
    }

    /**
     * @return int
     */
    public function getBillingContactId(): int
    {
        return $this->billingContactId;
    }

    /**
     * @param int $billingContactId
     */
    public function setBillingContactId(int $billingContactId): void
    {
        $this->billingContactId = $billingContactId;
    }

    /**
     * @return string
     */
    public function getAdminContactName(): string
    {
        return $this->adminContactName;
    }

    /**
     * @param string $adminContactName
     */
    public function setAdminContactName(string $adminContactName): void
    {
        $this->adminContactName = $adminContactName;
    }

    /**
     * @return int
     */
    public function getAdminContactId(): int
    {
        return $this->adminContactId;
    }

    /**
     * @param int $adminContactId
     */
    public function setAdminContactId(int $adminContactId): void
    {
        $this->adminContactId = $adminContactId;
    }

    /**
     * @return string
     */
    public function getTechnicalContactName(): string
    {
        return $this->technicalContactName;
    }

    /**
     * @param string $technicalContactName
     */
    public function setTechnicalContactName(string $technicalContactName): void
    {
        $this->technicalContactName = $technicalContactName;
    }

    /**
     * @return int
     */
    public function getTechnicalContactId(): int
    {
        return $this->technicalContactId;
    }

    /**
     * @param int $technicalContactId
     */
    public function setTechnicalContactId(int $technicalContactId): void
    {
        $this->technicalContactId = $technicalContactId;
    }

    /**
     * @return string
     */
    public function getSalesName(): string
    {
        return $this->salesName;
    }

    /**
     * @param string $salesName
     */
    public function setSalesName(string $salesName): void
    {
        $this->salesName = $salesName;
    }

    /**
     * @return int
     */
    public function getSalesId(): int
    {
        return $this->salesId;
    }

    /**
     * @param int $salesId
     */
    public function setSalesId(int $salesId): void
    {
        $this->salesId = $salesId;
    }

    /**
     * @return int
     */
    public function getBillableId(): int
    {
        return $this->billableId;
    }

    /**
     * @param int $billableId
     */
    public function setBillableId(int $billableId): void
    {
        $this->billableId = $billableId;
    }

    /**
     * @return string
     */
    public function getBillableUsageAlgorithm(): string
    {
        return $this->billableUsageAlgorithm;
    }

    /**
     * @param string $billableUsageAlgorithm
     */
    public function setBillableUsageAlgorithm(string $billableUsageAlgorithm): void
    {
        $this->billableUsageAlgorithm = $billableUsageAlgorithm;
    }

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     */
    public function setProductType(string $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @return string
     */
    public function getProvisioningStatus(): string
    {
        return $this->provisioningStatus;
    }

    /**
     * @param string $provisioningStatus
     */
    public function setProvisioningStatus(string $provisioningStatus): void
    {
        $this->provisioningStatus = $provisioningStatus;
    }

    /**
     * @return string
     */
    public function getInAdvanceBillingStatus(): string
    {
        return $this->inAdvanceBillingStatus;
    }

    /**
     * @param string $inAdvanceBillingStatus
     */
    public function setInAdvanceBillingStatus(string $inAdvanceBillingStatus): void
    {
        $this->inAdvanceBillingStatus = $inAdvanceBillingStatus;
    }

    /**
     * @return array
     */
    public function getProvisioningItems(): array
    {
        return $this->provisioningItems;
    }

    /**
     * @param array $provisioningItems
     */
    public function setProvisioningItems(array $provisioningItems): void
    {
        $this->provisioningItems = $provisioningItems;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getVxcDistanceBand(): string
    {
        return $this->vxcDistanceBand;
    }

    /**
     * @param string $vxcDistanceBand
     */
    public function setVxcDistanceBand(string $vxcDistanceBand): void
    {
        $this->vxcDistanceBand = $vxcDistanceBand;
    }

    /**
     * @return string
     */
    public function getIntercapPath(): string
    {
        return $this->intercapPath;
    }

    /**
     * @param string $intercapPath
     */
    public function setIntercapPath(string $intercapPath): void
    {
        $this->intercapPath = $intercapPath;
    }

    /**
     * @return bool
     */
    public function isMarketplaceVisibility(): bool
    {
        return $this->marketplaceVisibility;
    }

    /**
     * @param bool $marketplaceVisibility
     */
    public function setMarketplaceVisibility(bool $marketplaceVisibility): void
    {
        $this->marketplaceVisibility = $marketplaceVisibility;
    }

    /**
     * @return bool
     */
    public function isVxcPermitted(): bool
    {
        return $this->vxcPermitted;
    }

    /**
     * @param bool $vxcPermitted
     */
    public function setVxcPermitted(bool $vxcPermitted): void
    {
        $this->vxcPermitted = $vxcPermitted;
    }

    /**
     * @return float
     */
    public function getCreateDate(): float
    {
        return $this->createDate;
    }

    /**
     * @param float $createDate
     */
    public function setCreateDate(float $createDate): void
    {
        $this->createDate = $createDate;
    }

    /**
     * @return float
     */
    public function getTerminationDate(): float
    {
        return $this->terminationDate;
    }

    /**
     * @param float $terminationDate
     */
    public function setTerminationDate(float $terminationDate): void
    {
        $this->terminationDate = $terminationDate;
    }

    /**
     * @return float
     */
    public function getContractStartDate(): float
    {
        return $this->contractStartDate;
    }

    /**
     * @param float $contractStartDate
     */
    public function setContractStartDate(float $contractStartDate): void
    {
        $this->contractStartDate = $contractStartDate;
    }

    /**
     * @return string
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }

    /**
     * @param string $rateType
     */
    public function setRateType(string $rateType): void
    {
        $this->rateType = $rateType;
    }

    /**
     * @return bool
     */
    public function isTrialAgreement(): bool
    {
        return $this->trialAgreement;
    }

    /**
     * @param bool $trialAgreement
     */
    public function setTrialAgreement(bool $trialAgreement): void
    {
        $this->trialAgreement = $trialAgreement;
    }

    /**
     * @return int
     */
    public function getPayerCompanyId(): int
    {
        return $this->payerCompanyId;
    }

    /**
     * @param int $payerCompanyId
     */
    public function setPayerCompanyId(int $payerCompanyId): void
    {
        $this->payerCompanyId = $payerCompanyId;
    }

    /**
     * @return string
     */
    public function getMinimumSpeed(): string
    {
        return $this->minimumSpeed;
    }

    /**
     * @param string $minimumSpeed
     */
    public function setMinimumSpeed(string $minimumSpeed): void
    {
        $this->minimumSpeed = $minimumSpeed;
    }

    /**
     * @return string
     */
    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed;
    }

    /**
     * @param string $maximumSpeed
     */
    public function setMaximumSpeed(string $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function getMarket(): string
    {
        return $this->market;
    }

    /**
     * @param string $market
     */
    public function setMarket(string $market): void
    {
        $this->market = $market;
    }

    /**
     * @return string
     */
    public function getAccountManager(): string
    {
        return $this->accountManager;
    }

    /**
     * @param string $accountManager
     */
    public function setAccountManager(string $accountManager): void
    {
        $this->accountManager = $accountManager;
    }

    /**
     * @return string
     */
    public function getPromptUid(): string
    {
        return $this->promptUid;
    }

    /**
     * @param string $promptUid
     */
    public function setPromptUid(string $promptUid): void
    {
        $this->promptUid = $promptUid;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $components
     */
    public function setComponents(array $components): void
    {
        $this->components = $components;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getALocation(): string
    {
        return $this->aLocation;
    }

    /**
     * @param string $aLocation
     */
    public function setALocation(string $aLocation): void
    {
        $this->aLocation = $aLocation;
    }

    /**
     * @return string
     */
    public function getBLocation(): string
    {
        return $this->bLocation;
    }

    /**
     * @param string $bLocation
     */
    public function setBLocation(string $bLocation): void
    {
        $this->bLocation = $bLocation;
    }

    /**
     * @return int
     */
    public function getALocationId(): int
    {
        return $this->aLocationId;
    }

    /**
     * @param int $aLocationId
     */
    public function setALocationId(int $aLocationId): void
    {
        $this->aLocationId = $aLocationId;
    }

    /**
     * @return int
     */
    public function getBLocationId(): int
    {
        return $this->bLocationId;
    }

    /**
     * @param int $bLocationId
     */
    public function setBLocationId(int $bLocationId): void
    {
        $this->bLocationId = $bLocationId;
    }

    /**
     * @return string
     */
    public function getShortTechnicalServiceUid(): string
    {
        return $this->shortTechnicalServiceUid;
    }

    /**
     * @param string $shortTechnicalServiceUid
     */
    public function setShortTechnicalServiceUid(string $shortTechnicalServiceUid): void
    {
        $this->shortTechnicalServiceUid = $shortTechnicalServiceUid;
    }
}
