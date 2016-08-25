(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

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

    /*
     * Plugin Constructor
     */

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
        
        plugin.cierresinventarios = function () {
            var inventario_array = {};
            $('#subir_inventario').on('click',function(){
                $('input[name=batch_inventario]').trigger('click');
            });
            $('input[name=batch_inventario]').on('change',function(){
                
                var empty = false;
                var val = $('input[name=batch_inventario]').val();
                if(val == ""){
                    empty = true;
                }
               
                if(!empty){
                   
                    var files = $('input[name=batch_inventario]').get(0).files;
                    
                    var i, f;
                    for (i = 0, f = files[i]; i != files.length; ++i) {
                         var reader = new FileReader();
                         var name = f.name;
                         reader.onload = function (e) {
                             
                            var data = e.target.result;
                            var workbook = XLSX.read(data, {type: 'binary'});
                            var first_sheet_name = workbook.SheetNames[7];
                            var workbook_array = to_json(workbook);
                            var obj=workbook_array[first_sheet_name];
                           for (var k in obj) {
                               console.log(obj[k]);
                           }
                            if(workbook_array[first_sheet_name].length > 0){
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
                            }
                         }
                         reader.readAsBinaryString(f);
                         
                    }
                   
                }
                
            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


