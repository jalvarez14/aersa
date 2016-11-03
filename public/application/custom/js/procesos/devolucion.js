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
        
        //La variable iva está definida en las vistas con un echo
        //var aux = $("#iva").text().split('%');
        var iva = parseFloat(parseFloat($("#ivaValor").val()).toFixed(6));
        var defaults = {
           
       };
        
        /*
        * Private methods
        */
       
        
        var caluclator = function($tr)
        {            
            
            var cantidad = $tr.find('input[name*=cantidad]').val() != "" ? parseFloat(parseFloat($tr.find('input[name*=cantidad]').val()).toFixed(6)) : 1;
            var precio = $tr.find('input[name*=precio]').val() != "" ? parseFloat(parseFloat($tr.find('input[name*=precio]').val()).toFixed(6)) : 0;
            var descuento = $tr.find('input[name*=descuento]').val() != "" ? parseFloat(parseFloat($tr.find('input[name*=descuento]').val()).toFixed(6)) : 0;
            var ieps = $tr.find('input[name*=ieps]').val() != "" ? parseFloat(parseFloat($tr.find('input[name*=ieps]').val()).toFixed(6)) : 0;
            
            
            
            //COSTO UNITARIO
            var row_ieps = (precio * ieps) / 100;
            var costo_unitario = precio + row_ieps;
            

            $tr.find('input[name=costo_unitario]').val(costo_unitario);
            $tr.find('td.costo_unitario').text(accounting.formatMoney(costo_unitario));

            //DESCUENTO
            var row_desc = (costo_unitario * descuento) / 100
            costo_unitario = costo_unitario - row_desc;
            $tr.find('input[name*=costo_unitario]').val(costo_unitario);
            $tr.find('td.costo_unitario').text(accounting.formatMoney(costo_unitario));
            
            //ROW SUBTOTAL
            var row_subtotal = cantidad * costo_unitario;
            $tr.find('input[name*=subtotal]').val(row_subtotal);
            $tr.find('td.subtotal').text(accounting.formatMoney(row_subtotal));
            
            //COMPRA SUBTOTAL
            var devolucion_subtotal = 0.00;
            $('#productos_table tbody').find('input[name*=subtotal]').filter(function(){
                devolucion_subtotal= devolucion_subtotal + parseFloat(parseFloat($(this).val()).toFixed(6));
            });
            $('#productos_table tfoot').find('#subtotal').text(accounting.formatMoney(devolucion_subtotal));
            $('#productos_table tfoot').find('input[name=devolucion_subtotal]').val(devolucion_subtotal);
            
            //devolucion IEPS

            var devolucion_ieps = 0.00;
            $('#productos_table tbody tr').filter(function(){
                var precio = $(this).find('input[name*=precio]').val();
                var ieps = $(this).find('input[name*=ieps]').val();
                var cantidad = $(this).find('input[name*=cantidad]').val();
                
                var row_ieps = ((precio * ieps) / 100) * cantidad;
                devolucion_ieps = devolucion_ieps + row_ieps;
            });
            
            $('#productos_table tfoot').find('#ieps').text(accounting.formatMoney(devolucion_ieps));
            $('#productos_table tfoot').find('input[name=devolucion_ieps]').val(devolucion_ieps);
            
            //devolucion IVA
            var devolucion_iva = 0.00;
            
            
            
            $('#productos_table tbody tr').filter(function(){
                
                var has_iva = $(this).find('input[name*=producto_iva]').val(); 
                
                if(has_iva == 'true'){
                    
                    var subtotal = parseFloat(parseFloat($(this).find('input[name*=subtotal]').val()).toFixed(6));
                    var row_iva = (subtotal * iva) / 100;
                        
                    devolucion_iva = devolucion_iva + row_iva;
                }
                
            });
            
            $('#productos_table tfoot').find('#iva').text(accounting.formatMoney(devolucion_iva));
            $('#productos_table tfoot').find('input[name=devolucion_iva]').val(devolucion_iva);
            
            //devolucion TOTAL
            var devolucion_total = devolucion_subtotal + devolucion_iva;
            $('#productos_table tfoot').find('#total').text(accounting.formatMoney(devolucion_total));
            $('#productos_table tfoot').find('input[name=devolucion_total]').val(devolucion_total);
            
            
            
            
       
        }
        
        var revisadaControl = function () {

            $('select[name=devolucion_revisada]').on('change', function () {
               
                var selected = $('select[name=devolucion_revisada] option:selected').val();
              
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
                    $('select[name=devolucion_revisada]').val(0);
               }else{
                    $('select[name=devolucion_revisada]').val(1);
               }
                
                
            });

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

            //ELIMINAR devolucion
            $('.delete_devolucion').click(function(){

              var id = $(this).closest('tr').attr('id');
              var tmpl = [
                // tabindex is required for focus
                ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                  '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>', 
                  '</div>',
                  '<form method="post" action="/procesos/devolucion/eliminar/'+id+'">',
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
               $('select[name=devolucion_revisada]').attr('disabled',true);
               $('#productos_table input[type=checkbox]').attr('disabled',true);
               var revisada =  $('select[name=devolucion_revisada] option:selected').val();
               if(revisada == 1){
                   $('form input,form select,form button[type=submit]').attr('disabled',true);
               }
            }

        }
        
        plugin.new = function(anio,mes,almacenes){
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
                            container.find('input[name=devolucion_fechacreacion]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                           
                       }else{
                            container.find('input[name=devolucion_fechacreacion]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                       }
                    },
                });
            }else{
                container.find('input[name=devolucion_fechacreacion]').datepicker({
                    startDate:minDate,
                    endDate:maxDate,
                    format: 'dd/mm/yyyy',
                });
            }
            container.find('input[name=devolucion_fechaentrega]').datepicker({
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
                  url: '/autocomplete/getproductossimples?q=%QUERY',
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
                $('input#unidadmedida_nombre').val(suggestion.unidadmedida_nombre);
                
            });
            
            var count = 0;
            $('#producto_add').on('click',function(){  
                
                //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO
                var almacenen_select = $('<td><select class="form-control" name=productos['+count+'][almacen]></td>');
                $.each(almacenes,function(index){
                    var option = $('<option value="'+index+'">'+this+'</option>');
                    almacenen_select.find('select').append(option);
                });
                

                var tr = $('<tr>');
                tr.append('<td><input name=productos['+count+'][subtotal] type=hidden><input name=productos['+count+'][costo_unitario] type=hidden><input type="hidden"  name=productos['+count+'][producto_iva] value="'+$('input#producto_iva').val()+'"><input type="hidden"  name=productos['+count+'][idproducto] value="'+$('input#idproducto').val()+'">'+$('input#producto_autocomplete').typeahead('val')+'</td>');
                tr.append('<td >'+$('input#unidadmedida_nombre').val()+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][precio] value="0"></td>');
                tr.append('<td class="costo_unitario">'+accounting.formatMoney(0)+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][descuento] value="0"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][ieps] value="0"></td>');
                tr.append('<td class="subtotal">'+accounting.formatMoney(0)+'</td>');
                 /*
                 * ACL
                 */
                if(settings.idrol == 5){
                     tr.append('<td><input type="checkbox" name=productos['+count+'][revisada] disabled></td>');
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
                
                var revisada = $('select[name=devolucion_revisada] option:selected').val();
                if(revisada==1){
                    tr.find('input[type=checkbox]').prop('checked',true);
                }
                
                //INSERTAMOS EN LA TABLA
                $('#productos_table tbody').append(tr);
                
                //LIMPIAMOS EL AUTOCOMPLETE
                $('input#producto_autocomplete').typeahead('val', ''); 
                $('input#idproducto').val(''); 
                $('input#producto_iva').val('');
                $('#producto_add').attr('disabled',true);
                
                
              count ++;   
              
              $('.fa-trash').on('click',function(){
                var tr = $(this).closest('tr');
                tr.remove();
              });   
              
            //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
            revisadaControl();
              
            
            
            });
            

           
           //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
            revisadaControl();
           
           
           
           //VALIDAR FOLIO
           $('input[name=devolucion_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/devolucion/validatefolio",
                    dataType: "json",
                    data: {folio:folio},
                    success: function (exist) {
                        console.log(exist);
                        if(exist){
                            //alert('El folio "'+folio+'" ya fue utilizado en los últimos 2 meses');
                            $this.addClass('invalid');
                            $("label[for=devolucion_folio]").addClass("invalid");
                            $("label[for=devolucion_folio]").text("Este folio ya fue utilizado");
                        }else{
                            $this.addClass('valid');
                            $this.removeClass('invalid');
                            $("label[for=devolucion_folio]").removeClass("invalid");
                            $("label[for=devolucion_folio]").text("Folio *");
                        }
                        
                    },
                });
                         
           });
                         
        }
        
        plugin.edit = function(anio,mes,mes_devolucion,anio_devolucion,almacenes,count){
            
            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);
            
            container.find('input[name=devolucion_fechadevolucion]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            container.find('input[name=devolucion_fechadevolucion]').datepicker({
                format: 'dd/mm/yyyy',
            });
            
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
                            container.find('input[name=devolucion_fechacreacion]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                           
                       }else{
                            container.find('input[name=devolucion_fechacreacion]').datepicker({
                                startDate:minDate,
                                endDate:maxDate,
                                format: 'dd/mm/yyyy',
                            });
                       }
                    },
                });
            }else{
                container.find('input[name=devolucion_fechacreacion]').datepicker({
                    startDate:minDate,
                    endDate:maxDate,
                    format: 'dd/mm/yyyy',
                });
            }
            
            container.find('input[name=devolucion_fechaentrega]').datepicker({
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
                limit:100,
            });
            
            $('input#producto_autocomplete').bind('typeahead:select', function(ev, suggestion) {
                $('#producto_add').attr('disabled',false);
                $('input#idproducto').val(suggestion.id);
                $('input#producto_iva').val(suggestion.producto_iva);
                $('input#unidadmedida_nombre').val(suggestion.unidadmedida_nombre);
                
            });
            
            $('#productos_table tbody').numeric();
            
            var count = count;
            $('#producto_add').on('click',function(){  
                
                //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO
                var almacenen_select = $('<td><select class="form-control" name=productos['+count+'][almacen]></td>');
                $.each(almacenes,function(index){
                    var option = $('<option value="'+index+'">'+this+'</option>');
                    almacenen_select.find('select').append(option);
                });
                
                               
                var tr = $('<tr>');
                tr.append('<td><input name=productos['+count+'][subtotal] type=hidden><input name=productos['+count+'][costo_unitario] type=hidden><input type="hidden"  name=productos['+count+'][producto_iva] value="'+$('input#producto_iva').val()+'"><input type="hidden"  name=productos['+count+'][idproducto] value="'+$('input#idproducto').val()+'">'+$('input#producto_autocomplete').typeahead('val')+'</td>');
                tr.append('<td >'+$('input#unidadmedida_nombre').val()+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][precio] value="0"></td>');
                tr.append('<td class="costo_unitario">'+accounting.formatMoney(0)+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][descuento] value="0"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][ieps] value="0"></td>');
                tr.append('<td class="subtotal">'+accounting.formatMoney(0)+'</td>');
                /*
                 * ACL
                 */
                if(settings.idrol == 5){
                     tr.append('<td><input type="checkbox" name=productos['+count+'][revisada] disabled></td>');
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
                
                var revisada = $('select[name=devolucion_revisada] option:selected').val();
                if(revisada==1){
                    tr.find('input[type=checkbox]').prop('checked',true);
                }
                
                //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
                revisadaControl();
                
                //INSERTAMOS EN LA TABLA
                $('#productos_table tbody').append(tr);
                
                
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
              
            
            
            });
            
            $('.fa-trash').on('click',function(){
                var tr = $(this).closest('tr');
                tr.remove();
                caluclator(tr);
             });
             
             /*
            //Si el tipo de entidad es orden de devolucion, el campo de almacén (entidad) y almacén (registro) se encuentra disable
           $('select[name=devolucion_tipo]').on('change',function(){
               
               var selected = $('select[name=devolucion_tipo] option:selected').val();
               if(selected == 'ordecompra'){
                   $('select[name=idalmacen]').attr('disabled',true);
                   $('select[name=idalmacen]').attr('required',false);
                   $('#productos_table tbody select').attr('disabled',true);
               }else{
                   $('select[name=idalmacen]').attr('disabled',false);
                   $('select[name=idalmacen]').attr('required',true);
                   $('#productos_table tbody select').attr('disabled',false);
               }
           });
            */
           
           //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
            revisadaControl();
           
           //VALIDAR FOLIO
           $('input[name=devolucion_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/devolucion/validatefolio",
                    dataType: "json",
                    data: {folio:folio},
                    success: function (exist) {
                        console.log(exist);
                        if(exist){
                            //alert('El folio "'+folio+'" ya fue utilizado en los últimos 2 meses');
                            $this.addClass('invalid');
                            $("label[for=devolucion_folio]").addClass("invalid");
                            $("label[for=devolucion_folio]").text("Este folio ya fue utilizado");
                        }else{
                            $this.addClass('valid');
                            $this.removeClass('invalid');
                            $("label[for=devolucion_folio]").removeClass("invalid");
                            $("label[for=devolucion_folio]").text("Folio *");
                        }
                        
                    },
                });
                         
           });
           
           //VALIDAMOS MES Y ANIO EN CURSO PARA VER SI SE PUEDE MODIFICAR
            var now = $('input[name=devolucion_fechadevolucion]').val();
            var now_array = now.split('/');
            var now = new Date(now_array[2]+'/'+now_array[1]+'/'+now_array[0]);
            
            if(settings.idrol != 5){
                var minDate = firstDayOfWeek(settings.semanarevisada.semanarevisada_anio,(settings.semanarevisada.semanarevisada_semana + 1));
                var min_semana_activa = firstDayOfWeek(anio,mes);
                var maxDate = new Date(min_semana_activa);
                maxDate.setDate(min_semana_activa.getDate() + 6);
                if(now < minDate || now > maxDate){
                    $container.find('input,select,button').attr('disabled',true);
                    $('#generar_pdf').attr('disabled',false);
                    $('#generar_excel').attr('disabled',false);
                    $('.fa-trash').unbind();
                    $('.fa-trash').css('cursor','not-allowed');
                }
                
            }else{
                if(now.format('W') != mes || now.getFullYear() != anio){
                    $container.find('input,select,button').attr('disabled',true);
                    $('#generar_pdf').attr('disabled',false);
                    $('#generar_excel').attr('disabled',false);
                    $('.fa-trash').unbind();
                    $('.fa-trash').css('cursor','not-allowed');
                }
            }
            
            $("#productos_table tbody tr").each(function()
            {
                var tr = $(this);
                $(this).find("input").on("blur", function()
                {
                    caluclator(tr);
                });
            });
            
            //COMENTARIOS
            var id = $('input[name=iddevolucion]').val();
            $('#comentarios_container').comentarios({
                table:'devolucionnota',
                id: id,
                parent:'iddevolucion',
            });
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    $('#frm-dev').on('submit', function (e) 
    {
        if( $("[name=devolucion_folio]").hasClass('invalid'))
            return false;
    });
    
})( jQuery );


