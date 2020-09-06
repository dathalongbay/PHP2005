<?php


class ClassicPhone {

    protected $phone_number = 123;

    protected function callPhone() {
        echo "<br>" . __METHOD__;
    }

    protected function receivePhone() {
        echo "<br>" . __METHOD__;
    }

    public function abc(){
        $this->callPhone();
    }

}

class SmartPhone extends ClassicPhone{

    /**
     * thuộc tính và phương thức mà protected
     * chỉ có thể truy cập được từ bên trong class cha
     * hoặc chỉ có thể truy cập được từ bên trong class con
     * @var string
     */


    public $ip = "127.0.0.1";

    public function sendEmail() {
        echo "<br>" . __METHOD__;
    }

    public function playGame() {
        echo "<br>" . __METHOD__;
    }

    public function getPhoneNumber(){
        return $this->phone_number;
    }


    public function newCallPhone() {
        // bên trong class con đang kế thừa
        $this->callPhone();
    }

    public function newReceivePhone() {
        $this->receivePhone();
    }

}

// truy cập từ bên ngoài class
$sonyZ3 = new SmartPhone();

echo "<pre>";
print_r($sonyZ3);
echo "</pre>";
echo "<br> sdt : " . $sonyZ3->getPhoneNumber();
$sonyZ3->newCallPhone();
$sonyZ3->newReceivePhone();
$sonyZ3->sendEmail();