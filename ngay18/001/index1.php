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
        Xây dựng 1 hàm phục vụ yêu cầu như sau :
        1 tài khoản ngân hàng gửi có X số tiền với lãi xuất là Y %/1 năm
        Hãy xây dựng 1 function trả ra số tiền trong tài khoản của khách hàng
        sau Z ngày .
    </pre>

    <?php
    /**
     * @param $x là số tiền
     * @param $y là lãi xuất
     * @param $z là số ngày khách đã gửi tiền
     */
    function bankAccount($x, $y, $z) {

        // tính lãi xuất theo ngày
        $interestDay = $y/365;

        // lợi nhuận sẽ là số tiền * số ngày * lãi xuất theo ngày
        $profit = $x*$z*$interestDay;
        $money = $x + $profit;

        return $money;
    }

    $z = 365;
    $y = 0.08;
    $x = 100000000;

    $total = 0;


    $total = bankAccount($x, $y, $z);


    echo "<br> tổng số tiền trong tài khoản của bạn là : " . $total;
    ?>

</body>
</html>