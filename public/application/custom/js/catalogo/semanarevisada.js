(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.semanarevisada = function(data){
        var _this = $(this);
        var plugin = _this.data('semanarevisada');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.semanarevisada(this, data);
            
            _this.data('semanarevisada', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.semanarevisada = function(container, options){
        
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

        plugin.init = function(){

            settings = plugin.settings = $.extend({}, defaults, options);

        }
        
        
        plugin.list = function(){
            
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
                  '<form method="post" action="/catalogo/semanasrevisadas/eliminar/'+id+'">',
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
        
        plugin.new = function(){
            console.log($container);
           console.log($container.find('input[name=semanarevisada_anio]'));
           $container.find('input[name=semanarevisada_anio]').numeric();
            $container.find('input[name=semanarevisada_anio]').on('change', function () {
                var anio = $('input[name=semanarevisada_anio]').val();
                $.ajax({
                    type: 'POST',
                    data: {anio: anio},
                    dataType: 'JSON',
                    url: '/catalogo/empresa/sucursal/getweekarray',
                    success: function (data, textStatus, jqXHR) {
                        $('select[name=semanarevisada_semana] option').remove();
                        $.each(data, function (index) {
                            var $option = $('<option>').text(this).val(index);
                            $('select[name=semanarevisada_semana]').append($option);
                        });
                    }
                });
            });
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


