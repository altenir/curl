<?php require_once('../src/Curl.php');

$curl = new Curl;
$body = $curl->get('http://httpbin.org/get', ['q'=> 'curl', 'v'=> '1.0']);

var_dump($body);