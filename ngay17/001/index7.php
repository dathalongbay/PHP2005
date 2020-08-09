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
        Tạo ra 1 mảng chứa 20 số đầu tiên trong dãy số fibonacy
    </pre>

    <?php
    $fibo = [];
    for($i = 0; $i < 20; $i++) {
        if ($i == 0) {
            $fibo[] = 0;
        } elseif ($i == 1) {
            $fibo[] = 1;
        } else {
            $fibo[] = $fibo[$i - 1] + $fibo[$i - 2];
        }
    }
    echo "<pre>";
    print_r($fibo);
    echo "</pre>";
    ?>

</body>
</html>