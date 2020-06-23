
function postdatas(url,data)
{
    $.ajax({
        url: url,
        data: data,
        success: function(result){
            //   $("#div1").html(result);
            return result;
           // alert(result);
        }});
}
