$('#btnAddTask').click(function(event) {
    let taskText = $('#task').val();
    if(taskText !== "") addTaskField(taskText);
    return false;
});
function addTaskField(taskText) {
    $('#task').val("");
    var div = $('<div/>', {
        'class': 'input-group input-group-lg ',
        style: 'margin: 5px;',
    }).prependTo($('#dynamicFields'));

    var span = $('<span/>', {
        'class': 'input-group-addon taskCb'
    }).appendTo(div);
    var input = $('<input/>', {
        type: 'checkbox'
    }).appendTo(span);

    var input2 = $('<input/>', {
        value: taskText,
        type: 'text',
        readonly: 'readonly',
        'class': 'form-control taskAdded'
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

    btn.click(function() {
        $(this).parent().parent().remove();

    });
    input.change(function () {
        if (this.checked) {
            $(this).parent().parent().css({"opacity":".5"});
            $(this).parent().parent().appendTo('#dynamicFields');
        } else {
            $(this).parent().parent().css({"opacity":"1"});
            $(this).parent().parent().prependTo('#dynamicFields');
        }
    })
    // var br = $('<br/>').appendTo(div);
    // var textarea = $('<textarea/>', {
    //     name: 'DynamicExtraField[]',
    //     cols: '50',
    //     rows: '3'
    // }).appendTo(div);
}