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
           
           
           
            var minDate = new Date(anio + '/' + mes + '/' + '01');
            var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth()+1));
            maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate()-1));
            
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
                                
                                var cont_rows = workbook.Sheets[first_sheet_name]['!range'].e.r;
                                var ventas_array = Array();
                                for(var i=2;i<=cont_rows;i++){
                                    var tmp = {
                                        nombre:workbook.Sheets[first_sheet_name][col_nombre+i].v,
                                        cantidad:workbook.Sheets[first_sheet_name][col_cantidad+i].v,
                                        subtotal:workbook.Sheets[first_sheet_name][col_subtotal+i].v,
                                    };
                                    ventas_array.push(tmp);
                                    
                                }
                                var numRequests = ventas_array.length;
                                var count = 0;
                                var total = 0;
                                
                                function nextAjax(){
                                  
                                    if(count < numRequests){
                                        $.ajax({
                                            url: '/procesos/venta/validateproduct',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: {
                                                producto_nombre: ventas_array[count].nombre,
                                                producto_cantidad: ventas_array[count].cantidad,
                                                producto_subtotal: ventas_array[count].subtotal,
                                            },
                                            success: function (data) {
                                                if(data.response){
                                                    if(data.create){
                                                        
                                                        var tmpl = [
                                                            '<div style="width:800px;left:40%" class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                                                '<div class="modal-header">',
                                                                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                                                    '<h4 class="modal-title">Registro de producto</h4>',
                                                                '</div>',
                                                                '<div class="modal-body">',
                                                                    '<div class="row">',
                                                                        '<div class="col-md-6">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_nombre">Nombre del producto *</label>',
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
                                                            '</div>',  
                                                        ].join('');
                                                        var $modal = $(tmpl);
                                                        $modal.modal();
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
                                                                    $modal.find('#input[name=producto_rendimiento]').prop('required',true);
                                                                }else{
                                                                    $modal.find('#rendimiento_container').hide();
                                                                    $modal.find('#input[name=producto_rendimiento]').prop('required',false);
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
                                                                    success: function (data) {
                                                                        if(data.response){
                                                                            $modal.modal('loading');
                                                                            $modal.find('.modal-body > .row').remove();
                                                                            $modal.find('.modal-title').text(data.data.producto_nombre);
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
                                                                                '<div>',
                                                                                '<div class="row">',
                                                                                    '<div class="col-md-6">',
                                                                                        '<h4>Subreceta</h4>',
                                                                                    '</div>',
                                                                                    '<div class="col-md-12">',
                                                                                        
                                                                                    '</div>',
                                                                                    '<div class="col-md-12">',
                                                                                        '<table class="table table-striped table-bordered table-hover order-column" id="datatable" style="border-bottom-width: 0px;">',
                                                                                            '<thead>',
                                                                                                '<th> Producto </th>',
                                                                                                '<th> Cantidad </th>',
                                                                                                '<th> Opciones </th>',
                                                                                            '</thead>',
                                                                                        '</table>',
                                                                                    '</div>',
                                                                                '<div>',
                                                                            ].join('');
                                                                            $modal.find('.modal-body').append(tmpl);
                                                                            $.each(data.almacenes,function(index){
                                                                                var option = $('<option value="'+index+'">'+this+'</option>');
                                                                                $modal.find('select[name=idalmacen]').append(option);
                                                                            });
                                                                        }
                                                                    }
                                                                    
                                                                });
                                                                
                                                            }
                                                        });
                                                        
                                                    }else if(data.rename){
                                                        
                                                    }else{
                                                        
                                                        var revisado = ($('select[name=venta_revisada] option:selected').val() != "") ? $('select[name=venta_revisada] option:selected').val():0;

                                                        var $tr = $('<tr>');
                                                        $tr.append('<td><input type="hidden" name="productos['+count+'][subtotal]" value="'+data.data.subtotal+'"><input type="hidden" name="productos['+count+'][cantidad]" value="'+data.data.cantidad+'"><input type="hidden" name="productos['+count+'][idalmacen]" value="'+data.data.idalmacen+'"><input type="hidden" name="productos['+count+'][idproducto]" value="'+data.data.idproducto+'">'+data.data.producto+'</td>');
                                                        $tr.append('<td>'+data.data.almacen_nombre+'</td>');
                                                        $tr.append('<td>'+data.data.cantidad+'</td>');
                                                        $tr.append('<td>'+accounting.formatMoney(data.data.precio_unitario)+'</td>');
                                                        $tr.append('<td>'+accounting.formatMoney(data.data.subtotal)+'</td>');
                                                        if(revisado == 1){
                                                            $tr.append('<td><input checked type="checkbox" name=productos['+count+'][revisada]></td>');
                                                        }else{
                                                            $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
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
                                                                '<h4 class="modal-title">' + data.data.producto + '</h4>',
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
                                                        
                                                        total = total + parseFloat(data.data.subtotal);
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
                if((date.getMonth()+1) != mes || (date.getFullYear()) != anio){
                    $(this).find('.delete_modal').unbind();
                    $(this).find('.delete_modal').css('cursor','not-allowed');
                }
            });
            
            
        }
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);

        }
        
        plugin.new = function(anio,mes){
           
            formBind(anio,mes);
            
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


