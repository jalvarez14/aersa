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

            Dropzone.autoDiscover = false;  
            var myDropzone = new Dropzone("#dropzone",{ 
                url: "/cre/contrarecibos/dropzone",
                dictDefaultMessage: '<h2><b>Arrastre sus archivos pdf y xml ó haga click para seleccionarlos</b></h2><h4><i>Maximo 40</i></h4>',
                dictRemoveFile:'Eliminar',
                autoProcessQueue: false,
                addRemoveLinks: true, 
                acceptedMimeTypes:".pdf,.xml",
                maxFiles: 40,
                parallelUploads: 10000,
                uploadMultiple: true,
  
//                init: function() {
//                    this.on("addedfile", function(file) {
//                        console.log(file);
//                        if (this.files[1]!=null){
//                            this.removeFile(this.files[0]);
//                          }
//                          
//                       });
//                 }

                accept: function(file, done) {
                var thumbnail = $('.dropzone .dz-preview.dz-file-preview .dz-image:last');
                    switch (file.type) {
                      case 'application/pdf':
                        thumbnail.css('background', 'url(/application/custom/icons/pdf.png');
                        break;
                      case 'text/xml':
                        thumbnail.css('background', 'url(/application/custom/icons/xml.png');
                        break;
                    }
                    
                    file.status = Dropzone.ADDED;
                    file.accepted = true
                    myDropzone.enqueueFile(file);
                    
                },
               
               
            }); 
            
            $container.find('#btn_continue').on('click',function(){
              
              myDropzone.options.autoProcessQueue = true; 
               
               var $tab_container = $container.find('div.tab-pane.active');
               var step = $tab_container.attr('id'); step = step.split('tab'); step = parseInt(step[1]);
               step = parseInt(2);
               
               if(step == 1){
               
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
                }else if(step == 2){
                    myDropzone.processQueue(); 
                    console.log(myDropzone);
                    
                }
           });
           
          
           /*
            * END WIZARD
            */

        }
        

        plugin.init();
       
    }
    
    
    
})( jQuery );


