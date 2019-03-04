<?php

$data = $_POST;
if (isset($data['do_login'])) {
    echo '<meta http-equiv="refresh" content="0; url=main.php">';

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>О нас</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
<!--    <link href="css/register.css" rel="stylesheet">-->

</head>
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
                <li><a href="about.php">About</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="index.php">
                <button type="submit" class="btn btn-success"'>Авторизоваться</button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div id="about">
    <div class="container marketing">
        <div id="a1">
            <div class="text-center">
                <h2>Как все успеть?</h2>
                <p>Менеджеры задач всегда остаются актуальными помощниками в наших ежедневных делах, будь то работа над проектом или покупка продуктов к ужину.</p>
                <p>Жизнь может казаться ошеломительной, но ей не обязательно такой быть. TaskManager позволяет отслеживать все задачи в одном месте, чтобы вам было проще выполнять задуманное, сохраняя душевный покой. </p>
            </div>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="img/bg0.jpg" width="140" height="140">
                <h2>Невозможно забыть</h2>
                <p>Сервис позволяет максимально подробно описать вашу задачу, установить срок ее реализации, а также выделить конкретные подзадачи</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="img/bg0.jpg" width="140" height="140">
                <h2>Удобный интерфейс</h2>
                <p>Интерфейс сайта должен обеспечивает наглядное, интуитивно понятное представление размещенной на нем информации, быстрый и логичный переход к разделам и страницам.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="img/bg0.jpg" width="140" height="140">
                <h2>Бесплатно!</h2>
                <p>Только сейчас вы можете стать частью нашей команды совершенно бесплатно! Оптимизируйте свою жизнь и не платите за подписку!</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <p class="text-muted">Спроектирован и построен авторами: <a href="https://www.instagram.com/igorgilew/""><i class="fa fa-instagram" aria-hidden="true"></i> </a> и <a href="https://www.instagram.com/frolovaek/""><i class="fa fa-instagram" aria-hidden="true"></i> </a> </p>
        <p class="text-muted">Поддержкой занимается: <a href="https://vk.com/ilya_zhuromskiy""><i class="fa fa-vk" aria-hidden="true"></i> </a> </p>
        <p class="text-muted">  ПГНИУ, 2019 </p>
    </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>