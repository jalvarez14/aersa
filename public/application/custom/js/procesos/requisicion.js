(function ($) {
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
            var cantidad = $tr.find('input[name*=requisiciondetalle_cantidad]').val() != "" ? parseFloat(parseFloat($tr.find('input[name*=requisiciondetalle_cantidad]').val()).toFixed(6)) : 1;
            var preciounitario = $tr.find('input[name*=requisiciondetalle_preciounitario]').val() != "" ? parseFloat(parseFloat($tr.find('input[name*=requisiciondetalle_preciounitario]').val()).toFixed(6)) : 0;
            //ROW SUBTOTAL
            var row_subtotal = cantidad * preciounitario;
            $tr.find('input[name*=requisiciondetalle_subtotal]').val(row_subtotal);
            $tr.find('td.requisiciondetalle_subtotal').text(accounting.formatMoney(row_subtotal));

            //COMPRA SUBTOTAL
            var requisicion_subtotal = 0.00;
            $('#productos_table tbody').find('input[name*=requisiciondetalle_subtotal]').filter(function () {
                requisicion_subtotal = requisicion_subtotal + parseFloat(parseFloat($(this).val()).toFixed(6));
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
                    $container.find('table input:checkbox').prop('checked', true)
                    //$('#productos_table tbody input[type=checkbox]').prop('checked', true);
                } else {
                    //$container.find('table input:checkbox').prop('checked', false)
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

        var getAlmacenesSucDes = function () {
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
                async: false,
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

        var getConceptos = function () {
            var almorg = $("[name=idalmacenorigen] option:selected").text();
            var almdes = $("[name=idalmacendestino] option:selected").text();
            var sucorg = $("[name=idsucursalorigen]").val();
            var sucdes = $("[name=idsucursaldestino]").val();
            var almacen = ["Almacén general", "Cocina", "Barra", "Créditos al costo", "Bonificados", "Consignación", "Servicio"];
            var banddes = true;
            var bandorg = true;
            for (var a = 0; a < almacen.length; a++) {
                if (almacen[a] == almorg) {
                    bandorg = false;
                    a = almacen.length;
                }
            }
            for (var a = 0; a < almacen.length; a++) {
                if (almacen[a] == almdes) {
                    banddes = false;
                    a = almacen.length;
                }
            }
            if (bandorg)
                almorg = "Otro";
            if (banddes)
                almdes = "Otro";
            $.ajax({
                async: false,
                type: "GET",
                url: "/procesos/requisicion/getconcepsal/" + almorg + "/" + almdes + "/" + sucorg + "/" + sucdes,
                dataType: "json",
                success: function (data) {
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
        
        var inicioEdit= function (sucursal_destino,almacen_origen,almacen_destino,concepto_salida) {
            $.ajax({
                async: false,
                type: "GET",
                url: "/procesos/requisicion/getalmdes/" + sucursal_destino,
                dataType: "json",
                success: function (data) {
                    if (data.length != 0)
                    {
                        $("[name=idalmacendestino]").html('');
                        for (var k in data)
                        {
                            if ((sucursal_destino == $("[name=idsucursalorigen]").val()) && ($("[name=idalmacenorigen]").val() == data[k]['Idalmacen']))
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
            $('[name=idsucursaldestino]').val(sucursal_destino);
            $('[name=idalmacenorigen]').val(almacen_origen);
            var idsucdes = $("[name=idsucursaldestino]").val();
            
            $('[name=idalmacendestino]').val(almacen_destino);
            var almorg = $("[name=idalmacenorigen] option:selected").text();
            var almdes = $("[name=idalmacendestino] option:selected").text();
            var sucorg = $("[name=idsucursalorigen]").val();
            var sucdes = $("[name=idsucursaldestino]").val();
            var almacen = ["Almacén general", "Cocina", "Barra", "Créditos al costo", "Bonificados", "Consignación", "Servicio"];
            var banddes = true;
            var bandorg = true;
            for (var a = 0; a < almacen.length; a++) {
                if (almacen[a] == almorg) {
                    bandorg = false;
                    a = almacen.length;
                }
            }
            for (var a = 0; a < almacen.length; a++) {
                if (almacen[a] == almdes) {
                    banddes = false;
                    a = almacen.length;
                }
            }
            if (bandorg)
                almorg = "Otro";
            if (banddes)
                almdes = "Otro";
            $.ajax({
                async: false,
                type: "GET",
                url: "/procesos/requisicion/getconcepsal/" + almorg + "/" + almdes + "/" + sucorg + "/" + sucdes,
                dataType: "json",
                success: function (data) {
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
            $('[name=idconceptosalida]').val(concepto_salida);
        }

        var updateAlmacen = function (almdes, almorg) {
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
            //getConceptos();
        }

        /*
         * Public methods
         */
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
                    '<form method="post" action="/procesos/requisicion/eliminar/' + id + '">',
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
            $container.find('#datatable tbody tr').filter(function(){
                var date = new Date($(this).attr('date'));
                if(date.format('W') != mes || (date.getFullYear()) != anio){
                    $(this).find('.delete_modal').unbind();
                    $(this).find('.delete_modal').css('cursor','not-allowed');
                }
            });
            
            /*
             * ACL
             */
            
            if(settings.idrol == 5){
                $('.delete_modal').parent('li').remove();
            }
        }

        plugin.init = function () {

            settings = plugin.settings = $.extend({}, defaults, options);

        }

        plugin.new = function (anio, mes) {
            getAlmacenesSucDes();
            
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

            $('[name=requisicion_folio]').attr('maxlength', '10');

            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);

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
                    url: '/procesos/requisicion/getproductos?q=%QUERY',
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
                $('input#unidadmedida_nombre').val(suggestion.unidadmedida_nombre);

            });

            var count = 0;
            $('#producto_add').on('click', function () {

                //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO
                var tr = $('<tr id="'+$('input#idproducto').val()+' ">');
                var tipopro;
                var precio;
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "/procesos/requisicion/gettipopro/" + $('input#idproducto').val(),
                    dataType: "json",
                    success: function (data) {
                        if (data.length != 0) {
                            tipopro= data['ProductoTipo'];
                            precio=data['ProductoCosto'];
                        }
                    },
                });
                tr.append('<td> '+ tipopro + '</td>');
                tr.append('<td><input name=productos[' + count + '][requisiciondetalle_subtotal] type=hidden><input type="hidden"  name=productos[' + count + '][idproducto] value="' + $('input#idproducto').val() + '">' + $('input#producto_autocomplete').typeahead('val') + '</td>');
                tr.append('<td> '+ $('#unidadmedida_nombre').val() + '</td>');
                tr.append('<td class="pro_cantidad"><input required type="text" name=productos[' + count + '][requisiciondetalle_cantidad] value="0"></td>');
                tr.append('<td><input disabled required type="text" class="pu-input" name=productos[' + count + '][requisiciondetalle_preciounitario] value="'+precio+'"></td>');
                tr.append('<td class="requisiciondetalle_subtotal">' + accounting.formatMoney(0) + '</td>');
                /*
                 * ACL
                 */
                if(settings.idrol == 5){
                    tr.append('<td><input type="checkbox" name=productos[' + count + '][requisiciondetalle_revisada] disabled>  </td>');
                }else{
                    tr.append('<td><input type="checkbox" name=productos[' + count + '][requisiciondetalle_revisada]>  </td>');
                }
                
                if(tipopro!='simple')
                    tr.append('<td><a href="javascript:;"><i class="fa fa-list"></i></a></td>');
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
                    var value = $(this).closest('tr').find('td').eq(1).text();
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
                                        '<tr> <td>' + k +'</td> <td>'+data[k][0]+' </td> <td>'+ (can * data[k][0]) + '</td> <td>'+data[k][1]+' </td> <td>'+((can * data[k][0]) * data[k][1])+' </td>' 
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
                            '<th>Receta</th>',
                            '<th>Cantidad</th>',
                            '<th>Precio unitario</th>',
                            '<th>Subtotal</th>',
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
           $('input[name=requisicion_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/requisicion/validatefolio",
                    dataType: "json",
                    data: {folio:folio},
                    success: function (exist) {
                        console.log(exist);
                        if(exist){
                            alert('El folio "'+folio+'" ya fue utilizado en los últimos 2 meses');
                            $this.val('');
                        }else{
                            $this.addClass('valid');
                        }
                        
                    },
                });
                         
           });
           
           /*
            * ACL
            */
          
           if(settings.idrol == 5){
               $('select[name=requisicion_revisada] option[value=1]').remove();
           }


        }

        plugin.edit = function(sucursal_destino,almacen_origen,almacen_destino,concepto_salida,anio,mes,count){
            
            inicioEdit(sucursal_destino,almacen_origen,almacen_destino,concepto_salida);
            
            
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

            $('[name=requisicion_folio]').attr('maxlength', '10');

            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);

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
                    url: '/procesos/requisicion/getproductos?q=%QUERY',
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
                $('input#unidadmedida_nombre').val(suggestion.unidadmedida_nombre);

            });

            var count = count;
            $('#producto_add').on('click', function () {

                //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO
                var tr = $('<tr id="'+$('input#idproducto').val()+' ">');
                var tipopro;
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "/procesos/requisicion/gettipopro/" + $('input#idproducto').val(),
                    dataType: "json",
                    success: function (data) {
                        if (data.length != 0) {
                            tipopro= data['ProductoTipo'];
                                
                        }
                    },
                });
                tr.append('<td> '+ tipopro + '</td>');
                tr.append('<td><input name=productos[' + count + '][requisiciondetalle_subtotal] type=hidden><input type="hidden"  name=productos[' + count + '][idproducto] value="' + $('input#idproducto').val() + '">' + $('input#producto_autocomplete').typeahead('val') + '</td>');
                tr.append('<td> '+ $('#unidadmedida_nombre').val() + '</td>');
                tr.append('<td class="pro_cantidad"><input required type="text" name=productos[' + count + '][requisiciondetalle_cantidad] value="0"></td>');
                tr.append('<td><input required type="text" class="pu-input" name=productos[' + count + '][requisiciondetalle_preciounitario] value="0"></td>');
                tr.append('<td class="requisiciondetalle_subtotal">' + accounting.formatMoney(0) + '</td>');
                /*
                 * ACL
                 */
                if(settings.idrol == 5){
                    tr.append('<td><input type="checkbox" name=productos[' + count + '][requisiciondetalle_revisada] disabled>  </td>');
                }else{
                    tr.append('<td><input type="checkbox" name=productos[' + count + '][requisiciondetalle_revisada]>  </td>');
                }
                if(tipopro!='simple')
                    tr.append('<td><a href="javascript:;"><i class="fa fa-list"></i></a></td>');
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
                                        '<tr> <td>' + k +'</td> <td> '+ (can * data[k][0]) + '</td> <td>'+data[k][1]+' </td> <td>'+((can * data[k][0]) * data[k][1])+' </td>' 
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
                            '<th>Precio unitario</th>',
                            '<th>Subtotal</th>',
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
            
            $('select[name=requisicion_revisada]').on('change', function () { 
                var selected = $('select[name=requisicion_revisada] option:selected').val();

                if (selected == 1) {
                    $container.find('table input:checkbox').prop('checked', true)
                    //$('#productos_table tbody input[type=checkbox]').prop('checked', true);
                } else {
                    //$container.find('table input:checkbox').prop('checked', false)
                    $('#productos_table tbody input[type=checkbox]').prop('checked', false);
                }
            });

            $container.find('table input:text').on('blur',function(){
                var $tr = $(this).closest('tr');
                caluclator($tr);
            });
            
            $container.find('table input:checkbox').on('click',function(){
                revisadaControl();
            });
                
            $('.fa-trash').on('click',function(){
                var tr = $(this).closest('tr');
                tr.remove();
                caluclator(tr);
                if ($('#productos_table tbody tr').length == 0)
                    {
                        $('#requisicion_save').attr('disabled', true);
                        exits = 0;
                    }
             });
             
            $('.fa-list').click(function(){
                    var tmpl2 = "";
                    var id = $(this).closest('tr').attr('idpro');
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
                                        '<tr> <td>' + k +'</td> <td> '+ (can * data[k][0]) + '</td> <td>'+data[k][1]+' </td> <td>'+((can * data[k][0]) * data[k][1])+' </td>' 
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
                            '<th>Precio unitario</th>',
                            '<th>Subtotal</th>',
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
             
            //VALIDAR FOLIO
           $('input[name=requisicion_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/requisicion/validatefolio",
                    dataType: "json",
                    data: {folio:folio,edit:true,id:$('input[name=idrequisicion]').val()},
                    success: function (exist) {
                        console.log(exist);
                        if(exist){
                            alert('El folio "'+folio+'" ya fue utilizado en los últimos 2 meses');
                            $this.val('');
                        }else{
                            $this.addClass('valid');
                        }
                        
                    },
                });
                         
           });
           
            //VALIDAMOS MES Y ANIO EN CURSO PARA VER SI SE PUEDE MODIFICAR
            var now = $('input[name=requisicion_fecha]').val();
            var now_array = now.split('/');
            var now = new Date(now_array[2]+'/'+now_array[1]+'/'+now_array[0]);
            if(now.format('W') != mes || now.getFullYear() != anio){
                $container.find('input,select,button').attr('disabled',true);
                $('.fa-trash').unbind();
                $('.fa-trash').css('cursor','not-allowed');
                
            }

            if(settings.idrol == 5){
               $('select[name=requisicion_revisada]').attr('disabled',true);
               $('#productos_table input[type=checkbox]').attr('disabled',true);
               var revisada =  $('select[name=requisicion_revisada] option:selected').val();
  
               if(revisada == 1){
                   $('form input,form select,form button[type=submit]').attr('disabled',true);
               }
           }

        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }

    

})(jQuery);