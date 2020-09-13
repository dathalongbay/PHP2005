<?php

try {

    echo "Kết nối CSDL";

    // máy chu CSDL qua tai
    throw new Exception("Khong the ket noi den may chu CSDL");

}catch (Exception $e) {

    // cach xu ly 1 : in ra 1 thong bao loi

    // cash xu ly 2 : ket noi den CSDL du phong

    // cach xu ly 3 : chuyen huong den trang web du phong
    header("Location: index7.php");
    exit;
}

