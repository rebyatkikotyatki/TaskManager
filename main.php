<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    запрет кэширования-->
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>TaskManager</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/styles.css" rel="stylesheet">




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
            <form class="navbar-form navbar-right" role="form" action="logout.php">
                <button type="submit" class="btn btn-success">Выйти</button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="lvTasks">
                <form action="" method="post" name="lvTasksForm" id="lvTasksForm">
                        <h2 class="lvTasksHeader">Список задач:</h2>
                        <div class="input-group input-group-lg taskTitle">
                            <input type="text" required class="form-control" id="task" name="newTask" placeholder="Добавьте новую задачу...">
                            <span class="input-group-btn">
                                <button id="btnAddTask" class="btn btn-info" type="submit">Add!</button>
                            </span>
                        </div>
                    <div id="dynamicFields">
<!--                        <div class="input-group input-group-lg">-->
<!--                            <span class="input-group-addon taskCb">-->
<!--                            <input type="checkbox" >-->
<!--                            </span>-->
<!--                            <input type="text" value="fff" readonly class="form-control taskAdded">-->
<!--                            <span class="input-group-btn">-->
<!--                                <button id="btnAddTask" class="btn btn-default" type="button">-->
<!--                                <span class="glyphicon glyphicon-remove"></span>-->
<!--                                </button>-->
<!--                            </span>-->
<!--                        </div> /input-group -->
                    </div>
                </form>
            </div>
        </div>
<!--        There Task Description-->
        <div class="col-md-7">
            <div class="lvDescr">
                <form action="" method="post">
                    <div class="form-group-lg">
                        <input type="text" class="form-control dsTasktitle" name="dsTaskTitle" placeholder="Название задачи">
                        <textarea class="form-control dsTasktA" name="dsTaskDs" rows="5" placeholder="Описание задачи"></textarea>
                    </div>
                    <div class="input-group-lg dpDeadline">
                        <span input-group-addon><label>Крайний срок выполнения</label></span>
                        <input type="date" class="form-control" id="date" name="date" placeholder="Дата" required>
                    </div>

                    <div class="input-group subTaskTitle">
                        <input type="text" required class="form-control" id="subtask" name="newsubtask" placeholder="Добавьте подзадачу...">
                        <span class="input-group-btn">
                                <button id="btnAddSubtask" class="btn btn-info" type="submit">Add!</button>
                            </span>
                    </div>
                    <div id="dynamicSubTasks">

                    </div>

                </form>
            </div>
        </div>

    </div>



</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/forTaskView.js"></script>
<script src="js/forDescrTask.js"></script>


</body>
</html>