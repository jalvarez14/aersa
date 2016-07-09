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

        var controlBoton = function () {
            var select = true;
            $container.find('select').filter(function () {
                if ($(this).val() == "")
                    select = false;
            });
            var checkbox = false;
            $container.find('.generado').filter(function () {
                if ($(this).prop('checked'))
                    checkbox = true;
            });
            var activar = true;
            if (checkbox && select)
                activar = false;
            $('#generar_reporte').attr('disabled', activar);
        }

        plugin.variacioncostos = function () {
            $container.find('input:checkbox').on('click', function () {
                var $this = $(this);
                var id = $this.attr('id');
                if (id != "todos") {
                    if ($this.val() != "on") {
                        $container.find('.' + $this.val()).filter(function () {
                            if ($this.prop('checked'))
                                $(this).prop('checked', true);
                            else
                                $(this).prop('checked', false);
                        });
                    } //else {
//                        if ($this.prop('checked'))
//                            $('h'+$(this).attr('id')).val($(this).attr('id'));
//                        else
//                            $('h'+$(this).attr('id')).val("");
//                    }
                    var all_checked = true;
                    $container.find('.generadoc').filter(function () {
                        var cat_checked = true;
                        $container.find('.' + $(this).val()).filter(function () {
                            if (!$(this).prop('checked')) {
                                cat_checked = false;
                            }
                        });
                        if ($container.find('.' + $(this).val()).length > 0)
                            $(this).prop('checked', cat_checked);
                    });

                    $container.find('.generadoc').filter(function () {
                        if (!$(this).prop('checked')) {
                            all_checked = false;
                        }
                    });
                    $('#todos').prop('checked', all_checked);

                } else {
                    if ($this.prop('checked')) {
                        $container.find('.generado').prop('checked', true);
                        $container.find('.generadoc').prop('checked', true);
                    } else {
                        $container.find('.generado').prop('checked', false);
                        $container.find('.generadoc').prop('checked', false);
                    }
                }
                controlBoton();
            });

            $('#producto_search').on('keyup', function () {
                var busqueda = $(this).val();
                $container.find('#reporte_table tbody tr').filter(function () {
                    //var td = $(this).find('td.nombre_producto').text();
                    var palabra = $(this).find('td').eq(1).text();
                    if (!palabra.includes(busqueda))
                        $(this).attr("hidden", true);
                    else
                        $(this).attr("hidden", false);
                });
            });

            $container.find('select').on('change', function () {
                controlBoton();
            });

//            $('#generar_reporte').on('click', function () {
//                alert($('select[name=ano_inicial] option:selected').val());
//                var productos = new Array();
//                $container.find('#reporte_table tbody tr').filter(function () {
//                    if ($(this).find('td').eq(0).find("input:checkbox").prop('checked'))
//                        productos.push($(this).find('td').eq(0).find("input:checkbox").attr('id'));
//
//                });
//                var iano=$('select[name=ano_inicial] option:selected').val();
//                var fano=$('select[name=ano_final] option:selected').val();
//                var imes=$('select[name=mes_inicial] option:selected').val();
//                var fmes=$('select[name=mes_final] option:selected').val();
//                $.ajax({
//                    async: false,
//                    type: "GET",
//                    url: "/reportes/variacioncostos/reportevc",
//                    dataType: "json",
//                    data: {productos:productos,iano:iano,fano:fano,imes:imes,fmes:imes},
//                    success: function (data) {
//                        if (data.length != 0) {
//
//                        }
//                    },
//                });
//                console.log(productos);
//            });

        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


