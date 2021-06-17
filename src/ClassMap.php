<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'Calculate' => '\\Benefia\\StructType\\Calculate',
            'wellFormedXmlInstance' => '\\Benefia\\StructType\\WellFormedXmlInstance',
            'CalculateResponse' => '\\Benefia\\StructType\\CalculateResponse',
            'CalculateResult' => '\\Benefia\\StructType\\CalculateResult',
            'Sale' => '\\Benefia\\StructType\\Sale',
            'SaleResponse' => '\\Benefia\\StructType\\SaleResponse',
            'SaleResult' => '\\Benefia\\StructType\\SaleResult',
            'MakePayment' => '\\Benefia\\StructType\\MakePayment',
            'MakePaymentResponse' => '\\Benefia\\StructType\\MakePaymentResponse',
            'MakePaymentResult' => '\\Benefia\\StructType\\MakePaymentResult',
        ];
    }
}
