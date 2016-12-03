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
            iva:16,
        };
        
        
        plugin.list = function(){
        
            //INICIALIZAMOS DATATABLES
            var table = $container.find('#datatable');
            $.ajax({
                url:'/application/json/datatable/lang_es.json',
                dataType:'json',
                success:function(data){
                   table.dataTable({
                       "language":data,
                       "order":[],
                   });
                },
            });

            
            
        }
        
        plugin.init = function(){
      
            settings = plugin.settings = $.extend({}, defaults, options);
        
        }

        plugin.edit = function(){
            
            formControl();

            //COMENTARIOS
            var id = $('input[name=idingreso]').val();
            $('#comentarios_container').comentarios({
                table:'ingresonota',
                id: id,
                parent:'idingreso',
                editable:false,
            });
            
       
        }
        
        /*
         * PRIVATE METHODS
         */
        
        function ucfirst(str) {
            str += ''
            var f = str.charAt(0)
                    .toUpperCase()
            return f + str.substr(1)
        }
        
        var formControl = function(){
            
            
            $container.find('.fa-money').on('click',function(){
                var idingreso = $container.find('input[name=idingreso]').val();
                var rubro = $(this).closest('a').attr('id');
                
                $.ajax({
                    url:'/flujoefectivo/ingresos/getdetails',
                    type: 'POST',
                    data:{idingreso:idingreso,rubro:rubro},
                    dataType: 'json',
                    success: function (data, textStatus, jqXHR) {
                        var tmpl = [
                            '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                '<div class="modal-header">',
                                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                    '<h4 class="modal-title">'+ucfirst(rubro)+' - Flujo de efectivo</h4>',
                                '</div>',
                                '<form method="post" action="/flujoefectivo/ingresos/nuevo" enctype="multipart/form-data">',
                                '<div class="modal-body">',
                                    '<div class="row">',
                                        '<div class="col-md-6">',
                                            '<div class="form-group">',
                                                '<label for="nota">Fecha *</label>',
                                                '<input class="form-control" type="hidden" name="idingreso" value="'+idingreso+'">',
                                                '<input class="form-control" type="hidden" name="ingresorubro" value="'+rubro+'">',
                                                '<input required class="form-control" type="text" name="flujoefectivo_fecha">',
                                            '</div>',
                                        '</div>',
                                        '<div class="col-md-6">',
                                            '<div class="form-group">',
                                                '<label for="nota">Cantidad *</label>',
                                                '<input required class="form-control" type="text" name="flujoefectivo_cantidad">',
                                            '</div>',
                                        '</div>',
                                        '<div class="col-md-6">',
                                            '<div class="form-group">',
                                                '<label for="nota">Cuenta *</label>',
                                                '<select required class="form-control" type="text" name="idcuentabancaria">',
                                                    '<option value="">Sin especificar</option>',
                                                '</select>',
                                            '</div>',
                                        '</div>',
                                        '<div class="col-md-6">',
                                            '<div class="form-group">',
                                                '<label for="nota">Medio *</label>',
                                                '<select required class="form-control" type="text" name="flujoefectivo_mediodepago">',
                                                    '<option value="">Sin especificar</option>',
                                                    '<option value="cheque">Cheque</option>',
                                                    '<option value="efectivo">Efectivo</option>',
                                                    '<option value="transferencia">Transferencia</option>',
                                                '</select>',
                                            '</div>',
                                        '</div>',
                                        '<div class="col-md-6">',
                                            '<div class="form-group">',
                                                '<label for="nota">Referencia</label>',
                                                '<input class="form-control" type="text" name="flujoefectivo_referencia">',
                                            '</div>',
                                        '</div>',
                                        '<div class="col-md-6">',
                                            '<div class="form-group">',
                                                '<label for="nota">Comprobante</label>',
                                                '<input class="form-control" type="file" name="flujoefectivo_comprobante">',
                                            '</div>',
                                        '</div>',
                                    '</div>',
                                '</div>',
                                '<div class="modal-footer">',
                                    '<button type="submit" class="btn blue">Guardar</button>',
                                '</div>',
                            '</div>',  
                        ].join('');
                        var $modal = $(tmpl);
                        $modal.modal();
                        $.each(data.bank_accounts,function(index,value){
                            var option = '<option value="'+index+'">'+value+'</option>';
                            $modal.find('select[name=idcuentabancaria]').append(option);
                        });
                        $modal.find('input[name=flujoefectivo_fecha]').datepicker({
                            format: 'dd/mm/yyyy',
                        });
                        $modal.find('input[name=flujoefectivo_cantidad]').numeric();
                    }
                });
                
            });

            
        }

      
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


