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

        var controlBotonFormatoInventario = function () {
            var almacen = true;
            var formato = true;
            var movimientos = true;
            var checkbox = false;
            var activar = true;

            if ($('select[name=almacen]').val() == "")
                almacen = false;
            if ($('select[name=formato]').val() == "")
                formato = false;

            if ($('select[name=movimientos_recientes]').val() != "") {
                if ($('select[name=movimientos_recientes]').val() == "Si") {
                    if (($('input[name=recientes_dias]').val() == ''))
                        movimientos = false;
                }
            } else
                movimientos = false;

            $container.find('.generado').filter(function () {
                if ($(this).prop('checked'))
                    checkbox = true;
            });

            if (almacen && formato && movimientos && checkbox)
                activar = false;
            $('#generar_reporte').attr('disabled', activar);
        }

        var recientes = function ($dias) {
            $.ajax({
                async: false,
                type: "GET",
                url: "/reportes/formatoinventario/getrecientes",
                dataType: "json",
                data: {dias: $dias},
                success: function (data) {
                    if (data.length != 0) {
                        for (var k in data) {
                            var tr = $('#producto-' + data[k]).closest("tr");
                            tr.find('input').prop('checked', true);
                        }
                    }
                },
            });
            revisarCheckbox();
        }

        var revisarCheckbox = function () {
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
                    }
                    revisarCheckbox();
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
                    var palabra = $(this).find('td').eq(1).text();
                    $(this).attr("hidden", !palabra.includes(busqueda));
                });
            });

            $container.find('select').on('change', function () {
                controlBoton();
            });
        }

        plugin.formatoinventario = function () {
            $('input[name=recientes_dias]').numeric();
            $('#recientes').attr('hidden', true);

            $('input[name=recientes_dias]').on('blur', function () {
                if ($(this).val() != '') {
                    recientes($(this).val());
                    controlBotonFormatoInventario();
                }
            });

            $('select[name=movimientos_recientes]').on('change', function () {
                if ($(this).val() == "Si") {
                    $('#recientes').attr('hidden', false);
                    if ($('input[name=recientes_dias]').val() != '')
                        recientes($('input[name=recientes_dias]').val());
                } else
                    $('#recientes').attr('hidden', true);

                controlBotonFormatoInventario();
            });

            $('select[name=formato]').on('change', function () {
                controlBotonFormatoInventario();
            });

            $('select[name=almacen]').on('change', function () {
                controlBotonFormatoInventario();
            });

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
                    }
                    revisarCheckbox();
                } else {
                    if ($this.prop('checked')) {
                        $container.find('.generado').prop('checked', true);
                        $container.find('.generadoc').prop('checked', true);
                    } else {
                        $container.find('.generado').prop('checked', false);
                        $container.find('.generadoc').prop('checked', false);
                    }
                }
                if ($('select[name=movimientos_recientes]').val() == "Si") {
                    if ($('input[name=recientes_dias]').val() != '')
                        recientes($('input[name=recientes_dias]').val());
                }
                controlBoton();
            });

            $('#producto_search').on('keyup', function () {
                var busqueda = $(this).val();
                $container.find('#reporte_table tbody tr').filter(function () {
                    var palabra = $(this).find('td').eq(1).text();
                    $(this).attr("hidden", !palabra.includes(busqueda));
                });
            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


