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
                  url: '/autocomplete/getproductos?q=%QUERY',
                  wildcard: '%QUERY'
                }
              });
              
              var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/autocomplete/getproductos?q=%QUERY',
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
              
            
              
            $('input#producto_autocomplete').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data
            });
            
            $('input#producto_autocomplete').bind('typeahead:select', function(ev, suggestion) {
                $('#producto_add').attr('disabled',false);
                $('input#idproducto').val(suggestion.id);
            });
            
            var count = 0;
            $('#producto_add').on('click',function(){
                var tr = $('<tr>');
                tr.append('<td><input type="hidden"  name=productos['+count+'][idproducto] value="'+$('input#idproducto').val()+'">'+$('input#producto_autocomplete').typeahead('val')+'</td>');
                tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                //INSERTAMOS EN LA TABLA
                $('#productos_table tbody').append(tr);
                //LIMPIAMOS EL AUTOCOMPLETE
                $('input#producto_autocomplete').typeahead('val', ''); 
                $('input#idproducto').typeahead('val', ''); 
                $('#producto_add').attr('disabled',true);                
                $('#plantilla_save').attr('disabled',false);                
              count ++;
              $('.fa-trash').on('click',function(){
                var tr = $(this).closest('tr');
                tr.remove();
                if($('#productos_table tbody tr').length==1)
                {
                    $('#plantilla_save').attr('disabled',true);                
                    exits=0;
                }
            });
            });
                          
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
})( jQuery );


