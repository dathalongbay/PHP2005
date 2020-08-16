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
        phòng đơn 1 ngày : 200k
        phòng đối 1 ngày : 400k
        phòng VIP 1 ngày : 1.000k
        + giặt là + 1 triệu
        + ăn sáng + 500k
        + taxi + 1.000 k
    </pre>

    <form name="demo" action="calc.php" method="post">

        <div>
            <label>Loại phòng</label>
            <select name="roomtype">
                <option value="1">Phòng đơn</option>
                <option value="2">Phòng đôi</option>
                <option value="3">Phòng VIP</option>
            </select>
        </div>

        <div>
            <label>Số ngày thuê</label>
            <input type="number" name="days" value="">
        </div>

        <div>
            Dịch vụ cộng thêm
            <input type="checkbox" name="service_gl" value="gl">
            Giặt là
            <br>
            <input type="checkbox" name="service_as" value="as">
            Ăn sáng
            <input type="checkbox" name="service_tx" value="tx">
            Taxi
        </div>

        <input type="submit" name="submit" value="Đặt phòng">
    </form>

</body>
</html>