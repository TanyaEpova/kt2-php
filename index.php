<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form action="check.php" method="post">
        <p><img src="captcha.php" alt="CAPTCHA"></p>
        <p>Введите строку: <input type="text" name="captcha"></p>
        <p><input type="submit" value="OK"></p>
    </form>
</body>
</html>
