<?php

echo "<br>" . __FILE__;
if (!function_exists("tinhchuviHCN")) {
    function tinhchuviHCN($a, $b) {
        $cv = ($a + $b)*2;
        return $cv;
    }
}

