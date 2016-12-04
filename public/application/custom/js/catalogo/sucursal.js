

$( document ).ready(function() {
    
    $('#sucursal_form').on('submit', function (e) 
    {
        if( $("[name=auditor_username]").hasClass('invalid') || $("[name=almacenista_username]").hasClass('invalid'))
            return false;
    });
    
    
    
   
});