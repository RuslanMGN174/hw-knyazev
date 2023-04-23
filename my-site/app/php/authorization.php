<?php

$usersArray = ["John" => md5("123"), "Bill" => md5("234")];

if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST["login"];
    $pass = md5($_POST["password"]);
    if (array_key_exists($login, $usersArray) && $usersArray[$login] == $pass) {
        $_POST["password"] = $pass;
        header('Location: ' . 'sayHello.php?login=' . $login);
//        exit();
    } else {
        echo "<b>Логин или пароль указаны не верно</b>";
        echo "<br>";
        echo "<br>";
    }
}
?>

<form action="" method="post">

    <div class="form-outline mb-4">
        <input type="text" id="form2Example1" class="form-control" name="login"/>
        <label class="form-label" for="form2Example1">Login</label>
    </div>

    <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name="password"/>
        <label class="form-label" for="form2Example2">Password</label>
    </div>

    <div class="row mb-4">

        <div class="col">
            <a href="#!">Forgot password?</a>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    <div class="text-center">
        <p>Not a member? <a href="registration.php">Register</a></p>
    </div>
</form>