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
                prefetch: '/catalogo/tablajeria/prefetchproducts',
                remote: {
                  url: '/catalogo/tablajeria/getproducts',
                  wildcard: '%QUERY'
                }
              });
           
              $('input[name=idproducto]').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                source: bestPictures
              });
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );

