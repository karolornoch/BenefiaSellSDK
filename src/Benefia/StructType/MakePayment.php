<?php

declare(strict_types=1);

namespace Benefia\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakePayment StructType
 * @subpackage Structs
 */
class MakePayment extends AbstractStructBase
{
    /**
     * The oplata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $oplata;
    /**
     * The dataWymagalnosciRaty
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $dataWymagalnosciRaty;
    /**
     * The numerPolisy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerPolisy = null;
    /**
     * The numerOperacjiBankowej
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerOperacjiBankowej = null;
    /**
     * The typPlatnosci
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typPlatnosci = null;
    /**
     * The przelewNaKonto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $przelewNaKonto = null;
    /**
     * Constructor method for MakePayment
     * @uses MakePayment::setOplata()
     * @uses MakePayment::setDataWymagalnosciRaty()
     * @uses MakePayment::setNumerPolisy()
     * @uses MakePayment::setNumerOperacjiBankowej()
     * @uses MakePayment::setTypPlatnosci()
     * @uses MakePayment::setPrzelewNaKonto()
     * @param float $oplata
     * @param string $dataWymagalnosciRaty
     * @param string $numerPolisy
     * @param string $numerOperacjiBankowej
     * @param string $typPlatnosci
     * @param string $przelewNaKonto
     */
    public function __construct(float $oplata, string $dataWymagalnosciRaty, ?string $numerPolisy = null, ?string $numerOperacjiBankowej = null, ?string $typPlatnosci = null, ?string $przelewNaKonto = null)
    {
        $this
            ->setOplata($oplata)
            ->setDataWymagalnosciRaty($dataWymagalnosciRaty)
            ->setNumerPolisy($numerPolisy)
            ->setNumerOperacjiBankowej($numerOperacjiBankowej)
            ->setTypPlatnosci($typPlatnosci)
            ->setPrzelewNaKonto($przelewNaKonto);
    }
    /**
     * Get oplata value
     * @return float
     */
    public function getOplata(): float
    {
        return $this->oplata;
    }
    /**
     * Set oplata value
     * @param float $oplata
     * @return \StructType\MakePayment
     */
    public function setOplata(float $oplata): self
    {
        // validation for constraint: float
        if (!is_null($oplata) && !(is_float($oplata) || is_numeric($oplata))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oplata, true), gettype($oplata)), __LINE__);
        }
        $this->oplata = $oplata;
        
        return $this;
    }
    /**
     * Get dataWymagalnosciRaty value
     * @return string
     */
    public function getDataWymagalnosciRaty(): string
    {
        return $this->dataWymagalnosciRaty;
    }
    /**
     * Set dataWymagalnosciRaty value
     * @param string $dataWymagalnosciRaty
     * @return \StructType\MakePayment
     */
    public function setDataWymagalnosciRaty(string $dataWymagalnosciRaty): self
    {
        // validation for constraint: string
        if (!is_null($dataWymagalnosciRaty) && !is_string($dataWymagalnosciRaty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataWymagalnosciRaty, true), gettype($dataWymagalnosciRaty)), __LINE__);
        }
        $this->dataWymagalnosciRaty = $dataWymagalnosciRaty;
        
        return $this;
    }
    /**
     * Get numerPolisy value
     * @return string|null
     */
    public function getNumerPolisy(): ?string
    {
        return $this->numerPolisy;
    }
    /**
     * Set numerPolisy value
     * @param string $numerPolisy
     * @return \StructType\MakePayment
     */
    public function setNumerPolisy(?string $numerPolisy = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPolisy) && !is_string($numerPolisy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPolisy, true), gettype($numerPolisy)), __LINE__);
        }
        $this->numerPolisy = $numerPolisy;
        
        return $this;
    }
    /**
     * Get numerOperacjiBankowej value
     * @return string|null
     */
    public function getNumerOperacjiBankowej(): ?string
    {
        return $this->numerOperacjiBankowej;
    }
    /**
     * Set numerOperacjiBankowej value
     * @param string $numerOperacjiBankowej
     * @return \StructType\MakePayment
     */
    public function setNumerOperacjiBankowej(?string $numerOperacjiBankowej = null): self
    {
        // validation for constraint: string
        if (!is_null($numerOperacjiBankowej) && !is_string($numerOperacjiBankowej)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerOperacjiBankowej, true), gettype($numerOperacjiBankowej)), __LINE__);
        }
        $this->numerOperacjiBankowej = $numerOperacjiBankowej;
        
        return $this;
    }
    /**
     * Get typPlatnosci value
     * @return string|null
     */
    public function getTypPlatnosci(): ?string
    {
        return $this->typPlatnosci;
    }
    /**
     * Set typPlatnosci value
     * @param string $typPlatnosci
     * @return \StructType\MakePayment
     */
    public function setTypPlatnosci(?string $typPlatnosci = null): self
    {
        // validation for constraint: string
        if (!is_null($typPlatnosci) && !is_string($typPlatnosci)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typPlatnosci, true), gettype($typPlatnosci)), __LINE__);
        }
        $this->typPlatnosci = $typPlatnosci;
        
        return $this;
    }
    /**
     * Get przelewNaKonto value
     * @return string|null
     */
    public function getPrzelewNaKonto(): ?string
    {
        return $this->przelewNaKonto;
    }
    /**
     * Set przelewNaKonto value
     * @param string $przelewNaKonto
     * @return \StructType\MakePayment
     */
    public function setPrzelewNaKonto(?string $przelewNaKonto = null): self
    {
        // validation for constraint: string
        if (!is_null($przelewNaKonto) && !is_string($przelewNaKonto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($przelewNaKonto, true), gettype($przelewNaKonto)), __LINE__);
        }
        $this->przelewNaKonto = $przelewNaKonto;
        
        return $this;
    }
}
