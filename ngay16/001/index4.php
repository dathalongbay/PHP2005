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

    <h1>yêu cầu 1 in ra chuỗi chào 'hà nội' ( trong nháy đơn )</h1>
    <p>Cách 1 dùng nháy kép chứa nháy đơn :</p>
    <?php echo "<div>chào 'hà nội'</div>"; ?>
    <p>Cách 2 : dùng nháy đơn chứa chuỗi nhưng thêm \ trước nháy đơn</p>
    <?php echo '<div>chào \'hà nội\'</div>'; ?>

    <h1>yêu cầu 1 in ra chuỗi chào "hà nội"</h1>

    <p>cách 1 : dùng nháy đơn chứa nháy kép</p>
    <?php echo '<div>chào "hà nội"</div>'; ?>
    <p>cách 2 : dùng nháy kép chứa nháy kép + thêm dấu \ trước nháy kép trong chuỗi</p>
    <?php echo "<div>chào \"hà nội\"</div>"; ?>



</body>
</html>