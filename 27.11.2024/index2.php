<?php
if (isset($_POST['colvo'])){
    setcookie('colvo', $_COOKIE['colvo']+=1, time() + (86400 * 30), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Сайт</title>
    <meta charset="utf-8">
</head>
<body>
    <p>Количество нажатий: <?php echo $_COOKIE['colvo'] ?></p>
    <form method="POST">
        <button name="colvo" <?php echo $_COOKIE['colvo']==10 ? "disabled" : "";?>>Нажми сюда!</button>
    </form>
</body>
</html>