<?php
session_start();

$time = date('j F Y h:i:s');
setcookie("lastVisitTime", $time, time() + 3600);

$_SESSION["currentTime"] = $time;

// количество секунд с момента входа на сайт
function getSeconds(): int
{
    if (isset($_SESSION["currentTime"]) && isset($_COOKIE["lastVisitTime"])) {
        $time1 = $_SESSION["currentTime"];
        $time2 = $_COOKIE["lastVisitTime"];
        return strtotime($time1) - strtotime($time2);// разница в секундах
    } else {
        return 0;
    }
}


if (isset($_GET["login"])) {
    setcookie("login", $_GET["login"], time() + 3600);
}

if (!isset($_COOKIE["counter"])) $_COOKIE["counter"] = 0;
$_COOKIE["counter"]++;
setcookie("counter", $_COOKIE["counter"], 0x6FFFFFFF);

function printLastVisitTime(): void
{
    if (isset($_GET["login"]) && $_GET["login"] != '' && isset($_COOKIE["lastVisitTime"])) {
        echo $_GET["login"] . ", your last visit time at " . $_COOKIE["lastVisitTime"];
    }
}

?>

<div>
    <h2>Cookie. Задание 2.</h2>
    <h3>
        Создайте куки с логином посетителя и временем последнего захода.
        Куки должны хранится максимум 1 час.
        Примечание: возможно понадобится форма для ввода логина.
    </h3>
</div>
<div>
    <form action="">
        <label>Login
            <input type="text" name="login">
        </label>
        <input type="submit">
    </form>
</div>
<div>
    <h4 style="color: red">
        <?php printLastVisitTime(); ?>
    </h4>
</div>
<hr>
<div>
    <h2>Cookie. Задание 3.</h2>
    <h3>
        Сделайте счетчик посещения сайта посетителем.
        Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'
    </h3>
    <div>
        <h3 style="color: red">
            <?php echo "Вы посетили наш сайт {$_COOKIE["counter"]} раз!" ?>
        </h3>
    </div>

</div>
<hr>
<div>
    <h2>Session. Задание 2.</h2>
    <h3>
        Запишите в сессию время захода пользователя на сайт.
        При обновлении страницы выводите сохраненное время на экран.
    </h3>
</div>
<div>
    <h4 style="color: red">
        <?php echo "Your visit time at " . $_SESSION["currentTime"] ?>
    </h4>
</div>
<hr>
<div>
    <h2>Session. Задание 3.</h2>
    <h3>
        Запишите в сессию время захода пользователя на сайт.
        При обновлении страницы выводите сохраненное время на экран.
    </h3>
</div>
<div>
    <h4 style="color: red">
        <?php echo getSeconds() . " seconds have passed since you entered the site" ?>
    </h4>
</div>
<hr>
