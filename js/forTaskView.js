$('#btnAddTask').click(function(event) {
    addTaskField();
    return false;
});
function addTaskField() {

    var div = $('<div/>', {
        'class': 'input-group input-group-lg ',
        style: 'margin-top: 5px;',
    }).appendTo($('#dynamicFields'));

    var span = $('<span/>', {
        'class': 'input-group-addon taskCb'
    }).appendTo(div);
    var input = $('<input/>', {
        type: 'checkbox'
    }).appendTo(span);

    var input2 = $('<input/>', {
        value: 'ffcc',
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
    // var br = $('<br/>').appendTo(div);
    // var textarea = $('<textarea/>', {
    //     name: 'DynamicExtraField[]',
    //     cols: '50',
    //     rows: '3'
    // }).appendTo(div);
}