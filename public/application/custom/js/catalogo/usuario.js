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


