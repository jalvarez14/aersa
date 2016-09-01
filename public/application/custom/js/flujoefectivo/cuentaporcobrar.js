(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.cuentaporcobrar = function (data) {
        var _this = $(this);
        var plugin = _this.data('cuentaporcobrar');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.cuentaporcobrar(this, data);

            _this.data('cuentaporcobrar', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.cuentaporcobrar = function (container, options) {

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
        }

        plugin.new = function () {

            container.find('input[name=cuentaporcobrar_fecha]').datepicker({
                format: 'dd/mm/yyyy',
            });

            $('input[name=cuentaporcobrar_cantidad]').numeric();
            $('input[name=cuentaporcobrar_cantidad]').on('blur', function () {
                var $this = $(this);
                $this.removeClass('valid');
                if ($this.val() < 0) {
                    alert('No se aceptan numeros negativos');
                    $this.val("");
                } else {
                    $this.addClass('valid');
                }
            });
        }

        plugin.movimientos = function () {
            $('input[name=cuentaporcobrar_cantidad]').on('blur', function () {
                var $this = $(this);
                $this.removeClass('valid');
                if ($this.val() < 0) {
                    alert('No se aceptan numeros negativos');
                    $this.val("");
                } else {
                    $this.addClass('valid');
                }
            });
            container.find('input[name=cuentaporcobrar_fecha]').datepicker({
                format: 'dd/mm/yyyy',
            });

            var table = $container.find('#datatable');
//            $.ajax({
//                url: '/application/json/datatable/lang_es.json',
//                dataType: 'json',
//                success: function (data) {
//                    table.dataTable({
//                        "language": data,
//                        "order": [],
//                    });
//                },
//            });
            if (document.getElementById('datatable').getElementsByTagName("tr").length > 1) {
                $container.find('input,select').attr('disabled', true);
                $container.find('#plantilla_save').attr('disabled', true);
            }

            $container.find('input[name=cuentaporcobrar_abonado]').attr('disabled', true);

            $('.editarmovimiento').click(function () {
                var id = $(this).closest('tr').attr('id');
                var tmpl = [
                    // tabindex is required for focus
                    ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                    '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">EDITAR MOVIMIENTO</h4>',
                    '</div>',
                    '<form method="post" action="/flujoefectivo/cuentaporcobrar/editarmovimiento/' + id + '">',
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
                $modal.find('select[name=flujoefectivo_chequecirculacion]').on('change', function () {
                    var value = $modal.find('select[name=flujoefectivo_chequecirculacion] option:selected').val();
                    if (value == 1) {
                        $modal.find('input[name=flujoefectivo_fechacobrocheque]').prop('disabled', false).prop('required', true);
                        $modal.find('button').prop('disabled', false);
                    } else {
                        $modal.find('input[name=flujoefectivo_fechacobrocheque]').prop('disabled', true).prop('required', false);
                        $modal.find('button').prop('disabled', true);
                    }
                });

            });
            
            $('.delete_modal').click(function () {
                var id = $(this).closest('tr').attr('id');
                var saldo=0;
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "/flujoefectivo/cuentaporcobrar/saldocuentabancaria/" + id,
                    dataType: "json",
                    success: function (data) {
                        if (data.length != 0) {
                            saldo=data;
                        }
                    },
                });
                var idcuentaporcobrar=$container.find('input[name=idcuentaporcobrar]').val();
                var abono=parseFloat(parseFloat($(this).closest('tr').find('td').eq(1).text()).toFixed(6));
                if(abono<saldo) {
                    var tmpl = [
                    // tabindex is required for focus
                    ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                    '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>',
                    '</div>',
                    '<form method="post" action="/flujoefectivo/cuentaporcobrar/movimientos/'+idcuentaporcobrar+'/eliminar/' + id + '">',
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
                } else {
                    alert("Cantidad excede el saldo a favor");
                }
                
            });
        }

        plugin.pago = function (resta) {


            container.find('input[name=flujoefectivo_fecha]').datepicker({
                format: 'dd/mm/yyyy',
            });

            container.find('input[name=flujoefectivo_fechacobrocheque]').datepicker({
                format: 'dd/mm/yyyy',
            });

            $('input[name=flujoefectivo_cantidad]').numeric();

            $('input[name=flujoefectivo_cantidad]').on('blur', function () {
                var $this = $(this);
                $this.removeClass('valid');
                if ($this.val() > resta) {
                    alert('Cantidad excede el restante');
                    $this.val("");
                } else {
                    if ($this.val() < 0) {
                        alert('No se aceptan numeros negativos');
                        $this.val("");
                    } else {
                        $this.addClass('valid');
                    }
                }


            });

            $container.find('select[name=flujoefectivo_mediodepago]').on('change', function () {
                var selected = $container.find('select[name=flujoefectivo_mediodepago] option:selected');
                selected = $(selected).val();
                if (selected == "cheque") {
                    $container.find('#cheque_select').slideDown();
                    $container.find('select[name=flujoefectivo_chequecirculacion]').attr('required', true);
                }

                if (selected == "efectivo") {
                    $container.find('#cheque_select').slideUp();
                    $container.find('select[name=flujoefectivo_chequecirculacion]').val("");
                    $container.find('select[name=flujoefectivo_chequecirculacion]').attr('required', false);
                    $container.find('#chequefecha_select').slideUp();
                    $container.find('input[name$="flujoefectivo_fechacobrocheque"]').val("");
                    $container.find('input[name$="flujoefectivo_fechacobrocheque"]').attr('required', false);
                }

                if (selected == "transferencia") {
                    $container.find('#cheque_select').slideUp();
                    $container.find('select[name=flujoefectivo_chequecirculacion]').val("");
                    $container.find('select[name=flujoefectivo_chequecirculacion]').attr('required', false);
                    $container.find('#chequefecha_select').slideUp();
                    $container.find('input[name$="flujoefectivo_fechacobrocheque"]').val("");
                    $container.find('input[name$="flujoefectivo_fechacobrocheque"]').attr('required', false);
                }

            });

            $container.find('select[name=flujoefectivo_chequecirculacion]').on('change', function () {
                var selected = $container.find('select[name=flujoefectivo_chequecirculacion] option:selected');
                selected = $(selected).val();
                if (selected == 1) {
                    $container.find('#chequefecha_select').slideDown();
                    $container.find('select[name=flujoefectivo_fechacobrocheque]').attr('required', true);
                } else {
                    $container.find('#chequefecha_select').slideUp();
                    $container.find('input[name$="flujoefectivo_fechacobrocheque"]').attr('required', false);
                }
            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


