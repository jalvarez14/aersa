(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.cierresinventarios = function (data) {
        var _this = $(this);
        var plugin = _this.data('cierresinventarios');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.cierresinventarios(this, data);

            _this.data('cierresinventarios', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.cierresinventarios = function (container, options) {

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

        function to_json(workbook) {
            var result = {};
            workbook.SheetNames.forEach(function (sheetName) {
                var rObjArr = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
                if (rObjArr.length > 0) {
                    result[sheetName] = rObjArr;
                }
            });
            return result;
        }

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
                    '<form method="post" action="/flujoefectivo/cuentabancaria/eliminar/' + id + '">',
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

        plugin.new = function () {

            var inventario_array = {};
            $('#subir_inventario').on('click', function () {
                $('input[name=batch_inventario]').trigger('click');
            });
            $('input[name=batch_inventario]').on('change', function () {
                if ($('select[name=auditor]').val() != "" && $('select[name=almacen]').val() != "") {
                    var auditor = $('select[name=auditor]').val();
                    var almacen = $('select[name=almacen]').val();
                    var empty = false;
                    var val = $('input[name=batch_inventario]').val();
                    if (val == "") {
                        empty = true;
                    }

                    if (!empty) {

                        var files = $('input[name=batch_inventario]').get(0).files;

                        var i, f;
                        for (i = 0, f = files[i]; i != files.length; ++i) {
                            var reader = new FileReader();
                            var name = f.name;
                            reader.onload = function (e) {
                                var data = e.target.result;
                                var workbook = XLSX.read(data, {type: 'binary'});
                                var first_sheet_name = workbook.SheetNames[6];
                                var workbook_array = to_json(workbook);

//                            for (var k in workbook_array) {
//                                //Imprime correctamente pero no se si existe otra manera ya que yo limito a 28 productos
//                                console.log(workbook_array[k]);
//                            }
                                var table = $('#reporte_table');
                                $.ajax({
                                    url: '/administracion/reportes/cierresinventarios/batch',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {inventario: workbook_array, almacen: almacen, auditor: auditor},
                                    beforeSend: function (xhr) {
                                        $('body').addClass('loading');
                                    },
                                    success: function (data, textStatus, jqXHR) {
                                        $('body').removeClass('loading');
                                        if (data.length != 0) {
                                            $('#reporte_table > tbody').empty();
                                            for (var k in data) {
                                                table.append(data[k]);
                                            }
                                        }
                                    }
                                })


//                           for (var k in workbook_array) {
//                               console.log(workbook_array[k]);
//                           }


//                            if(workbook_array[first_sheet_name].length > 0){
//                                $.ajax({
//                                    url:'/catalogo/proveedor/batch',
//                                    type: 'POST',
//                                    dataType: 'json',
//                                    data:{proveedores:workbook_array[first_sheet_name]},
//                                    beforeSend: function (xhr) {
//                                        $('body').addClass('loading');
//                                    },
//                                    success: function (data, textStatus, jqXHR) {
//                                        $('body').removeClass('loading');
//                                        if(data.response){
//                                            window.location = '/catalogo/proveedor';
//                                        }
//                                    }
//                                })
//                            }
                            }
                            reader.readAsBinaryString(f);

                        }

                    }
                } else {
                    alert("Selecciona un almacen y auditor");
                }

            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


