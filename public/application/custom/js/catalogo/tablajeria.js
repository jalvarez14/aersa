(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.tablajeria = function(data){
        var _this = $(this);
        var plugin = _this.data('tablajeria');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.tablajeria(this, data);
            
            _this.data('tablajeria', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.tablajeria = function(container, options){
        
        var plugin = this;
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        var $table;
        
        var defaults = {
           
       };
        
        /*
        * Private methods
        */

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            
        }
        
        plugin.formBind = function(){

            var bestPictures = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/catalogo/tablajeria/getproducts?q=%QUERY',
                  wildcard: '%QUERY'
                }
              });
           
              $('input[name=idproducto_autocomplete]').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: bestPictures
              });
              
              $('input[name=idproducto_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                  $('input[name=idproducto]').val(suggestion.id);
              });
              
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/catalogo/tablajeria/getproductos?q=%QUERY',
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
            });

            var count = 0;
            $('#producto_add').on('click', function () {
                var tr = $('<tr>');
                tr.append('<td>Producto 1</td>');
                tr.append('<td><i class="fa fa-trash"></i></td>');
                $('#productos_table tbody').append(tr);
                count++;
                $('.fa-trash').on('click', function () {
                    var tr = $(this).closest('tr');
                    console.log(tr);
                    tr.remove();
                });
            });            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


