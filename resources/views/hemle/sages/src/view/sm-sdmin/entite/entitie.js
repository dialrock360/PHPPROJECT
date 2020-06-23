function addRow()
{
    var table = document.getElementById("tbl"); //get the table
    var rowcount = table.rows.length; //get no. of rows in the table
    //append the controls in the row
    var tblRow = '<tr id="row' + rowcount + '"> <td> <label id="lblID' + rowcount + '">' + rowcount + '</label>' + ' </td> <td><select class="form-control" name="element[]"   id="element\' + rowcount + \'"  ><option value="attribut">Attribut</option><option value="methode">methode</option></select></td><td> <input type="text" class="form-control" name="elmname[]" id="elmname\' + rowcount + \'" /> </td>\'<td><select class="form-control" name="encaps[]"   id="encaps\' + rowcount + \'"  ><option value="private">private</option><option value="public">public</option><option value="protected">protected</option></select></td><td> <input type="button" class="btn btn-danger" id="btnDelete' + rowcount + '" onclick="DeleteRow(' + rowcount + ')" value="Supprimer" /> </td> </tr>';


    //append the row to the table.
    $("#tbl").append(tblRow);
}

function DeleteRow(id)
{
    $("#row" + id).remove();
}




$(document).ready(function(){
    /*$('input[type="checkbox"]').click(function(){
        if($(this).prop("checked") == true){
            alert("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
            alert("Checkbox is unchecked.");
        }
    });*/
    $("#curendatabase").change(function() {
        if(this.checked) {

            //Do stuff
            $("#selecteddb").slideUp("500");
        }else {

            $("#selecteddb").slideDown("500");
        }
    });
});


//select all checkboxes
$("#select_all").change(function(){  //"select all" change
    $(".checkbox").prop('checked', $(this).prop("checked")); //change all ".checkbox" checked status
});

//".checkbox" change
$('.checkbox').change(function(){
    //uncheck "select all", if one of the listed checkbox item is unchecked
    if(false == $(this).prop("checked")){ //if this item is unchecked
        $("#select_all").prop('checked', false); //change "select all" checked status to false
    }
    //check "select all" if all checkbox items are checked
    if ($('.checkbox:checked').length == $('.checkbox').length ){
        $("#select_all").prop('checked', true);
    }
});