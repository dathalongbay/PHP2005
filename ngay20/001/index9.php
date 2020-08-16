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
        $_POST lấy dữ liệu từ form có method="post"
        $_POST thu được 1 mảng kết hợp với
        key là tên của các thuộc tính name="" trong form
        value là giá trị của các ô input do người dùng nhập

        trong thẻ form
        nếu thuộc tính action="" thì form gửi dữ liệu đến chính url hiện tại
        action="process.php" là đích đến của dữ liệu gửi đi từ form
    </pre>

    <form name="demo" action="process1.php" method="post">
        <label>Nhập tên</label>
        <input name="ten" value="" type="text">

        <input type="submit" name="submit" value="GỬi dữ liệu">
    </form>

</body>
</html>