(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.compra = function(data){
        var _this = $(this);
        var plugin = _this.data('compra');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.compra(this, data);
            
            _this.data('compra', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.compra = function(container, options){
        
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
        
        plugin.new = function(anio,mes){
            
            var minDate = new Date(anio + '/' + mes + '/' + '01');
            var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth()+1));
            maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate()-1));
            
            container.find('input[name=compra_fechacompra]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/autocomplete/getproveedores?q=%QUERY',
                  wildcard: '%QUERY'
                }
            });
            
            $('input[name=idproveedor_autocomplete]').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit:5,
            });
            
            $('input[name=idproveedor_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                $('input[name=idproveedor]').val(suggestion.id);
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/autocomplete/getproductos?q=%QUERY',
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
            $('#producto_add').on('click',function(){
                var tr = $('<tr>');
                tr.append('<td>Producto 1</td>');
                tr.append(' <td><input type="text" name=productos['+count+'][canitdad]></td>');
                tr.append(' <td><input type="text"></td>');
                tr.append('<td>$ 100.00</td>');
                tr.append('<td><input type="text"></td>');
                tr.append(' <td><input type="text"></td>');
                tr.append(' <td>$ 100.00</td>');
                tr.append('<td><input type="checkbox"></td>');
                tr.append('<td><select class="form-control"><option>almacen 1</option><option>almacen 2</option><option>almacen 3</option></select></td>');
                tr.append('<td><i class="fa fa-trash"></i></td>');
                
                
              $('#productos_table tbody').append(tr);
              count ++;
                                    
                          $('.fa-trash').on('click',function(){
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


