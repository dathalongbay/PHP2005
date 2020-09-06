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

trait Computer {
    public $ip = "127.0.0.1";

    public function office() {
        echo "<br> soạn thảo văn bản";
    }

    public function email() {
        echo "<br> gửi và nhận email";
    }

    public function playGame() {
        echo "<br> chơi gam";
    }
}

trait Radio {

    public function listenRadio() {
        echo "<br> nghe đài radio";
    }
}

trait GpsMachine {

    public function gps() {
        echo "<br> định vị vị trí";
    }
}

class SmartPhone extends ClassicPhone{

    // sử dụng tất các thuộc tính và method từ máy tính, radio và máy GPS
    // nạp trait vào để class hiện tại nó kế thừa trait đấy
    // đa kế thừa
    use Computer, Radio, GpsMachine;

}

$sonyZ3 = new SmartPhone();
$sonyZ3->office();
$sonyZ3->listenRadio();
$sonyZ3->gps();
