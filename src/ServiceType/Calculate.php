<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Calculate ServiceType
 * @subpackage Services
 */
class Calculate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Calculate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Calculate $parameters
     * @return \StructType\CalculateResponse|bool
     */
    public function Calculate(\StructType\Calculate $parameters)
    {
        try {
            $this->setResult($resultCalculate = $this->getSoapClient()->__soapCall('Calculate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CalculateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
