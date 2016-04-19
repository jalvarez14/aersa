(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.login = function(data){
        var _this = $(this);
        var plugin = _this.data('login');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.login(this, data);
            
            _this.data('login', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.login = function(container, options){
        
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
            
            $container.find('select[name=area_trabajo]').on('change',function(){
                var selected = $container.find('select[name=area_trabajo] option:selected');
                selected = $(selected).val();
                if(selected == 2){
                    $container.find('#sucursal_select').slideDown();
                    $container.find('select[name=idempresa]').attr('required',true);
                    $container.find('select[name=idsucursal]').attr('required',true);
                }else{
                     $container.find('#sucursal_select').slideUp();
                     $container.find('select[name=idempresa]').attr('required',false);
                    $container.find('select[name=idsucursal]').attr('required',false);
                }
            });
            
            $container.find('select[name=idempresa]').on('change',function(){
                
                $container.find('select[name=idsucursal] option:not(:nth-child(1))').remove();
                
                
                var selected = $container.find('select[name=idempresa] option:selected');
                selected = $(selected).val();
                
                if(selected != ""){
                    $.ajax({
                        url:'/login/getsucursales',
                        data:{id:selected},
                        type:'post',
                        dataType: 'json',
                        success: function (data, textStatus, jqXHR) {

                            $.each(data,function(index){
                                var option = $('<option>');
                                option.attr('value',index);
                                option.text(data[index]);
                                
                                $container.find('select[name=idsucursal]').append(option);
                                $container.find('select[name=idsucursal]').attr('disabled',false);
                                $container.find('select[name=idsucursal]').attr('required',true);
                            });
                        }
                    });
                }
                
            });
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


