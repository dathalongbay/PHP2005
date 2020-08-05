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

    <p>lệnh echo với nháy kép</p>
    <?php echo "<p>chào hà nội</p>"; ?>

    <p>lệnh echo với nháy đơn</p>
    <?php echo '<p>chào hà nội</p>'; ?>

    <p>lệnh echo với ký tự escape</p>
    <p>in ra màn hình chữ : chào "hà nội"</p>
    <pre>
        php khi sử dụng echo để in chuỗi phải sử "" nháy kép
        hoặc nháy đơn '' chứa chuỗi
        - nếu muốn in nháy đơn hay nháp kép bên trong chuỗi
        thì php phải phân biệt được nháy kép nào là nháy kép chứa chuỗi
        và nháy kép nào là nháy kép bên trong chuỗi
        sử dụng ký tự \ trước nháy kép
    </pre>
    <?php echo "<p>chào \"hà nội\"</p>"; ?>

</body>
</html>