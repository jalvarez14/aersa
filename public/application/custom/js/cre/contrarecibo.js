(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.contrarecibo = function(data){
        var _this = $(this);
        var plugin = _this.data('contrarecibo');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.contrarecibo(this, data);
            
            _this.data('contrarecibo', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.contrarecibo = function(container, options){
        
        var plugin = this;
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        var $table;

        
        var defaults = {};
        
        plugin.init = function(){

            settings = plugin.settings = $.extend({}, defaults, options);

        };
        
        plugin.new = function(){
            
            $.fn.select2.defaults.set('language', 'es');
            $container.find('select[name=idsucursal]').select2({
                ajax: {
                    url: "/autocomplete/getsucursales",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
              
                        return {
                            results: $.map(data, function(obj) {
                                return { id: obj.id, text: obj.value };
                            }),
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                minimumInputLength: 1,
                minimumResultsForSearch: 'Infinity',
                

                
            });

        }
        

        plugin.init();
       
    }
    
    
    
})( jQuery );


