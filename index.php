<?php
require "db.php";

$data = $_POST;
if (isset($data['do_login'])) {
    $errors = array();
    $user = R::findOne('users', 'email=?', array($data['email']
    ));
    if ($user) {
        if (password_verify($data['password'], $user->password)) {
            //логиним пользователя
            $_SESSION['logged_user'] = $user;
            //перенаправление на главную страницу
            echo '<meta http-equiv="refresh" content="0; url=main.php">';

        } else {
            $errors[] = 'Неправильно введен пароль!';
        }
    } else {
        $errors[] = 'Пользователь с таким email не найден';
    }
    if (!empty($errors)) {

        echo '<div  style="color: red; vertical-align: bottom;">'.array_shift($errors).'</div><hr>';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Вход в учётную запись</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">


</head>

<body>

<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Task manager</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#about">About</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="registration.php">
                <button type="submit" class="btn btn-success"'>Регистрация</button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>

<form action="index.php" method="post">
<div class="my-container container table-container content-box center">
    <div id="signinAction" class="form-signin">
        <h1 class="h3 mb-3 py-3 font-weight-normal" id="signinText">Вход в учётную запись</h1>
		<div class="form-group row">
			  <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
		  </div>
		  <div class="form-group row">
			  <input type="password" class="form-control" name="password" placeholder="Пароль" required/>
                  <button class="mt-5 mb-3 btn btn-lg btn-dark btn-block" name="do_login" type="submit">Войти</button>
		  </div>
    </div>
</div>
</form>

<script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
