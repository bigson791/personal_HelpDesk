function init()
{
    $("#ticket_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

$(document).ready(function() {
    $('#tick_descrip').summernote({
        height: 300 
    });

    $.post("../../controller/categoria.php?op=combo",function(data,status){
        console.log(data);
        $('#tick_cat_id').html(data);
    });
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new formData($("#ticket_form")[0]);

    $.ajax({
        url: "../../controller/ticket.php?op=insert",
        type: "post",
        data: formData,
        contentTye: false,
        processData: false,
        success: function (datos) {  
            console.log(datos);
        }
    })
}

init();
