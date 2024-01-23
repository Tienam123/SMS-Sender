<?php
namespace App;
use SoapClient;
class SmsSender
{
protected $client;
public function __construct(SoapClient $client)
{
    $this->client = $client;
}
public function send($phone,$text)
{
    return $this->client->sendMessage(['phone'=>$phone,'text' => $text]);
}
}

$client = new SoapClient('http://localhost/api/api.wsdl');
$base =  new SmsSender($client);
$base->send('+380635262474','Hello to you'); // Отправка смс-ски на сервер в котором мы указываем от кого мы отправляем данные