(function ($) {
    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.estadisticosanuales = function (data) {
        var _this = $(this);
        var plugin = _this.data('estadisticosanuales');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.estadisticosanuales(this, data);

            _this.data('estadisticosanuales', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.estadisticosanuales = function (container, options) {

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

        plugin.list = function (no_data) {
            if(no_data==1) {
                $('select[name=anio]').attr('disabled', true);
                $('#generar_reporte').attr('disabled', true);
                $('#generar_excel').attr('disabled', true);
                $('#generar_pdf').attr('disabled', true);
                $('#no_data').html('No existen datos para reporte')
            }
            
            $('select[name=anio]').on('change', function () {
                if ($('select[name=anio] option:selected').val() != "")
                    $('#generar_reporte').prop("type", "button");
                else
                    $('#generar_reporte').prop("type", "submit");
            });

            $("#generar_reporte").on('click', function () {
                if ($(this).attr('type') == "button") {
                    var anio = $('select[name=anio] option:selected').val()
                    var table = $('#reporte_table');
                    $.ajax({
                        async: false,
                        type: "POST",
                        url: "/administracion/reportes/estadisticosanuales",
                        dataType: "json",
                        data: {anio: anio},
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


