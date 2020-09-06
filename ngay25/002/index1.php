<?php


class ClassicPhone {

    public $phone_number = 123;

    public function callPhone() {
        echo "<br>" . __METHOD__;
    }

    public function receivePhone() {
        echo "<br>" . __METHOD__;
    }

}

class SmartPhone extends ClassicPhone{


    public $ip = "127.0.0.1";

    public function sendEmail() {
        echo "<br>" . __METHOD__;
    }

    public function playGame() {
        echo "<br>" . __METHOD__;
    }

}

$sonyZ3 = new SmartPhone();

echo "<pre>";
print_r($sonyZ3);
echo "</pre>";
$sonyZ3->callPhone();
$sonyZ3->receivePhone();
$sonyZ3->sendEmail();