<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags($_POST["name"]);
    $message = strip_tags($_POST["message"]);
    $entry = date("d/m/Y H:i") . " - " . $name . " : " . $message . "\n";

    file_put_contents("comments.txt", $entry, FILE_APPEND);
    header("Location: blog.html");
    exit();
}
?>
