<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sale StructType
 * @subpackage Structs
 */
class Sale extends AbstractStructBase
{
    /**
     * The wellFormedXmlInstance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\WellFormedXmlInstance|null
     */
    protected ?\StructType\WellFormedXmlInstance $wellFormedXmlInstance = null;
    /**
     * Constructor method for Sale
     * @uses Sale::setWellFormedXmlInstance()
     * @param \StructType\WellFormedXmlInstance $wellFormedXmlInstance
     */
    public function __construct(?\StructType\WellFormedXmlInstance $wellFormedXmlInstance = null)
    {
        $this
            ->setWellFormedXmlInstance($wellFormedXmlInstance);
    }
    /**
     * Get wellFormedXmlInstance value
     * @return \StructType\WellFormedXmlInstance|null
     */
    public function getWellFormedXmlInstance(): ?\StructType\WellFormedXmlInstance
    {
        return $this->wellFormedXmlInstance;
    }
    /**
     * Set wellFormedXmlInstance value
     * @param \StructType\WellFormedXmlInstance $wellFormedXmlInstance
     * @return \StructType\Sale
     */
    public function setWellFormedXmlInstance(?\StructType\WellFormedXmlInstance $wellFormedXmlInstance = null): self
    {
        $this->wellFormedXmlInstance = $wellFormedXmlInstance;
        
        return $this;
    }
}