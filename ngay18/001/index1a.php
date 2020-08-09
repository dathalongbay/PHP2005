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




    // hàm isset() hàm kiểm tra xem 1 biến có tồn tại hay không ?
    // $_POST là 1 mảng kết hợp
    // với các key là giá trị thuộc name="" trong các thẻ input
    // value của mảng là giá trị của ô input
    if (isset($_POST) && count($_POST)) {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        
        $money = $_POST["money"];
        $interest = $_POST["interest"];
        $day = $_POST["day"];

        $total = 0;

        $total = bankAccount($money, $interest, $day);

        echo "<div style='color:red'>tổng số tiền trong tài khoản của bạn là : $total</div> ";
    }

    ?>

    <form name="bank" method="post" action="">

        <div>
            <label>Số tiền</label>
            <input name="money" value="" type="text">
        </div>

        <div>
            <label>Lãi xuất</label>
            <input name="interest" value="" type="text">
        </div>

        <div>
            <label>Số ngày đã gửi</label>
            <input name="day" value="" type="text">
        </div>


        <input type="submit" name="submit" value="Tính số tiền trong bank">
    </form>

</body>
</html>