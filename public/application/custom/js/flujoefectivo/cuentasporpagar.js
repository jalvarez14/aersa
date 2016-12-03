(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.cuentasporpagar = function (data) {
        var _this = $(this);
        var plugin = _this.data('cuentasporpagar');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.cuentasporpagar(this, data);

            _this.data('cuentasporpagar', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.cuentasporpagar = function (container, options) {

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

        plugin.init = function () {

            settings = plugin.settings = $.extend({}, defaults, options);


        }
        
        plugin.list = function () {
            
            var table = $container.find('#datatable');
            $.ajax({
                url: '/application/json/datatable/lang_es.json',
                dataType: 'json',
                success: function (data) {
                    table.dataTable({
                        "language": data,
                        "order": [],
                    });
                },
            });
            
            //ACL
            if(settings.session.idrol == 4){
                
                $container.find('#datatable thead tr th:last-child').hide();
                $container.find('#datatable tbody tr').filter(function(){
                    $(this).find('td:last-child').hide();
                });
            }
            
        }
        
        formControl = function(pago){
            if(pago == 'cuenta'){
                //Se pone disabled el campo cuenta
                container.find('select[name=idcuentabancaria]').prop('disabled',false).prop('required',true);
                container.find('select[name=flujoefectivo_mediodepago]').prop('disabled',false).prop('required',true);
                container.find('input[name=flujoefectivo_cantidad]').prop('disabled',true).prop('required',true);
                container.find('span#abonoproveedor').slideUp();
            }else if(pago == 'abono'){
                container.find('select[name=idcuentabancaria]').val("").prop('disabled',true).prop('required',false);
                container.find('input[name=flujoefectivo_cantidad]').prop('disabled',false).prop('required',true);
                container.find('select[name=flujoefectivo_mediodepago]').val("").prop('disabled',true).prop('required',false);
                container.find('select[name=flujoefectivo_chequecirculacion]').val("").prop('disabled',true).prop('required',false);
                container.find('input[name=flujoefectivo_fechacobrocheque]').val("").prop('disabled',true).prop('required',false);
                container.find('span#balance').slideUp();
                container.find('span#abonoproveedor').slideDown();
            }else if(pago == 'bonificacion'){
                container.find('span#balance').slideUp();
                container.find('span#abonoproveedor').slideUp();
                container.find('input[name=flujoefectivo_cantidad]').prop('disabled',false).prop('required',true);
                container.find('select[name=flujoefectivo_mediodepago]').val("").prop('disabled',true).prop('required',false);
                container.find('select[name=flujoefectivo_chequecirculacion]').val("").prop('disabled',true).prop('required',false);
                container.find('input[name=flujoefectivo_fechacobrocheque]').val("").prop('disabled',true).prop('required',false);
                 container.find('input[name=flujoefectivo_cantidad]').prop('disabled',true).prop('required',true);
            }
        }
        
        plugin.edit = function () {
            
            
            container.find('input[name=flujoefectivo_fecha]').datepicker({
                format: 'dd/mm/yyyy',
            });
            
            container.find('input[name=flujoefectivo_fechacobrocheque]').datepicker({
                format: 'dd/mm/yyyy',
            });
            
            container.find('select[name=flujoefectivo_mediodepago]').on('change',function(){
                var mediopago = container.find('select[name=flujoefectivo_mediodepago] option:selected').val();
      
                if(mediopago == 'cheque'){
                    container.find('select[name=flujoefectivo_chequecirculacion]').prop('disabled',false).prop('required',true);
                }else{
                    container.find('select[name=flujoefectivo_chequecirculacion],input[name=flujoefectivo_fechacobrocheque]').prop('disabled',true).prop('required',false);
                    container.find('select[name=flujoefectivo_chequecirculacion]').val("");
                }
            });
            
            container.find('select[name=flujoefectivo_chequecirculacion]').on('change',function(){
                var chequecirculacion = parseInt(container.find('select[name=flujoefectivo_chequecirculacion] option:selected').val());
                if(Boolean(chequecirculacion)){
                    container.find('input[name=flujoefectivo_fechacobrocheque]').prop('disabled',false).prop('required',true);
                }else{
                    container.find('input[name=flujoefectivo_fechacobrocheque]').prop('disabled',true).prop('required',false);;
                }
            });
            
            container.find('select[name=flujoefectivo_pago]').on('change',function(){
                var pago = container.find('select[name=flujoefectivo_pago] option:selected').val();
                formControl(pago);
            });
            
            container.find('select[name=idcuentabancaria]').on('change',function(){
                var cuentabancaria = container.find('select[name=idcuentabancaria] option:selected').val();
                if(cuentabancaria != ""){
                    container.find('input[name=flujoefectivo_cantidad]').prop('disabled',false);
                    $.ajax({
                        url:'/flujoefectivo/cuentasporpagar/getbalance',
                        dataType:'json',
                        type:'post',
                        data:{
                            id:cuentabancaria,
                        },
                        success: function (data, textStatus, jqXHR) {
                            if(data.response){
                                container.find('span#balance').text('Balance: '+accounting.formatMoney(data.balance));
                                container.find('span#balance').slideDown();
                            }
                        }
                    });
                }else{
                    container.find('span#balance').text(accounting.formatMoney(0));
                    container.find('span#balance').slideUp();
                    container.find('input[name=flujoefectivo_cantidad]').prop('disabled',true);
                }
            });
            
            container.find('input[name=flujoefectivo_cantidad]').numeric();
            container.find('input[name=flujoefectivo_cantidad]').on('blur',function(){
                
                container.find('input[name=flujoefectivo_cantidad]').removeClass('valid');

                var pago = container.find('select[name=flujoefectivo_pago] option:selected').val();
                var cantidad = container.find('input[name=flujoefectivo_cantidad]').val();
                var cuentabancaria = container.find('select[name=idcuentabancaria] option:selected').val();
                var idporveedor = container.find('input[name=idproveedor]').val();
                
                if(cantidad !== ""){
                    $.ajax({
                        url:'/flujoefectivo/cuentasporpagar/validarcantidad',
                        dataType:'json',
                        type:'post',
                        data:{
                            cuentabancaria:cuentabancaria,
                            cantidad:cantidad,
                            pago: pago,
                            idproveedor:idporveedor,
                        },
                        success: function (data, textStatus, jqXHR) {
                            if(data.response){
                                container.find('input[name=flujoefectivo_cantidad]').addClass('valid');
                            }else{
                                container.find('input[name=flujoefectivo_cantidad]').val("");
                                alert(data.msj);
                            }
                        }
                    });
                }
            });
            
            //ELIMINAR
            $('.eliminarmovimiento').click(function(){

              var id = $(this).closest('tr').attr('id');
              var tmpl = [
                // tabindex is required for focus
                ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                  '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>', 
                  '</div>',
                  '<form method="post" action="/flujoefectivo/cuentasporpagar/eliminarmovimiento/'+id+'">',
                    '<div class="modal-body">',
                      '<p>¿Estas seguro que deseas eliminar el registro seleccionado?</p>',
                    '</div>',
                    '<div class="modal-footer">',
                      '<a href="#" data-dismiss="modal" class="btn btn-default">Cancelar</a>',
                      '<button class="btn btn-danger" type="submit">Eliminar</button>',
                    '</div>',
                  '</form>',
                '</div>'
              ].join('');
              $(tmpl).modal();
            });
            
            //EDITAR
            $('.editarmovimiento').click(function(){
              var id = $(this).closest('tr').attr('id');
              var tmpl = [
                // tabindex is required for focus
                ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                  '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">EDITAR MOVIMIENTO</h4>', 
                  '</div>',
                  '<form method="post" action="/flujoefectivo/cuentasporpagar/editarmovimiento/'+id+'">',
                    '<div class="modal-body">',
                        '<div class="row">',
                            '<div class="form-group">',
                                '<div class="col-md-6">',
                                    '<label for="flujoefectivo_chequecirculacion">¿Cobrado?</label>',
                                    '<select class="form-control" name="flujoefectivo_chequecirculacion">',
                                        '<option value="0">No</option>',
                                        '<option value="1">SI</option>',
                                    '</select>',
                                '</div>',
                                '<div class="col-md-6">',
                                    '<label for="flujoefectivo_fechacobrocheque">Fecha de cobro</label>',
                                    '<input class="form-control" type="text" value="" disabled="disabled" name="flujoefectivo_fechacobrocheque">',
                                '</div>',
                            '</div>',
                        '</div>',
                    '</div>',
                    '<div class="modal-footer">',
                      '<a href="#" data-dismiss="modal" class="btn btn-default">Cancelar</a>',
                      '<button disabled class="btn blue" type="submit">Guardar</button>',
                    '</div>',
                  '</form>',
                '</div>'
              ].join('');
              var $modal = $(tmpl);
              $modal.modal();
              $modal.find('input').datepicker({
                format: 'dd/mm/yyyy',
                });
              $modal.find('select[name=flujoefectivo_chequecirculacion]').on('change',function(){
                  var value = $modal.find('select[name=flujoefectivo_chequecirculacion] option:selected').val();
                  if(value == 1){
                      $modal.find('input[name=flujoefectivo_fechacobrocheque]').prop('disabled',false).prop('required',true);
                      $modal.find('button').prop('disabled',false);
                  }else{
                      $modal.find('input[name=flujoefectivo_fechacobrocheque]').prop('disabled',true).prop('required',false);
                      $modal.find('button').prop('disabled',true);
                  }
              });
              
            });
            
        
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


