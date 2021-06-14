<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Make ServiceType
 * @subpackage Services
 */
class Make extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named MakePayment
     * Meta information extracted from the WSDL
     * - documentation: Dokonuje zaksięgowania wpłat na podanej polisie. Obsługuję przyjęcie gotówki i odroczoną płatność przelewem. Dodatkowo, w przypadku pierwszej raty, aktywuje polisę. Wejście: Parametr 'numerPolisy' określa numer polisy.
     * Parametr 'oplata' określa kwotę opłaty. Parametr 'dataWymagalnosciRaty' określa datę opłacenia raty. Parametr 'numerOperacjiBankowej' określa numer operacji bankowej. Parametr 'typPlatnosci' przyjmuje wartości:"Gotowka", "Przelew". Gdy nie
     * jest podany, przyjmowana jest Wartośc domyslna "Gotowka". Parametr 'przelewNaKonto' przyjmuje wartości: "Benefia", "SprzedawcaPodmiot". Jest wymagany przy 'typPlatnosci' = "Gotowka", w innym wypadku nie występuje. Wyjście: Potwierdzenie
     * opłacenia z ewentualnym numerem konta dla przelewu. W przypadku niepowodzenia operacji zwracany jest kod oraz opis błędu.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MakePayment $parameters
     * @return \StructType\MakePaymentResponse|bool
     */
    public function MakePayment(\StructType\MakePayment $parameters)
    {
        try {
            $this->setResult($resultMakePayment = $this->getSoapClient()->__soapCall('MakePayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMakePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\MakePaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
