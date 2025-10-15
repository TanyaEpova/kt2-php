<?php
session_start();

// Загружаем картинку-шум
$img = imagecreatefromjpeg("noise.jpg");

// Длина кода (5–6 символов)
$length = rand(5, 6);
$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
$code = "";

for ($i = 0; $i < $length; $i++) {
    $code .= $chars[rand(0, strlen($chars)-1)];
}

// Сохраняем код в сессии
$_SESSION['captcha'] = $code;

// Цвет текста (чёрный)
$color = imagecolorallocate($img, 0, 0, 0);

// Печатаем символы
for ($i = 0; $i < strlen($code); $i++) {
    $font_size = rand(18, 30);
    $x = 10 + $i * 40; // расстояние между символами
    $y = rand(30, 40); // случайное положение по Y
    imagestring($img, 5, $x, $y, $code[$i], $color);
}

// Отправляем изображение
header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);
