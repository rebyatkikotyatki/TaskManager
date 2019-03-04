$('#btnAddSubtask').click(function(event) {
    let subTaskText = $('#subtask').val();
    if(subTaskText !== "")
    {
        $.ajax({
            type: 'POST',
            url: 'saveSubTask.php',
            data: {'title':subTaskText,
                'taskObj': $('#dstasktitle').data("task")
            },
            success: function (response) {
                addSubTask(subTaskText, response);
                //alert(response);
            }
        });
    }
    return false;
});

function addSubTask(subtaskText, subtaskId) {
    let id = uuid();
    $('#subtask').val("");
    var div = $('<div/>', {
        'class': 'input-group addedSubtask',
        style: 'margin: 8px;',
    }).prependTo($('#dynamicSubTasks'));
//readonly: 'readonly',
    var input2 = $('<input/>', {
        value: subtaskText,
        type: 'text',

        'class': 'form-control taskAdded',
        id: id
    }).appendTo(div);
    var span2 = $('<span/>', {
        'class': 'input-group-btn'
    }).appendTo(div);
    var btn = $('<button/>', {
        id: 'btnDelTask',
        'class': 'btn btn-default',
        type: 'button'
    }).appendTo(span2);
    var gl = $('<span/>', {
        'class':'glyphicon glyphicon-remove'
    }).appendTo(btn);
    btn.click(function() {
        $(this).parent().parent().remove();
        $.ajax({
            type: 'POST',
            url: 'deleteSubtask.php',
            data: {
                'subtaskid': subtaskId
            },
            success: function (response) {
                // $('#dstasktitle').data("parentTask").val($('#dstasktitle').val());
                //alert(response);
                //alert(response);
            }
        });
    });
    $(input2).change(function () {
        $.ajax({
            type: 'POST',
            url: 'updateSubtask.php',
            data: {
                'title':this.value,
                'taskObj': subtaskId
            },
            success: function (response) {
                // $('#dstasktitle').data("parentTask").val($('#dstasktitle').val());
                //alert(response);
            }
        });
    });




}

$('#dstasktitle').change(function () {
    $.ajax({
        type: 'POST',
        url: 'updateTitle.php',
        data: {
            'title':this.value,
            'taskObj': $('#dstasktitle').data("task")
        },
        success: function (response) {
            //изменить старое название на новое
            // $('#dstasktitle').data("parentTask").val($('#dstasktitle').val());
            let id = $('#dstasktitle').data("parentTask");
            $('#'+id).val($('#dstasktitle').val());
        }
    });
});
$('#dstaskdesc').change(function () {
    //alert('изменилось описание');
    $.ajax({
        type: 'POST',
        url: 'updateDescr.php',
        data: {
            'descr':this.value,
            'taskObj': $('#dstasktitle').data("task")
        },
        success: function (response) {
            //no actions
            //alert(response);
        }
    });
});
$('#date').change(function () {
    //alert('изменилась дата');
    $.ajax({
        type: 'POST',
        url: 'updateDeadline.php',
        data: {
            'date':this.value,
            'taskObj': $('#dstasktitle').data("task")
        },
        success: function (response) {
            //no actions
            //alert(response);
        }
    });
});