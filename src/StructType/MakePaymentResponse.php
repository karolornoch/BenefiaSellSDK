<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakePaymentResponse StructType
 * @subpackage Structs
 */
class MakePaymentResponse extends AbstractStructBase
{
    /**
     * The MakePaymentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MakePaymentResult|null
     */
    protected ?\StructType\MakePaymentResult $MakePaymentResult = null;
    /**
     * Constructor method for MakePaymentResponse
     * @uses MakePaymentResponse::setMakePaymentResult()
     * @param \StructType\MakePaymentResult $makePaymentResult
     */
    public function __construct(?\StructType\MakePaymentResult $makePaymentResult = null)
    {
        $this
            ->setMakePaymentResult($makePaymentResult);
    }
    /**
     * Get MakePaymentResult value
     * @return \StructType\MakePaymentResult|null
     */
    public function getMakePaymentResult(): ?\StructType\MakePaymentResult
    {
        return $this->MakePaymentResult;
    }
    /**
     * Set MakePaymentResult value
     * @param \StructType\MakePaymentResult $makePaymentResult
     * @return \StructType\MakePaymentResponse
     */
    public function setMakePaymentResult(?\StructType\MakePaymentResult $makePaymentResult = null): self
    {
        $this->MakePaymentResult = $makePaymentResult;
        
        return $this;
    }
}
