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
            $('#generar_pdf').attr('disabled', activar);
            $('#generar_excel').attr('disabled', activar);
        }

        var controlBotonFormatoInventario = function () {
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
        var revisarCheckboxEntradasporcompra = function () {
            var proveedor = false;
            var almacen = false;
            var producto = false;
            $container.find('.proveedor').filter(function () {
                if ($(this).prop('checked'))
                    proveedor = true;
            });

            $container.find('.almacen').filter(function () {
                if ($(this).prop('checked'))
                    almacen = true;
            });

            $container.find('.producto').filter(function () {
                if ($(this).prop('checked'))
                    producto = true;
            });
            var activar = (proveedor && almacen && producto) ? false : true;
            $('#generar_reporte').attr('disabled', activar);
            $('#generar_excel').attr('disabled', activar);
            $('#generar_pdf').attr('disabled', activar);
        }

        plugin.variacioncostos = function (no_data) {
            if (no_data == 1) {
                $('form input,form select,form button[type=submit]').attr('disabled', true);
                $('#no_data').html('No existen registros para reporte')
            } else {
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
                
                /*
                $('#producto_search').on('keyup', function () {
                    var busqueda = $(this).val();
                    $container.find('#reporte_table tbody tr').filter(function () {

                        var palabra = $(this).find('td').eq(1).text();
                        $(this).attr("hidden", !palabra.includes(busqueda));
                    });
                });
                */
               
               var table = $container.find('#reporte_table');
                $.ajax({
                    url:'/application/json/datatable/lang_es.json',
                    dataType:'json',
                    success:function(data){
                       table.dataTable({
                           "language":data,
                           "order":[],
                           "bPaginate": false
                       });
                    },
                });
                $container.find('select').on('change', function () {
                    controlBoton();
                });
            }
        }

        plugin.formatoinventario = function () {

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

        plugin.entradasporcompras = function (mes_min, anio_min, mes_max, anio_max, existencia) {
            revisarCheckboxEntradasporcompra();
            if (existencia == 1) {
                var minDate = new Date(anio_min + '/' + mes_min + '/' + '01');
                var maxDate = new Date(anio_max + '/' + mes_max + '/' + '31');

                container.find('input[name=fecha_inicial]').datepicker({
                    startDate: minDate,
                    endDate: maxDate,
                    format: 'dd/mm/yyyy',
                });

                container.find('input[name=fecha_final]').datepicker({
                    startDate: minDate,
                    endDate: maxDate,
                    format: 'dd/mm/yyyy',
                });
            } else {
                $('input[name=fecha_inicial]').attr('disabled', true);
                $('input[name=fecha_final]').attr('disabled', true);
                $('#generar_reporte').attr('disabled', true);
                $('#generar_excel').attr('disabled', true);
                $('#generar_pdf').attr('disabled', true);
                $('#no_data').html('No existen registros de compras')
            }

            $.ajax({
                url: '/application/json/datatable/lang_es.json',
                dataType: 'json',
                success: function (data) {
                    var table = $container.find('#proveedores_table').dataTable({
                        "lengthMenu": [ 10, 25, 50, 100, 200, 500 ],
                        "language": data,
                        "order": [],
                    });
                    
                    var table2 = $container.find('#productos_table').dataTable({
                        "lengthMenu": [ 10, 25, 50, 100, 200, 500 ],
                        "language": data,
                        "order": [],
                    });
                    
                    var table3 = $container.find('#almacenes_table').dataTable({
                        "lengthMenu": [ 10, 25, 50, 100, 200, 500 ],
                        "language": data,
                        "order": [],
                    });
                    
                    
                    $('form#entradasporcomprasForm').on('submit',function(e){

        
                        $(table.fnGetNodes()).each(function(){
                            var checkbox = $(this).find('input');
                            if(checkbox.is(":checked")){
                                $('form#entradasporcomprasForm').append(
                                    $('<input>')
                                       .attr('type', 'hidden')
                                       .attr('name', checkbox.attr('name'))
                                       .attr('checked',true)

                                 );
                            }

                        });
                        
                        $(table2.fnGetNodes()).each(function(){
                            var checkbox = $(this).find('input');
                            if(checkbox.is(":checked")){
                                $('form#entradasporcomprasForm').append(
                                    $('<input>')
                                       .attr('type', 'hidden')
                                       .attr('name', checkbox.attr('name'))
                                       .attr('checked',true)

                                 );
                            }

                        });
                        
                        $(table3.fnGetNodes()).each(function(){
                            var checkbox = $(this).find('input');
                            if(checkbox.is(":checked")){
                                $('form#entradasporcomprasForm').append(
                                    $('<input>')
                                       .attr('type', 'hidden')
                                       .attr('name', checkbox.attr('name'))
                                       .attr('checked',true)

                                 );
                            }

                        });
                     
 
                    });
                },
            });


            $('#proveedores_sel').on('click', function () {
                $container.find('#proveedores_table input:checkbox').prop('checked', true);
                revisarCheckboxEntradasporcompra();
            });

            $('#proveedores_des').on('click', function () {
                $container.find('#proveedores_table input:checkbox').prop('checked', false);
                revisarCheckboxEntradasporcompra();
            });

            $('#almacenes_sel').on('click', function () {
                $container.find('#almacenes_table input:checkbox').prop('checked', true);
                revisarCheckboxEntradasporcompra();
            });

            $('#almacenes_des').on('click', function () {
                $container.find('#almacenes_table input:checkbox').prop('checked', false);
                revisarCheckboxEntradasporcompra();
            });

            $('#productos_sel').on('click', function () {
                $container.find('#productos_table input:checkbox').prop('checked', true);
                revisarCheckboxEntradasporcompra();
            });

            $('#productos_des').on('click', function () {
                $container.find('#productos_table input:checkbox').prop('checked', false);
                revisarCheckboxEntradasporcompra();
            });

            $container.find('input:checkbox').on('click', function () {
                revisarCheckboxEntradasporcompra();
            });
        }

        plugin.informeacumulados = function (no_data, mes_min, anio_min, mes_max, anio_max, dia_max) {
            if (no_data == 1) {
                $('input[name=fecha_inicial]').attr('disabled', true);
                $('input[name=fecha_final]').attr('disabled', true);
                $('#generar_reporte').attr('disabled', true);
                $('#generar_excel').attr('disabled', true);
                $('#generar_pdf').attr('disabled', true);
                $('#no_data').html('No existen registros de flujo efectivo')
            }

            var minDate = new Date(anio_min + '/' + mes_min + '/' + '01');
            var maxDate = new Date(anio_max + '/' + mes_max + '/' + dia_max);

            container.find('input[name=fecha_inicial]').datepicker({
                startDate: minDate,
                endDate: maxDate,
                format: 'dd/mm/yyyy',
            });

            container.find('input[name=fecha_final]').datepicker({
                startDate: minDate,
                endDate: maxDate,
                format: 'dd/mm/yyyy',
            });
            $('input[name=fecha_inicial]').on('blur', function () {
                if ($(this).val() != "" && $('input[name=fecha_final]').val() != "")
                    $('#generar_reporte').prop("type", "button");
                else
                    $('#generar_reporte').prop("type", "submit");
            });

            $('input[name=fecha_final]').on('blur', function () {
                if ($(this).val() != "" && $('input[name=fecha_inicial]').val() != "")
                    $("#generar_reporte").prop("type", "button");
                else
                    $('#generar_reporte').prop("type", "submit");
            });

            $("#generar_reporte").on('click', function () {
                if ($(this).attr('type') == "button") {
                    var inicio = $('input[name=fecha_inicial]').val();
                    var fin = $('input[name=fecha_final]').val();
                    var table = $('#reporte_table');
                    $.ajax({
                        async: false,
                        type: "POST",
                        url: "/reportes/informeacumulados",
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


