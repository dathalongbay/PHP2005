<?php


class ClassicPhone {

    protected $phone_number = 123;

    protected function callPhone() {
        echo "<br>" . __METHOD__;
    }

    protected function receivePhone() {
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

// truy cập từ bên ngoài class
$sonyZ3 = new SmartPhone();

echo "<pre>";
print_r($sonyZ3);
echo "</pre>";
echo "<br> sdt : " . $sonyZ3->phone_number;
$sonyZ3->callPhone();
$sonyZ3->receivePhone();
$sonyZ3->sendEmail();