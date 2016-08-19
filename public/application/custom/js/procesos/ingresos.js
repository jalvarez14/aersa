(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.ingresos = function(data){
        var _this = $(this);
        var plugin = _this.data('ingresos');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.ingresos(this, data);
            
            _this.data('ingresos', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.ingresos = function(container, options){
        
        var plugin = this;
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        var $table;
        
        var defaults = {
            iva:16,
        };
        
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
                  '<form method="post" action="/procesos/ingresos/eliminar/'+id+'">',
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
                if(getWeekNumber(new Date())  != mes || (date.getFullYear()) != anio){
                    $(this).find('.delete_modal').unbind();
                    $(this).find('.delete_modal').css('cursor','not-allowed');
                }
            });
            
            
        }
        
        plugin.init = function(){
      
            settings = plugin.settings = $.extend({}, defaults, options);
        
        }
        
        plugin.new = function(anio,mes){
            
            formControl(anio,mes);
       
        }
        
        plugin.edit = function(anio,mes){
            
            formControl(anio,mes);
            
            //VALIDAMOS MES Y ANIO EN CURSO PARA VER SI SE PUEDE MODIFICAR
            var now = $('input[name=ingreso_fecha]').val();
            var now_array = now.split('/');
            var now = new Date(now_array[2]+'-'+now_array[1]+'-'+now_array[0]);
            
            if(getWeekNumber(now) != mes || now.getFullYear() != anio){
                $container.find('input,select,button').attr('disabled',true);
                $('.fa-trash').unbind();
                $('.fa-trash').css('cursor','not-allowed');
                
            }
            
            //COMENTARIOS
            var id = $('input[name=idingreso]').val();
            $('#comentarios_container').comentarios({
                table:'ingresonota',
                id: id,
                parent:'idingreso',
            });
            
       
        }
        
        /*
         * PRIVATE METHODS
         */
        
        var formControl = function(anio,mes){
            
            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);

            //Inicializamos los calendarios
            container.find('input[name=ingreso_fecha]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            //Hacemos numericos los campos de total
            $container.find('input[name*=total]').numeric();
            
            checkboxControl();
            validaFolio();
            calculator();
            
        }
        
        var checkboxControl = function(){
            
            $container.find('select[name=ingreso_revisada]').on('change',function(){
                var selected = parseInt($container.find('select[name=ingreso_revisada]').val());
                if(selected){
                    $container.find('input[type=checkbox]').prop('checked',true);
                }else{
                    $container.find('input[type=checkbox]').prop('checked',false);
                }
            });
            
            
            $container.find('input[type=checkbox]').on('click',function(){
                 var revisada = 1;
                 
                $container.find('input[type=checkbox]').filter(function(){
                   
                    if(!$(this).is(':checked')){
                        revisada = 0;
                    }
                });
                
                $container.find('select[name=ingreso_revisada]').val(revisada)
                
            });
            
            
        }
        
        var validaFolio = function(){
            
            var id = $('input[name=idingreso]').val();
            
            container.find('input[name=ingreso_folio]').on('blur',function(){
               var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/ingresos/validatefolio",
                    dataType: "json",
                    data: {folio:folio,id:id},
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
        }
        
        var calculator = function(){
            
             $container.find('input[name*=total]').on('blur',function(){
                 
                 var total = $(this).val();
                 var iva = (total * settings.iva) / 100
                 var subtotal = total - iva;
                 
                 var $tr = $(this).closest('tr');
               
                 //ACTUALIZAMOS LA FILA
                 $tr.find('td').eq(1).text(accounting.formatMoney(subtotal));
                 $tr.find('td').eq(2).text(accounting.formatMoney(iva));
                 $tr.find('input[name*=subtotal]').val(subtotal);
                 $tr.find('input[name*=iva]').val(iva);
                 
                 //CALCULAMOS LOS TOTALES
                 
                 //ALIMENTOS
                 var total_alimentos = 0.00;
                 $container.find('table#alimentos input[name*=total]:visible').filter(function(){
                     total_alimentos =  total_alimentos + parseFloat($(this).val());
                 });
                 $container.find('input[name=ingreso_totalalimento]').val(total_alimentos);
                 $container.find('p#total_alimentos').text(accounting.formatMoney(total_alimentos));
                 
                 //BEBIDAS
                 var total_bebidas = 0.00;
                 $container.find('table#bebidas input[name*=total]:visible').filter(function(){
                     total_bebidas =  total_bebidas + parseFloat($(this).val());
                 });
                 $container.find('input[name=ingreso_totalbebida]').val(total_bebidas);
                 $container.find('p#total_bebidas').text(accounting.formatMoney(total_bebidas));
                 
                 //MISCELANIA
                 var total_miscelanea = 0.00;
                 $container.find('table#miscelanea input[name*=total]:visible').filter(function(){
                     total_miscelanea =  total_miscelanea + parseFloat($(this).val());
                 });
                 $container.find('input[name=ingreso_totalmiscelanea]').val(total_miscelanea);
                 $container.find('p#total_miscelanea').text(accounting.formatMoney(total_miscelanea));
     
               
             });
        }
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


