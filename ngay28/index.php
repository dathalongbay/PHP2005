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
$stmt = $pdo->query('SELECT * FROM books');
$stmt->setFetchMode(PDO::FETCH_OBJ);
$books = $stmt->fetchAll();
echo "<pre>";
print_r($books);

?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Liệt kê sách</h1>
                <a href="<?php echo SITE_URL."create.php" ?>" class="btn btn-success">Thêm sách</a>
            </div>
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sách</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($books as $book) : ?>
                        <tr>
                            <td><?php echo $book->id ?></td>
                            <td><?php echo $book->book_name ?></td>
                            <td>
                                <a href="<?php echo SITE_URL."edit.php?id=".$book->id ?>" class="btn btn-warning">Sửa sách</a>
                                <a href="<?php echo SITE_URL."delete.php?id=".$book->id ?>" class="btn btn-danger">Xóa sách</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
