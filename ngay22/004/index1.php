<?php
/**
 * Created by PhpStorm.
 * User: dathalongbay
 * Date: 8/23/2020
 * Time: 8:43 AM
 */

$str = "nanajjjj";

//$pattern = "/^([a-zA-Z0-9]{3,})@[a-zA-Z0-9]{3,}\..+/i";
$pattern = "/(na{2})jjjj/i";

echo preg_match_all($pattern, $str, $matches); // Outputs 4

echo "<pre>";
print_r($matches);
echo "</pre>";