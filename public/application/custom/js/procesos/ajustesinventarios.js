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

        plugin.new = function (anio, mes) {
            var minDate = new Date(anio + '/' + mes + '/' + '01');
            var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth() + 1));
            maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate() - 1));

            container.find('input[name=ajusteinventario_fecha]').datepicker({
                startDate: minDate,
                endDate: maxDate,
                format: 'dd/mm/yyyy',
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/autocomplete/getproductos?q=%QUERY',
                    wildcard: '%QUERY'
                }
            });

            $('input#producto_autocomplete').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit: 5,
            });

            $('input#producto_autocomplete').bind('typeahead:select', function (ev, suggestion) {
                $('input[name=idproducto]').val(suggestion.id);
            });
            
            $('input[name=ajusteinventario_cantidad]').numeric();
        }

        plugin.edit = function (anio, mes) {
            var minDate = new Date(anio + '/' + mes + '/' + '01');
            var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth() + 1));
            maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate() - 1));

            container.find('input[name=ajusteinventario_fecha]').datepicker({
                startDate: minDate,
                endDate: maxDate,
                format: 'dd/mm/yyyy',
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/autocomplete/getproductos?q=%QUERY',
                    wildcard: '%QUERY'
                }
            });

            $('input#producto_autocomplete').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit: 5,
            });

            $('input#producto_autocomplete').bind('typeahead:select', function (ev, suggestion) {
                $('input[name=idproducto]').val(suggestion.id);
            });
            
            $('input[name=ajusteinventario_cantidad]').numeric();
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


