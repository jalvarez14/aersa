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
        
        var revisarSelect = function () {
            var checkbox = false;
            $container.find('.generado').filter(function () {
                if ($(this).prop('checked'))
                    checkbox = true;
            });
            var inicio=(container.find('input[name=fecha_inicio]').val().length!=0) ? true: false;
            var fin=(container.find('input[name=fecha_fin]').val().length!=0) ? true: false;
            var activar = true;
            if (checkbox&&inicio&&fin)
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
            
            container.find('input[name=fecha_fin]').attr('disabled',true);


            $('input[name=fecha_inicio]').on('change', function () {
                var str = $(this).val();
                var res = str.split("/");
                container.find('input[name=fecha_fin]').val("");
                $('#generar_reporte').prop("type", "submit");
                container.find('input[name=fecha_fin]').attr('disabled',false);
                container.find('input[name=fecha_fin]').datepicker({
                    format: 'dd/mm/yyyy',
                    minDate: new Date(res[2]+"/"+res[1]+"/"+res[0]),
                    beforeShowDay: function (date) {
                        var a = new Array();
                        a[0] = date.getDay() == 0;
                        a[1] = '';
                        a[2] = '';
                        return a;
                    }
                });
                container.find('input[name=fecha_fin]').datepicker( "option", "minDate", new Date(res[2]+"/"+res[1]+"/"+res[0]) );
                revisarSelect();
            });

            $('input[name=fecha_fin]').on('change', function () {
                revisarSelect();
            });
            
            $container.find('input:checkbox').on('click', function () {
                revisarSelect();
            });
            
            $('#generar').on('click', function () {
                var almacenes= new Array();
                $container.find('.generado').filter(function () {
                if ($(this).prop('checked'))
                        almacenes.push($(this).attr('id'));
                });
                
                var inicio=container.find('input[name=fecha_inicio]').val();
                var fin=container.find('input[name=fecha_fin]').val();
                var table = $('#reporte_table');
                $.ajax({
                    async: false,
                    type: "POST",
                    url: "/reportes/kardex",
                    dataType: "json",
                    data: {almacenes:almacenes,inicio:inicio,fin:fin},
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


