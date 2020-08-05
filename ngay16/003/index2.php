<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
$cities = ["hà nội", "bắc ninh", "bắc giang", "hà nam"];
echo "<pre>";
print_r($cities);
echo "</pre>";
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Key</th>
        <th scope="col">tên tỉnh</th>

    </tr>
    </thead>
    <tbody>
        <?php
        foreach($cities as $keyCities => $city) {
            echo "<tr>
                <th scope=\"row\">$keyCities</th>
                <td>$city</td>
            </tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>