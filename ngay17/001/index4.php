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
        Mảng đa chiều là mảng mà có các phần tử con của nó
        lại là các mảng con.
    </pre>

    <?php
    $cities = [];
    // gán các phần tử cho mảng
    $cities["hn"] = [];
    $cities["hn"]["name"] = "Hà nội";
    $cities["hn"]["gdp"] = "1 tỷ USD";
    $cities["hn"]["items"] = [];
    $cities["hn"]["items"][] = ["name" => "Hoàn kiếm", "s" => "1 km2"];
    $cities["hn"]["items"][] = ["name" => "Tây hồ", "s" => "2 km2"];
    $cities["hn"]["items"][] = ["name" => "Hoàng mai", "s" => "2.5 km2"];
    $cities["hn"]["items"][] = ["name" => "Long biên", "s" => "3.5 km2"];

    // in ra cấu trúc của mảng đa chiều
    echo "<pre>";
    print_r($cities);
    echo "</pre>";
    ?>

    <p>In ra chữ hoàn kiếm : <?php echo $cities["hn"]["items"][0]["name"] ?></p>
    <p>In ra chữ long biên : <?php echo $cities["hn"]["items"][3]["name"] ?></p>
    <p>In ra S của long biên : <?php echo $cities["hn"]["items"][3]["s"] ?></p>


</body>
</html>