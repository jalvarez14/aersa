(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.compra = function(data){
        var _this = $(this);
        var plugin = _this.data('compra');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.compra(this, data);
            
            _this.data('compra', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.compra = function(container, options){
        
        var plugin = this;
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        var $table;

        
        var defaults = {
            iva:19,
       };
        
        /*
        * Private methods
        */
       
        var addCompraDetail = function(key,producto,cfdi){
 
                var iva = parseFloat(cfdi.iva);
                if(iva>0){
                    iva = 'true';
                }else{
                    iva = 'false';
                }
                
                //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO
                var almacenen_select = $('<td><select class="form-control" name=productos['+key+'][almacen]></td>');
                $.each(settings.almacenes,function(index){
                    var option = $('<option value="'+index+'">'+this+'</option>');
                    almacenen_select.find('select').append(option);
                });
                
                var almacen_selected = $('select[name=idalmacen] option:selected').val();
                almacenen_select.find('option[value="'+almacen_selected+'"]').attr('selected',true);
                
                var tr = $('<tr>');
                tr.append('<td><input type="hidden"  name="productos['+key+'][producto_iva]" value="'+iva+'"><input name=productos['+key+'][subtotal] type=hidden value="'+cfdi.importe+'"><input name=productos['+key+'][costo_unitario] type=hidden value="'+cfdi.valorUnitario+'"><input type="hidden"  name=productos['+key+'][idproducto] value="'+producto.idproducto+'">'+producto.producto_nombre+'</td>');
                tr.append('<td>'+producto.unidadmedida_nombre+'</td>');
                tr.append('<td><input type="text" name=productos['+key+'][cantidad] value="1"></td>');
                tr.append('<td><input type="text" name=productos['+key+'][precio] value="'+cfdi.valorUnitario+'"></td>');
                tr.append('<td class="costo_unitario">'+accounting.formatMoney(cfdi.valorUnitario)+'</td>');
                tr.append('<td><input type="text" name=productos['+key+'][descuento] value="0"></td>');
                tr.append('<td><input type="text" name=productos['+key+'][ieps] value="0"></td>');
                tr.append('<td class="subtotal">'+accounting.formatMoney(cfdi.importe)+'</td>');

                /*
                 * ACL
                 */
                if(settings.idrol == 5){
                    tr.append('<td><input type="checkbox" name=productos['+key+'][revisada] disabled></td >');
                }else{
                    tr.append('<td><input type="checkbox" name=productos['+key+'][revisada]></td>');
                }
                
                tr.append(almacenen_select);
                tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                
                //AQUI HACEMOS HACEMOS NUMERICOS TODOS NUESTRO CAMPOS INPUTS
                tr.find('input').numeric();
                
                //ADJUNTAMOS EL EVENTO CALCULATOR PARA CALCULAR SUBTOTAL,TOTAL,IEPS, ETC
                tr.find('input').on('blur',function(){
                    var $tr = $(this).closest(tr);
                    caluclator($tr);
                });
                
                var revisada = $('select[name=compra_revisada] option:selected').val();
                if(revisada==1){
                    tr.find('input[type=checkbox]').prop('checked',true);
                }
                
                //INSERTAMOS EN LA TABLA
                $('#productos_table tbody').append(tr);
                 tr.find('input[name*=cantidad]').focus();
                 
                //LIMPIAMOS EL AUTOCOMPLETE
                $('input#producto_autocomplete').typeahead('val', ''); 
                $('input#idproducto').val(''); 
                $('input#producto_iva').val('');
                $('#producto_add').attr('disabled',true);

                $('.fa-trash').on('click',function(){
                  var tr = $(this).closest('tr');
                  tr.remove();
                });   

                //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
                revisadaControl();
                caluclator(tr);
            }
            
        var caluclator = function($tr){
            
            var cantidad = $tr.find('input[name*=cantidad]').val() != "" ? parseFloat(parseFloat(parseFloat($tr.find('input[name*=cantidad]').val()).toFixed(6))) : 1;
           
            var precio = $tr.find('input[name*=precio]').val() != "" ? parseFloat(parseFloat(parseFloat($tr.find('input[name*=precio]').val()).toFixed(6))) : 0;
            var descuento = $tr.find('input[name*=descuento]').val() != "" ? parseFloat(parseFloat(parseFloat($tr.find('input[name*=descuento]').val()).toFixed(6))) : 0;
            var ieps = $tr.find('input[name*=ieps]').val() != "" ? parseFloat(parseFloat(parseFloat($tr.find('input[name*=ieps]').val()).toFixed(6))) : 0;
 
            //COSTO UNITARIO
            var row_ieps = (precio * ieps) / 100;
            var costo_unitario = precio + row_ieps;
            $tr.find('input[name=costo_unitario]').val(costo_unitario);
            $tr.find('td.costo_unitario').text(accounting.formatMoney(costo_unitario));

            //DESCUENTO
            var row_desc = (costo_unitario * descuento) / 100;
            
            costo_unitario = costo_unitario - row_desc;
            
            $tr.find('input[name*=costo_unitario]').val(costo_unitario);
            $tr.find('td.costo_unitario').text(accounting.formatMoney(costo_unitario));
            
            //ROW SUBTOTAL
            var row_subtotal = cantidad * costo_unitario;
            $tr.find('input[name*=subtotal]').val(row_subtotal);
            $tr.find('td.subtotal').text(accounting.formatMoney(row_subtotal));
            
            //COMPRA IEPS
            var compra_ieps = 0.00;
            $('#productos_table tbody tr').filter(function(){
                var precio = $(this).find('input[name*=precio]').val();
                var ieps = $(this).find('input[name*=ieps]').val();
                var cantidad = $(this).find('input[name*=cantidad]').val();
                
                var row_ieps = ((precio * ieps) / 100) * cantidad;
                compra_ieps = compra_ieps + row_ieps;
            });
            
            $('#productos_table tfoot').find('#ieps').text(accounting.formatMoney(compra_ieps));
            $('#productos_table tfoot').find('input[name=compra_ieps]').val(compra_ieps);
            
            //COMPRA IVA
            var compra_iva = 0.00;
            $('#productos_table tbody tr').filter(function(){
                                                  
                var has_iva = $(this).find('input[name*=producto_iva]').val();
                                                  console.log($(this));
                 console.log(has_iva);
                                                  console.log(typeof has_iva);
                if(has_iva == "true" || has_iva == 1){
                    
                    var subtotal = parseFloat(parseFloat(parseFloat($(this).find('input[name*=subtotal]').val()).toFixed(6)));
                    var row_iva = (subtotal * settings.iva) / 100;
                    
                    compra_iva = compra_iva + row_iva;
                }
                
            });
     
            $('#productos_table tfoot').find('#iva').text(accounting.formatMoney(compra_iva));
            $('#productos_table tfoot').find('input[name=compra_iva]').val(compra_iva);
            
            //COMPRA SUBTOTAL
            var compra_subtotal = 0.00;
            $('#productos_table tbody').find('input[name*=subtotal]').filter(function(){

                compra_subtotal= compra_subtotal + parseFloat(parseFloat(parseFloat($(this).val()).toFixed(6)));
                
            });
            
            $('#productos_table tfoot').find('#subtotal').text(accounting.formatMoney(compra_subtotal));
            $('#productos_table tfoot').find('input[name=compra_subtotal]').val(compra_subtotal);
            
            
            //COMPRA TOTAL
            var compra_total = compra_subtotal + compra_iva;
           
            $('#productos_table tfoot').find('#total').text(accounting.formatMoney(compra_total));
            $('#productos_table tfoot').find('input[name=compra_total]').val(compra_total);
            
            
            
            
       
        }
        
        var revisadaControl = function () {

            $('select[name=compra_revisada]').on('change', function () {
               
                var selected = $('select[name=compra_revisada] option:selected').val();
              
                if (selected == 1) {
                    console.log( $('#productos_table tbody input[type=checkbox]'));
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
                    $('select[name=compra_revisada]').val(0);
               }else{
                    $('select[name=compra_revisada]').val(1);
               }
                
                
            });

        }
        var ObjectLength = function( object ) {
            var length = 0;
            for( var key in object ) {
                if( object.hasOwnProperty(key) ) {
                    ++length;
                }
            }
            return length;
        };
        
        function encode_utf8(s) {
            return unescape(encodeURIComponent(s));
          }

          function decode_utf8(s) {
            return decodeURIComponent(escape(s));
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
                       "columnDefs": [
                            { "type": "date-eu", targets: 0 }
                        ]
                   });
                },
            });

            //ELIMINAR COMPRA
            $('.delete_modal').click(function(){

              var id = $(this).closest('tr').attr('id');
              var tmpl = [
                // tabindex is required for focus
                ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                  '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>', 
                  '</div>',
                  '<form method="post" action="/procesos/compra/eliminar/'+id+'">',
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
        
        plugin.init = function(){
            
            
            /*
             * Agregar proveedor
             */
            
            $container.find('.proveedor_modal').on('click',function(){
                var idcompra = $(this).closest('tr').attr('id');
                var tmpl = [
                    '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                        '<div class="modal-header">',

                            '<h4 class="modal-title">Agregar proveedor </h4>',
                        '</div>',
                        '<form method="POST" action="/procesos/compra/agregarproveedor">',
                            '<div class="modal-body">',
                                '<div class="row">',
                                    '<div class="col-md-12">',
                                        '<div class="form-group">',
                                            '<label for="producto_nombre">Proveedor *</label>',
                                            '<div class="input-group">',
                                                '<span class="input-group-addon">',
                                                    '<i class="fa fa-search"></i>',
                                                '</span>',
                                                '<input type="hidden" name="idcompra" value="'+idcompra+'">',
                                                '<input type="hidden" name="idproveedor">',
                                                '<input required class="form-control" type="text" name="idproveedor_autocomplete">',
                                                 '<span style="color:red;display:none">Este campo es requerido</span>',
                                            '</div>',
                                        '</div>',
                                    '</div>',
                                '</div>',
                            '</div>',
                            '<div class="modal-footer">',
                             '<a href="#" data-dismiss="modal" class="btn btn-default">Cancelar</a>',
                                '<button type="submit" id="save_product" href="#" class="btn blue">Guardar</button>',
                               
                            '</div>',
                        '</form>',
                    '</div>',  
                ].join('');
                var $modal = $(tmpl);
               
               var data = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    remote: {
                      url: '/autocomplete/getproveedores?q=%QUERY',
                      wildcard: '%QUERY'
                    }
                });
                $modal.find('input[name=idproveedor_autocomplete]').typeahead(null, {
                    name: 'best-pictures',
                    display: 'value',
                    hint: true,
                    highlight: true,
                    source: data,
                    limit:100,
                });
                $modal.find('input[name=idproveedor_autocomplete]').bind('typeahead:select', function(ev, suggestion) {

                    $modal.find('input[name=idproveedor]').val(suggestion.id);
                });
                $modal.find('#cancel_product').on('click',function(){
                    $modal.modal('hide');
                });

                $modal.modal();
            });
            
            
            
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            
            /*
             * El campo fecha de entrega, sólo se debe de visualizar, o bien, habilitar cuando el tipo sea: orden de compra
             */
            
            var compra_tipo = $('select[name=compra_tipo] option:selected').val();
      
            if(compra_tipo == 'ordecompra'){
                $('input[name=compra_fechaentrega]').attr('disabled',false);
            }else{
                $('input[name=compra_fechaentrega]').val('');
                $('input[name=compra_fechaentrega]').attr('disabled',true);
            }
            $('select[name=compra_tipo]').on('change',function(){
                var compra_tipo = $('select[name=compra_tipo] option:selected').val();
                if(compra_tipo == 'ordecompra'){
                $('input[name=compra_fechaentrega]').attr('disabled',false);
            }else{
                 $('input[name=compra_fechaentrega]').val('');
                $('input[name=compra_fechaentrega]').attr('disabled',true);
            }
            });
            
            
            //COMPRAS POR CFDI
            $('#cfdi_add').on('click',function(){
                $('input[name=cfdi_add]').trigger('click');
            });
            $('input[name=cfdi_add]').on('change',function(){
                
                var empty = false;
                var val = $('input[name=cfdi_add]').val();
                if(val == ""){
                    empty = true;
                }
                
                if(!empty){
                    var files = $('input[name=cfdi_add]').get(0).files;
                    var i, f;
                    for (i = 0, f = files[i]; i != files.length; ++i) {
                        
                        var reader = new FileReader();
                        var name = f.name;
                        reader.onload = function (e) {
                            
                             var data = e.target.result;
                             var xml = jQuery.parseXML(data);
                             
                             var json = xmlToJson(xml);
                            // console.log(json);
                             //console.log(json);
                             var folio = json['cfdi:Comprobante']['@attributes']['folio'];
                
                             $('input[name=compra_folio]').val(folio);
                             var emisor_nombre = json['cfdi:Comprobante']['cfdi:Emisor']['@attributes']['nombre'];
                             //var numRequests =  ObjectLength(json['cfdi:Comprobante']['cfdi:Conceptos']);
                             var count = 0;
                             var total = 0;
                             var productos_array = Array();
                             //console.log(json);
                             $.each(json['cfdi:Comprobante']['cfdi:Conceptos']['cfdi:Concepto'],function(index,row){
                             //console.log(row);  
                            // console.log(typeof row);
                                //var row = row['@attributes']; 
                                if(typeof row['@attributes'] != 'undefined'){
                                    var row = row['@attributes']; 
                                }
                                if(typeof row == 'object'){
                                    var tmp = {
                                        cantidad:row.cantidad,
                                        descripcion:row.descripcion,
                                        importe:row.importe,
                                        unidad:row.unidad,
                                        valorUnitario:row.valorUnitario,

                                    }
                                    productos_array.push(tmp);
                                }
                             });
                             
                             var countImpuestos = 0;
                             $.each(json['cfdi:Comprobante']['cfdi:Impuestos']['cfdi:Traslados']['cfdi:Traslado'],function(index,row){
                                if(typeof row['@attributes'] != 'undefined'){
                                    var row = row['@attributes']; 
                                }
                                 if(typeof row == 'object'){
                                    productos_array[countImpuestos].iva = row.importe;
                                    countImpuestos++;
                                }
                             });
                            
                             var numRequests = productos_array.length;
                             function nextAjax(){
                                   if(count < numRequests){
                                        $.ajax({
                                            url: '/catalogo/producto/validateproductcfdi',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            async: false,
                                            data:  productos_array[count],
                                            success: function (data) {
                                                if(!data.response){
                                                    var tmpl = [
                                                        '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                                            '<div class="modal-header">',

                                                                '<h4 class="modal-title">Asociar concepto - producto </h4>',
                                                            '</div>',
                                                            '<div class="modal-body">',
                                                                '<div class="row">',
                                                                    '<div class="col-md-12">',
                                                                        '<div class="custom-alerts alert alert-warning fade in">',
                                                                            '<strong>Advertencia!</strong>',
                                                                             ' El siguiente concepto NO se encuentra asociado a ningun producto. Para continuar es necesario que lo asocie a un producto existente.',
                                                                        '</div>',
                                                                    '</div>',
                                                                    '<div class="col-md-12">',
                                                                        '<div class="form-group">',
                                                                            '<label for="producto_nombre">Descripción del concepto *</label>',
                                                                            '<input required class="form-control" type="text" name="concepto_descripcion" value="'+decode_utf8(productos_array[count]['descripcion'])+'" disabled>',
                                                                        '</div>',
                                                                    '</div>',
                                                                    '<div class="col-md-12">',
                                                                        '<div class="form-group">',
                                                                            '<label for="producto_nombre">Producto *</label>',
                                                                            '<div class="input-group">',
                                                                                '<span class="input-group-addon">',
                                                                                    '<i class="fa fa-search"></i>',
                                                                                '</span>',
                                                                                '<input type="hidden" name="idproducto">',
                                                                                '<input required class="form-control" type="text" name="producto_autocomplete">',
                                                                                 '<span style="color:red;display:none">Este campo es requerido</span>',
                                                                            '</div>',
                                                                        '</div>',
                                                                    '</div>',
                                                                '</div>',
                                                            '</div>',
                                                            '<div class="modal-footer">',
                                                                '<button id="save_product" href="#" class="btn blue">Guardar</button>',
                                                                '<button id="cancel_product" href="#" class="btn red">Cancelar</button>',
                                                            '</div>',
                                                        '</div>',  
                                                    ].join('');
                                                    var $modal = $(tmpl);
                                                    $modal.modal();
                                                    
                                                    var data = new Bloodhound({
                                                        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                                                        queryTokenizer: Bloodhound.tokenizers.whitespace,
                                                        remote: {
                                                          url: '/autocomplete/getproductos?q=%QUERY&type=simple',
                                                          wildcard: '%QUERY'
                                                        }
                                                    });
                                                    
                                                    $modal.find('input[name=producto_autocomplete]').typeahead(null, {
                                                        name: 'best-pictures',
                                                        display: 'value',
                                                        hint: true,
                                                        highlight: true,
                                                        source: data,
                                                        limit:100,
                                                    });

                                                    $modal.find('input[name=producto_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                                                         $modal.find('input[name=idproducto]').val(suggestion.id);
                                                    });
                                                    $modal.find('#cancel_product').on('click',function(){
                                                        count++;
                                                        $modal.modal('hide');
                                                        nextAjax();
                                                    });
                                                    $modal.find('#save_product').on('click',function(){
                     
                                                        var idproducto = $modal.find('input[name=idproducto]').val();
                                                        var concepto_nombre = productos_array[count]['descripcion'];
                                                        $.ajax({
                                                            url:'/catalogo/producto/associateproductcfdi',
                                                            type:'POST',
                                                            data:{idproducto:idproducto,concepto_nombre:concepto_nombre},
                                                            dataType:'JSON',
                                                            success: function (data2) {
                                                               if(data2.response){
                                                                   addCompraDetail(count,data2.producto,productos_array[count]);
                                                                   count++;
                                                                   $modal.modal('hide');
                                                                   nextAjax();
                                                               }
                                                            }
                                                        });
                                                    });
                                                }else{
                                                    addCompraDetail(count,data.producto,productos_array[count]);
                                                    count++;
                                                    
                                                    nextAjax();
                                                }
                                            }
                                        });
                                   }
                             }
                             $.ajax({
                                url: '/catalogo/proveedor/validateproveedorcfdi',
                                type: 'POST',
                                dataType: 'JSON',
                                async: false,
                                data:  {emisor_nombre:emisor_nombre},
                                success: function (data) {
                                    if(!data.response){
                                        var tmpl = [
                                            '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                                '<div class="modal-header">',

                                                    '<h4 class="modal-title">Asociar emisor - proveedor </h4>',
                                                '</div>',
                                                '<div class="modal-body">',
                                                    '<div class="row">',
                                                        '<div class="col-md-12">',
                                                            '<div class="custom-alerts alert alert-warning fade in">',
                                                                '<strong>Advertencia!</strong>',
                                                                 ' El siguiente emisor NO se encuentra asociado a ningun proveedor. Para continuar es necesario que lo asocie a un proveedor existente.',
                                                            '</div>',
                                                        '</div>',
                                                        '<div class="col-md-12">',
                                                            '<div class="form-group">',
                                                                '<label for="producto_nombre">Nombre del emisor *</label>',
                                                                '<input required class="form-control" type="text" name="emisor_nombre" value="'+emisor_nombre+'" disabled>',
                                                            '</div>',
                                                        '</div>',
                                                        '<div class="col-md-12">',
                                                            '<div class="form-group">',
                                                                '<label for="producto_nombre">Proveedor *</label>',
                                                                '<div class="input-group">',
                                                                    '<span class="input-group-addon">',
                                                                        '<i class="fa fa-search"></i>',
                                                                    '</span>',
                                                                    '<input type="hidden" name="idproveedor">',
                                                                    '<input required class="form-control" type="text" name="idproveedor_autocomplete">',
                                                                     '<span style="color:red;display:none">Este campo es requerido</span>',
                                                                '</div>',
                                                            '</div>',
                                                        '</div>',
                                                    '</div>',
                                                '</div>',
                                                '<div class="modal-footer">',
                                                    '<button id="save_product" href="#" class="btn blue">Guardar</button>',
                                                    '<button id="cancel_product" href="#" class="btn red">Cancelar</button>',
                                                '</div>',
                                            '</div>',  
                                        ].join('');
                                        var $modal = $(tmpl);
                                         
                                        var data = new Bloodhound({
                                            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                                            queryTokenizer: Bloodhound.tokenizers.whitespace,
                                            remote: {
                                              url: '/autocomplete/getproveedores?q=%QUERY&cfdi=1',
                                              wildcard: '%QUERY'
                                            }
                                        });
                                        $modal.find('input[name=idproveedor_autocomplete]').typeahead(null, {
                                            name: 'best-pictures',
                                            display: 'value',
                                            hint: true,
                                            highlight: true,
                                            source: data,
                                            limit:100,
                                        });
                                        $modal.find('input[name=idproveedor_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                           
                                            $modal.find('input[name=idproveedor]').val(suggestion.id);
                                        });
                                        $modal.find('#cancel_product').on('click',function(){
                                            $modal.modal('hide');
                                        });
                                        $modal.find('#save_product').on('click',function(){
                 
                                            var idproveedor = $modal.find('input[name=idproveedor]').val();
                                            if($modal.find('input[name=idproveedor_autocomplete]').val() !=""){
                                                $.ajax({
                                                    url:'/catalogo/proveedor/associatevendor',
                                                    type:'POST',
                                                    data:{idproveedor:idproveedor,emisor_nombre:emisor_nombre},
                                                    dataType:'JSON',
                                                    success: function (data2) {
                                                        $('input[name=idproveedor_autocomplete]').typeahead('val',data2.proveedor.value);
                                                        $('input[name=idproveedor]').val(data2.proveedor.id);
                                                        $modal.modal('hide');
                                                        nextAjax();
                                                    }
                                                });
                                            }
                                        });
                                        $modal.modal();
                                    }else{
                                        
                                       
                                        $('input[name=idproveedor_autocomplete]').typeahead('val',data.proveedor.value);
                                        $('input[name=idproveedor]').val(data.proveedor.id);
                                        nextAjax();
                                    }
                                }
                            });
                             
                           
                             
      
              
                        }
                        reader.readAsBinaryString(f);
                    }
                }
            });
            

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

        plugin.new = function(anio,mes,almacenes){
            
            
            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);
            
            if(settings.idrol != 5){
                $.ajax({
                    url:'/autocomplete/getultimasemanarevisada',
                    dataType: 'json',
                    success: function (data) {
                       if(data.response){
                            var minDate = firstDayOfWeek(data.semanarevisada.semanarevisada_anio,(data.semanarevisada.semanarevisada_semana + 1));
                            var min_semana_activa = firstDayOfWeek(anio,mes);
                            var maxDate = new Date(min_semana_activa);
                            maxDate.setDate(min_semana_activa.getDate() + 6);
                            container.find('input[name=compra_fechacompra]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                           
                       }else{
                            container.find('input[name=compra_fechacompra]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                       }
                    },
                });
            }else{
                container.find('input[name=compra_fechacompra]').datepicker({
                    startDate:minDate,
                    endDate:maxDate,
                    format: 'dd/mm/yyyy',
                });
            }
            $('input[name=compra_fechacompra]').on('changeDate', function(e) {
                var date = $('input[name=compra_fechacompra]').val();
                $.ajax({
                    url:'/procesos/compra/getalmacenesbyinventario',
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
            
            
            container.find('input[name=compra_fechaentrega]').datepicker({
                format: 'dd/mm/yyyy',
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/autocomplete/getproveedores?q=%QUERY',
                  wildcard: '%QUERY'
                }
            });
            
            $('input[name=idproveedor_autocomplete]').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit:100,
            });
            
            $('input[name=idproveedor_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                $('input[name=idproveedor]').val(suggestion.id);
               
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/autocomplete/getproductos?q=%QUERY&type=simple',
                  wildcard: '%QUERY'
                }
            });
            
            $('input#producto_autocomplete').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit:100,
            });
            
            $('input#producto_autocomplete').bind('typeahead:select', function(ev, suggestion) {
                $('#producto_add').attr('disabled',false);
                $('input#idproducto').val(suggestion.id);
                $('input#producto_iva').val(suggestion.producto_iva);
                 $('input#producto_costo').val(suggestion.producto_costo);
                $('input#unidadmedida_nombre').val(suggestion.unidadmedida_nombre);
                
            });
            
            var count = 0;

            $('#producto_add').on('click',function(){  
                
                //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO

                var almacenen_select = $('<td>');
                almacenen_select.append($('select[name=idalmacen]').clone());
                var almacen_selected = $('select[name=idalmacen] option:selected').val();
                almacenen_select.find('option[value="'+almacen_selected+'"]').attr('selected',true);
                almacenen_select.find('select').attr('name',"productos["+count+"][almacen]");
                
                var tipo = $('select[name=compra_tipo] option:selected').val();
                
                if(tipo == 'ordecompra'){
                   
                    almacenen_select.find('select').attr('disabled',true);
                }

                var producto_costo = (typeof $('input#producto_costo').val() != 'undefined') ? $('input#producto_costo').val() : 0;
                
                var tr = $('<tr>');
                tr.append('<td><input name=productos['+count+'][subtotal] type=hidden><input name=productos['+count+'][costo_unitario] type=hidden><input type="hidden"  name=productos['+count+'][producto_iva] value="'+$('input#producto_iva').val()+'"><input type="hidden"  name=productos['+count+'][idproducto] value="'+$('input#idproducto').val()+'">'+$('input#producto_autocomplete').typeahead('val')+'</td>');
                tr.append('<td>'+$('input#unidadmedida_nombre').val()+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][precio] value="'+producto_costo+'"></td>');
                tr.append('<td class="costo_unitario">'+accounting.formatMoney(producto_costo)+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][descuento] value="0"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][ieps] value="0"></td>');
                tr.append('<td class="subtotal">'+accounting.formatMoney(0)+'</td>');
                /*
                 * ACL
                 */
                if(settings.idrol == 5){
                    tr.append('<td><input type="checkbox" name=productos['+count+'][revisada] disabled></td >');
                }else{
                    tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
                }
                
                tr.append(almacenen_select);
                tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                
                //AQUI HACEMOS HACEMOS NUMERICOS TODOS NUESTRO CAMPOS INPUTS
                tr.find('input').numeric();
                
                //ADJUNTAMOS EL EVENTO CALCULATOR PARA CALCULAR SUBTOTAL,TOTAL,IEPS, ETC
                tr.find('input').on('blur',function(){
                    var $tr = $(this).closest(tr);
                    caluclator($tr);
                });
                
                var revisada = $('select[name=compra_revisada] option:selected').val();
                if(revisada==1){
                    tr.find('input[type=checkbox]').prop('checked',true);
                }
                
                //INSERTAMOS EN LA TABLA
                $('#productos_table tbody').prepend(tr);
                 tr.find('input[name*=cantidad]').focus();
                 tr.find('input[name*=cantidad]').select();
                 //tr.find('input[name*=cantidad]').css("background-color","lightblue");
                 
                //LIMPIAMOS EL AUTOCOMPLETE
                $('input#producto_autocomplete').typeahead('val', ''); 
                $('input#idproducto').val(''); 
                $('input#producto_iva').val('');
                $('#producto_add').attr('disabled',true);
                
                
              count ++;   
              
              $('.fa-trash').on('click',function(){
                var tr = $(this).closest('tr');
                tr.remove();
                caluclator(tr);
              });   
              
            //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
            revisadaControl();
            caluclator(tr); 
            
            
            });
            
            //Si el tipo de entidad es orden de compra, el campo de almacén (entidad) y almacén (registro) se encuentra disable
           $('select[name=compra_tipo]').on('change',function(){
               
               var selected = $('select[name=compra_tipo] option:selected').val();
               if(selected == 'ordecompra'){
                   var folio = $('input[name=compra_foliohidden]').val();
                   $('input[name=compra_folio]').val(folio);
                   $('select[name=idalmacen]').attr('disabled',true);
                   $('select[name=idalmacen]').attr('required',false);
                   $('#productos_table tbody select').attr('disabled',true);
                  
               }else{
                    $('input[name=compra_folio]').val('');
                   $('select[name=idalmacen]').attr('disabled',false);
                   $('select[name=idalmacen]').attr('required',true);
                   $('#productos_table tbody select').attr('disabled',false);
                   
                    
               }
           });
           
           //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
            revisadaControl();

           //VALIDAR FOLIO
           $('input[name=compra_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/compra/validatefolio",
                    dataType: "json",
                    data: {folio:folio,idproveedor:$('input[name=idproveedor]').val()},
                    success: function (exist) {
                       
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
               $('select[name=compra_revisada] option[value=1]').remove();
           }
           
           $('a.submit').on('click',function(e){
               
                var folio = $('input[name=compra_folio]').val();
                 if(folio !== ""){ 
                    $('input[name=compra_folio]').removeClass('valid');
                    $.ajax({
                        url: "/procesos/compra/validatefolio",
                        dataType: "json",
                        data: {folio:folio,idproveedor:$('input[name=idproveedor]').val()},
                        success: function (exist) {

                            if(exist){
                                alert('El folio "'+folio+'" ya fue utilizado en los últimos 2 meses');
                                $('input[name=compra_folio]').val('');
                            }else{
                                $('input[name=compra_folio]').addClass('valid');
                                $container.find('button[type=submit]').trigger('click');
                            }

                        },
                    });
                }else{
                    $container.find('button[type=submit]').trigger('click');
                }
               
           });
           
           
           
                         
        }
        
        plugin.edit = function(anio,mes,almacenes,count,compra_tipo){
            
            //VALIDA SI TODAVIA SE PUEDE EDITAR SEGUN EL INVENTARIOS MES
            var date = $('input[name=compra_fechacompra]').val();
            var idalmacen = $('select[name=idalmacen] option:selected').val();
            var compra_tipo = $('select[name=compra_tipo] option:selected').val();
            
            if(compra_tipo == 'compra'){
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
            }
         
            
            //SI ES ORDEN DE COMPRA DESHABILITAMOS LOS SELECT DE ALMACEN
            if(compra_tipo == 'ordecompra'){
                $container.find('select[name=idalmacen]').attr('disabled',true);
                $container.find('select[name*=almacen]').attr('disabled',true);
            }

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
                            container.find('input[name=compra_fechacompra]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
    
                       }else{
                            container.find('input[name=compra_fechacompra]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                       }
                    },
                });
            }else{
                container.find('input[name=compra_fechacompra]').datepicker({
                    startDate:minDate,
                    endDate:maxDate,
                    format: 'dd/mm/yyyy',
                });
            }
            $('input[name=compra_fechacompra]').on('changeDate', function(e) {
                var date = $('input[name=compra_fechacompra]').val();
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
            container.find('input[name=compra_fechaentrega]').datepicker({
                format: 'dd/mm/yyyy',
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/autocomplete/getproveedores?q=%QUERY',
                  wildcard: '%QUERY'
                }
            });
            
            $('input[name=idproveedor_autocomplete]').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit:100,
            });
            
            $('input[name=idproveedor_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                $('input[name=idproveedor]').val(suggestion.id);
               
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/autocomplete/getproductos?q=%QUERY&type=simple',
                  wildcard: '%QUERY'
                }
            });
            
            $('input#producto_autocomplete').typeahead(null, {
                name: 'best-pictures',
                display: 'value',
                hint: true,
                highlight: true,
                source: data,
                limit:100,
            });
            
            $('input#producto_autocomplete').bind('typeahead:select', function(ev, suggestion) {
                $('#producto_add').attr('disabled',false);
                $('input#idproducto').val(suggestion.id);
                $('input#producto_iva').val(suggestion.producto_iva);
                $('input#producto_costo').val(suggestion.producto_costo);
                $('input#unidadmedida_nombre').val(suggestion.unidadmedida_nombre);
                
            });
            
            $('#productos_table tbody').numeric();
            
            var count = count;
            $('#producto_add').on('click',function(){  
                
                //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO
                var almacenen_select = $('<td>');
                almacenen_select.append($('select[name=idalmacen]').clone());
                var almacen_selected = $('select[name=idalmacen] option:selected').val();
                almacenen_select.find('option[value="'+almacen_selected+'"]').attr('selected',true);
                almacenen_select.find('select').attr('name',"productos["+count+"][almacen]");
           
                var tipo = $('select[name=compra_tipo] option:selected').val();
                
                if(tipo == 'ordecompra'){
                   
                    almacenen_select.find('select').attr('disabled',true);
                }

                var producto_costo = (typeof $('input#producto_costo').val() != 'undefined') ? $('input#producto_costo').val() : 0;
                 
                var tr = $('<tr>');
                tr.append('<td><input name=productos['+count+'][subtotal] type=hidden><input name=productos['+count+'][costo_unitario] type=hidden><input type="hidden"  name=productos['+count+'][producto_iva] value="'+$('input#producto_iva').val()+'"><input type="hidden"  name=productos['+count+'][idproducto] value="'+$('input#idproducto').val()+'">'+$('input#producto_autocomplete').typeahead('val')+'</td>');
                tr.append('<td>'+$('input#unidadmedida_nombre').val()+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][precio] value="'+producto_costo+'"></td>');
                tr.append('<td class="costo_unitario">'+accounting.formatMoney(producto_costo)+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][descuento] value="0"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][ieps] value="0"></td>');
                tr.append('<td class="subtotal">'+accounting.formatMoney(0)+'</td>');
                /*
                 * ACL
                 */
                if(settings.idrol == 5){
                    tr.append('<td><input type="checkbox" name=productos['+count+'][revisada] disabled></td >');
                }else{
                    tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
                }
                tr.append(almacenen_select);
                tr.append('<td style="border-bottom:solid 1px #E7ECF1;"><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                
                //AQUI HACEMOS HACEMOS NUMERICOS TODOS NUESTRO CAMPOS INPUTS
                tr.find('input').numeric();
                
                //ADJUNTAMOS EL EVENTO CALCULATOR PARA CALCULAR SUBTOTAL,TOTAL,IEPS, ETC
                tr.find('input').on('blur',function(){
                    var $tr = $(this).closest(tr);
                    caluclator($tr);
                });
                
                var revisada = $('select[name=compra_revisada] option:selected').val();
                if(revisada==1){
                    tr.find('input[type=checkbox]').prop('checked',true);
                }
                
                //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
                revisadaControl();
                
                //INSERTAMOS EN LA TABLA
                $('#productos_table tbody').prepend(tr);
                tr.find('input[name*=cantidad]').focus();
                tr.find('input[name*=cantidad]').css("background-color","lightblue");
               
                
                //LIMPIAMOS EL AUTOCOMPLETE
                $('input#producto_autocomplete').typeahead('val', ''); 
                $('input#idproducto').val(''); 
                $('input#producto_iva').val('');
                $('#producto_add').attr('disabled',true);
                
                
             count ++;          
             $('.fa-trash').on('click',function(){
                var tr = $(this).closest('tr');
                tr.remove();
                caluclator(tr); 
             });         
              caluclator(tr);
            
            
            });
            
            //ADJUNTAMOS EL EVENTO CALCULATOR PARA CALCULAR SUBTOTAL,TOTAL,IEPS, ETC
            $container.find('table input').on('blur',function(){
                var $tr = $(this).closest('tr');
                caluclator($tr);
            });
                
            $('.fa-trash').on('click',function(){
                var tr = $(this).closest('tr');
                tr.remove();
                caluclator(tr);
             });

            //Si el tipo de entidad es orden de compra, el campo de almacén (entidad) y almacén (registro) se encuentra disable
           $('select[name=compra_tipo]').on('change',function(){
               
               var selected = $('select[name=compra_tipo] option:selected').val();
               if(selected == 'ordecompra'){
                   $('select[name=idalmacen]').attr('disabled',true);
                   $('select[name=idalmacen]').attr('required',false);
                   $('#productos_table tbody select').attr('disabled',true);
               }else{
                   $('select[name=idalmacen]').attr('disabled',false);
                   $('select[name=idalmacen]').attr('required',true);
                   $('#productos_table tbody select').attr('disabled',false);
                   $('input[name=compra_fechacompra]').datepicker('setDate', null);
               }
           });
           
           //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
            revisadaControl();
           
           //VALIDAR FOLIO
           $('input[name=compra_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/compra/validatefolio",
                    dataType: "json",
                    data: {folio:folio,edit:true,id:$('input[name=idcompra]').val(),idproveedor:$('input[name=idproveedor]').val()},
                    success: function (exist) {
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
            var now = $('input[name=compra_fechacompra]').val();

            var now_array = now.split('/');
            var now = new Date(now_array[2]+'/'+now_array[1]+'/'+parseInt(now_array[0]));
            
            if(settings.idrol != 5){
                var minDate = firstDayOfWeek(settings.semanarevisada.semanarevisada_anio,(settings.semanarevisada.semanarevisada_semana + 1));
                var min_semana_activa = firstDayOfWeek(anio,mes);
                var maxDate = new Date(min_semana_activa);
                maxDate.setDate(min_semana_activa.getDate() + 6);
                if((now < minDate || now > maxDate) && compra_tipo == 'compra' ){
                   
                    $container.find('input,select,button').attr('disabled',true);
                    $('#generar_pdf').attr('disabled',false);
                    $('#generar_excel').attr('disabled',false);
                    $('.fa-trash').unbind();
                    $('.fa-trash').css('cursor','not-allowed');
                }
                
            }else{
                if((now.format('W') != mes || now.getFullYear()) != anio  && compra_tipo == 'compra'){
                    $container.find('input,select,button').attr('disabled',true);
                    $('#generar_pdf').attr('disabled',false);
                    $('#generar_excel').attr('disabled',false);
                    $('.fa-trash').unbind();
                    $('.fa-trash').css('cursor','not-allowed');
                }
            }
            

            
            //COMENTARIOS
            var id = $('input[name=idcompra]').val();
            $('#comentarios_container').comentarios({
                table:'compranota',
                id: id,
                parent:'idcompra',
            });
            

            
            /*
            * ACL
            */
           if(settings.idrol == 5){
               $('select[name=compra_revisada]').attr('disabled',true);
               $('#productos_table input[type=checkbox]').attr('disabled',true);
               var revisada =  $('select[name=compra_revisada] option:selected').val();
               if(revisada == 1){
                   $('form input,form select,form button[type=submit]').attr('disabled',true);
               }
               $('#generar_pdf').attr('disabled',false);
               $('#generar_excel').attr('disabled',false);
           }

        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


