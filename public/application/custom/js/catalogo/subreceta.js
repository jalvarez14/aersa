
$( document ).ready(function() {
    
        
  
    var data = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
          url: '/autocomplete/getproductossimples?q=%QUERY',
          wildcard: '%QUERY'
        }
    });

    $('input#producto_autocomplete').typeahead(null, {
        name: 'best-pictures',
        display: 'value',
        hint: true,
        highlight: true,
        source: data,
        limit:5,
    });

    $('input#producto_autocomplete').bind('typeahead:select', function(ev, suggestion) {
        $('#producto_add').attr('disabled',false);
        $('input#idproducto').val(suggestion.id);
        $('input#producto_iva').val(suggestion.producto_iva);

    });

});