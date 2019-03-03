$('#btnAddSubtask').click(function(event) {
    let subTaskText = $('#subtask').val();
    if(subTaskText !== "") addSubTask(subTaskText);
    return false;
});
function addSubTask(subtaskText) {
    $('#subtask').val("");
    var div = $('<div/>', {
        'class': 'input-group addedSubtask',
        style: 'margin: 8px;',
    }).prependTo($('#dynamicSubTasks'));

    var input2 = $('<input/>', {
        value: subtaskText,
        type: 'text',
        readonly: 'readonly',
        'class': 'form-control taskAdded'
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
    });
}