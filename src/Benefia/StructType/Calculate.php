<?php

declare(strict_types=1);

namespace Benefia\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;
use Benefia\StructType\WellFormedXmlInstance;

/**
 * This class stands for Calculate StructType
 * @subpackage Structs
 */
class Calculate extends AbstractStructBase
{
    /**
     * The wellFormedXmlInstance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\WellFormedXmlInstance|null
     */
    protected ?WellFormedXmlInstance $wellFormedXmlInstance = null;
    /**
     * Constructor method for Calculate
     * @uses Calculate::setWellFormedXmlInstance()
     * @param \StructType\WellFormedXmlInstance $wellFormedXmlInstance
     */
    public function __construct(?WellFormedXmlInstance $wellFormedXmlInstance = null)
    {
        $this
            ->setWellFormedXmlInstance($wellFormedXmlInstance);
    }
    /**
     * Get wellFormedXmlInstance value
     * @return \StructType\WellFormedXmlInstance|null
     */
    public function getWellFormedXmlInstance(): ?WellFormedXmlInstance
    {
        return $this->wellFormedXmlInstance;
    }
    /**
     * Set wellFormedXmlInstance value
     * @param \StructType\WellFormedXmlInstance $wellFormedXmlInstance
     * @return \StructType\Calculate
     */
    public function setWellFormedXmlInstance(?WellFormedXmlInstance $wellFormedXmlInstance = null): self
    {
        $this->wellFormedXmlInstance = $wellFormedXmlInstance;
        
        return $this;
    }
}
