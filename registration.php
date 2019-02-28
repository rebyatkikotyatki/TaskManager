<?php
require "db.php";
$data = $_POST;
if (isset($data['do_signup'])) {
    $errors = array();
    if(trim($data['surname'])=='') $errors[] = 'Введите фамилию';
    if(trim($data['name'])=='') $errors[] = 'Введите имя';
    if(trim($data['email'])=='') $errors[] = 'Введите email';
    if($data['password']=='') $errors[] = 'Введите пароль';
    if($data['password']!= $data['confirmPassword']) $errors[] = 'Пароли не совпадают';

    if (R::count('users', 'email = ?', array($data['email']))>0) {
        $errors[] = 'Пользователь с таким email уже есть';
    }

    if (empty($errors)) {
        $user = R::dispense('users');
        $user -> surname = $data['surname'];
        $user -> name = $data['name'];
        $user -> email = $data['email'];
        $user -> password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
        echo '<div  style="color: green; vertical-align: bottom;">успех</div>';
    } else {
        //вот тут косяк
        echo '<div  style="color: red; vertical-align: bottom;">'.array_shift($errors).'</div>';
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

    <title>Регистрация учётной записи</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/reg.css" rel="stylesheet">
<!--    <link href="css/register.css" rel="stylesheet">-->

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
            <form class="navbar-form navbar-right" action="index.php">
                <button type="submit" class="btn btn-success"'>Авторизоваться</button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>
<form action="/registration.php" method="post">
<div class="my-container container table-container content-box center">
    <div id="registrationAction" class="form-signin">
        <h1 class="h3 mb-3 py-3 font-weight-normal" id="registrationText">
		<p class="text-center">Регистрация</p>
		</h1>

        <div class="form-group row">
			  <input type="text" class="form-control" name="surname" placeholder="Фамилия" value="<?php echo @$data['surname'];?>">
        </div>


        <div class="form-group row">
			  <input type="text" class="form-control" name="name" placeholder="Имя" value="<?php echo @$data['name'];?>">
        </div>

        <div class="form-group row">

			  <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo @$data['email'];?>">
        </div>

        <div class="form-group row">

			  <input type="password" class="form-control" name="password" placeholder="Пароль" >
        </div>

        <div class="form-group row">
			  <input type="password" class="form-control" name="confirmPassword" placeholder="Подтвердите пароль">
        </div>

		  <div class="form-group row">
			<div class="col-sm-12">
			   <button class="mt-5 mb-3 btn btn-lg btn-dark btn-block" name="do_signup" id="submit" type="submit">Зарегистрироваться</button>
			</div>
		  </div>
    </div>
</div>
</form>
	
<script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
