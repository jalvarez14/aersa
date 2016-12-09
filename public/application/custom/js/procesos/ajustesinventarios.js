(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.ajustesinventarios = function (data) {
        var _this = $(this);
        var plugin = _this.data('ajustesinventarios');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.ajustesinventarios(this, data);

            _this.data('ajustesinventarios', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.ajustesinventarios = function (container, options) {

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
            
            var table = $container.find('#datatable');
            $.ajax({
                url: '/application/json/datatable/lang_es.json',
                dataType: 'json',
                success: function (data) {
                    table.dataTable({
                        "language": data,
                        "order": [],
                    });
                },
            });
            //ELIMINAR CUENTA BANCARIA
            $('.delete_modal').click(function () {
                var id = $(this).closest('tr').attr('id');
                var tmpl = [
                    // tabindex is required for focus
                    ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                    '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>',
                    '</div>',
                    '<form method="post" action="/procesos/ajustesinventarios/eliminar/' + id + '">',
                    '<div class="modal-body">',
                    '<p>¿Estas seguro que deseas eliminar el registro seleccionado?</p>',
                    '</div>',
                    '<div class="modal-footer">',
                    '<a href="#" data-dismiss="modal" class="btn btn-default">Cancelar</a>',
                    '<button class="btn btn-danger" type="submit">Eliminar</button>',
                    '</div>',
                    '</form>',
                    '</div>'
                ].join('');
                $(tmpl).modal();
            });
        }

        function firstDayOfWeek(year, week) {

            // Jan 1 of 'year'
            var d = new Date(year, 0, 1),
                    offset = d.getTimezoneOffset();

            // ISO: week 1 is the one with the year's first Thursday 
            // so nearest Thursday: current date + 4 - current day number
            // Sunday is converted from 0 to 7
            d.setDate(d.getDate() + 4 - (d.getDay() || 7));

            // 7 days * (week - overlapping first week)
            d.setTime(d.getTime() + 7 * 24 * 60 * 60 * 1000
                    * (week + (year == d.getFullYear() ? -1 : 0)));

            // daylight savings fix
            d.setTime(d.getTime()
                    + (d.getTimezoneOffset() - offset) * 60 * 1000);

            // back to Monday (from Thursday)
            d.setDate(d.getDate() - 3);

            return d;
        }
        
        function getWeekNumber(d) {
            // Copy date so don't modify original
            d = new Date(+d);
            d.setHours(0,0,0);
            // Set to nearest Thursday: current date + 4 - current day number
            // Make Sunday's day number 7
            d.setDate(d.getDate() + 4 - (d.getDay()||7));
            // Get first day of year
            var yearStart = new Date(d.getFullYear(),0,1);
            // Calculate full weeks to nearest Thursday
            var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);
            // Return array of year and week number
            return weekNo;
        }
        
        plugin.new = function (anio, mes) {
            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);

           
            if(settings.idrol != 5){
                $.ajax({
                    url:'/autocomplete/getultimasemanarevisada',
                    dataType: 'json',
                    async: false,
                    success: function (data) {
                       if(data.response){
                            settings.semanarevisada = data.semanarevisada;
                            var minDate = firstDayOfWeek(data.semanarevisada.semanarevisada_anio,(data.semanarevisada.semanarevisada_semana + 1));
                            var min_semana_activa = firstDayOfWeek(anio,mes);
                            var maxDate = new Date(min_semana_activa);
                            maxDate.setDate(min_semana_activa.getDate() + 6);
                            container.find('input[name=ajusteinventario_fecha]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                           
                       }else{
                            container.find('input[name=ajusteinventario_fecha]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                       }
                    },
                });
            }else{
                container.find('input[name=ajusteinventario_fecha]').datepicker({
                    startDate:minDate,
                    endDate:maxDate,
                    format: 'dd/mm/yyyy',
                });
            }
            
            $('input[name=ajusteinventario_fecha]').on('changeDate', function(e) {
                var date = $('input[name=ajusteinventario_fecha]').val();
                $.ajax({
                    url:'/autocomplete/getalmacenesbyinventario',
                    type: 'POST',
                    dataType: 'json',
                    data:{date:date},
                    success: function (data, textStatus, jqXHR) {
                        $container.find('select[name=idalmacen] option').remove();
       
                        $.each(data,function(index,value){
                            var option = $('<option>');
                            option.text(value);
                            option.attr('value',index);
                   
                            $('select[name=idalmacen]').append(option);
                        });
                    }
                });
            }); 
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/autocomplete/getproductosforajustesinventarios?q=%QUERY',
                    wildcard: '%QUERY'
                }
            });

            $('input#producto_autocomplete').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit: 100,
            });

            $('input#producto_autocomplete').bind('typeahead:select', function (ev, suggestion) {
                $('input[name=idproducto]').val(suggestion.id);
            });
            
            $('input[name=ajusteinventario_cantidad]').numeric();
        }

        plugin.edit = function (anio, mes) {
            
            //VALIDA SI TODAVIA SE PUEDE EDITAR SEGUN EL INVENTARIOS MES
            var date = $('input[name=ajusteinventario_fecha]').val();
            var idalmacen = $('select[name=idalmacen] option:selected').val();
            $.ajax({
                url:'/autocomplete/validateprocessbyinventariomes',
                type: 'POST',
                dataType: 'json',
                async: false,
                data:{date:date,almacen:{0:idalmacen}},
                success: function (data, textStatus, jqXHR) {
                    if(!data){
                        $container.find('input,select,button').attr('disabled',true);
                    }
                }
            });
            
            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);

            if(settings.idrol != 5){
                $.ajax({
                    url:'/autocomplete/getultimasemanarevisada',
                    dataType: 'json',
                    async: false,
                    success: function (data) {
                       if(data.response){
                            settings.semanarevisada = data.semanarevisada;
                            var minDate = firstDayOfWeek(data.semanarevisada.semanarevisada_anio,(data.semanarevisada.semanarevisada_semana + 1));
                            var min_semana_activa = firstDayOfWeek(anio,mes);
                            var maxDate = new Date(min_semana_activa);
                            maxDate.setDate(min_semana_activa.getDate() + 6);
                            container.find('input[name=ajusteinventario_fecha]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                           
                       }else{
                            container.find('input[name=ajusteinventario_fecha]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                       }
                    },
                });
            }else{
                container.find('input[name=ajusteinventario_fecha]').datepicker({
                    startDate:minDate,
                    endDate:maxDate,
                    format: 'dd/mm/yyyy',
                });
            }
            
             $('input[name=ajusteinventario_fecha]').on('changeDate', function(e) {
                var date = $('input[name=ajusteinventario_fecha]').val();
                $.ajax({
                    url:'/autocomplete/getalmacenesbyinventario',
                    type: 'POST',
                    dataType: 'json',
                    data:{date:date},
                    success: function (data, textStatus, jqXHR) {
                        $container.find('select[name=idalmacen] option').remove();
       
                        $.each(data,function(index,value){
                            var option = $('<option>');
                            option.text(value);
                            option.attr('value',index);
                   
                            $('select[name=idalmacen]').append(option);
                        });
                    }
                });
            }); 
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/autocomplete/getproductosforajustesinventarios?q=%QUERY',
                    wildcard: '%QUERY'
                }
            });

            $('input#producto_autocomplete').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit: 100,
            });

            $('input#producto_autocomplete').bind('typeahead:select', function (ev, suggestion) {
                $('input[name=idproducto]').val(suggestion.id);
            });
            
            $('input[name=ajusteinventario_cantidad]').numeric();
            
            //COMENTARIOS
            var id = $('input[name=idajusteinventario]').val();
            $('#comentarios_container').comentarios({
                table:'ajusteinventarionota',
                id: id,
                parent:'idajusteinventario',
            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


