<head>
    <title>1</title>
    <meta charset="utf-8">
</head>
<?php
$host = 'localhost'; // Хост
$db = 'school_management'; // Имя базы данных
$user = 'root';      // Имя пользователя
$password = '';      // Пароль

// Подключение к базе данных
$conn = new mysqli($host, $user, $password, $db);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
echo "Соединение успешно установлено!";
?>