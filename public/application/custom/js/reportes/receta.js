(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.receta = function (data) {
        var _this = $(this);
        var plugin = _this.data('receta');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.receta(this, data);

            _this.data('receta', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.receta = function (container, options) {

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
            $('#generar_pdf').attr('disabled', activar);
            $('#generar_excel').attr('disabled', activar);
        }

        var controlBotones = function () {
            var almacen = true;
            var formato = true;
            var checkbox = false;
            var activar = true;

            if ($('select[name=almacen]').val() == "")
                almacen = false;
            if ($('select[name=formato]').val() == "")
                formato = false;

            $container.find('.generado').filter(function () {
                if ($(this).prop('checked'))
                    checkbox = true;
            });

            if (almacen && formato && checkbox)
                activar = false;
            $('#generar_reporte').attr('disabled', activar);
        }
        /*
         * Public methods
         */

        plugin.init = function () {

            settings = plugin.settings = $.extend({}, defaults, options);


        }
        
        plugin.inicio = function () {
            $('select[name=formato]').on('change', function () {
                controlBotones();
            });

            $('select[name=almacen]').on('change', function () {
                controlBotones();
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
        
        plugin.resumen = function () {
        }

        plugin.detalle = function () {
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


