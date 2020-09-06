<?php
class greeting {

    public static function welcome() {

        echo "Hello World!";

    }

}

// Call static method không cần khởi tạo object bằng từ khóa new
greeting::welcome();