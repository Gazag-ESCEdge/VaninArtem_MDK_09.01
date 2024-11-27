<?php
if (isset($_POST['theme'])) {
    setcookie('theme', $_POST['theme'], time() + (86400 * 30), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    if ($_POST['theme'] == 'del') {
        setcookie("theme", "", [
            "expires" => time() - 3600, // Удаление
            "path" => "/"
        ]);
    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Сайт</title>
    <meta charset="utf-8">
    <style>
        body {
            background-color: <?php echo $_COOKIE['theme']; ?>;
        }
    </style>
</head>
<body>
    <form method="POST">
        <button name="theme" value="black">Тёмная тема</button>
        <button name="theme" value="red">Светлая тема</button>
        <button name="theme" value="del">Удалить cookie</button>
    </form>
</body>
</html>
