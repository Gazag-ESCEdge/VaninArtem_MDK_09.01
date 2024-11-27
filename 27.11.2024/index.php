<?php
if (isset($_POST['theme'])) {
    setcookie('theme', $_POST['theme'], time() + (86400 * 30), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
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
    <form method="post">
        <button name="theme" value="black">Тёмная тема</button>
        <button name="theme" value="white">Светлая тема</button>
    </form>
</body>
</html>
