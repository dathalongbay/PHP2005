<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/16/2020
 * Time: 7:01 PM
 */
$e = 1;
$f = 2;


function demo($b, $c) {
    // $a được khai báo trong function
    // $b và $c là 2 đối số
    // => $a , $b , $c đều là các biến cục bộ
    // chỉ có ảnh hưởng trong hàm {}
    $a = $b + $c;

   // echo "<br> e" . $e;

    // không thể nào sử dụng được biến toàn cục bên trong hàm
    // truyền biến toàn cục vào trong hàm thông qua đối số
    return $a;
}

// $e , $f , $g là biến toàn cục vì được khai báo bên ngoài hàm

$g = demo($e, $f);
