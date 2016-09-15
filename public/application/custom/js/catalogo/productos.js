
$( document ).ready(function() {
    
    $("label[for=producto_rendimiento").hide();
    $("[name=producto_rendimiento]").hide();
    $("label[for=producto_rendimientooriginal").hide();
    $("[name=producto_rendimientooriginal]").hide();
    
    $("[name=idcategoria]").change(function () {
        getSubcategorias();

    });
    
    $("[name=producto_rendimiento]").change(function () {
        if($this.val() != "")
        {
            $("#btnSubmit").attr("disabled", "false");
        }
        
    });
    
    $("[name=idunidadmedida]").change(function () {
         var idcat = $(this).val();
          var idcategoria = $("[name=idcategoria] option:selected").val();
        if(idcat != '5' && idcategoria != 2)
        {
            $("label[for=producto_rendimiento").hide();
            $("[name=producto_rendimiento]").removeAttr("required");
            $("[name=producto_rendimiento]").hide();
            
        }
        else
        {
            $("[name=producto_rendimiento]").attr("required", "true");
            $("label[for=producto_rendimiento").show();
            $("[name=producto_rendimiento]").show();
        }
        
    });
    
    $("[name=producto_tipo]").change(function () {
         var idcat = $(this).val();
        
        if(idcat != 'plu')
        {
            
            $("[name=producto_precio]").removeAttr("required");
            $("[name=producto_precio]").attr("disabled", "true");
            

            
        }
        else
        {
            $("[name=producto_precio]").removeAttr("disabled");
            $("[name=producto_precio]").attr("required", "true");
        }
        
    });
    
     var idcategoria = $('select[name=idcategoria] option:selected').val();
     if(idcategoria == 2){
        $("label[for=producto_rendimiento").show();
        $("[name=producto_rendimiento]").attr("required",true).show(); 
    }
    
    $('select[name=idcategoria],select[name=producto_tipo]').on('change',function(){
        var idcategoria = $('select[name=idcategoria] option:selected').val();
        var producto_tipo = $('select[name=producto_tipo] option:selected').val(); 
        if((idcategoria == 1 && producto_tipo == 'subreceta') || idcategoria == 2)
        {
            if(idcategoria == 2){
                $("label[for=producto_rendimiento").show();
                $("[name=producto_rendimiento]").attr("required",true).show(); 
            }else if(idcategoria == 1){
                $("label[for=producto_rendimiento").show();
                $("[name=producto_rendimiento]").attr("required",true).show();
                $("label[for=producto_rendimientooriginal").show();
                $("[name=producto_rendimientooriginal]").attr("required",true).show();
                $("[name=producto_costo]").attr("readonly",true);
            }
            
        }else{
            $("label[for=producto_rendimiento").hide();
            $("[name=producto_rendimiento]").attr("required",false).hide();
            $("label[for=producto_rendimientooriginal").hide();
            $("[name=producto_rendimientooriginal]").attr("required",false).hide();
            $("[name=producto_costo]").attr("readonly",false);
        }
    });
    
    
    function getSubcategorias()
    {
        var idcat = $("[name=idcategoria]").val();

        if(idcat != '2')
        {
            $("label[for=producto_rendimiento").hide();
            $("[name=producto_rendimiento]").removeAttr("required");
            $("[name=producto_rendimiento]").hide();
            
        }
        else
        {
            $("[name=producto_rendimiento]").attr("required", "true");
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