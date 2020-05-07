<?php
$text = trim($_POST["text"]);
if (empty($text)) {
    exit("must provide a text");
}

$text = strip_tags($text);

file_put_contents("lines.txt", $text, FILE_APPEND);

$texts = file_get_contents("texts.txt");
echo htmlspecialchars($texts);
