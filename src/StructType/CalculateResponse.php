<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateResponse StructType
 * @subpackage Structs
 */
class CalculateResponse extends AbstractStructBase
{
    /**
     * The CalculateResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CalculateResult|null
     */
    protected ?\StructType\CalculateResult $CalculateResult = null;
    /**
     * Constructor method for CalculateResponse
     * @uses CalculateResponse::setCalculateResult()
     * @param \StructType\CalculateResult $calculateResult
     */
    public function __construct(?\StructType\CalculateResult $calculateResult = null)
    {
        $this
            ->setCalculateResult($calculateResult);
    }
    /**
     * Get CalculateResult value
     * @return \StructType\CalculateResult|null
     */
    public function getCalculateResult(): ?\StructType\CalculateResult
    {
        return $this->CalculateResult;
    }
    /**
     * Set CalculateResult value
     * @param \StructType\CalculateResult $calculateResult
     * @return \StructType\CalculateResponse
     */
    public function setCalculateResult(?\StructType\CalculateResult $calculateResult = null): self
    {
        $this->CalculateResult = $calculateResult;
        
        return $this;
    }
}
