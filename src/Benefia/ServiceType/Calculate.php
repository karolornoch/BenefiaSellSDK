<?php

declare(strict_types=1);

namespace Benefia\ServiceType;

use Benefia\StructType\Calculate as StructTypeCalculate;
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
     * @param Calculate $parameters
     * @return CalculateResponse|bool
     */
    public function Calculate(StructTypeCalculate $parameters)
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
     * @return CalculateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
