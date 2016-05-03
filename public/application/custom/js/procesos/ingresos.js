(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.ingresos = function(data){
        var _this = $(this);
        var plugin = _this.data('ingresos');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.ingresos(this, data);
            
            _this.data('ingresos', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.ingresos = function(container, options){
        
        var plugin = this;
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        var $table;

        var defaults = {
           
        };
        
        plugin.init = function(){
            
        settings = plugin.settings = $.extend({}, defaults, options);
        
        }
        
        plugin.new = function(anio,mes){
           
        }

        plugin.init();
       
    }
    
    
    
})( jQuery );


