<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://wstest3.benefia.pl/ws_pakiety/Pakiety.asmx?WSDL',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://wstest3.benefia.pl/ws_pakiety/Pakiety.asmx?WSDL',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Calculate ServiceType
 */
$calculate = new \ServiceType\Calculate($options);
/**
 * Sample call for Calculate operation/method
 */
if ($calculate->Calculate(new \StructType\Calculate()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Samples for Sale ServiceType
 */
$sale = new \ServiceType\Sale($options);
/**
 * Sample call for Sale operation/method
 */
if ($sale->Sale(new \StructType\Sale()) !== false) {
    print_r($sale->getResult());
} else {
    print_r($sale->getLastError());
}
/**
 * Samples for Make ServiceType
 */
$make = new \ServiceType\Make($options);
/**
 * Sample call for MakePayment operation/method
 */
if ($make->MakePayment(new \StructType\MakePayment()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
