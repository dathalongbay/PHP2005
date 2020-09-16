<?php
define("SITE_PATH", dirname(__FILE__));
define("SITE_URL", "http://localhost/PHP2005/ngay28/");

require_once SITE_PATH."/"."connect.php";

$book_name = isset($_POST['book_name']) ? $_POST['book_name'] : "";
$book_intro = isset($_POST['book_intro']) ? $_POST['book_intro'] : "";
$book_image = isset($_POST['book_image']) ? $_POST['book_image'] : "";

$sql = "INSERT INTO books (book_name, book_intro, book_image) VALUES (?,?,?)";

$stmt= $pdo->prepare($sql);

$stmt->execute([$book_name, $book_intro, $book_image]);

header("Location: ".SITE_URL."index.php");
exit();