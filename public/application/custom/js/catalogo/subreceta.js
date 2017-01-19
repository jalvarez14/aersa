
$( document ).ready(function() {
    
        
    var idproducto = $('input[name=idproducto]').val();    
 
    var data = new Bloodhound({
        
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
          url: '/autocomplete/getproductosreceta?q=%QUERY&idproducto='+idproducto,
          wildcard: '%QUERY'
        },
   
    });
          
    $('input#producto_autocomplete').typeahead(null, {
        name: 'best-pictures',
        display: 'value',
        hint: true,
        highlight: true,
        source: data,
        limit:100,
    });
    
    $('select[name=receta_unidad] option[value=Litros]').hide();
    $('select[name=receta_unidad] option[value=Kilos]').hide();
    
    $('input#producto_autocomplete').bind('typeahead:select', function(ev, suggestion) {
        
        $('select[name=receta_unidad] option[value=Litros]').hide();
        $('select[name=receta_unidad] option[value=Kilos]').hide();
        
        $('#producto_add').attr('disabled',false);
        $('input#idproducto').val(suggestion.id);
        $('input#producto_iva').val(suggestion.producto_iva);
        $('input#productoreceta_rendimiento').val(suggestion.producto_rendimiento);
        if(suggestion.unidad == 'Kilogramos'){
            $('select[name=receta_unidad] option[value=Kilos]').show();
        }
        if(suggestion.unidad == 'Litros'){
            $('select[name=receta_unidad] option[value=Litros]').show();
        }
    });

});