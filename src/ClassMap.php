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
            'Calculate' => '\\StructType\\Calculate',
            'wellFormedXmlInstance' => '\\StructType\\WellFormedXmlInstance',
            'CalculateResponse' => '\\StructType\\CalculateResponse',
            'CalculateResult' => '\\StructType\\CalculateResult',
            'Sale' => '\\StructType\\Sale',
            'SaleResponse' => '\\StructType\\SaleResponse',
            'SaleResult' => '\\StructType\\SaleResult',
            'MakePayment' => '\\StructType\\MakePayment',
            'MakePaymentResponse' => '\\StructType\\MakePaymentResponse',
            'MakePaymentResult' => '\\StructType\\MakePaymentResult',
        ];
    }
}
