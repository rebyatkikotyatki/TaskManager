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

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="img/bg0.jpg" width="140" height="140">
                <h2>Тут должна быть инфа о сайте</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="img/bg0.jpg" width="140" height="140">
                <h2>И тут</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="img/bg0.jpg" width="140" height="140">
                <h2>И тут</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            </div><!-- /.col-lg-4 -->
        </div>

        <h2>Что мы использовали?</h2>
        <p> Тут много текста про технологииТут много текста про технологииТут много текста про технологииТут много текста про технологииТут много текста про технологии
            Тут много текста про технологииТут много текста про технологииТут много текста про технологииТут много текста про технологии
            Тут много текста про технологииТут много текста про технологииТут много текста про технологии
            Тут много текста про технологииТут много текста про технологииТут много текста про технологииТут много текста про технологии
            Тут много текста про технологииТут много текста про технологииТут много текста про технологииТут много текста про технологииТут много текста про технологииТут много текста про технологии
            Тут много текста про технологииТут много текста про технологииТут много текста про технологии
        </p>

    </div>
</div>

</form>
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