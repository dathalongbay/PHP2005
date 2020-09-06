<?php


class ClassicPhone {

    private $phone_number = 123;

    private function callPhone() {
        echo "<br>" . __METHOD__;
    }

    private function receivePhone() {
        echo "<br>" . __METHOD__;
    }

    public function abcCallPhone(){
        // gọi đến private trực tiếp từ bản thân bên trong class đó
        $this->callPhone();
    }

    public function abcReceivePhone(){
        // gọi đến private trực tiếp từ bản thân bên trong class đó
        $this->receivePhone();
    }

    public function abcGetPhoneNumber() {
        return $this->phone_number;
    }
}


/**
 * chú ý với thuộc tính hay phương thức private
 * thì không thể gọi trực tiếp từ bên ngoài class
 * và cũng không thể gọi từ bên trong class con kế thừa
 *
 * => chỉ có thể gọi được trực tiếp bên trong class đó
 */