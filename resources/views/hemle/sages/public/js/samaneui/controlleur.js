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

$(document).ready(function(){



    $(document).on('click', '#load_controller', function(e){
        var sThisVal=[];

        $('input.checkbox:checkbox:checked').each(function (index) {
             sThisVal[index]=  $(this).val();

        });
        alert(sThisVal);


        e.preventDefault();
    });

});














$("#ok").fadeOut(7500);

function addRow()
{
    //alert(11);
    var table = document.getElementById("tbl"); //get the table
    var rowcount = table.rows.length; //get no. of rows in the table
    //append the controls in the row
    var tblRow = '<tr id="row' + rowcount + '"> <td><input type="text" class="form-control" name="methodename[]" id="methodename\' + rowcount + \'" /></td><td><input type="text" class="form-control" name="paramlist[]" id="paramlist\' + rowcount + \'" placeholder="param1;parame2;param3..." /></td><td><select class="form-control" name="retuntype[]"   id="retuntype\' + rowcount + \'"  ><option value="Vue">Vue</option><option value="Void">Void</option><option value="Variable">Variable</option><option value="Tableau">Tableau</option></select></td><td><select class="form-control" name="encaps[]"   id="encaps' + rowcount + '"  ><option value="public">public</option><option value="private">private</option><option value="protected">protected</option></select></td><td> <td> <input type="button" class="btn btn-danger" id="btnDelete' + rowcount + '" onclick="DeleteRow(' + rowcount + ')" value="Supprimer" /> </td> </tr>';

    //append the row to the table.
    $("#tbl").append(tblRow);
}

function DeleteRow(id)
{
    $("#row" + id).remove();
}
function jsUcfirst(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}

/*
function addRow()
{
    var tblRow = '<tr id="row' + rowcount + '"> <td><input type="text" class="form-control" name="methodename[]" id="methodename\' + rowcount + \'" /></td><td><input type="text" class="form-control" name="paramlist[]" id="paramlist\' + rowcount + \'" placeholder="param1;parame2;param3..." /></td><td><select class="form-control" name="retuntype[]"   id="retuntype\' + rowcount + \'"  ><option value="Vue">Vue</option><option value="Void">Void</option><option value="Variable">Variable</option><option value="Tableau">Tableau</option></select></td><td><select class="form-control" name="encaps[]"   id="encaps' + rowcount + '"  ><option value="public">public</option><option value="private">private</option><option value="protected">protected</option></select></td><td> <td> <input type="button" class="btn btn-danger" id="btnDelete' + rowcount + '" onclick="DeleteRow(' + rowcount + ')" value="Supprimer" /> </td> </tr>';

    //append the row to the table.
    $("#tbl").append(tblRow);
    addRows(tblRow,"tbl");
}

function DeleteRow(id)
{//$("#row" + id).remove();
    DeleteRows(id,"row");
}*/


var varurl='{$url_base}SM_Admin';

$(document).on('click', '#select_allctr', function() {
    $(".ctr_checkbox").prop("checked", this.checked);
    $("#select_count").html($("input.ctr_checkbox:checked").length+" Selected");
});
$(document).on('click', '.ctr_checkbox', function() {
    if ($('.ctr_checkbox:checked').length == $('.ctr_checkbox').length) {
        $('#select_allctr').prop('checked', true);
    } else {
        $('#select_allctr').prop('checked', false);
    }
    $("#select_count").html($("input.ctr_checkbox:checked").length+" Selected");
});


// delete selected records
$('#delete_records').on('click', function(e) {
    var controller = [];
    $(".ctr_checkbox:checked").each(function() {
        controller.push($(this).data('emp-id'));
    });
    if(controller.length <=0) { alert("Please select records."); } else { WRN_PROFILE_DELETE = "Are you sure you want to delete "+(controller.length>1?"these":"this")+" row?";
        var checked = confirm(WRN_PROFILE_DELETE);
        if(checked == true) {
            var selected_values = controller.join(";");

            //alert(selected_values)
            var sendInfo = {
                supprimer: 'ajax',
                ctrlnames: selected_values
            };
            var urrl= varurl+'/delete_controller/nulle';

            $("#ok").fadeOut();

            $.ajax({

                type: 'POST',
                url: varurl+'/delete_controller/nulle',
                data: sendInfo,
                dataType:"text"
            })
                .done(function(response){
                    console.log(response);

                     // alert(response);
                    var emp_ids = selected_values.split(";");
                    var cpt=0;
                    for (var i=0; i < emp_ids.length; i++ ) { $("#"+emp_ids[i]).remove(); cpt++}
                    $("#ok").fadeIn(20000);
                    $("#ok").html('<label class="text-success">'+cpt+' Controllers Successfully deleted</label>');
                    $("#ok").fadeOut(2000);

                })
                .fail(function(){

                    alert('Something Went Wrog ....');

                });
        }
    }
});

$(document).on('click', '#select_all_records', function() {
    $(".ctr_recor_checkbox").prop("checked", this.checked);
    $("#select_count").html($("input.ctr_recor_checkbox:checked").length+" Selected");
});
$(document).on('click', '.ctr_recor_checkbox', function() {
    if ($('.ctr_recor_checkbox:checked').length == $('.ctr_recor_checkbox').length) {
        $('#select_all_records').prop('checked', true);
    } else {
        $('#select_all_records').prop('checked', false);
    }
    $("#select_count").html($("input.ctr_recor_checkbox:checked").length+" Selected");
});


// delete selected records
$('#add_records').on('click', function(e) {
    var controller = [];
    $(".ctr_recor_checkbox:checked").each(function() {
        controller.push($(this).data('emp-id'));
    });
    if(controller.length <=0) { alert("Please select records."); } else { WRN_PROFILE_DELETE = "Are you sure you want to generate "+(controller.length>1?"these":"this")+" row?";
        var checked = confirm(WRN_PROFILE_DELETE);
        if(checked == true) {
            var selected_values = controller.join(";");
            //  alert(selected_values);
            var sendInfo = {
                importer: 'ajax',
                ctrlnames: selected_values
            };
            $("#ko").fadeOut(7500);
            $.ajax({

                type: 'POST',
                url: varurl+'/generate_controller/nulle',
                data: sendInfo

            })


                .done(function(response){
                    var emp_ids = selected_values.split(";");

                    // alert(response);
                    for (var i=0; i < emp_ids.length; i++ ) {
                        $("#"+emp_ids[i]).remove();
                        //var nbrows = $('#dataTable tr').length;                           //append the controls in the row
                        var rowcount =$('#dataTable tr').length;

                        var tblRow = ' <tr id="' + jsUcfirst(emp_ids[i]) + '"><td>' +rowcount + '</td> <td><a href="#">' + jsUcfirst(emp_ids[i])  + '</a> </td> <td>src/controller/' + jsUcfirst(emp_ids[i]) + '.class.php</td> <td><input type="checkbox" class="ctr_checkbox" data-emp-id="' + jsUcfirst(emp_ids[i]) + '"></td> <td><a href="{$url_base}SM_Admin/delete_controller/' + jsUcfirst(emp_ids[i]) + '">Supprimer</a></td> </tr>';
                        $("#dataTable").append(tblRow);
                        $("#ko").fadeIn(20000);
                        $("#ko").html(response);
                        $("#ko").fadeOut(2000);
                    }

                })
                .fail(function(){

                    alert('Something Went Wrog ....');

                });
        }
    }
});