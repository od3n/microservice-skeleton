<?php declare(strict_types=1);

namespace MyParcelCom\Microservice\Shipments;

use MyParcelCom\Microservice\PickUpDropOffLocations\Address;

class Shipment
{
    /** @var string */
    protected $id;

    /** @var Address */
    protected $recipientAddress;

    /** @var Address */
    protected $senderAddress;

    /** @var string */
    protected $pickupLocationCode;

    /** @var Address */
    protected $pickupLocationAddress;

    /** @var string */
    protected $description;

    /** @var int */
    protected $priceAmount;

    /** @var string */
    protected $priceCurrency;

    /** @var int */
    protected $insuranceAmount;

    /** @var string */
    protected $insuranceCurrency;

    /** @var string */
    protected $barcode;

    /** @var int */
    protected $weight;

    /** @var Service */
    protected $service;

    /** @var Option[] */
    protected $options = [];

    /** @var PhysicalProperties */
    protected $physicalProperties;

    /** @var File[] */
    protected $files = [];

    /** @var Customs */
    protected $customs;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Address
     */
    public function getRecipientAddress(): Address
    {
        return $this->recipientAddress;
    }

    /**
     * @param Address $recipientAddress
     * @return $this
     */
    public function setRecipientAddress(Address $recipientAddress): self
    {
        $this->recipientAddress = $recipientAddress;

        return $this;
    }

    /**
     * @return Address
     */
    public function getSenderAddress(): Address
    {
        return $this->senderAddress;
    }

    /**
     * @param Address $senderAddress
     * @return $this
     */
    public function setSenderAddress(Address $senderAddress): self
    {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPickupLocationCode(): ?string
    {
        return $this->pickupLocationCode;
    }

    /**
     * @param string $pickupLocationCode
     * @return $this
     */
    public function setPickupLocationCode(string $pickupLocationCode): self
    {
        $this->pickupLocationCode = $pickupLocationCode;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getPickupLocationAddress(): ?Address
    {
        return $this->pickupLocationAddress;
    }

    /**
     * @param Address $pickupLocationAddress
     * @return $this
     */
    public function setPickupLocationAddress(Address $pickupLocationAddress): self
    {
        $this->pickupLocationAddress = $pickupLocationAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriceAmount(): int
    {
        return $this->priceAmount;
    }

    /**
     * @param int $priceAmount
     * @return $this
     */
    public function setPriceAmount(int $priceAmount): self
    {
        $this->priceAmount = $priceAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceCurrency(): string
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     * @return $this
     */
    public function setPriceCurrency(string $priceCurrency): self
    {
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * @return int
     */
    public function getInsuranceAmount(): int
    {
        return $this->insuranceAmount;
    }

    /**
     * @param int $insuranceAmount
     * @return $this
     */
    public function setInsuranceAmount(int $insuranceAmount): self
    {
        $this->insuranceAmount = $insuranceAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getInsuranceCurrency(): string
    {
        return $this->insuranceCurrency;
    }

    /**
     * @param string $insuranceCurrency
     * @return $this
     */
    public function setInsuranceCurrency(string $insuranceCurrency): self
    {
        $this->insuranceCurrency = $insuranceCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return $this
     */
    public function setBarcode(string $barcode): self
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return $this
     */
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }

    /**
     * @param Service $service
     * @return $this
     */
    public function setService(Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return Option[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param Option $option
     * @return $this
     */
    public function addOption(Option $option): self
    {
        $this->options[] = $option;

        return $this;
    }

    /**
     * @param Option[] $options
     * @return $this
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return PhysicalProperties|null
     */
    public function getPhysicalProperties(): ?PhysicalProperties
    {
        return $this->physicalProperties;
    }

    /**
     * @param PhysicalProperties $physicalProperties
     * @return $this
     */
    public function setPhysicalProperties(PhysicalProperties $physicalProperties): self
    {
        $this->physicalProperties = $physicalProperties;

        return $this;
    }

    /**
     * @return File[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param File $file
     * @return $this
     */
    public function addFile(File $file): self
    {
        $this->files[] = $file;

        return $this;
    }

    /**
     * @param Customs $customs
     * @return $this
     */
    public function setCustoms(Customs $customs): self
    {
        $this->customs = $customs;

        return $this;
    }

    /**
     * @return Customs|null
     */
    public function getCustoms(): ?Customs
    {
        return $this->customs;
    }
}
