(function ($) {

    function getAlmacenesSucDes() {
        var idsucdes = $("[name=idsucursaldestino]").val();
        $.ajax({
            async: false,
            type: "GET",
            url: "/procesos/requisicion/getalmdes/" + idsucdes,
            dataType: "json",
            success: function (data) {
                if (data.length != 0)
                {
                    $("[name=idalmacendestino]").html('');
                    for (var k in data)
                    {
                        if ((idsucdes == $("[name=idsucursalorigen]").val()) && ($("[name=idalmacenorigen]").val() == data[k]['Idalmacen']))
                        {
                        } else
                            $("[name=idalmacendestino]").append('<option value="' + data[k]['Idalmacen'] + '">' + data[k]['AlmacenNombre'] + '</option>');
                    }
                } else
                {
                    $("[name=idalmacendestino]").html('');
                    alert('No existen almacenes para sucursal destino');
                }
            },
        });
        var almorg = $("[name=idalmacenorigen] option:selected").text();
        var almdes = $("[name=idalmacendestino] option:selected").text();
        var sucorg = $("[name=idsucursalorigen]").val();
        var sucdes = $("[name=idsucursaldestino]").val();
        $.ajax({
            type: "GET",
            url: "/procesos/requisicion/getconcepsal/" + almorg + "/" + almdes + "/" + sucorg + "/" + sucdes,
            dataType: "json",
            success: function (data) {
                if (data.length != 0)
                {
                    $("[name=idconceptosalida]").html('');
                    for (var k in data)
                    {
                        $("[name=idconceptosalida]").append('<option value="' + data[k]['Idconceptosalida'] + '">' + data[k]['ConceptosalidaNombre'] + '</option>');
                    }
                } else
                {
                    $("[name=idconceptosalida]").html('');
                    alert('No existen concepto para requisicion');

                }
            },
        });
    }

    function getConceptos() {
        var almorg = $("[name=idalmacenorigen] option:selected").text();
        var almdes = $("[name=idalmacendestino] option:selected").text();
        var sucorg = $("[name=idsucursalorigen]").val();
        var sucdes = $("[name=idsucursaldestino]").val();
        var almacen = ["Almacén general", "Cocina", "Barra", "Créditos al costo", "Bonificados", "Consignación", "Servicio"];
        var banddes = true;
        var bandorg = true;
        for (var a = 0; a < almacen.length; a++) {
            if (almacen[a] == almorg)   {
                bandorg = false;
                a=almacen.length;
            }
        }
        for (var a = 0; a < almacen.length; a++) {
            if (almacen[a] == almdes) {
                banddes = false;
                a=almacen.length;
            }
        }
        if(bandorg)
            almorg="Otro";
        if(banddes)
            almdes="Otro";
        $.ajax({
            async: false,
            type: "GET",
            url: "/procesos/requisicion/getconcepsal/" + almorg + "/" + almdes + "/" + sucorg + "/" + sucdes,
            dataType: "json",
            success: function (data) {
                console.log(data);
                if (data.length != 0) {
                    $("[name=idconceptosalida]").html('');
                    for (var k in data) {
                        $("[name=idconceptosalida]").append('<option value="' + data[k]['Idconceptosalida'] + '">' + data[k]['ConceptosalidaNombre'] + '</option>');
                    }
                } else {
                $("[name=idconceptosalida]").html('');
                alert('No existen concepto para requisicion');
                }
            },
        });
    }
    
    function updateAlmacen(almdes, almorg) {
        var idsucdes = $("[name=idsucursaldestino]").val();
        $.ajax({
            async: false,
            type: "GET",
            url: "/procesos/requisicion/getalmdes/" + idsucdes,
            dataType: "json",
            success: function (data) {
                if (data.length != 0) {
                    $("[name=idalmacendestino]").html('');
                    for (var k in data) {
                        if (((idsucdes == $("[name=idsucursalorigen]").val()) && ($("[name=idalmacenorigen]").val() != data[k]['Idalmacen'])))
                            $("[name=idalmacendestino]").append('<option value="' + data[k]['Idalmacen'] + '">' + data[k]['AlmacenNombre'] + '</option>');
                    }
                    if (almdes != almorg) {
                        $("[name=idalmacendestino]").val(almdes);
                        var a = document.getElementsByName('idalmacendestino');
                        //a.value = almdes;

                    }
                    getConceptos();
                } else {
                    alert('No existen concepto para requisicion');
                }
            },
        });
        getConceptos();
    }

    $('[name=idsucursaldestino]').on('change', function () {
        getAlmacenesSucDes();
    });
    
    $('[name=idalmacenorigen]').on('change', function () {
        var almorg = $("[name=idalmacenorigen]").val();
        var almdes = $("[name=idalmacendestino]").val();
        var sucorg = $("[name=idsucursalorigen]").val();
        var sucdes = $("[name=idsucursaldestino]").val();
        if (sucdes == sucorg)
            updateAlmacen(almdes, almorg);
        else
            getConceptos();


    });
    
    $('[name=idalmacendestino]').on('change', function () {
        getConceptos();
    });
    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.requisicion = function (data) {
        var _this = $(this);
        var plugin = _this.data('requisicion');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.requisicion(this, data);

            _this.data('requisicion', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.requisicion = function (container, options) {
        getAlmacenesSucDes();
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

        var caluclator = function ($tr) {
            var cantidad = $tr.find('input[name*=requisiciondetalle_cantidad]').val() != "" ? parseFloat($tr.find('input[name*=requisiciondetalle_cantidad]').val()) : 1;
            var preciounitario = $tr.find('input[name*=requisiciondetalle_preciounitario]').val() != "" ? parseFloat($tr.find('input[name*=requisiciondetalle_preciounitario]').val()) : 0;

            //ROW SUBTOTAL
            var row_subtotal = cantidad * preciounitario;
            $tr.find('input[name*=requisiciondetalle_subtotal]').val(row_subtotal);
            $tr.find('td.requisiciondetalle_subtotal').text(accounting.formatMoney(row_subtotal));

            //COMPRA SUBTOTAL
            var requisicion_subtotal = 0.00;
            $('#productos_table tbody').find('input[name*=requisiciondetalle_subtotal]').filter(function () {
                requisicion_subtotal = requisicion_subtotal + parseFloat($(this).val());
            });

            //COMPRA TOTAL
            var requisicion_total = requisicion_subtotal + row_subtotal - row_subtotal;
            $('#productos_table tfoot').find('#total').text(accounting.formatMoney(requisicion_total));
            $('#productos_table tfoot').find('input[name=requisicion_total]').val(requisicion_total);
        }


        var revisadaControl = function () {
            $('select[name=requisicion_revisada]').on('change', function () {

                var selected = $('select[name=requisicion_revisada] option:selected').val();

                if (selected == 1) {
                    console.log($('#productos_table tbody input[type=checkbox]'));
                    $('#productos_table tbody input[type=checkbox]').prop('checked', true);
                } else {
                    $('#productos_table tbody input[type=checkbox]').prop('checked', false);
                }
            });
            $('#productos_table tbody input[type=checkbox]').on('change', function () {

                var all_checked = true;
                $('#productos_table tbody input[type=checkbox]').filter(function () {
                    if (!$(this).prop('checked')) {
                        all_checked = false;
                    }
                });
                if (!all_checked) {
                    $('select[name=requisicion_revisada]').val(0);
                } else {
                    $('select[name=requisicion_revisada]').val(1);
                }
            });
        }

        /*
         * Public methods
         */
        plugin.list = function (anio, mes) {

            //INICIALIZAMOS DATATABLES
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

            //ELIMINAR COMPRA
            $('.delete_modal').click(function () {

                var id = $(this).closest('tr').attr('id');
                var tmpl = [
                    // tabindex is required for focus
                    ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                    '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>',
                    '</div>',
                    '<form method="post" action="/procesos/compra/eliminar/' + id + '">',
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

            //VALIDAMOS MES Y ANIO EN CURSO PARA VER SI SE PUEDE ELIMINAR CADA UNO DE LOS REGISTROS
            $container.find('#datatable tbody tr').filter(function () {
                var date = new Date($(this).attr('date'));
                if ((date.getMonth() + 1) != mes || (date.getFullYear()) != anio) {
                    $(this).find('.delete_modal').unbind();
                    $(this).find('.delete_modal').css('cursor', 'not-allowed');
                }
            });


        }

        plugin.init = function () {

            settings = plugin.settings = $.extend({}, defaults, options);

        }

        plugin.new = function (anio, mes) {

            var minDate = new Date(anio + '/' + mes + '/' + '01');
            var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth() + 1));
            maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate() - 1));

            container.find('input[name=requisicion_fecha]').datepicker({
                startDate: minDate,
                endDate: maxDate,
                format: 'dd/mm/yyyy',
            });

            container.find('input[name=requisicion_fecha]').datepicker({
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
                $('#producto_add').attr('disabled', false);
                $('input#idproducto').val(suggestion.id);

            });

            var count = 0;
            $('#producto_add').on('click', function () {

                //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO
                var tr = $('<tr id="'+$('input#idproducto').val()+' ">');
                tr.append('<td><input name=productos[' + count + '][requisiciondetalle_subtotal] type=hidden><input type="hidden"  name=productos[' + count + '][idproducto] value="' + $('input#idproducto').val() + '">' + $('input#producto_autocomplete').typeahead('val') + '</td>');
                tr.append('<td class="pro_cantidad"><input required type="text" name=productos[' + count + '][requisiciondetalle_cantidad] value="1"></td>');
                tr.append('<td><input required type="text" class="pu-input" name=productos[' + count + '][requisiciondetalle_preciounitario] value="0"></td>');
                tr.append('<td class="requisiciondetalle_subtotal">' + accounting.formatMoney(0) + '</td>');
                tr.append('<td><input type="checkbox" name=productos[' + count + '][requisiciondetalle_revisada]>  </td>');
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "/procesos/requisicion/gettipopro/" + $('input#idproducto').val(),
                    dataType: "json",
                    success: function (data) {
                        if (data.length != 0) {
                            if(data['ProductoTipo']!='simple')
                                tr.append('<td><a href="javascript:;"><i class="fa fa-list"></i></a></td>');
                        }
                    },
                });
                tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                
                //AQUI HACEMOS HACEMOS NUMERICOS TODOS NUESTRO CAMPOS INPUTS
                tr.find('input').numeric();

                //ADJUNTAMOS EL EVENTO CALCULATOR PARA CALCULAR SUBTOTAL,TOTAL
                tr.find('input').on('blur', function () {
                    var $tr = $(this).closest(tr);
                    caluclator($tr);//mandar el total
                });
                var revisada = $('select[name=requisicion_revisada] option:selected').val();
                if (revisada == 1) {
                    tr.find('input[type=checkbox]').prop('checked', true);
                }

                //INSERTAMOS EN LA TABLA
                $('#productos_table tbody').append(tr);

                //LIMPIAMOS EL AUTOCOMPLETE
                $('input#producto_autocomplete').typeahead('val', '');
                $('input#idproducto').val('');
                $('input#producto_iva').val('');
                $('#producto_add').attr('disabled', true);
                $('#requisicion_save').attr('disabled', false);
                count++;
                tr.find('.fa-trash').on('click', function () {
                    var tr = $(this).closest('tr');
                    tr.remove();
                    if ($('#productos_table tbody tr').length == 0)
                    {
                        $('#requisicion_save').attr('disabled', true);
                        exits = 0;
                    }
                });
                
                tr.find('.fa-list').click(function(){
                    var tmpl2 = "";
                    var id = $(this).closest('tr').attr('id');
                    var can = 0;
                    var value = $(this).closest('tr').find('td').eq(0).text();
                    var td = $(this).closest('tr').find('td.pro_cantidad').find("input:text").each(function() {
                    can =this.value
                    });
                    $.ajax({
                        async: false,
                        type: "GET",
                        url: "/procesos/requisicion/getres/" + id,
                        dataType: "json",
                        success: function (data) {
                            if (data.length != 0) {
                                for (var k in data) {
                                    tmpl2 += [
                                        '<tr> <td>' + k +'</td> <td> '+ (can * data[k]) + '</td>'
                                    ];
                                }
                                
                            }
                        },
                    });
                    var tmpl = [
                      // tabindex is required for focus
                      ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                        '<div class="modal-header">',
                          '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                          '<h4 class="modal-title">'+value+'</h4>', 
                        '</div>',
                          '<div class="modal-body">',
                            '<table class="table" id="productos_table">',
                            '<thead>',
                            '<th>Producto</th>',
                            '<th>Cantidad</th>',
                            '</thead>',
                            '<tbody id="productos_table_tbody">',
                            tmpl2,
                            '</tbody>',
                            
                        '</table>',
                            
                            
                          '</div>',
                          '<div class="modal-footer">',
                            '<a href="#" data-dismiss="modal" class="btn btn-default">Cerrar</a>',
                          '</div>',
                      '</div>'
                    ].join('');
                    $(tmpl).modal();
                  });

                //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
                revisadaControl();
            });

            //VALIDAR FOLIO
            $('input[name=requisicion_folio]').on('blur', function () {
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/requisicion/validatefolio",
                    dataType: "json",
                    data: {folio: folio},
                    success: function (exist) {
                        console.log(exist);
                        if (exist) {
                            alert('El folio "' + folio + '" ya fue utilizado en los últimos 2 meses');
                            $this.val('');
                        } else {
                            $this.addClass('valid');
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