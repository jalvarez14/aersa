(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.cuentabancaria = function (data) {
        var _this = $(this);
        var plugin = _this.data('cuentabancaria');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.cuentabancaria(this, data);

            _this.data('cuentabancaria', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.cuentabancaria = function (container, options) {

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
            //ELIMINAR CUENTA BANCARIA
            $('.delete_modal').click(function () {
                var id = $(this).closest('tr').attr('id');
                var tmpl = [
                    // tabindex is required for focus
                    ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                    '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>',
                    '</div>',
                    '<form method="post" action="/flujoefectivo/cuentabancaria/eliminar/' + id + '">',
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
        }

        plugin.new = function () {
            var validarcuenta = function () {
                var cuenta = $('input[name=cuentabancaria_nocuenta]').val();
                var banco = $('input[name=cuentabancaria_banco]').val();
                if (banco != '' && cuenta != '') {
                    var $this = $(this);
                    $this.removeClass('valid');
                    $('input[name=cuentabancaria_banco]').removeClass('valid');
                    $.ajax({
                        url: "/flujoefectivo/cuentabancaria/validarcuenta",
                        dataType: "json",
                        data: {cuenta: cuenta,banco: banco},
                        success: function (exist) {
                            if (exist) {
                                alert('La cuenta "' + cuenta + '" ya fue utilizada en el banco "' + banco + '"');
                                $('input[name=cuentabancaria_nocuenta]').val('');
                                $('input[name=cuentabancaria_banco]').val('');
                            } else {
                                $('input[name=cuentabancaria_nocuenta]').addClass('valid');
                                $('input[name=cuentabancaria_banco]').addClass('valid');
                            }

                        },
                    });

                }
            }
            $('input[name=cuentabancaria_nocuenta]').numeric();
            $('input[name=cuentabancaria_balance]').numeric();
            
            $('input[name=cuentabancaria_nocuenta]').on('blur', function () {
                validarcuenta();
            });
            
            $('input[name=cuentabancaria_banco]').on('blur', function () {
                validarcuenta();
            });
        }

        plugin.edit = function () {
            $('input[name=cuentabancaria_balance]').attr('disabled',true);
            var validarcuenta = function () {
                var cuenta = $('input[name=cuentabancaria_nocuenta]').val();
                var banco = $('input[name=cuentabancaria_banco]').val();
                if (banco != '' && cuenta != '') {
                    var $this = $(this);
                    $this.removeClass('valid');
                    $('input[name=cuentabancaria_banco]').removeClass('valid');
                    $.ajax({
                        url: "/flujoefectivo/cuentabancaria/validarcuenta",
                        dataType: "json",
                        data: {cuenta: cuenta,banco: banco,edit: true,id: $('input[name=idcuentabancaria]').val()},
                        success: function (exist) {
                            console.log(exist);
                            if (exist) {
                                alert('La cuenta "' + cuenta + '" ya fue utilizada en el banco "' + banco + '"');
                                $('input[name=cuentabancaria_nocuenta]').val('');
                                $('input[name=cuentabancaria_banco]').val('');
                            } else {
                                $('input[name=cuentabancaria_nocuenta]').addClass('valid');
                                $('input[name=cuentabancaria_banco]').addClass('valid');
                            }

                        },
                    });

                }
            }
            $('input[name=cuentabancaria_nocuenta]').numeric();
            $('input[name=cuentabancaria_balance]').numeric();
            
            $('input[name=cuentabancaria_nocuenta]').on('blur', function () {
                validarcuenta();
            });
            
            $('input[name=cuentabancaria_banco]').on('blur', function () {
                validarcuenta();
            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


