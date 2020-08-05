<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <pre>
        sử dụng cú pháp if ... else if ... else
        in ra thứ tiếng anh dựa vào các số từ 1 đến 7
        toán tử so sánh bằng ==
    </pre>

<?php
$thu = 6;
if ($thu == 1) {
    echo "Sunday";
}elseif ($thu == 2) {
    echo "Monday";
} elseif ($thu == 3) {
    echo "Tuesday";
} elseif ($thu == 4) {
    echo "Wednesday";
} elseif ($thu == 5) {
    echo "Thursday";
} elseif ($thu == 6) {
    echo "Friday";
} elseif ($thu == 7) {
    echo "Saturday";
} else {
    echo "Không";
} ?>
</body>
</html>