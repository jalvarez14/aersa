(function( $ ){
    
    
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.usuario = function(data){
        var _this = $(this);
        var plugin = _this.data('usuario');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.usuario(this, data);
            
            _this.data('usuario', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.usuario = function(container, options){
        
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
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
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
            
            $('.delete_modal').click(function(){
              
              var id = $(this).closest('tr').attr('id');
              var tmpl = [
                // tabindex is required for focus
                ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                  '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>', 
                  '</div>',
                  '<form method="post" action="/catalogo/usuario/eliminar/'+id+'">',
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
            
            //SUBIR PROVEEDORES
            var proveedores_array = {};
            $('#subir_proveedor').on('click',function(){
                $('input[name=batch_proveedores]').trigger('click');
            });
            $('input[name=batch_proveedores]').on('change',function(){
                
                var empty = false;
                var val = $('input[name=batch_proveedores]').val();
                if(val == ""){
                    empty = true;
                }
               
                if(!empty){
                   
                    var files = $('input[name=batch_proveedores]').get(0).files;
                    
                    var i, f;
                    for (i = 0, f = files[i]; i != files.length; ++i) {
                         
                         var reader = new FileReader();
                         var name = f.name;
                         reader.onload = function (e) {
                             
                            var data = e.target.result;
                            var workbook = XLSX.read(data, {type: 'binary'});
                            //console.log(workbook);
                            var first_sheet_name = workbook.SheetNames[0];
                            //console.log(first_sheet_name);
                            var workbook_array = to_json(workbook);
                           
                            if(workbook_array[first_sheet_name].length > 0){
                                $.ajax({
                                    url:'/catalogo/proveedor/batch',
                                    type: 'POST',
                                    dataType: 'json',
                                    data:{proveedores:workbook_array[first_sheet_name]},
                                    beforeSend: function (xhr) {
                                        $('body').addClass('loading');
                                    },
                                    success: function (data, textStatus, jqXHR) {
                                        $('body').removeClass('loading');
                                        if(data.response){
                                            window.location = '/catalogo/proveedor';
                                        }
                                    }
                                })
                            }
                         }
                         reader.readAsBinaryString(f);
                         
                    }
                   
                }
                
            });
            
            
            //SUBIR PRODUCTOS
            $('#subir_productos').on('click',function(){
                $('input[name=batch_productos]').trigger('click');
            });
            $('input[name=batch_productos]').on('change',function(){
                
                var empty = false;
                var val = $('input[name=batch_productos]').val();
                if(val == ""){
                    empty = true;
                }
               
                if(!empty){
                   
                    var files = $('input[name=batch_productos]').get(0).files;
                    var i, f;
                    for (i = 0, f = files[i]; i != files.length; ++i) {
                        
                        var reader = new FileReader();
                        var name = f.name;
                        reader.onload = function (e) {
                            
                             var data = e.target.result;
                             var workbook = XLSX.read(data, {type: 'binary'});
                             var first_sheet_name = workbook.SheetNames[0];
                             var workbook_array = to_json(workbook);
                             if(typeof workbook_array[first_sheet_name] != 'undefined'){
                                 $('body').addClass('loading');
                                var productos_array = Array();
                                $.each(workbook_array[first_sheet_name],function(index,row){
                                    
                                    if(typeof row.Nombre != 'undefined' && typeof row.Unidad != 'undefined' && typeof row.Categoria != 'undefined' && typeof row.SubCategoria != 'undefined' && typeof row.Rendimiento != 'undefined' && typeof row.PrecioVenta != 'undefined' && typeof row.Costo != 'undefined' && typeof row.Tipo != 'undefined' && typeof row.IVA != 'undefined' && typeof row.Baja != 'undefined'){
                                        
                                        var tipo = row.Tipo.toLowerCase();
                                            if(tipo == "plu"){
                                            row.Rendimiento = 1;
                                        }
                                       
                                        var iva = row.IVA.toLowerCase(); 
                                        if(iva == "si"){
                                            row.IVA = 1;
                                        }else{
                                            row.IVA = 0;
                                        }
                                        
                                        var baja = row.Baja.toLowerCase(); 
                                        if(baja == "si"){
                                            row.Baja = 1;
                                        }else{
                                            row.Baja = 0;
                                        }
                                        var tmp = {
                                            producto_nombre:row.Nombre,
                                            producto_unidad:row.Unidad,
                                            categoria_nombre:row.Categoria,
                                            categoria_nombre_sub:row.SubCategoria,
                                            producto_rendimientooriginal:row.Rendimiento,
                                            producto_rendimiento:row.Rendimiento,
                                            producto_precio:row.PrecioVenta,
                                            producto_costo:row.Costo,
                                            producto_tipo:row.Tipo,
                                            producto_iva:row.IVA,
                                            producto_baja:row.Baja,
                                        }
                                        productos_array.push(tmp);
                                    }
                                });
                                var numRequests = productos_array.length;
                                var count = 0;
                                var total = 0;
                                    function nextAjax(){
         
                                        if(count < numRequests){
                                            $.ajax({
                                                url: '/catalogo/producto/validateproduct',
                                                type: 'POST',
                                                dataType: 'JSON',
                                                async: false,
                                                data:  productos_array[count],
                                                success: function (data) {
                                                    if(!data.response){
                                                        var tmpl = [
                                                            '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                                                '<div class="modal-header">',
                                                                   
                                                                    '<h4 class="modal-title">Renombrar producto</h4>',
                                                                '</div>',
                                                                '<div class="modal-body">',
                                                                    '<div class="row">',
                                                                        '<div class="col-md-12">',
                                                                            '<div class="custom-alerts alert alert-warning fade in">',
                                                                             
                                                                                '<strong>Advertencia!</strong>',
                                                                                 'El siguiente producto ya se encuentra registrado, por lo que es necesario renombrarlo para continuar con el registro',
                                                                            '</div>',
                                                                        '</div>',
                                                                        '<div class="col-md-12">',
                                                                            '<div class="form-group">',
                                                                                '<label for="producto_nombre">Nombre del producto *</label>',
                                                                                '<input required class="form-control" type="text" name="producto_nombre" value="'+data.data.producto_nombre+'">',
                                                                                '<span style="color:red;display:none">El producto ya se encuentra registado</span>',
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
                                                         $modal.find('#cancel_product').on('click',function(){
                                                             count++;
                                                             $modal.modal('hide');
                                                             nextAjax();
                                                         });
                                                        $modal.find('#save_product').on('click',function(){
                                                            $modal.find('span').hide();
                                                            var new_name = $modal.find('input[name=producto_nombre]').val();
                                                            $.ajax({
                                                                url:'/catalogo/producto/renameproduct',
                                                                type:'POST',
                                                                data:{product_name:new_name,producto:productos_array[count]},
                                                                dataType:'JSON',
                                                                success: function (data2) {
                                                                   if(data2.response){
                                                                    count++;
                                                                    $modal.modal('hide');
                                                                    nextAjax();
                                                                   }else{
                                                                       $modal.find('span').show();
                                                                   }
                                                                   
                                                                }
                                                            });
                                                        });
                                                    }else{
                                                        count++;
                                                        nextAjax();
                                                    }

                                                }
                                            });
                                     
                                        }else{
                                           window.location.replace("/catalogo/producto");
                                            $('body').removeClass('loading');
                                        }
                                    }
                                    if(count == 0){
                                         nextAjax();
                                    }
                          
                             
                             
                             }else{
                                alert('Archivo dañado o el archivo se encuentra sin datos');
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
    
    
    
})( jQuery );


