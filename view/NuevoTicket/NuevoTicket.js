$(document).ready(function() {
    $('#ticket-descript').summernote({
        height: 300 
    });

    $.post("../../controller/categoria.php?op=combo",function(data,status){
        console.log(data);
        $('#cat_id').html(data);
    });
});

