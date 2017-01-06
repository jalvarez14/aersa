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
            
           /*
            * START WIZARD
            */ 
            
           $container.find('select[name=idempresa]').select2({
                ajax: {
                    url: "/autocomplete/getempresas",
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
                language: 'es',
                minimumInputLength: 1,
                minimumResultsForSearch: 'Infinity',

            });
           
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
                language: 'es',
                minimumInputLength: 1,
                minimumResultsForSearch: 'Infinity',

            });
           
           $container.find('select[name=idempresa]').on("change", function(e) { 
               var data =  $(this).select2('data');
               $container.find('p#idempresa').text(data[0].text);
           });
           $container.find('select[name=idsucursal]').on("change", function(e) { 
               var data =  $(this).select2('data');
               $container.find('p#idsucursal').text(data[0].text);
           }); 
            
           $container.find('#btn_continue').on('click',function(){
               var $tab_container = $container.find('div.tab-pane.active');
               var step = $tab_container.attr('id'); step = step.split('tab'); step = parseInt(step[1]);

               $tab_container.find('span.error').hide();
               
               var empty = false;
               $.each($tab_container.find('input,select'),function(){
                   
                   if($(this).val() == null || $(this).val() == ""){
                       empty = true;
                       $(this).siblings('.error.required').show();
                   }
                   
               });
               
               if(!empty){
                   
                   $('ul.steps li:nth-child('+step+')').addClass('done');
                   $('ul.steps li:nth-child('+(step + 1)+')').addClass('active');
                   
               }
           }); 
            
           /*
            * END WIZARD
            */

        }
        

        plugin.init();
       
    }
    
    
    
})( jQuery );


