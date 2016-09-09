(function ($) {
    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.cierresinventarios = function (data) {
        var _this = $(this);
        var plugin = _this.data('cierresinventarios');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.cierresinventarios(this, data);

            _this.data('cierresinventarios', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.cierresinventarios = function (container, options) {

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
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
        $(function () {
            $("#fecha").datepicker();
        });
        /*
         * Public methods
         */


        plugin.init = function () {
            settings = plugin.settings = $.extend({}, defaults, options);
        }

        plugin.list = function () {

            $.datepicker.setDefaults($.datepicker.regional['es']);
            container.find('input[name=fecha_inicio]').keydown(false);
            container.find('input[name=fecha_fin]').keydown(false);

            container.find('input[name=fecha_inicio]').datepicker({
                format: 'dd/mm/yyyy',
                beforeShowDay: function (date) {
                    var a = new Array();
                    a[0] = date.getDay() == 1;
                    a[1] = '';
                    a[2] = '';
                    return a;
                }
            });

            container.find('input[name=fecha_fin]').datepicker({
                format: 'dd/mm/yyyy',
                beforeShowDay: function (date) {
                    var a = new Array();
                    a[0] = date.getDay() == 0;
                    a[1] = '';
                    a[2] = '';
                    return a;
                }
            });

            $('input[name=fecha_inicio]').on('change', function () {
                if ($(this).val() != "" && $('input[name=fecha_fin]').val() != "")
                    $('#generar_reporte').prop("type", "button");
                else
                    $('#generar_reporte').prop("type", "submit");
            });

            $('input[name=fecha_fin]').on('change', function () {
                if ($(this).val() != "" && $('input[name=fecha_inicio]').val() != "")
                    $("#generar_reporte").prop("type", "button");
                else
                    $('#generar_reporte').prop("type", "submit");
            });

            $("#generar_reporte").on('click', function () {
                if ($(this).attr('type') == "button") {
                    var inicio = $('input[name=fecha_inicio]').val();
                    var fin = $('input[name=fecha_fin]').val();
                    var table = $('#reporte_table');
                    $.ajax({
                        async: false,
                        type: "POST",
                        url: "/administracion/reportes/cierresinventarios",
                        dataType: "json",
                        data: {fecha_inicial: inicio, fecha_final: fin},
                        success: function (data) {
                            if (data.length != 0) {
                                $('#reporte_table > tbody').empty();
                                for (var k in data) {
                                    table.append(data[k]);
                                }
                            }
                        },
                    });
                }
            });

        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


