<?php
function sendMail(): void
{
    $hasLogin = isset($_GET["login"]) && $_GET["login"] != "";

    if ($hasLogin) {
        $to = "test@gmail.com";
        $subject = "hw20_04_get";
        $charset = "utf-8";
        $headerss = "Content-type: text/html; charset=$charset\r\n";
        $headerss .= "MIME-Version: 1.0\r\n";
        $headerss .= "Date: " . date('D, d M Y h:i:s O') . "\r\n";
        $msg = "login: " . $_GET["login"] . "\n";
        $msg .= "Comment: " . $_GET["comment"] . "\n";
        mail($to, $subject, $msg, $headerss);
    }
}

function printMsg(): void
{
    echo "<h2>Сообщение успешно отправлено</h2>";
}

