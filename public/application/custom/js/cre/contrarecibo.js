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
        
        /*
         * 
         * Reordena los indices de la tabla de revision
         */
        
        var reorderIndexTable = function(){
            $container.find('table#revision tr').filter(function(index){
                $(this).find('td').eq(0).text(index);
            });
        };
        
        var calculateTotal = function(){
            var total = 0;
            $container.find('#revision tbody input[name*=cantidad]').filter(function(){

                var cantidad = $(this).val() != "" ? parseFloat($(this).val()) : 0;
                total+=cantidad;

            });

            $container.find('#total b').text(accounting.formatMoney(total));
        }
        
        var getUniqueFileName = function () {
            
             var date = new Date();
             var d = date.getDay(2);
             console.log(d);
        }
        
        plugin.new = function(){
            
           /*
            * START WIZARD
            */ 
            
            getUniqueFileName();
            
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
                parallelUploads: 100,
                uploadMultiple: true,
                removedfile: function(file) {
                    console.log(file);
                },          
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
                    file.accepted = true;
                    myDropzone.enqueueFile(file);
                    
                },
                successmultiple: function(file, response){
                    console.log(file);
                    console.log(response);
                    var data = JSON.parse(response);
                    $container.find('#total b').text(accounting.formatMoney(data.info.total));
                    $.each(data.data,function(index,value){
                        
                        var $tr = $('<tr>');
                        $tr.append('<td>'+index+'</td>');
                        $tr.append('<td><select name="contrarecibodetalle['+index+'][tipo]" class="form-control"><option value="finiquito">Finiquito</option><option value="anticipo">Anticipo</option><option value="estimacion">Estimación</option><option value="otrs">Otros</option></select></td>');
                        if(value.folio != null){
                            $tr.append('<td>'+value.folio+'<input type="hidden" name="contrarecibodetalle['+index+'][folio]" required class="form-control" value="'+value.folio+'"></td>');
                        }else{
                             $tr.append('<td><input type="text" name="contrarecibodetalle['+index+'][folio]" required class="form-control"></td>');
                        }
                        if(value.pdf != null){
                            $tr.append('<td ><a style="color:red" target="_blank" href="'+value.pdf+'"><i class="fa fa-file-pdf-o"></i></a><input type="hidden" name="contrarecibodetalle['+index+'][pdf]" class="form-control" value="'+value.pdf+'"></td>');
                        }else{
                            $tr.append('<td ><a style="color:blue" href="javascript:;"><i class="fa fa-upload"></i></a><input type="hidden" name="contrarecibodetalle['+index+'][pdf]" class="form-control" value=""></td>');
                        }
                        if(value.xml != null){
                            $tr.append('<td ><a style="color:green" target="_blank" href="'+value.xml+'"><i class="fa fa-file-pdf-o"></i></a><input type="hidden" name="contrarecibodetalle['+index+'][xml]" class="form-control" value="'+value.xml+'"></td>');
                        }else{
                            $tr.append('<td><a style="color:blue" href="javascript:;"> <i class="fa fa-upload"></i></a><input type="hidden" name="contrarecibodetalle['+index+'][xml]" class="form-control" value=""></td>');
                        }
                        if(value.total != null){
                            $tr.append('<td>'+accounting.formatMoney(value.total)+'<input type="hidden" name="contrarecibodetalle['+index+'][cantidad]" required class="form-control" value="'+value.total+'"></td>');
                        }else{
                             $tr.append('<td><input type="text" name="contrarecibodetalle['+index+'][cantidad]" required class="form-control"></td>');
                        }
                        $tr.append('<td ><a  style="color:red" href="javascript:;"><i class="fa fa fa-trash"></i></a></td>');
                        
                        
                        /*
                         * EVENTOS
                         */
                        
                        $tr.find('input[type=text]').numeric();
                        
                        //CALCULAR
                        $tr.find('input[type=text][name*=cantidad]').on('keyup',calculateTotal);
                        
                        //
                        $tr.find('.fa-trash').on('click',function(){
                            
                            $tr = $(this).closest('tr');
                            
                            var id = typeof $tr.attr('id') != 'undefined' ? $tr.attr('id') : null;
                            var folio =  $tr.find('input[name*=folio]').val() != "" ? $tr.find('input[name*=folio]').val() :null;
                            var pdf =  $tr.find('input[name*=pdf]').val() != "" ? $tr.find('input[name*=pdf]').val() :null;
                            var xml =  $tr.find('input[name*=xml]').val() != "" ? $tr.find('input[name*=xml]').val() :null;
                            var cantidad =  $tr.find('input[name*=cantidad]').val() != "" ? $tr.find('input[name*=cantidad]').val() :null;
                            
                            $.ajax({
                                url:'/cre/contrarecibos/delete',
                                dataType: 'json',
                                type: 'POST',
                                data:{
                                    name:'contrarecibodetalle',
                                    data:{
                                        id:id,
                                        folio:folio,
                                        pdf:pdf,
                                        xml:xml,
                                        cantidad:cantidad
                                    }
                                },
                                success: function (data, textStatus, jqXHR) {
                                    
                                    if(data.response){
                                        $tr.remove();
                                        //Reordenamos los indices
                                        reorderIndexTable();
                                    }
                                }
                            });
                        });
                        
                        
                        $container.find('#revision tbody').append($tr);
                        reorderIndexTable();
                        calculateTotal();
                        
                    });
                   
                   
                    
                }
               
               
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
                   
                    
                }
           });
           
          
           /*
            * END WIZARD
            */

        }
        

        plugin.init();
       
    }
    
    
    
})( jQuery );


