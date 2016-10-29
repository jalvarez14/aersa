(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.venta = function(data){
        var _this = $(this);
        var plugin = _this.data('venta');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.venta(this, data);
            
            _this.data('venta', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.venta = function(container, options){
        
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

            $('select[name=venta_revisada]').on('change', function () {
               
                var selected = $('select[name=venta_revisada] option:selected').val();
              
                if (selected == 1) {
                    $('#productos_table tbody input[type=checkbox]').prop('checked', true);
                } else {
                    $('#productos_table tbody input[type=checkbox]').prop('checked', false);
                }
            });

            $('#productos_table tbody input[type=checkbox]').on('change', function () {
                
                var all_checked = true;
                $('#productos_table tbody input[type=checkbox]').filter(function(){
                    if(!$(this).prop('checked')){
                        all_checked = false;
                    }
                });
               if(!all_checked){
                    $('select[name=venta_revisada]').val(0);
               }else{
                    $('select[name=venta_revisada]').val(1);
               }
                
                
            });

        }
        
       var formBind = function(anio,mes){
           
           
           
            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);
            
            container.find('input[name=venta_fechaventa]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            $('#upload_file').on('click',function(){
                
                $('#upload_container input').removeClass('invalid');
                $('#productos_table tbody tr').remove();
                $('input[name=venta_total]').val(0);
                $('#total').text(accounting.formatMoney('0'));
                
                
                var empty = false;
                $('#upload_container input').filter(function(){
                    var value = $(this).val();
                    if(value == ""){
                        empty = true;
                        $(this).addClass('invalid');
                        $(this).css('color','black');
                    }
                });
                
                if(!empty){
                    
                    
                    
                    $('#error_alert').hide();

                    
                    var col_parse = false;
                    var col_nombre = $('input[name=xls_nombre]').val();
                    var col_nombre_parse = false;
                    var col_cantidad = $('input[name=xls_cantidad]').val();
                    var col_cantidad_parse = false;
                    var col_subtotal = $('input[name=xls_subtotal]').val();
                    var col_subtotal_parse = false;
                    
                    var files = $('#venta_file').get(0).files;
                    var i, f;

                    for (i = 0, f = files[i]; i != files.length; ++i) {
                        var reader = new FileReader();
                        var name = f.name;
                        reader.onload = function (e) {
                            var data = e.target.result;

                            var workbook = XLSX.read(data, {type: 'binary'});
                            var first_sheet_name = workbook.SheetNames[0];
                            var workbook_array = to_json(workbook);
                            
                            //VALIDAMOS SI EL XML TIENE DATOS 
                            if(typeof workbook_array[first_sheet_name] != 'undefined'){
                                
                                if(typeof workbook.Sheets[first_sheet_name]['!range'] != 'undefined'){
                                    var cont_rows = workbook.Sheets[first_sheet_name]['!range'].e.r;
                                    
                                }else{
                                    var cont_rows = workbook_array[first_sheet_name].length;
                                }

                                var ventas_array = Array();
                                for(var i=2;i<=cont_rows;i++){
                                    
                                    if(typeof workbook.Sheets[first_sheet_name][col_nombre+i].v != 'undefined'){
                                        var tmp = {
                                            nombre:workbook.Sheets[first_sheet_name][col_nombre+i].v,
                                            cantidad:workbook.Sheets[first_sheet_name][col_cantidad+i].v,
                                            subtotal:workbook.Sheets[first_sheet_name][col_subtotal+i].v,
                                        };
                                        ventas_array.push(tmp);
                                    }
                                    
                                }
                                var numRequests = ventas_array.length;
                                var count = 0;
                                var total = 0;
                                
                                function nextAjax(){

                                    if(count <= numRequests){
                                        
                                        var subtotal = parseFloat(parseFloat(ventas_array[count].subtotal).toFixed(6));
                                        var cantidad = parseFloat(parseFloat(ventas_array[count].cantidad).toFixed(6));
                                        var producto = ventas_array[count].nombre;

                                        var precio_unitario = subtotal / cantidad;
                                        
                                        
                                        $.ajax({
                                            url: '/procesos/venta/validateproduct',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: {
                                                producto_nombre:   ventas_array[count].nombre,
                                                producto_cantidad: ventas_array[count].cantidad,
                                                producto_subtotal: ventas_array[count].subtotal,
                                            },
                                            success: function (data) {
                                                if(data.response){
                                                    if(data.create){
                                                        var tmpl = [
                                                            '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                                                '<div class="modal-header">',
                                                                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                                                    '<h4 class="modal-title">Registro de producto</h4>',
                                                                '</div>',
                                                                '<div class="modal-body">',
                                                                    '<div class="row">',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_nombre">Nombre del producto *</label>',
                                                                                '<input name="producto_rendimiento" required type="hidden" value="1">>',
                                                                                '<input name="producto_rendimientooriginal" required type="hidden" value="1">',
                                                                                '<input required class="form-control" type="text" name="producto_nombre" value="'+data.data.producto+'" readonly>',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_nombre">Categoria *</label>',
                                                                                '<select required class="form-control" name="idcategoria">',
                                                                                    '<option value="">Sin especificar</option>',
                                                                                    '<option value="1">Alimentos</option>',
                                                                                    '<option value="2">Bebidas</option>',
                                                                                    '<option value="3">Gastos</option>',
                                                                                '</select>',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="idsubcategoria">Subcategoria *</label>',
                                                                                '<select required class="form-control" name="idsubcategoria">',
                                                                                    '<option value="">Sin especificar</option>',
                                                                                '</select>',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_nombre">Unidad de medida *</label>',
                                                                                '<select required class="form-control" name="idunidadmedida">',
                                                                                    '<option value="">Sin especificar</option>',
                                                                                    '<option value="1">Pieza</option>',
                                                                                    '<option value="2">Botella</option>',
                                                                                    '<option value="3">Kilogramos</option>',
                                                                                    '<option value="4">Litros</option>',
                                                                                    '<option value="5">Porcion</option>',
                                                                                    '<option value="6">Caja</option>',
                                                                                '</select>',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_tipo">Tipo *</label>',
                                                                                '<select required class="form-control" name="producto_tipo">',
                                                                                    '<option value="plu">Botón de venta</option>',
                                                                                '</select>',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_iva">IVA *</label>',
                                                                                '<select required class="form-control" name="producto_iva">',
                                                                                    '<option value="1">Si</option>',
                                                                                    '<option value="0">No</option>',
                                                                                '</select>',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_costo">Costo *</label>',
                                                                                '<input required class="form-control" type="text" name="producto_costo">',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_ultimocosto">Ultimo costo *</label>',
                                                                                '<input required class="form-control" type="text" name="producto_ultimocosto">',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_stock">Stock *</label>',
                                                                                '<input required class="form-control" type="text" value="0" readonly>',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_baja">Baja *</label>',
                                                                                '<select required class="form-control" name="producto_baja">',
                                                                                    '<option value="0">No</option>',
                                                                                    '<option value="1">Si</option>',
                                                                                '</select>',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-6" id="rendimiento_container" style="display:none">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_rendimiento">Rendimiento normalizado *</label>',
                                                                                
                                                                            '</div>',
                                                                        '</div>',
                                                                    '</div>',
                                                                '</div>',
                                                                '<div class="modal-footer">',
                                                                    '<a id="save_product" href="#" class="btn blue">Guardar</a>',
                                                                '</div>',
                                                            '</div>',  
                                                        ].join('');
                                                        var $modal = $(tmpl);
                                                        $modal.modal();
                                                        $modal.find('input').numeric();
                                                        $modal.find('select[name=idcategoria]').on('change',function(){
                                                            
                                                            var idcat = $modal.find('select[name=idcategoria] option:selected').val();
                                                            
                                                            if(idcat != ""){
                                                            
                                                                $.ajax({
                                                                    type: "GET",
                                                                    url: "/catalogo/categoria/getsubcat/" + idcat,
                                                                    dataType: "json",
                                                                    success: function (data) {
                                                                        
                                                                        if (data.length != 0)
                                                                        {
                                                                            $modal.find("[name=idsubcategoria]").html('');
                                                                            for (var k in data)
                                                                                $("[name=idsubcategoria]").append('<option value="' + data[k]['Idcategoria'] + '">' + data[k]['CategoriaNombre'] + '</option>');
                                                                        }
                                                                    },
                                                                });
                                                                
                                                                if(idcat == 2){
                                                                    $modal.find('#rendimiento_container').show();
                                                                    $modal.find('input[name=producto_rendimiento]').prop('required',true);
                                                                }else{
                                                                    $modal.find('#rendimiento_container').hide();
                                                                    $modal.find('input[name=producto_rendimiento]').prop('required',false);
                                                                }
                                                            }

                                                        });
                                                        $modal.find('#save_product').on('click',function(){
                                                            $modal.find('input[required],select[required]').removeClass('invalid');
                                                            var post_data = {};
                                                            var empty = false;
                                                            $modal.find('input[required],select[required]').filter(function(){
                                                                var name = $(this).attr('name');
                                                                var value = $(this).val();
                                                                if(value == ""){
                                                                    empty = true;
                                                                    $(this).addClass('invalid');
                                                                }
                                                                post_data[name] = value;
                                                               
                                                            });
                                                            
                                                            if(!empty){
                                                                
                                                                $.ajax({
                                                                    url:'/procesos/venta/nuevoproducto',
                                                                    type:'POST',
                                                                    data:post_data,
                                                                    dataType:'JSON',
                                                                    beforeSend: function () {
                                                                        $modal.modal('loading');
                                                                    },
                                                                    success: function (data2) {
                                                                        if(data2.response){
                                                                            $modal.modal('loading');
                                                                            $modal.find('.modal-body > .row').remove();
                                                                            $modal.find('.modal-title').text(data2.data.producto_nombre);
                                                                            $modal.find('#save_product').unbind();
                                                                            tmpl = [
                                                                                '<div class="row">',
                                                                                    '<div class="col-md-6">',
                                                                                        '<div class="form-group">',
                                                                                            '<label for="producto_nombre">Almacen *</label>',
                                                                                            '<select required class="form-control" name="idalmacen">',
                                                                                            '</select>',
                                                                                        '</div>',
                                                                                    '</div>',
                                                                                '</div>',
                                                                                '<div class="row">',
                                                                                    '<div class="col-md-6">',
                                                                                        '<h4>Subreceta</h4>',
                                                                                    '</div>',
                                                                                '</div>',
                                                                                '<div class="row" id="subreceta_inputs">',
                                                                                    '<div class="col-md-6">',
                                                                                        '<label for="producto_rendimiento">Producto *</label>',
                                                                                        '<div class="input-group">',
                                                                                            '<span class="input-group-addon">',
                                                                                                '<i class="fa fa-search"></i>',
                                                                                            '</span>',   
                                                                                            '<input id="idproducto" type="hidden">',
                                                                                            '<input id="productoreceta_rendimiento" type="hidden">',   
                                                                                            '<input id="producto_autocomplete" class="form-control" type="text">',
                                                                                        '</div>',
                                                                                    '</div>',
                                                                                    '<div class="col-md-6">',
                                                                                        '<div class="form-group">',
                                                                                             '<label for="producto_rendimiento">Cantidad *</label>',
                                                                                             '<input disabled name="receta_cantidadoriginal" type="text" class="form-control">',
                                                                                        '</div>',
                                                                                    '</div>',
                                                                                 '</div>',
                                                                                 '<div class="row">',
                                                                                    '<div class="col-md-4 col-md-offset-8">',
                                                                                          '<a id="producto_add" class="btn blue" href="javascript:;" style="float: right">Agregar</a>',
                                                                                    '</div>',
                                                                                '</div>',
                                                                                '<div class="row">',
                                                                                    '<div class="col-md-12">',
                                                                                        '<table class="table table-striped table-hover order-column" id="datatable" style="border-bottom-width: 0px;">',
                                                                                            '<thead>',
                                                                                                '<th> Producto </th>',
                                                                                      
                                                                                                '<th> Cantidad </th>',
                                                                                                '<th> Opciones </th>',
                                                                                            '</thead>',
                                                                                            '<tbody>',
                                                                                            '</tbody>',
                                                                                        '</table>',
                                                                                    '</div>',
                                                                                '</div>',
                                                                               
                                                                            ].join('');
                                                                            $modal.find('.modal-body').append(tmpl);
                                                                            if(data2.habilitar_unidad){
                                                                      
                                                                                tmpl2 = [
                                                                                    '<div class="col-md-6">',
                                                                                        '<div class="form-group">',
                                                                                             '<label for="receta_unidad">Unidad *</label>',
                                                                                             '<select name="receta_unidad" required="required" class="form-control">',
                                                                                                '<option value="Botella">Botella</option>',
                                                                                                '<option value="Pieza">Pieza</option>',
                                                                                                '<option value="Onza">Onza</option>',
                                                                                                '<option value="Copa vino 187.5 ML">Copa vino 187.5 ML</option>',
                                                                                                '<option value="Copa vino 150 ML">Copa vino 150 ML</option>',
                                                                                            '</select>',
                                                                                        '</div>',
                                                                                    '</div>',
                                                                                    '<div class="col-md-6">',
                                                                                        '<div class="form-group">',
                                                                                             '<label for="receta_cantidad">Cantidad normalizada *</label>',
                                                                                             '<input name="receta_cantidad" readonly="readonly" class="form-control" value="" type="text">',
                                                                                        '</div>',
                                                                                    '</div>'
                                                                                ].join(''); 
                                                                                $modal.find('.modal-body #subreceta_inputs').append(tmpl2);
                                                                                
                                                                                var producto_rendimiento = data2.data.producto_rendimiento;
                                                                                var factor = 1;
                                                                                
                                                                                $modal.find("[name=receta_cantidadoriginal],select[name=receta_unidad]").on('change', function () {

                                                                                        producto_rendimiento = $modal.find('#productoreceta_rendimiento').val();
                                                                                        var unidad = $modal.find('select[name=receta_unidad] option:selected').val();
                                                                                        if (unidad == "Onza") {
                                                                                            factor = 29.574;
                                                                                        } else if (unidad == "Copa vino 187.5 ML") {
                                                                                            factor = 187.5;
                                                                                        } else if (unidad == "Copa vino 150 ML") {
                                                                                            factor = 150;
                                                                                        }
                                                                                        var cantidad = $modal.find("[name=receta_cantidadoriginal]").val();
                                                                                        if (unidad == "Pieza" || unidad == "Botella") {
                                                                                            var cantidad_normalizada = (cantidad * factor);
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            var cantidad_normalizada = (cantidad * factor) / producto_rendimiento;
                                                                                        }

                                                                                    
                                                                                    $modal.find('[name=receta_cantidad]').val(cantidad_normalizada.toFixed(6));
                                                                                });

                                                                            }
                                                                            

                                                                            $.each(data2.almacenes,function(index){
                                                                                var option = $('<option value="'+index+'">'+this+'</option>');
                                                                                $modal.find('select[name=idalmacen]').append(option);
                                                                            });
                                                                            
                                                                            var producto_autocomplete = new Bloodhound({
                                                                                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                                                                                queryTokenizer: Bloodhound.tokenizers.whitespace,
                                                                                remote: {
                                                                                    url: '/autocomplete/getproductosreceta?q=%QUERY&idproducto='+data2.data.idproducto,
                                                                                    
                                                                                    wildcard: '%QUERY'
                                                                                }
                                                                            });
                                                                            $modal.find('#producto_autocomplete').typeahead(null, {
                                                                                name: 'best-pictures',
                                                                                display: 'value',
                                                                                hint: true,
                                                                                highlight: true,
                                                                                source: producto_autocomplete,
                                                                                limit: 100,
                                                                            });
                                                                            $modal.find('input[name=producto_cantidad]').numeric();
                                                                            $modal.find('#producto_autocomplete').bind('typeahead:select', function (ev, suggestion) {
                                                                                $modal.find('#producto_add').attr('disabled', false);
                                                                                $modal.find('input[name=receta_cantidadoriginal]').attr('disabled', false);
                                                                                $modal.find('input#idproducto').val(suggestion.id);
                                                                                $modal.find('input#productoreceta_rendimiento').val(suggestion.producto_rendimiento);
                                                                            });
                                                                            var count2 = 0;
                                                                            $modal.find('#producto_add').on('click',function(){
                                                                                
                                                                                var empty = false;
                                                                                $modal.find('input[type=text]').removeClass('invalid');
                                                                                
                                                                                $modal.find('input#producto_autocomplete,input[name=producto_cantidad]').filter(function(){
                                                                                   
                                                                                    if($(this).val() == ""){
                                                                                        empty = true;
                                                                                        $(this).addClass('invalid');
                                                                                    }
                                                                                });
                                                                                
                                                                              
                                                                                if(!empty){
                                                                                    
                                                                                    var receta_cantidad =  $modal.find('input[name=receta_cantidad]').val();
                                                                                    
                                                                                    if(data2.data.idcategoria != 2){
                                                                                        var receta_cantidadoriginal = $modal.find('input[name=receta_cantidadoriginal]').val();
                                                                                        receta_cantidad = receta_cantidadoriginal;
                                                                                    }
                                                                                    
                                                                                    var $tr = $('<tr>');
                                                                                    $tr.append('<td><input type="hidden" name=subreceta['+count2+'][receta_unidad] value="'+$modal.find('select[name=receta_unidad] option:selected').val()+'"><input type="hidden" name=subreceta['+count2+'][receta_cantidad] value="'+receta_cantidad+'"><input type="hidden" name=subreceta['+count2+'][receta_cantidadoriginal] value="'+$modal.find('input[name=receta_cantidadoriginal]').val()+'"><input type="hidden" name=subreceta['+count2+'][idproducto] value="'+$modal.find('#idproducto').val()+'">'+$modal.find('#producto_autocomplete').val()+'</td>');
                                                                                    $tr.append('<td>'+$modal.find('input[name=receta_cantidadoriginal]').val()+'</td>');
                                                                                    $tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                                                                                    
                                                                                    $tr.find('i.fa-trash').on('click',function(){
                                                                                        $tr.remove();
                                                                                    });

                                                                                    $modal.find('table tbody').append($tr);
                                                                                    
                                                                                    count2++;
                                                                                    
                                                                                    //LIMPIAMOS LOS INPUTS
                                                                                    $modal.find('input[name=producto_cantidad]').val('');
                                                                                    $modal.find('input#idproducto').val('');
                                                                                    $modal.find('input#producto_autocomplete').val('');
                                                                                }
                                                                                
                                                                            });
                                                                            
                                                                            //EVENTO GUARDAR ALMACEN Y SUBRECETA
                                                                            $modal.find('#save_product').on('click',function(){
                                                                             
                                                                                var post_data = {idproducto:data2.data.idproducto,cantidad:cantidad};
                                                                                $modal.find('select,input').filter(function(){
                                                                                    var name = $(this).attr('name');
                                                                                    var value = $(this).val();
                                                                                    post_data[name] = value;
                                                                                });
                                                                                
                                                                                $.ajax({
                                                                                    url:'/procesos/venta/nuevosubreceta',
                                                                                    type:'POST',
                                                                                    data:post_data,
                                                                                    dataType:'JSON',
                                                                                    success: function (data3) {
                                                                                        if(data3.response){
                                                                                            
                                                                                            
                                                                                            var revisado = ($('select[name=venta_revisada] option:selected').val() != "") ? $('select[name=venta_revisada] option:selected').val():0;
                                                                                            
                                                                                            var $tr = $('<tr>');
                                                                                            $tr.append('<td><input type="hidden" name="productos['+count+'][subtotal]" value="'+subtotal+'"><input type="hidden" name="productos['+count+'][cantidad]" value="'+data.data.cantidad+'"><input type="hidden" name="productos['+count+'][idalmacen]" value="'+data3.data.idalmacen+'"><input type="hidden" name="productos['+count+'][idproducto]" value="'+data3.data.idproducto+'">'+producto+'</td>');
                                                                                            $tr.append('<td>'+data3.data.almacen_nombre+'</td>');
                                                                                            $tr.append('<td>'+cantidad+'</td>');
                                                                                            $tr.append('<td>'+accounting.formatMoney(precio_unitario)+'</td>');
                                                                                            $tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                                                                                            if(revisado == 1){
                                                                                               /*
                                                                                                * ACL
                                                                                                */
                                                                                               if(settings.idrol == 5){
                                                                                                     $tr.append('<td><inputchecked type="checkbox" name=productos['+count+'][revisada] disabled></td>');
                                                                                               }else{
                                                                                                    $tr.append('<td><input checked type="checkbox" name=productos['+count+'][revisada]></td>');
                                                                                               }
                                                                                                
                                                                                            }else{
                                                                                                /*
                                                                                                * ACL
                                                                                                */
                                                                                               if(settings.idrol == 5){
                                                                                                     $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada] disabled></td>');
                                                                                               }else{
                                                                                                    $tr.append('<td><input  type="checkbox" name=productos['+count+'][revisada]></td>');
                                                                                               }
                                                                                            }
                                                                                            if (data3.data.receta.length > 0) {
                                                                                                $tr.append('<td><a href="javascript:;"><i class="fa fa-list"></i></a></td>');
                                                                                                var tmpl2 = "";
                                                                                                for (var k in data3.data.receta) {
                                                                                                    tmpl2 += [
                                                                                                        '<tr> <td>' + data3.data.receta[k].producto + '</td> <td> ' + data3.data.receta[k].cantidad + '</td>'
                                                                                                    ];
                                                                                                }
                                                                                                $tr.find('i.fa-list').on('click', function () {
                                                                                                    var tmpl = [
                                                                                                        // tabindex is required for focus
                                                                                                        '<div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                                                                                                        '<div class="modal-header">',
                                                                                                        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                                                                                        '<h4 class="modal-title">' + producto + '</h4>',
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
                                                                                            } else {
                                                                                                $tr.append('<td> N/D </td>');
                                                                                            }
                                                                                            $('#productos_table tbody').append($tr);

                                                                                            total = total + parseFloat(parseFloat(subtotal).toFixed(6));
                                                                                            $('#total').text(accounting.formatMoney(total));
                                                                                            $('input[name=venta_total]').val(total);
                                                                                            $modal.modal('hide');
                                                                                            nextAjax();
                                                                                        }
                                                                                    }
                                                                                });
                                                                            });
                                                                        }
                                                                    }
                                                                    
                                                                });
                                                                
                                                            }
                                                        });
                                                        
                                                    }else if(data.rename){
                                                        var tmpl = [
                                                            '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                                                '<div class="modal-header">',
                                                                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                                                    '<h4 class="modal-title">Renombrar producto</h4>',
                                                                '</div>',
                                                                '<div class="modal-body">',
                                                                    '<div class="row">',
                                                                        '<div class="col-md-12">',
                                                                            '<div class="custom-alerts alert alert-warning fade in">',
                                                                                '<button class="close" aria-hidden="true" data-dismiss="alert" type="button"></button>',
                                                                                '<strong>Advertencia!</strong>',
                                                                                 'El siguiente producto ya se encuentra registrado pero no es de tipo punto de venta, por lo que es necesario renombrarlo para continuar con el registro de este mismo en formato correcto',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-12">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_nombre">Nombre del producto *</label>',
                                                                                '<input required class="form-control" type="text" name="producto_nombre" value="'+data.data.producto+'">',
                                                                                '<span style="color:red;display:none">El producto ya se encuentra registado</span>',
                                                                            '</div>',
                                                                        '</div>',
                                                                    '</div>',
                                                                '</div>',
                                                                '<div class="modal-footer">',
                                                                    '<button id="save_product" href="#" class="btn blue">Guardar</button>',
                                                                '</div>',
                                                            '</div>',  
                                                        ].join('');
                                                        var $modal = $(tmpl);
                                                        $modal.modal();
                                                        $modal.find('#save_product').prop('disabled',true);
                                                        $modal.find('input[name=producto_nombre]').on('blur',function(){
                                                            $modal.find('#save_product').prop('disabled',true);
                                                            $modal.find('input[name=producto_nombre]').removeClass('invalid');
                                                            $modal.find('input[name=producto_nombre]').siblings('span').hide();
                                                            var old_name = data.data.producto;
                                                            var new_name = $modal.find('input[name=producto_nombre]').val();
                                                            if(old_name != new_name){
                                                                 $modal.find('#save_product').prop('disabled',false);
                                                                 $.ajax({
                                                                     url:'/procesos/venta/validateproductexist',
                                                                     type:'POST',
                                                                     data:{product_name:new_name},
                                                                     dataType:'JSON',
                                                                     success: function (data4) {
                                                                        if(!data4.exist){
                                                                            $modal.find('#save_product').prop('disabled',false);
                                                                        }else{
                                                                            $modal.find('#save_product').prop('disabled',true);
                                                                            $modal.find('input[name=producto_nombre]').addClass('invalid');
                                                                            $modal.find('input[name=producto_nombre]').siblings('span').show();
                                                                        }
                                                                    }
                                                                 });
                                                            }
                                                        });
                                                         $modal.find('#save_product').on('click',function(){
                                                            var new_name = $modal.find('input[name=producto_nombre]').val();
                                                            $.ajax({
                                                                url:'/procesos/venta/renameproduct',
                                                                type:'POST',
                                                                data:{product_name:new_name,idproduct:data.data.idproducto},
                                                                dataType:'JSON',
                                                                beforeSend: function () {
                                                                    $modal.modal('loading');
                                                                },
                                                                success: function (data5) {
                                                                   $modal.modal('loading');
                                                                    if (data5.response) {
                                                                        
                                                                        $modal.find('.modal-header').remove();
                                                                        $modal.find('.modal-body').remove();
                                                                        $modal.find('.modal-footer').remove();
                                                                       
                                                                        var tmpl = [
                                                                          
                                                                            '<div class="modal-header">',
                                                                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                                                            '<h4 class="modal-title">Registro de producto</h4>',
                                                                            '</div>',
                                                                            '<div class="modal-body">',
                                                                            '<div class="row">',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_nombre">Nombre del producto *</label>',
                                                                            '<input required class="form-control" type="text" name="producto_nombre" value="' + data.data.producto + '" readonly>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_nombre">Categoria *</label>',
                                                                            '<select required class="form-control" name="idcategoria">',
                                                                            '<option value="">Sin especificar</option>',
                                                                            '<option value="1">Alimentos</option>',
                                                                            '<option value="2">Bebidas</option>',
                                                                            '<option value="3">Gastos</option>',
                                                                            '</select>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="idsubcategoria">Subcategoria *</label>',
                                                                            '<select required class="form-control" name="idsubcategoria">',
                                                                            '<option value="">Sin especificar</option>',
                                                                            '</select>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_nombre">Unidad de medida *</label>',
                                                                            '<select required class="form-control" name="idunidadmedida">',
                                                                            '<option value="">Sin especificar</option>',
                                                                            '<option value="1">Pieza</option>',
                                                                            '<option value="2">Botella</option>',
                                                                            '<option value="3">Kilogramos</option>',
                                                                            '<option value="4">Litros</option>',
                                                                            '<option value="5">Porcion</option>',
                                                                            '<option value="6">Caja</option>',
                                                                            '</select>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_tipo">Tipo *</label>',
                                                                            '<select required class="form-control" name="producto_tipo">',
                                                                            '<option value="plu">Botón de venta</option>',
                                                                            '</select>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_iva">IVA *</label>',
                                                                            '<select required class="form-control" name="producto_iva">',
                                                                            '<option value="1">Si</option>',
                                                                            '<option value="0">No</option>',
                                                                            '</select>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_costo">Costo *</label>',
                                                                            '<input required class="form-control" type="text" name="producto_costo">',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_ultimocosto">Ultimo costo *</label>',
                                                                            '<input required class="form-control" type="text" name="producto_ultimocosto">',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_stock">Stock *</label>',
                                                                            '<input required class="form-control" type="text" value="0" readonly>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_baja">Baja *</label>',
                                                                            '<select required class="form-control" name="producto_baja">',
                                                                            '<option value="1">Si</option>',
                                                                            '<option value="0">No</option>',
                                                                            '</select>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="col-md-6" id="rendimiento_container" style="display:none">',
                                                                            '<div class="form-group">',
                                                                            '<label for="producto_rendimiento">Rendimiento *</label>',
                                                                            '<input class="form-control" type="text">',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '</div>',
                                                                            '<div class="modal-footer">',
                                                                            '<a id="save_product" href="#" class="btn blue">Guardar</a>',
                                                                            '</div>',
                                               
                                                                        ].join('');
                                                                        
                                                                        $modal.append(tmpl);
                                                                        $modal.find('input').numeric();
                                                                        $modal.find('select[name=idcategoria]').on('change', function () {

                                                                            var idcat = $modal.find('select[name=idcategoria] option:selected').val();

                                                                            if (idcat != "") {

                                                                                $.ajax({
                                                                                    type: "GET",
                                                                                    url: "/catalogo/categoria/getsubcat/" + idcat,
                                                                                    dataType: "json",
                                                                                    success: function (data) {

                                                                                        if (data.length != 0)
                                                                                        {
                                                                                            $modal.find("[name=idsubcategoria]").html('');
                                                                                            for (var k in data)
                                                                                                $("[name=idsubcategoria]").append('<option value="' + data[k]['Idcategoria'] + '">' + data[k]['CategoriaNombre'] + '</option>');
                                                                                        }
                                                                                    },
                                                                                });

                                                                                if (idcat == 2) {
                                                                                    $modal.find('#rendimiento_container').show();
                                                                                    $modal.find('#input[name=producto_rendimiento]').prop('required', true);
                                                                                } else {
                                                                                    $modal.find('#rendimiento_container').hide();
                                                                                    $modal.find('#input[name=producto_rendimiento]').prop('required', false);
                                                                                }
                                                                            }

                                                                        });
                                                                        $modal.find('#save_product').on('click', function () {
                                                                            $modal.find('input[required],select[required]').removeClass('invalid');
                                                                            var post_data = {};
                                                                            var empty = false;
                                                                            $modal.find('input[required],select[required]').filter(function () {
                                                                                var name = $(this).attr('name');
                                                                                var value = $(this).val();
                                                                                if (value == "") {
                                                                                    empty = true;
                                                                                    $(this).addClass('invalid');
                                                                                }
                                                                                post_data[name] = value;

                                                                            });

                                                                            if (!empty) {

                                                                                $.ajax({
                                                                                    url: '/procesos/venta/nuevoproducto',
                                                                                    type: 'POST',
                                                                                    data: post_data,
                                                                                    dataType: 'JSON',
                                                                                    beforeSend: function () {
                                                                                        $modal.modal('loading');
                                                                                    },
                                                                                    success: function (data2) {
                                                                                        if (data2.response) {
                                                                                            $modal.modal('loading');
                                                                                            $modal.find('.modal-body > .row').remove();
                                                                                            $modal.find('.modal-title').text(data2.data.producto_nombre);
                                                                                            $modal.find('#save_product').unbind();
                                                                                            tmpl = [
                                                                                                '<div class="row">',
                                                                                                '<div class="col-md-6">',
                                                                                                '<div class="form-group">',
                                                                                                '<label for="producto_nombre">Almacen *</label>',
                                                                                                '<select required class="form-control" name="idalmacen">',
                                                                                                '</select>',
                                                                                                '</div>',
                                                                                                '</div>',
                                                                                                '</div>',
                                                                                                '<div class="row">',
                                                                                                '<div class="col-md-6">',
                                                                                                '<h4>Subreceta</h4>',
                                                                                                '</div>',
                                                                                                '<div class="col-md-3 col-md-offset-5">',
                                                                                                '<label for="producto_rendimiento">Producto *</label>',
                                                                                                '<div class="input-group">',
                                                                                                '<span class="input-group-addon">',
                                                                                                '<i class="fa fa-search"></i>',
                                                                                                '</span>',
                                                                                                '<input id="idproducto" type="hidden">',
                                                                                                '<input id="producto_autocomplete" class="form-control" type="text">',
                                                                                                '</div>',
                                                                                                '</div>',
                                                                                                '<div class="col-md-2">',
                                                                                                '<div class="form-group">',
                                                                                                '<label for="producto_rendimiento">Cantidad *</label>',
                                                                                                '<input disabled name="producto_cantidad" type="text" class="form-control">',
                                                                                                '</div>',
                                                                                                '</div>',
                                                                                                '<div class="col-md-1">',
                                                                                                '<a id="producto_add" class="btn blue" href="javascript:;" style="top: 24px;">Agregar</a>',
                                                                                                '</div>',
                                                                                                '<div class="col-md-12">',
                                                                                                '<table class="table table-striped table-hover order-column" id="datatable" style="border-bottom-width: 0px;">',
                                                                                                '<thead>',
                                                                                                '<th> Producto </th>',
                                                                                                '<th> Cantidad </th>',
                                                                                                '<th> Opciones </th>',
                                                                                                '</thead>',
                                                                                                '<tbody>',
                                                                                                '</tbody>',
                                                                                                '</table>',
                                                                                                '</div>',
                                                                                                '<div>',
                                                                                            ].join('');
                                                                                            $modal.find('.modal-body').append(tmpl);
                                                                                            $.each(data2.almacenes, function (index) {
                                                                                                var option = $('<option value="' + index + '">' + this + '</option>');
                                                                                                $modal.find('select[name=idalmacen]').append(option);
                                                                                            });

                                                                                            var producto_autocomplete = new Bloodhound({
                                                                                                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                                                                                                queryTokenizer: Bloodhound.tokenizers.whitespace,
                                                                                                remote: {
                                                                                                    url: '/autocomplete/getproductos?q=%QUERY',
                                                                                                    wildcard: '%QUERY'
                                                                                                }
                                                                                            });
                                                                                            $modal.find('#producto_autocomplete').typeahead(null, {
                                                                                                name: 'best-pictures',
                                                                                                display: 'value',
                                                                                                hint: true,
                                                                                                highlight: true,
                                                                                                source: producto_autocomplete,
                                                                                                limit: 100,
                                                                                            });
                                                                                            $modal.find('input[name=producto_cantidad]').numeric();
                                                                                            $modal.find('#producto_autocomplete').bind('typeahead:select', function (ev, suggestion) {
                                                                                                $modal.find('#producto_add').attr('disabled', false);
                                                                                                $modal.find('input[name=producto_cantidad]').attr('disabled', false);
                                                                                                $modal.find('input#idproducto').val(suggestion.id);
                                                                                            });
                                                                                            var count2 = 0;
                                                                                            $modal.find('#producto_add').on('click', function () {

                                                                                                var empty = false;
                                                                                                $modal.find('input[type=text]').removeClass('invalid');

                                                                                                $modal.find('input#producto_autocomplete,input[name=producto_cantidad]').filter(function () {

                                                                                                    if ($(this).val() == "") {
                                                                                                        empty = true;
                                                                                                        $(this).addClass('invalid');
                                                                                                    }
                                                                                                });


                                                                                                if (!empty) {

                                                                                                    var $tr = $('<tr>');
                                                                                                    $tr.append('<td><input type="hidden" name=subreceta[' + count2 + '][cantidad] value="' + $modal.find('input[name=producto_cantidad]').val() + '"><input type="hidden" name=subreceta[' + count2 + '][idproducto] value="' + $modal.find('#idproducto').val() + '">' + $modal.find('#producto_autocomplete').val() + '</td>');
                                                                                                    $tr.append('<td>' + $modal.find('input[name=producto_cantidad]').val() + '</td>');
                                                                                                    $tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');

                                                                                                    $tr.find('i.fa-trash').on('click', function () {
                                                                                                        $tr.remove();
                                                                                                    });

                                                                                                    $modal.find('table tbody').append($tr);

                                                                                                    count2++;

                                                                                                    //LIMPIAMOS LOS INPUTS
                                                                                                    $modal.find('input[name=producto_cantidad]').val('');
                                                                                                    $modal.find('input#idproducto').val('');
                                                                                                    $modal.find('input#producto_autocomplete').val('');
                                                                                                }

                                                                                            });

                                                                                            //EVENTO GUARDAR ALMACEN Y SUBRECETA
                                                                                            $modal.find('#save_product').on('click', function () {

                                                                                                var post_data = {idproducto: data2.data.idproducto, cantidad: cantidad};
                                                                                                $modal.find('select,input').filter(function () {
                                                                                                    var name = $(this).attr('name');
                                                                                                    var value = $(this).val();
                                                                                                    post_data[name] = value;
                                                                                                });

                                                                                                $.ajax({
                                                                                                    url: '/procesos/venta/nuevosubreceta',
                                                                                                    type: 'POST',
                                                                                                    data: post_data,
                                                                                                    dataType: 'JSON',
                                                                                                    success: function (data3) {
                                                                                                        if (data3.response) {


                                                                                                            var revisado = ($('select[name=venta_revisada] option:selected').val() != "") ? $('select[name=venta_revisada] option:selected').val() : 0;

                                                                                                            var $tr = $('<tr>');
                                                                                                            $tr.append('<td><input type="hidden" name="productos[' + count + '][subtotal]" value="' + subtotal + '"><input type="hidden" name="productos[' + count + '][cantidad]" value="' + data.data.cantidad + '"><input type="hidden" name="productos[' + count + '][idalmacen]" value="' + data3.data.idalmacen + '"><input type="hidden" name="productos[' + count + '][idproducto]" value="' + data3.data.idproducto + '">' + producto + '</td>');
                                                                                                            $tr.append('<td>' + data3.data.almacen_nombre + '</td>');
                                                                                                            $tr.append('<td>' + cantidad + '</td>');
                                                                                                            $tr.append('<td>' + accounting.formatMoney(precio_unitario) + '</td>');
                                                                                                            $tr.append('<td>' + accounting.formatMoney(subtotal) + '</td>');
                                                                                                            if (revisado == 1) {
                                                                                                                /*
                                                                                                                 * ACL
                                                                                                                 */
                                                                                                                if (settings.idrol == 5) {
                                                                                                                    $tr.append('<td><inputchecked type="checkbox" name=productos[' + count + '][revisada] disabled></td>');
                                                                                                                } else {
                                                                                                                    $tr.append('<td><input checked type="checkbox" name=productos[' + count + '][revisada]></td>');
                                                                                                                }

                                                                                                            } else {
                                                                                                                /*
                                                                                                                 * ACL
                                                                                                                 */
                                                                                                                if (settings.idrol == 5) {
                                                                                                                    $tr.append('<td><input type="checkbox" name=productos[' + count + '][revisada] disabled></td>');
                                                                                                                } else {
                                                                                                                    $tr.append('<td><input  type="checkbox" name=productos[' + count + '][revisada]></td>');
                                                                                                                }
                                                                                                            }
                                                                                                            if (data3.data.receta.length > 0) {
                                                                                                                $tr.append('<td><a href="javascript:;"><i class="fa fa-list"></i></a></td>');
                                                                                                                var tmpl2 = "";
                                                                                                                for (var k in data3.data.receta) {
                                                                                                                    tmpl2 += [
                                                                                                                        '<tr> <td>' + data3.data.receta[k].producto + '</td> <td> ' + data3.data.receta[k].cantidad + '</td>'
                                                                                                                    ];
                                                                                                                }
                                                                                                                $tr.find('i.fa-list').on('click', function () {
                                                                                                                    var tmpl = [
                                                                                                                        // tabindex is required for focus
                                                                                                                        '<div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                                                                                                                        '<div class="modal-header">',
                                                                                                                        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                                                                                                        '<h4 class="modal-title">' + producto + '</h4>',
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
                                                                                                            } else {
                                                                                                                $tr.append('<td> N/D </td>');
                                                                                                            }
                                                                                                            $('#productos_table tbody').append($tr);

                                                                                                            total = total + parseFloat(parseFloat(subtotal).toFixed(6));
                                                                                                            $('#total').text(accounting.formatMoney(total));
                                                                                                            $('input[name=venta_total]').val(total);
                                                                                                            $modal.modal('hide');
                                                                                                            nextAjax();
                                                                                                        }
                                                                                                    }
                                                                                                });
                                                                                            });
                                                                                        }
                                                                                    }

                                                                                });

                                                                            }
                                                                        });
                                                                    }
                                                                }
                                                            });
                                                        });
                                                    }else{
                                                        
                                                        var revisado = ($('select[name=venta_revisada] option:selected').val() != "") ? $('select[name=venta_revisada] option:selected').val():0;

                                                        var $tr = $('<tr>');
                                                        $tr.append('<td><input type="hidden" name="productos['+count+'][subtotal]" value="'+subtotal+'"><input type="hidden" name="productos['+count+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="productos['+count+'][idalmacen]" value="'+data.data.idalmacen+'"><input type="hidden" name="productos['+count+'][idproducto]" value="'+data.data.idproducto+'">'+producto+'</td>');
                                                        $tr.append('<td>'+data.data.almacen_nombre+'</td>');
                                                        $tr.append('<td>'+cantidad+'</td>');
                                                        $tr.append('<td>'+accounting.formatMoney(precio_unitario)+'</td>');
                                                        $tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                                                        if (revisado == 1) {
                                                            /*
                                                             * ACL
                                                             */
                                                            if (settings.idrol == 5) {
                                                                $tr.append('<td><inputchecked type="checkbox" name=productos[' + count + '][revisada] disabled></td>');
                                                            } else {
                                                                $tr.append('<td><input checked type="checkbox" name=productos[' + count + '][revisada]></td>');
                                                            }

                                                        } else {
                                                            /*
                                                             * ACL
                                                             */
                                                            if (settings.idrol == 5) {
                                                                $tr.append('<td><input type="checkbox" name=productos[' + count + '][revisada] disabled></td>');
                                                            } else {
                                                                $tr.append('<td><input  type="checkbox" name=productos[' + count + '][revisada]></td>');
                                                            }
                                                        }
                                                        if(data.data.receta.length > 0){
                                                            $tr.append('<td><a href="javascript:;"><i class="fa fa-list"></i></a></td>');
                                                            var tmpl2 = "";
                                                            for (var k in data.data.receta) {
                                                                tmpl2 += [
                                                                    '<tr> <td>' + data.data.receta[k].producto +'</td> <td> '+ data.data.receta[k].cantidad + '</td>'
                                                                ];
                                                            }
                                                            $tr.find('i.fa-list').on('click',function(){
                                                            var tmpl = [
                                                                // tabindex is required for focus
                                                                '<div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                                                                '<div class="modal-header">',
                                                                '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                                                '<h4 class="modal-title">' + producto + '</h4>',
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
                                                        }else{
                                                            $tr.append('<td> N/D </td>');
                                                        }
                                                        
                                                        
                                                        
                                                        $('#productos_table tbody').append($tr);
                                                        
                                                        total = total + parseFloat(parseFloat(subtotal).toFixed(6));
                                                        $('#total').text(accounting.formatMoney(total));
                                                        $('input[name=venta_total]').val(total);
                                                        
                                                        nextAjax();
                                                    }
                                                }
                                                
                                            }
                                        });
                                        count++;
                                    }

                               }
                                if(numRequests > 0){
                                     nextAjax();
                                }
                               

                            }else{
                                $('#error_alert').show();
                                $('#error_message').text('Archivo dañado o el archivo se encuentra sin datos');
                            }
                            
                        };
                        reader.readAsBinaryString(f);
                    }
                    
                    //LIMPIAMOS LOS CAMPOS
                    $('#upload_container input').val('');
                }
                
            });
            revisadaControl();
           
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
        plugin.list = function(anio,mes){
        
            //INICIALIZAMOS DATATABLES
            var table = $container.find('#datatable');
            $.ajax({
                url:'/application/json/datatable/lang_es.json',
                dataType:'json',
                success:function(data){
                   table.dataTable({
                       "language":data,
                       "order":[],
                   });
                },
            });

            //ELIMINAR
            $('.delete_modal').click(function(){

              var id = $(this).closest('tr').attr('id');
              var tmpl = [
                // tabindex is required for focus
                ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                  '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>', 
                  '</div>',
                  '<form method="post" action="/procesos/venta/eliminar/'+id+'">',
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
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            /*
             * ACL
             */
            
            if(settings.idrol == 5){
               $('select[name=venta_revisada]').attr('disabled',true);
               $('form input[type=checkbox]').attr('disabled',true);
               var revisada =  $('select[name=venta_revisada] option:selected').val();
               if(revisada == 1){
                   $('form input,form select,form button[type=submit]').attr('disabled',true);
               }
            }

        }
        
        plugin.edit = function(anio,mes){
            formBind(anio,mes);
            
            $('input[name=venta_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/venta/validatefolio",
                    dataType: "json",
                    data: {folio:folio,edit:true,id:$('input[name=idventa]').val()},
                    success: function (exist) {
                        if(exist){
                            alert('El folio "'+folio+'" ya fue utilizado');
                            $this.val('');
                        }else{
                            $this.addClass('valid');
                        }
                        
                    },
                });        
           });
           
           $('#productos_table tbody .fa-list').on('click',function(){
               var idproducto = $(this).closest('tr').attr('idproducto');
               var producto = $(this).closest('tr').find('td').eq(0).text();
               var cantidad = parseFloat(parseFloat($(this).closest('tr').find('td').eq(2).text()).toFixed(6));
               $.ajax({
                    url: '/procesos/venta/getreceta',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        idproducto:  idproducto,
                    },
                    success: function (data) {
                        
                        if(data.response){
                            var tmpl2 = "";
                            for (var k in data.data) {
                                tmpl2 += [
                                    '<tr> <td>' + data.data[k].producto_nombre + '</td> <td> ' + (data.data[k].RecetaCantidad * cantidad) + '</td>'
                                ];
                            }
                        }
                        
                        var tmpl = [
                                // tabindex is required for focus
                                '<div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                                '<div class="modal-header">',
                                '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                '<h4 class="modal-title">' + producto + '</h4>',
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
          
                    }
               });
           });
           
           //VALIDAMOS MES Y ANIO EN CURSO PARA VER SI SE PUEDE MODIFICAR
            var now = $('input[name=venta_fechaventa]').val();
            var now_array = now.split('/');
            var now = new Date(now_array[2]+'/'+now_array[1]+'/'+now_array[0]);
            if(now.format('W') != mes || now.getFullYear() != anio){
                $container.find('input,select,button').attr('disabled',true);
                $('.fa-trash').unbind();
                $('.fa-trash').css('cursor','not-allowed');
                
            }
            
            //COMENTARIOS
            var id = $('input[name=idventa]').val();
            $('#comentarios_container').comentarios({
                table:'ventanota',
                id: id,
                parent:'idventa',
            });
           
           
        }
        
        plugin.new = function(anio,mes){
           
            formBind(anio,mes);
            
            //VALIDATE FOLIO
            $('input[name=venta_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/venta/validatefolio",
                    dataType: "json",
                    data: {folio:folio},
                    success: function (exist) {
                       
                        if(exist){
                            alert('El folio "'+folio+'" ya fue utilizado');
                            $this.val('');
                        }else{
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
    
    
    
})( jQuery );


