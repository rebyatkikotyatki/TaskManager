$('#btnAddTask').click(function(event) {
    let taskText = $('#task').val();
    
    if(taskText !== "") {
        $.ajax({
            type: 'POST',
            url: 'saveTask.php',
            data: {'title':taskText},
            success: function (response) {
                addTaskField(taskText, response);
                //alert(response);
            }
        });

    }
    return false;
});

uuid =()=>([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g,c=>(c^crypto.getRandomValues(new Uint8Array(1))[0]&15 >> c/4).toString(16));

function addTaskField(taskText, taskObj) {
    let id = uuid();
    $('#task').val("");
    var div = $('<div/>', {
        'class': 'input-group input-group-lg ',
        style: 'margin: 5px;',
    }).prependTo($('#dynamicFields'));

    if (typeof taskObj !== 'undefined')
    {
        div.data("task", taskObj);
    }

    var span = $('<span/>', {
        'class': 'input-group-addon taskCb'
    }).appendTo(div);
    var input = $('<input/>', {
        type: 'checkbox'
    }).appendTo(span);
    input.data("task", taskObj);

    var input2 = $('<input/>', {
        value: taskText,
        type: 'text',
        readonly: 'readonly',
        'class': 'form-control taskAdded',
        id: id
    }).appendTo(div);


    var span2 = $('<span/>', {
        'class': 'input-group-btn'
    }).appendTo(div);
    var btn = $('<button/>', {
        id: 'btnAddTask',
        'class': 'btn btn-default',
        type: 'button'
    }).appendTo(span2);
    var gl = $('<span/>', {
        'class':'glyphicon glyphicon-remove'
    }).appendTo(btn);
    //проверяем не завершена ли задача
    $.ajax({
        type: 'POST',
        url: 'loadTaskStatus.php',
        data: {
            'taskObj':$('#dstasktitle').data("task")
        },
        success: function (response) {
            //alert(response);
            if(response)
                $(div).css({"opacity":".5"});
            //alert(response);
        }
    });


    input2.click(function () {
        if (typeof taskObj !== 'undefined')
        {
            $('#dstasktitle').data("task", taskObj);
            $('#dstasktitle').data("parentTask", id);
        }
        $('#dstasktitle').val(input2.val());
        // $('#dstaskdesc').val(JSON.parse(div.data("task")).descr);
        //загружаем описание
        $.ajax({
            type: 'POST',
            url: 'loadDescr.php',
            data: {
                'title':this.value,
                'taskObj':div.data("task")
            },
            success: function (response) {
                //заполнение данными формы описания

                $('#dstaskdesc').val(JSON.parse(response).descr);
                // alert(response);
            }
        });
        //загружаем дэдлайн
        $.ajax({
            type: 'POST',
            url: 'loadDeadline.php',
            data: {
                'title':this.value,
                'taskObj':div.data("task")
            },
            success: function (response) {
                //заполнение данными формы описания
                // var date = JSON.parse(response).descr;
                var sp = response.split('-');
                $('#date').val(sp[0]+'-'+sp[1]+'-'+sp[2]);

            }
        });
        //загружаем подзадачи
        $.ajax({
            type: 'POST',
            url: 'loadSubtasks.php',
            data: {
                'taskObj':$('#dstasktitle').data("task")
            },
            success: function (response) {
                //заполнение данными формы описания
                // var date = JSON.parse(response).descr;

                var sp = response.split("-");
                for (let i = 0; i < sp.length; i++) {
                    var obj = JSON.parse(sp[i]);
                    if(obj != null)
                    // alert(obj.title);
                        addSubTask(obj.title, obj.id);
                }
                //alert(response);
            }
        });

        $('#dynamicSubTasks').empty();
    })

    input.change(function () {
        if (this.checked) {
            $(this).parent().parent().css({"opacity":".5"});
            $(this).parent().parent().appendTo('#dynamicFields');

            $.ajax({
                type: 'POST',
                url: 'updateBigBabyType.php',
                data: {
                    'taskObj':$('#dstasktitle').data("task")
                },
                success: function (response) {
                   // alert(response);

                }
            });

        } else {
            $(this).parent().parent().css({"opacity":"1"});
            $(this).parent().parent().prependTo('#dynamicFields');
            $.ajax({
                type: 'POST',
                url: 'updateSmallBabyTape.php',
                data: {
                     'taskObj':$('#dstasktitle').data("task")
                    // 'taskObj': input.data("task")
                },
                success: function (response) {
                    //alert(response);
                }
            });
        }
    })
    btn.click(function() {
        $(this).parent().parent().remove();
        $.ajax({
            type: 'POST',
            url: 'deletetask.php',
            data: {
                'taskObj':$('#dstasktitle').data("task")

            },
            success: function (response) {

            }
        });
        $('#dynamicSubTasks').empty();
    });
}
