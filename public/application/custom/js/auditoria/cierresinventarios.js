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
        
        var revisadaControl = function () {
            $('select[name=inventariomes_revisada]').on('change', function () {
                var selected = $('select[name=inventariomes_revisada] option:selected').val();

                if (selected == 1) {
                    $container.find('table input:checkbox').prop('checked', true)
                    //$('#productos_table tbody input[type=checkbox]').prop('checked', true);
                } else {
                    //$container.find('table input:checkbox').prop('checked', false)
                    $('#reporte_table tbody input[type=checkbox]').prop('checked', false);
                }
            });
            $('#reporte_table tbody input[type=checkbox]').on('change', function () {
                var all_checked = true;
                $('#reporte_table tbody input[type=checkbox]').filter(function () {
                    if (!$(this).prop('checked')) {
                        all_checked = false;
                    }
                });
                if (!all_checked) {
                    $('select[name=inventariomes_revisada]').val(0);
                } else {
                    $('select[name=inventariomes_revisada]').val(1);
                }
            });
        }
        
        var calcular = function ($tr) {
            var table=$('#reporte_table');
            var explo=parseFloat($tr.find('input[name*=inventariomesdetalle_explosion]').val());
            if($.isNumeric($tr.find('input[name*=inventariomesdetalle_stockfisico]').val()))
                var stfisico = parseFloat($tr.find('input[name*=inventariomesdetalle_stockfisico]').val());
            else {
                $tr.find('input[name*=inventariomesdetalle_stockfisico]').val(0)
                var stfisico = 0;
            }
            var stteorico = $tr.find('input[name*=inventariomesdetalle_stockteorico]').val();
            var totalFisico= (stfisico) + (explo);
            var costoPromedio=$tr.find('input[name*=inventariomesdetalle_costopromedio]').val();
            var impFis= totalFisico * costoPromedio;
            var difImpprev=$tr.find('input[name*=inventariomesdetalle_difimporte]').val();
            var impFisprev=$tr.find('input[name*=inventariomesdetalle_importefisico]').val();
            
            $tr.find('td.inventariomesdetalle_totalfisico span').html(totalFisico);
            $tr.find('input[name*=inventariomesdetalle_totalfisico]').val(totalFisico);
            
            $tr.find('td.inventariomesdetalle_importefisico span').html(impFis);
            $tr.find('input[name*=inventariomesdetalle_importefisico]').val(impFis);
            
            var dif = stteorico - totalFisico;
            
            $tr.find('td.inventariomesdetalle_diferencia span').html(dif);
            $tr.find('input[name*=inventariomesdetalle_diferencia]').val(dif);
            
            var difImporte = dif * costoPromedio;
            
            $tr.find('td.inventariomesdetalle_difimporte span').html(difImporte);
            $tr.find('input[name*=inventariomesdetalle_difimporte]').val(difImporte);
            
            var cat=$tr.find('input[name*=idcategoria]').val();
            
            if(cat==1) {
                var falim=table.find('input[name*=inventariomes_finalalimentos]').val();
                falim-=impFisprev;
                falim+=impFis;
                table.find('input[name*=inventariomes_finalalimentos]').val(falim);
                table.find("td.inventariomes_finalalimentos span").html(falim);
            }
            if(cat==2) {
                var fbeb=table.find('input[name*=inventariomes_finalbebidas]').val();
                fbeb-=impFisprev;
                fbeb+=impFis;
                table.find('input[name*=inventariomes_finalbebidas]').val(fbeb);
                table.find("td.inventariomes_finalbebidas span").html(fbeb);
            }
            
            if(difImpprev<0) {
                var faltante=table.find("td.inventariomes_faltantes span").html();
                faltante-=difImpprev;
                table.find("td.inventariomes_faltantes span").html(faltante);
                table.find('input[name*=inventariomes_faltantes]').val(faltante);
            } else {
                var sobrante=table.find("td.inventariomes_sobrantes span").html();
                sobrante-=difImpprev;
                table.find("td.inventariomes_sobrantes span").html(sobrante);
                table.find('input[name*=inventariomes_sobrantes]').val(sobrante);
            }
            
            var sobrante=parseFloat(table.find("td.inventariomes_sobrantes span").html());
            var faltante=parseFloat(table.find("td.inventariomes_faltantes span").html());
            
            if(difImporte<0) {
                faltante=faltante+difImporte;
            } else {
                sobrante=sobrante+difImporte;
            }
            
            table.find("td.inventariomes_faltantes span").html(faltante);
            table.find('input[name*=inventariomes_faltantes]').val(faltante);
            
            table.find("td.inventariomes_sobrantes span").html(sobrante);
            table.find('input[name*=inventariomes_sobrantes]').val(sobrante);
            
            var total = sobrante + faltante;
            table.find("td.inventariomes_total span").html(total);
            table.find('input[name*=inventariomes_total]').val(total);
            
            var impFisTotal=table.find('input[name*=inventariomes_totalimportefisico]').val();
            impFisTotal-=impFisprev;
            impFisTotal+=impFis;
            table.find("td.inventariomes_totalimportefisico span").html(total);
            table.find('input[name*=inventariomes_totalimportefisico]').val(impFisTotal);
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
                    '<form method="post" action="/auditoria/cierresemana/eliminar/' + id + '">',
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
            
            $('#batch_inventario_b').attr('disabled', true);
            $('select[name=idalmacen]').on('change', function () {
                var $this=$(this);
                if($this.val()!=0) {
                    var id=$this.val();
                    $.ajax({
                        async: false,
                        type: "POST",
                        url: "/auditoria/cierresemana/encargado",
                        dataType: "json",
                        data: {id: id},
                        success: function (data) {
                            if(data){
                                $('#batch_inventario_b').attr('disabled', false);
                            } else {
                                $('#batch_inventario_b').attr('disabled', true);
                                alert("Almacen sin encargado");
                            }
                        },
                    });
                }
            });
            
            $container.find('table input:text').on('blur',function(){
                var $tr = $(this).closest('tr');
                calcular($tr);
            });
            var inventario_array = {};
            
            
            
            $('#subir_inventario').on('click', function () {
                $('input[name=batch_inventario]').trigger('click');
            });
            $('input[name=batch_inventario]').on('change', function () {
                var auditor = $('select[name=idauditor]').val();
                var almacen = $('select[name=idalmacen]').val();
                if (almacen!=0 && auditor!=0) {
                    
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
                                    url: '/auditoria/cierresemana/batch',
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
                                            $container.find('#boton_g').slideDown();
                                            $container.find('#revisada').slideDown();
                                            revisadaControl();
                                            $container.find('input').numeric();
                                            $('#reporte_table tbody input[type=text]').on('change', function () {
                                                var $tr = $(this).closest("tr");
                                                calcular($tr);//mandar el total
                                            });
                                        } else {
                                            $('#reporte_table > tbody').empty();
                                            $container.find('#boton_g').slideUp();
                                            $container.find('#revisada').slideUp();
                                        }
                                    }
                                })
                            }
                            reader.readAsBinaryString(f);
                        }
                    }
                } else {
                    alert("Selecciona un almacen y auditor");
                }

            });
            revisadaControl();
            
            
        }
        
        plugin.edit = function () {
            $container.find('table input:text').on('blur',function(){
                var $tr = $(this).closest('tr');
                calcular($tr);
            });
            var inventario_array = {};
            $('#subir_inventario').on('click', function () {
                $('input[name=batch_inventario]').trigger('click');
            });
            $('input[name=batch_inventario]').on('change', function () {
                if ($('select[name=auditor]').val() != "" && $('select[name=almacen]').val() != "") {
                    var auditor = $('select[name=idauditor]').val();
                    var almacen = $('select[name=idalmacen]').val();
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
                                    url: '/auditoria/cierresemana/batch',
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
                                            revisadaControl();
                                            $container.find('input').numeric();
                                            $('#reporte_table tbody input[type=text]').on('change', function () {
                                                var $tr = $(this).closest("tr");
                                                calcular($tr);//mandar el total
                                            });
                                        } else {
                                            $('#reporte_table > tbody').empty();
                                        }
                                    }
                                })
                            }
                            reader.readAsBinaryString(f);
                        }
                    }
                } else {
                    alert("Selecciona un almacen y auditor");
                }

            });
            revisadaControl();
            
            
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


