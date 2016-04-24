
$( document ).ready(function() {

    $("[name=usuario_username]").focusout(function () {
        checkUser('usuario_username', 'Nombre de usuario *');
    });
    
    function checkUser(inputName,labelText)
    {
        var username = $("[name="+inputName+"]").val();
        
        $.ajax({
           type: "GET",
           url: "/catalogo/empresa/sucursal/checkuser/"+ username,
           dataType: "json",
           success: function (data) {
                console.log(data);
                if(data.length != 0)
                {
                    for(var k in data) 
                    {
                        console.log(data[k]);
                        $("[name="+inputName+"]").addClass('invalid');
                        $("label[for="+inputName).addClass('invalid') + "']";
                        $("label[for="+inputName).text('Este nombre de usuario ya esta en uso');
                        $('#btnSubmit').prop('disabled', true);
                         
                    }
                }
                else
                {
                    $("[name="+inputName+"]").removeClass('invalid');
                    $("label[for="+inputName).removeClass('invalid') + "']";
                    $("label[for="+inputName).text(labelText);
                    $('#btnSubmit').prop('disabled',false);
                }
           },

       });
       

        
    }
    
});