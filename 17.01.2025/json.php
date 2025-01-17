<?php
$json = file_get_contents('books.json');
$data = json_decode($json, true);

$result = array_filter($data, function($book_year) {
    return $book_year['year'] >= 2000;
});

header('Content-Type: application/json');
echo json_encode(array_values($result), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
