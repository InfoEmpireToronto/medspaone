<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sms extends Model
{
	protected $table = 'sms';

	public static function sendSMS($to, $message)
	{
	
		$config = \ClickSend\Configuration::getDefaultConfiguration()
	        ->setUsername('InfoEmpire')
	        ->setPassword('RostislaV21');

	    $apiInstance = new \ClickSend\Api\SMSApi(new \GuzzleHttp\Client(),$config);
		$msg = new \ClickSend\Model\SmsMessage();
		$msg->setBody($message); 
		$msg->setTo($to);
		$msg->setSource("sdk");

		// \ClickSend\Model\SmsMessageCollection | SmsMessageCollection model
		$sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
		$sms_messages->setMessages([$message]);

		try {
		    $result = $apiInstance->smsSendPost($sms_messages);
		    print_r($result->message);
		} catch (Exception $e) {
		    echo 'Exception when calling SMSApi->smsSendPost: ', $e->getMessage(), PHP_EOL;
		}

    

	}
    
}
