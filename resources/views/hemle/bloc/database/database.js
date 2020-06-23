
function Deletedatabase(parent,dbname)
{

    alert(dbname);

    parent.fadeOut('slow');
}

$(document).ready(function(){

    $('.delete_database').click(function(e){

        e.preventDefault();

        var dbname = $(this).attr('data-id');
        var parent = $(this).parent("td").parent("tr");
        $('#dbname').val(dbname);
        $('#deletedbModal').modal('toggle');
       // $('#deletedbModal').modal('show');
       /* alert(parent);

        parent.fadeOut('slow');*/



    });

});