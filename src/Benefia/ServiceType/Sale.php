<?php

declare(strict_types=1);

namespace Benefia\ServiceType;

use Benefia\StructType\Sale as StructTypeSale;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Sale ServiceType
 * @subpackage Services
 */
class Sale extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Sale
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param Sale $parameters
     * @return SaleResponse|bool
     */
    public function Sale(StructTypeSale $parameters)
    {
        try {
            $this->setResult($resultSale = $this->getSoapClient()->__soapCall('Sale', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSale;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return SaleResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
