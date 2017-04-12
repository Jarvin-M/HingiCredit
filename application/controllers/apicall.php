<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$url = '';
$api_key = '';


$data = array(
    'Inputs'=> array(
        '*** NAME OF WEB SERVICE INPUT ***'=> array(
            'ColumnNames' => ['Client_ID'],
            'Values' => [ [ '1097' ],  ]
        ),
    ),
        'GlobalParameters' => new StdClass(),
);

$headers=array('Content-Type: application/json', 'Authorization: Bearer '.$api_key, 'Accept: application/json');
$body = json_encode($data);

$curl = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response  = json_decode(curl_exec($curl), true);

curl_close($ch);

var_dump ($response):

?>