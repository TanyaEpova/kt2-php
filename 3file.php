<?php
session_start();

$userInput = isset($_POST['captcha']) ? trim($_POST['captcha']) : "";

if ($userInput === $_SESSION['captcha']) {
    echo "Правильно ✅";
} else {
    echo "Неправильно ❌";
}
echo "<br><a href='index.php'>Назад</a>";
