<?php

// __FILE__ trả ra đường dẫn hiện tại trên ổ đĩa
// vd : C:\xampp\htdocs\PHP2005\ngay28\index.php
// dirname(__FILE__) trả về đường dẫn của thư mục chưa file hiện tại
define("SITE_PATH", dirname(__FILE__));
define("SITE_URL", "http://localhost/PHP2005/ngay28/");

require_once SITE_PATH."/"."connect.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<?php
$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
$stmt = $pdo->prepare('SELECT * FROM books WHERE id = ?');
$stmt->execute([$id]);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$book = $stmt->fetch();
echo "<pre>";
print_r($book);

?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Sửa sách</h1>
        </div>
        <div class="col-sm-12">
            <form name="" method="post" action="">
                <div class="form-group">
                    <label>Tên sách:</label>
                    <input type="text" class="form-control" name="book_name" value="<?php echo $book->book_name ?>">
                </div>
                <div class="form-group">
                    <label>Mô tả sách:</label>
                    <input type="text" class="form-control" name="book_intro" value="<?php echo $book->book_intro ?>">
                </div>
                <div class="form-group">
                    <label>Ảnh sách:</label>
                    <input type="text" class="form-control" name="book_image" value="<?php echo $book->book_image ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
