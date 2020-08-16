<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/16/2020
 * Time: 7:05 PM
 */

// cách sử dụng biến toàn cục bên trong function
// $GLOBAL

// $e , $f , $g là biến toàn cục vì được khai báo bên ngoài hàm
$e = 1;
$f = 2;


function demo($b, $c) {
    // $a được khai báo trong function
    // $b và $c là 2 đối số
    // => $a , $b , $c đều là các biến cục bộ
    // chỉ có ảnh hưởng trong hàm {}
    $a = $b + $c;

    // không thể nào sử dụng được biến toàn cục bên trong hàm
    // truyền biến toàn cục vào trong hàm thông qua đối số

    // in toàn cục
    echo "<br> trong hàm : ";
    echo "<br> e là " . $GLOBALS["e"];
    echo "<br> f là " . $GLOBALS["f"];

    // thay đổi giá tri của biến toàn cục
    $GLOBALS["e"] = 5;

    return $a;
}


$g = demo($e, $f);

echo "<br> e sau khi thay đôi : " . $e;