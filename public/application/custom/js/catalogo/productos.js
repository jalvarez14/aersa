
$( document ).ready(function() {
    
    
    
    $("[name=idcategoria]").change(function () {
        getSubcategorias();
        
    });
    
    
    function getSubcategorias()
    {
        var idcat = $("[name=idcategoria]").val();
        
        if(idcat != '2')
        {
            $("label[for=producto_rendimiento").hide();
            $("[name=producto_rendimiento]").hide();
        }
        else
        {
            $("label[for=producto_rendimiento").show();
            $("[name=producto_rendimiento]").show();
        }
            
        
        if(idcat == '')
            idcat = 0;
        
        $.ajax({
           type: "GET",
           url: "/catalogo/categoria/getsubcat/"+ idcat,
           dataType: "json",
           success: function (data) {
                if(data.length != 0)
                {
                    $("[name=idsubcategoria]").html('');
                    for(var k in data) 
                        $("[name=idsubcategoria]").append('<option value="'+ data[k]['Idcategoria'] +'">' + data[k]['CategoriaNombre'] +'</option>');
                }
           },

       });
       

        
    }
    
});