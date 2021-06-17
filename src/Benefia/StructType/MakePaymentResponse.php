<?php

declare(strict_types=1);

namespace Benefia\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;
use Benefia\StructType\MakePaymentResult;

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
    protected ?MakePaymentResult $MakePaymentResult = null;
    /**
     * Constructor method for MakePaymentResponse
     * @uses MakePaymentResponse::setMakePaymentResult()
     * @param \StructType\MakePaymentResult $makePaymentResult
     */
    public function __construct(?MakePaymentResult $makePaymentResult = null)
    {
        $this
            ->setMakePaymentResult($makePaymentResult);
    }
    /**
     * Get MakePaymentResult value
     * @return \StructType\MakePaymentResult|null
     */
    public function getMakePaymentResult(): ?MakePaymentResult
    {
        return $this->MakePaymentResult;
    }
    /**
     * Set MakePaymentResult value
     * @param \StructType\MakePaymentResult $makePaymentResult
     * @return \StructType\MakePaymentResponse
     */
    public function setMakePaymentResult(?MakePaymentResult $makePaymentResult = null): self
    {
        $this->MakePaymentResult = $makePaymentResult;
        
        return $this;
    }
}
