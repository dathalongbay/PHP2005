<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

</head>
<body>

    <?php
    $cars = [];
    // gán phần tử số 1
    $cars[] = ["name" => "ford", "stock" => 20, "sold" => 8];
    $cars[] = ["name" => "toyota", "stock" => 18, "sold" => 9];
    $cars[] = ["name" => "vinfast", "stock" => 4, "sold" => 1];

    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    ?>

<p>Muốn in ra chữ ford : <?php echo $cars[0]["name"] ?></p>
<p>Muốn in ra chữ vinfast : <?php echo $cars[2]["name"] ?></p>
<p>Muốn in ra số đã bán của vinfast : <?php echo $cars[2]["sold"] ?></p>
<table class="table">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">tên ô tô</th>
        <th scope="col">tồn kho</th>
        <th scope="col">đã bán</th>

    </tr>
    </thead>
    <tbody>
        <?php
        $count = 1;
        foreach($cars as $keyCar => $car) {
            ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $car["name"] ?></td>
                <td><?php echo $car["stock"] ?></td>
                <td><?php echo $car["sold"] ?></td>
            </tr>
        <?php $count++; ?>
        <?php } ?>
    </tbody>
</table>


</body>
</html>