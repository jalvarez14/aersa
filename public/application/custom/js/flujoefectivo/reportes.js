(function ($) {

    $.fn.reportes = function (data) {
        var _this = $(this);
        var plugin = _this.data('reportes');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.reportes(this, data);

            _this.data('reportes', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    $.reportes = function (container, options) {

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

        plugin.mensual = function () {
            $('select[name=ano]').on('change', function () {
                if ($('select[name=ano] option:selected').val() != "") {
                    if ($('select[name=mes] option:selected').val() != "") {
                        $('#generar_pdf').attr('disabled', false);
                        $('#generar_excel').attr('disabled', false);
                        $('#mensual_generar').attr('disabled', false);
                    } else {
                        $('#generar_pdf').attr('disabled', true);
                        $('#generar_excel').attr('disabled', true);
                        $('#mensual_generar').attr('disabled', true);
                    }
                } else {
                    $('#generar_pdf').attr('disabled', true);
                    $('#generar_excel').attr('disabled', true);
                    $('#mensual_generar').attr('disabled', true);
                }
            });

            $('select[name=mes]').on('change', function () {
                if ($('select[name=ano] option:selected').val() != "") {
                    if ($('select[name=mes] option:selected').val() != "") {
                        $('#generar_pdf').attr('disabled', false);
                        $('#generar_excel').attr('disabled', false);
                        $('#mensual_generar').attr('disabled', false);
                    } else {
                        $('#generar_pdf').attr('disabled', true);
                        $('#generar_excel').attr('disabled', true);
                        $('#mensual_generar').attr('disabled', true);
                    }
                } else {
                    $('#generar_pdf').attr('disabled', true);
                    $('#generar_excel').attr('disabled', true);
                    $('#mensual_generar').attr('disabled', true);
                }
            });


            $('#mensual_generar').on('click', function () {
                var mes = $('select[name=mes] option:selected').val();
                var ano = $('select[name=ano] option:selected').val();
                var table = $('#reporte_table');
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "/flujoefectivo/reportes/mensual/reporte",
                    dataType: "json",
                    data: {mes: mes, ano: ano},
                    success: function (data) {
                        if (data.length != 0) {
                            table.empty();
                            for (var k in data) {
                                table.append(data[k]);
                            }
                        } else {
                            alert("No existen datos para el año " + ano + " y mes " + mes);
                        }
                    },
                });
            });
        }


        plugin.anual = function () {
            $('select[name=ano]').on('change', function () {
                if ($('select[name=ano] option:selected').val() != "")
                    $('#anual_generar').attr('disabled', false);
                else
                    $('#anual_generar').attr('disabled', true);
            });

            $('#anual_generar').on('click', function () {
                var ano = $('select[name=ano] option:selected').val();
                var table = $('#reporte_table');
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "/flujoefectivo/reportes/anual/reporte",
                    dataType: "json",
                    data: {ano: ano},
                    success: function (data) {
                        if (data.length != 0) {
                            table.empty();
                            for (var k in data) {
                                table.append(data[k]);
                            }
                        } else {
                            alert("No existen datos para el año " + ano + ".");
                        }
                    },
                });
            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


