<?php

   require_once 'vendor/autoload.php';

    //MercadoPago\SDK::setClientId("TEST-7f2399bb-f74f-49e4-ba23-dcaef398f89f");
    //MercadoPago\SDK::setClientSecret("TEST-7833175396216348-063014-f59c3c627c0886ccf6a7a86e9e8911ca-574087313");
    MercadoPago\SDK::setAccessToken("TEST-47c3aaa1-c916-4dea-899b-436d6c18669b","TEST-5732551096808997-070101-c41482ef61c7eda5d806c443eba74b98-317162407");
    echo ("1");
    $payment = new MercadoPago\Payment();
    echo("2");
    $payment->transaction_amount = 141;
    echo("3");
    $payment->token = "YOUR_CARD_TOKEN";
    echo("4");
    $payment->description = "Ergonomic Silk Shirt";
    echo("5");
    $payment->installments = 1;
    echo("6");
    $payment->payment_method_id = "visa";
    echo("7");
    $payment->payer = array(
      "email" => "larue.nienow@hotmail.com"
    );
    echo("8");
    $payment->save();
    echo("9");
    echo "El status es :".$payment->status;


?>