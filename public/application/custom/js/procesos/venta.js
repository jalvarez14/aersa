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
                                $.each(workbook_array[first_sheet_name][0],function(index){
                                    if(col_nombre == index){
                                        col_nombre_parse = true;
                                    }else if(col_cantidad == index){
                                        col_cantidad_parse = true;
                                    }else if(col_subtotal == index){
                                        col_subtotal_parse = true;
                                    }
                                    console.log(col_nombre);
                                    console.log(col_nombre_parse);
                                    console.log(col_cantidad);
                                    console.log(col_cantidad_parse);
                                    console.log(col_subtotal);
                                    console.log(col_subtotal_parse);
                                    
                                    if(col_nombre_parse && col_cantidad_parse && col_subtotal_parse){
                                        alert('aqui comenzamos con la itineracion de cada uno en ajax');
                                    }else{
                                         $('#error_alert').show();
                                         $('#error_message').text('El nombre de las columnas no coincide con los del archivo');
                                    }
                                });
                            }else{
                                $('#error_alert').show();
                                $('#error_message').text('Archivo dañado o el archivo se encuentra sin datos');
                            }
                            
                        };
                        reader.readAsBinaryString(f);
                    }
                    
                }
                
            });
           
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


