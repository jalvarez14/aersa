(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.cardex = function (data) {
        var _this = $(this);
        var plugin = _this.data('cardex');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.cardex(this, data);

            _this.data('cardex', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.cardex = function (container, options) {

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

        var revisarSelect = function () {
            var almacen = ($('select[name=almacen]').val() != "") ? true : false;
            var auditor = ($('select[name=auditor]').val() != "") ? true : false;
            var revisada = ($('select[name=revisada]').val() != "") ? true : false;
            var activar = true;
            if (almacen && auditor && revisada)
                activar = false;
            $('#generar').attr('disabled', activar);
        }

        /*
         * Public methods
         */


        plugin.init = function () {
            settings = plugin.settings = $.extend({}, defaults, options);
        }

        plugin.list = function () {
            $('select[name=almacen]').on('change', function () {
                var idalmacen = $(this).val();
                if (idalmacen != "") {
                    $.ajax({
                        async: false,
                        type: "POST",
                        url: "/reportes/kardex/almacen",
                        dataType: "json",
                        data: {idalmacen: idalmacen},
                        success: function (data) {
                            if (data.length != 0) {
                                $('#responsable_responsable').html(data);
                            } else {
                                $('#responsable_responsable').html("N/A");
                            }
                        },
                    });
                } else {
                    $('#responsable_responsable').html("");
                }
                revisarSelect();
            });

            $('select[name=auditor]').on('change', function () {
                revisarSelect();
            });

            $('select[name=revisada]').on('change', function () {
                revisarSelect();
            });

            $('#generar').on('click', function () {
                var idalmacen = $('select[name=almacen]').val();
                var table = $('#reporte_table');
                $.ajax({
                    async: false,
                    type: "POST",
                    url: "/reportes/kardex",
                    dataType: "json",
                    data: {idalmacen: idalmacen},
                    success: function (data) {
                        if (data.length != 0) {
                            $('#reporte_table > tbody').empty();
                            for (var k in data) {
                                table.append(data[k]);
                            }
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


