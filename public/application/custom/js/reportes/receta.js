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
            $('#generar_excel').attr('disabled', activar);
            $('#generar_pdf').attr('disabled', activar);

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

            $("#generar_reporte").on('click', function () {
                var subcat=new Array();
                var table = $('#reporte_table tbody');
                
                var url;
                
                $container.find('.tiporep').filter(function () {
                    if ($(this).prop('checked'))
                        url=$(this).val();
                });
                $container.find('.generado').filter(function () {
                    if ($(this).prop('checked'))
                        subcat.push($(this).attr('id'));
                });
                $.ajax({
                    async: false,
                    type: "POST",
                    url: "/reportes/recetas/"+url,
                    dataType: "json",
                    data: {subcat: subcat},
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
            
            $container.find('input:radio').on('change', function () {
                $('#formaction').attr('action', 'recetas/'+$(this).val());
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


