<?php
define("SITE_PATH", dirname(__FILE__));
define("SITE_UPLOAD", SITE_PATH."/uploads");
define("SITE_URL", "http://localhost/PHP2005/ngay28va29/");
define("FILE_URL", SITE_URL."uploads/");

require_once SITE_PATH."/"."connect.php";

$book_name = isset($_POST['book_name']) ? $_POST['book_name'] : "";
$book_intro = isset($_POST['book_intro']) ? $_POST['book_intro'] : "";
$book_image = isset($_POST['book_image']) ? $_POST['book_image'] : "";

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
if ($id > 0) {
    $sql = "UPDATE books SET book_name = ?, book_intro = ?, book_image = ? WHERE id = ?";

    $stmt= $pdo->prepare($sql);

    $stmt->execute([$book_name, $book_intro, $book_image, $id]);

    header("Location: ".SITE_URL."index.php");
    exit();
}

