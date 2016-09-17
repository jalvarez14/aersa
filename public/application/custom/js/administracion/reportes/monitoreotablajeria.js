(function ($) {
    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.monitoreotablajeria = function (data) {
        var _this = $(this);
        var plugin = _this.data('monitoreotablajeria');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.monitoreotablajeria(this, data);

            _this.data('monitoreotablajeria', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.monitoreotablajeria = function (container, options) {

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
            
            $('select[name=anio]').on('change', function () {
                if ($('select[name=anio] option:selected').val() != "" && $('select[name=mes] option:selected').val() != "")
                    $('#generar_reporte').prop("type", "button");
                else
                    $('#generar_reporte').prop("type", "submit");
            });

            $('select[name=mes]').on('change', function () {
                if ($('select[name=anio] option:selected').val() != "" && $('select[name=mes] option:selected').val() != "")
                    $("#generar_reporte").prop("type", "button");
                else
                    $('#generar_reporte').prop("type", "submit");
            });

            $("#generar_reporte").on('click', function () {
                if ($(this).attr('type') == "button") {
                    var anio = $('select[name=anio] option:selected').val()
                    var mes = $('select[name=mes] option:selected').val()
                    var table = $('#reporte_table');
                    $.ajax({
                        async: false,
                        type: "POST",
                        url: "/administracion/reportes/monitoreotablajeria",
                        dataType: "json",
                        data: {mes: mes, anio: anio},
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


