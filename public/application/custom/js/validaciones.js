
$( document ).ready(function() {
    
    $("[name=sucursal_anioactivo]").numeric();
    $("[name=tasaiva_valor]").numeric();
    
    $("[name=auditor_username]").focusout(function () {
        checkUser('auditor_username', 'Nombre de usuario *');
    });
    $("[name=almacenista_username]").focusout(function () {
        checkUser('almacenista_username', 'Nombre de usuario *');
    });
    $("[name=usuario_username]").focusout(function () {
        checkUser('usuario_username', 'Nombre de usuario *');
    });
    $("[name=sucursal_anioactivo]").focusout(function () {
        var año = $("[name=sucursal_anioactivo]").val();
        if(año < 2000 || !$.isNumeric(año))
        {
            $("[name=sucursal_anioactivo]").addClass('invalid');
            $("label[for=sucursal_anioactivo").addClass('invalid') + "']";
            $("label[for=sucursal_anioactivo").text('El año debe de ser un número mayor a 2000.');
            $('#btnSubmit').prop('disabled', true);
        }
        else
        {
            $("[name=sucursal_anioactivo]").removeClass('invalid');
            $("label[for=sucursal_anioactivo").removeClass('invalid') + "']";
            $("label[for=sucursal_anioactivo").text('Año activo *');
            $('#btnSubmit').prop('disabled', false);
        }
    });
    
    
    
    function checkUser(inputName,labelText)
    {
        var username = $("[name="+inputName+"]").val();
        
        $.ajax({
           type: "GET",
           url: "/catalogo/usuario/checkuser/"+ username,
           dataType: "json",
           success: function (data) 
           {
                if(data.length != 0)
                {
                    for(var k in data) 
                    {
                        console.log(data[k]);
                        $("[name="+inputName+"]").addClass('invalid');
                        $("label[for="+inputName).addClass('invalid') + "']";
                        $("label[for="+inputName).text('Este nombre de usuario ya está en uso');
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