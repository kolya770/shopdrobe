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
            var text = "Thank you! We sent your message!";
            if (response != "ok")
                text = "Something goes wrong. Please try ones more";
            console.log(text);
            alert (text);
            $('#myModal').modal('hide');
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