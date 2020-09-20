<?php
define("SITE_PATH", dirname(__FILE__));
define("SITE_UPLOAD", SITE_PATH."/uploads");
define("SITE_URL", "http://localhost/PHP2005/ngay28va29/");
define("FILE_URL", SITE_URL."uploads/");

require_once SITE_PATH."/"."connect.php";

echo "<pre>";
print_r($_FILES);

$uploadFileServer = 0;


if (isset($_FILES["book_image_file"]["tmp_name"])) {

    // đường dẫn vật lý
    $target_file_name = time() . basename($_FILES["book_image_file"]["name"]);
    $target_file = SITE_UPLOAD . "/" . $target_file_name;
    // đường dẫn hình ảnh qua url
    $target_file_url = FILE_URL.$target_file_name;

    $uploadOk = 1;

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["book_image_file"]["tmp_name"]);
    if ($check === false) {
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        // kiểm tra file có sẵn hay chưa
        $uploadOk = 0;
    }
    $fileSize = $_FILES["book_image_file"]["size"];

    if ($fileSize > 500000) {
        $uploadOk = 0;
    }
    // kiểm tra đuôi file
    $imageFileTypeValid = ["png", "webp", "jpg", "jpeg"];
    if (!in_array($imageFileType, $imageFileTypeValid)) {
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        $uploadFileServer = move_uploaded_file($_FILES["book_image_file"]["tmp_name"], $target_file);
    }
}

$book_name = isset($_POST['book_name']) ? $_POST['book_name'] : "";
$book_intro = isset($_POST['book_intro']) ? $_POST['book_intro'] : "";
if ($uploadFileServer == true) {
    $book_image = $target_file_name;
} else {
    $book_image = "";
}

$sql = "INSERT INTO books (book_name, book_intro, book_image) VALUES (?,?,?)";

$stmt= $pdo->prepare($sql);

$stmt->execute([$book_name, $book_intro, $book_image]);

header("Location: ".SITE_URL."index.php");
exit();