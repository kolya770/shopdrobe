$(document).ready(function(){

    var forms=[
        $('#contForm'),
        $('#mailForm')
    ];

    //form validation
    for (var i in forms){

        forms[i].on('submit',function(){

            var form = $(this),
                url = form.attr("action"),
                type = form.attr("method"),
                data = {};

            var serializedData = form.serialize();

            $.ajax({
                dataType: "json",
                url:url,
                type:type,
                data:serializedData,
                success: function(response){
                    result(response.success,form);
                    return false;
                }
            });

            return false;

        });
        function result(response,form){
            console.log(response);
            //if( response == "OK" ){  // make your .php script return an "OK" string
            //    $('#thanks').show();
            //}else{
            //    // DO something else if something went wrong
            //}
            //var text = "Thank you! We sent your message!";
            //if (response != "ok")
            //    text = "Something goes wrong. Please try ones more";
            //console.log(text);
            $('#contactUs').modal('hide');

            $('#thanks').show(3000);

            function thanks() {
                $('#thanks').hide(3000);
            }

            setTimeout(thanks, 5500);

            form.find("span.success").remove();
            //form.prepend( "<span class='success'>"+text+"</span>" );

            $(':input','form')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
        }
    }
});