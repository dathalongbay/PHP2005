<?php
define("SITE_PATH", dirname(__FILE__));
define("SITE_UPLOAD", SITE_PATH."/uploads");
define("SITE_URL", "http://localhost/PHP2005/ngay28va29/");
define("FILE_URL", SITE_URL."uploads/");


require_once SITE_PATH."/"."connect.php";

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
if ($id > 0) {
    //
    $sql = "DELETE FROM books WHERE id = ?";

    $stmt= $pdo->prepare($sql);

    $stmt->execute([$id]);

    header("Location: ".SITE_URL."index.php");
    exit();
}

