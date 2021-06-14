<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaleResponse StructType
 * @subpackage Structs
 */
class SaleResponse extends AbstractStructBase
{
    /**
     * The SaleResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SaleResult|null
     */
    protected ?\StructType\SaleResult $SaleResult = null;
    /**
     * Constructor method for SaleResponse
     * @uses SaleResponse::setSaleResult()
     * @param \StructType\SaleResult $saleResult
     */
    public function __construct(?\StructType\SaleResult $saleResult = null)
    {
        $this
            ->setSaleResult($saleResult);
    }
    /**
     * Get SaleResult value
     * @return \StructType\SaleResult|null
     */
    public function getSaleResult(): ?\StructType\SaleResult
    {
        return $this->SaleResult;
    }
    /**
     * Set SaleResult value
     * @param \StructType\SaleResult $saleResult
     * @return \StructType\SaleResponse
     */
    public function setSaleResult(?\StructType\SaleResult $saleResult = null): self
    {
        $this->SaleResult = $saleResult;
        
        return $this;
    }
}
