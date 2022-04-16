<?php

require __DIR__. '/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;

//Email
$msg = new Mensageiro(new Email());
$msg->enviarToken();
echo "<br/>";
//SMS
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

// //Email
// $msg = new Mensageiro();
// $msg->setCanal('email');
// $msg->enviarToken();
// echo "<br/>";
// //SMS
// $msg2 = new Mensageiro();
// $msg2->setCanal('sms');
// $msg2->enviarToken();
