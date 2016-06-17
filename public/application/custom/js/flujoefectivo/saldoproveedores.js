(function ($) {
    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.saldoproveedores = function (data) {
        var _this = $(this);
        var plugin = _this.data('saldoproveedores');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.saldoproveedores(this, data);

            _this.data('saldoproveedores', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.saldoproveedores = function (container, options) {

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


        var saldo = function () {
            if ($container.find('select[name=abonoproveedordetalle_mediodepago] option:selected').val() == "transferencia") {
                var cantidad = $('input[name=abonoproveedordetalle_cantidad]').val();
                var a = $('select[name=idcuentabancaria] option:selected').text();
                a = a.split("-");
                var fondos = parseFloat(a[2]);
                if (cantidad.length == 0)
                    cantidad = 0;
                
                if (cantidad > fondos) {
                    alert("Sin fondos en cuenta bancaria " + a[0] + " - " + a[1])
                    $('input[name=abonoproveedordetalle_cantidad]').val("")
                }
            }

        }

        plugin.list = function () {

            //INICIALIZAMOS DATATABLES
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
        }

        plugin.movimientos = function () {

            //INICIALIZAMOS DATATABLES
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

            $container.find('input').attr('disabled', true);
            
            $('.editarmovimiento').click(function(){
                
              var id = $(this).closest('tr').attr('id');
              var tmpl = [
                // tabindex is required for focus
                ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                  '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">EDITAR MOVIMIENTO</h4>', 
                  '</div>',
                  '<form method="post" action="/flujoefectivo/saldoproveedores/editarmovimiento/'+id+'">',
                    '<div class="modal-body">',
                        '<div class="row">',
                            '<div class="form-group">',
                                '<div class="col-md-6">',
                                    '<label for="abonoproveedordetalle_chequecirculacion">¿Cobrado?</label>',
                                    '<select class="form-control" name="abonoproveedordetalle_chequecirculacion">',
                                        '<option value="0">No</option>',
                                        '<option value="1">SI</option>',
                                    '</select>',
                                '</div>',
                                '<div class="col-md-6">',
                                    '<label for="abonoproveedordetalle_fechacobrocheque">Fecha de cobro</label>',
                                    '<input class="form-control" type="text" value="" disabled="disabled" name="abonoproveedordetalle_fechacobrocheque">',
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
              $modal.find('select[name=abonoproveedordetalle_chequecirculacion]').on('change',function(){
                  var value = $modal.find('select[name=abonoproveedordetalle_chequecirculacion] option:selected').val();
                  if(value == 1){
                      $modal.find('input[name=abonoproveedordetalle_fechacobrocheque]').prop('disabled',false).prop('required',true);
                      $modal.find('button').prop('disabled',false);
                  }else{
                      $modal.find('input[name=abonoproveedordetalle_fechacobrocheque]').prop('disabled',true).prop('required',false);
                      $modal.find('button').prop('disabled',true);
                  }
              });
              
            });
        }

        plugin.abono = function () {
            $('input[name=abonoproveedordetalle_cantidad]').on('blur', function () {
                var $this = $(this);
                $this.removeClass('valid');
                if ($this.val() < 0) {
                    alert('No se aceptan numeros negativos');
                    $this.val("");
                } else {
                    $this.addClass('valid');
                }
            });
            
            $('input[name=abonoproveedordetalle_referencia]').on('blur',function(){
                var referencia = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/flujoefectivo/saldoproveedores/validateref",
                    dataType: "json",
                    data: {referencia:referencia},
                    success: function (exist) {
                        console.log(exist);
                        if(exist){
                            alert('La referencia "'+referencia+'" ya fue utilizada');
                            $this.val('');
                        }else{
                            $this.addClass('valid');
                        }
                        
                    },
                });
                         
           });
            
            $container.find('select[name=idcuentabancaria]').on('change', function () {
                saldo();
            });

            $container.find('select[name=abonoproveedordetalle_mediodepago]').on('change', function () {
                saldo();
                var selected = $container.find('select[name=abonoproveedordetalle_mediodepago] option:selected');
                selected = $(selected).val();
                if (selected == "cheque") {
                    $container.find('#cheque_select').slideDown();
                    $container.find('select[name=abonoproveedordetalle_chequecirculacion]').attr('required', true);
                    $container.find('select[name=idcuentabancaria]').attr('required', false);
                }

                if (selected == "efectivo") {
                    $container.find('select[name=idcuentabancaria]').attr('required', false);
                    $container.find('select[name=abonoproveedordetalle_chequecirculacion]').val("");
                    $container.find('#cheque_select').slideUp();
                    $container.find('select[name=abonoproveedordetalle_chequecirculacion]').attr('required', false);
                    $container.find('input[name$="abonoproveedordetalle_fechacobrocheque"]').val("");
                    $container.find('#chequefecha_select').slideUp();
                    $container.find('input[name$="abonoproveedordetalle_fechacobrocheque"]').attr('required', false);
                }

                if (selected == "transferencia") {
                    saldo();
                    $container.find('select[name=idcuentabancaria]').attr('required', true);
                    $container.find('select[name=abonoproveedordetalle_chequecirculacion]').val("");
                    $container.find('#cheque_select').slideUp();
                    $container.find('select[name=abonoproveedordetalle_chequecirculacion]').attr('required', false);
                    $container.find('input[name$="abonoproveedordetalle_fechacobrocheque"]').val("");
                    $container.find('#chequefecha_select').slideUp();
                    $container.find('input[name$="abonoproveedordetalle_fechacobrocheque"]').attr('required', false);
                }

            });

            $('input[name=abonoproveedordetalle_cantidad]').numeric();

            $('input[name=abonoproveedordetalle_cantidad]').on('blur', function () {
                saldo();
            });

            $container.find('select[name=abonoproveedordetalle_chequecirculacion]').on('change', function () {
                var selected = $container.find('select[name=abonoproveedordetalle_chequecirculacion] option:selected');
                selected = $(selected).val();
                if (selected == 1) {
                    $container.find('#chequefecha_select').slideDown();
                    $container.find('select[name=abonoproveedordetalle_fechacobrocheque]').attr('required', true);
                } else {
                    $container.find('#chequefecha_select').slideUp();
                    $container.find('input[name$="abonoproveedordetalle_fechacobrocheque"]').attr('required', false);
                }
            });

            container.find('input[name=abonoproveedordetalle_fechaabono]').datepicker({
                format: 'dd/mm/yyyy',
            });

            container.find('input[name=abonoproveedordetalle_fechacobrocheque]').datepicker({
                format: 'dd/mm/yyyy',
            });
        }

        plugin.init = function () {

            settings = plugin.settings = $.extend({}, defaults, options);

        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }



})(jQuery);