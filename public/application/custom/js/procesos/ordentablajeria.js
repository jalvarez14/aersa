(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.ordentablajeria = function(data){
        var _this = $(this);
        var plugin = _this.data('ordentablajeria');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.ordentablajeria(this, data);
            
            _this.data('ordentablajeria', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.ordentablajeria = function(container, options){
        
        var plugin = this;
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        var $table;
        var defaults;
        
        /*
        * Private methods
        */
       
        
        var calculator = function($tr){
            
            if(typeof $tr != 'undefined'){
            
                var cantidad = parseFloat(parseFloat($tr.find('input[name*=cantidad]').val()).toFixed(6));
                var pesoporcion = parseFloat(parseFloat($tr.find('input[name*=pesoporcion]').val()).toFixed(6));
                var pesototal =  cantidad * pesoporcion;

                //ROW UPDATE
                $tr.find('td.pesototal').text(pesototal);
                $tr.find('input[name*=pesototal]').val(pesototal);
            }
            
            //TOTALES
            var peso_total = 0;
            $('#productos_table tbody td.pesototal').filter(function(){
                peso_total = peso_total + parseFloat(parseFloat($(this).text()).toFixed(6));
            });
            $('#peso_total').text(peso_total);
            
            var importe_total = 0;
            $('#productos_table tbody td.importe').filter(function(){
                importe_total = importe_total + accounting.unformat($(this).text());
            });
            $('#importe_total').text(accounting.formatMoney(importe_total));
            
            tablajeando();
            

        }
        
        var revisadaControl = function () {

            $('select[name=ordentablajeria_revisada]').on('change', function () {
               
                var selected = $('select[name=ordentablajeria_revisada] option:selected').val();
              
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
                    $('select[name=ordentablajeria_revisada]').val(0);
               }else{
                    $('select[name=ordentablajeria_revisada]').val(1);
               }
                
                
            });

        }
       
        var totalBruto = function(){
            
            var pesobruto = ($('input[name=ordentablajeria_numeroporciones]').val() != "") ? $('input[name=ordentablajeria_numeroporciones]').val() : 0;
            var preciokilo = accounting.unformat($('input[name=ordentablajeria_preciokilo]').val());
            var precioneto = pesobruto * preciokilo;
            $('input[name=ordentablajeria_totalbruto]').val(accounting.formatMoney(precioneto));
            
        }
        
        var tablajeando = function(){
            
            //TOTALES
            var peso_total = 0;
            $('#productos_table tbody td.pesototal').filter(function(){

                peso_total = peso_total + parseFloat(parseFloat($(this).text()).toFixed(6));
            });
            $('#peso_total').text(peso_total);
            
            var importe_total = 0;
            $('#productos_table tbody td.importe').filter(function(){
                importe_total = importe_total + accounting.unformat($(this).text());
            });
            $('#importe_total').text(accounting.formatMoney(importe_total));
            
            var pesobruto = ($('input[name=ordentablajeria_numeroporciones]').val() != "") ? parseFloat(parseFloat($('input[name=ordentablajeria_numeroporciones]').val()).toFixed(6)) : 0;
            var inyeccion = ($('input[name=ordentablajeria_inyeccion]').val() != "") ? parseFloat(parseFloat($('input[name=ordentablajeria_inyeccion]').val()).toFixed(6)) : 0;
            var pesoneto =  parseFloat(parseFloat($('#peso_total').text()).toFixed(6));
            console.log(pesobruto);
            console.log(inyeccion);
            console.log(pesoneto);
            var mermatotal = (pesobruto + inyeccion) - pesoneto;
            var porcaprovechamiento = pesoneto / (pesobruto + inyeccion);
            var peciokilo = accounting.unformat($('input[name=ordentablajeria_preciokilo]').val());
            
            
            
            
            var precioneto = peciokilo / porcaprovechamiento;
            var porcmerma = (pesobruto + inyeccion - pesoneto) / (pesobruto + inyeccion);
            
            $('input[name=ordentablajeria_pesoneto]').val(pesoneto);
            $('input[name=ordentablajeria_merma]').val(mermatotal);
            $('input[name=ordentablajeria_aprovechamiento]').val(porcaprovechamiento * 100);
            $('input[name=ordentablajeria_precioneto]').val(accounting.formatMoney(precioneto));
            $('input[name=ordentablajeria_porcentajemerma]').val(porcmerma  * 100 );
            
            $('#productos_table tbody tr').filter(function(){
                
                var $tr = $(this);
                var cantidad = parseFloat(parseFloat($tr.find('input[name*=cantidad]').val()).toFixed(6));
                var pesoporcion = parseFloat(parseFloat($tr.find('input[name*=pesoporcion]').val()).toFixed(6));
                var pesototal =  parseFloat(parseFloat($tr.find('td.pesototal').text()).toFixed(6));
                var precioporcion = pesoporcion * precioneto;
                var importe = cantidad * precioporcion;
                
                $tr.find('td.precioporcion').text(accounting.formatMoney(precioporcion));
                $tr.find('td.importe').text(accounting.formatMoney(importe));
                $tr.find('input[name*=precioporcion]').val(precioporcion);
                $tr.find('input[name*=subtotal]').val(importe);
                

            });
            
            //TOTALES
            var peso_total = 0;
            $('#productos_table tbody td.pesototal').filter(function(){

                peso_total = peso_total + parseFloat(parseFloat($(this).text()).toFixed(6));
            });
            $('#peso_total').text(peso_total);
            
            var importe_total = 0;
            $('#productos_table tbody td.importe').filter(function(){
                importe_total = importe_total + accounting.unformat($(this).text());
            });
            $('#importe_total').text(accounting.formatMoney(importe_total));
            
            
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
                  '<form method="post" action="/procesos/tablajeria/eliminar/'+id+'">',
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
               $('select[name=ordentablajeria_revisada]').attr('disabled',true);
               $('#productos_table input[type=checkbox]').attr('disabled',true);
               var revisada =  $('select[name=ordentablajeria_revisada] option:selected').val();
               if(revisada == 1){
                   $('form input,form select,form button[type=submit]').attr('disabled',true);
               }
            }
        }
        
        plugin.new = function(anio,mes,almacenes){

            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);
            
            container.find('input[name=ordentablajeria_fecha]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/procesos/tablajeria/getproductos?q=%QUERY',
                  wildcard: '%QUERY'
                }
            });
            
            $('input[name=idproducto_autocomplete]').typeahead(null, {
                name: 'best-pictures',
                display: 'producto_nombre',
                hint: true,
                highlight: true,
                source: data,
                limit:100,
            });
            
            $('input[name=idproducto_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                if(suggestion.unidad_medida == 'kilogramos'){
                    $('label[for=ordentablajeria_pesobruto]').text('Peso bruto *');
                }else{
                    $('label[for=ordentablajeria_pesobruto]').text('Porciones *');
                    $('input[name=pesoporcion]').val(suggestion.pesoporcion);
                }
                
                $('input[name=idproducto]').val(suggestion.idproducto);
                $('input[name=producto_unidadmedida]').val(suggestion.unidad_medida);
                $('input[name=ordentablajeria_preciokilo]').val(accounting.formatMoney(suggestion.producto_costo));
                $('input[name=ordentablajeria_pesobruto]').val('');
                $('input[name=ordentablajeria_numeroporciones]').val('');
              
                //SI NO TIENE PLANTILLA DE TABLAJERIA
                if(!suggestion.plantilla_tablajeria){
                    $('input[name=producto_autocomplete]').prop('disabled',false);
                }else{
                    $('input[name=producto_autocomplete]').prop('disabled',true);
                    $('button#producto_add').prop('disabled',true);
                    var count = 0;
                    $.each(suggestion.plantilla_tablajeria,function(){
                 
                        var $tr = $('<tr>');
                        $tr.append('<td><input type="hidden" name=productos['+count+'][idproducto] value="'+this.idproducto+'"><input type="hidden" name=productos['+count+'][subtotal]><input type="hidden" name=productos['+count+'][pesototal] value="1"><input type="hidden" name=productos['+count+'][precioporcion]>'+this.producto_nombe+'</td>');
                        $tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                        $tr.append('<td>'+this.unidad_medida+'</td>');
                        if(this.unidad_medida == 'kilogramos'){
                             $tr.append('<td><input readonly type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
                        }else{
                             $tr.append('<td><input type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
                        }
                        $tr.append('<td class="pesototal">1</td>');
                        $tr.append('<td class="precioporcion">'+accounting.formatMoney(1)+'</td>');
                        $tr.append('<td class="importe">'+accounting.formatMoney(1)+'</td>');
                        $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
                        $tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                        
                        //EVENTOS DE NUESTRAS ROW
                        $tr.find('input').numeric();
                        $tr.find('input').on('blur',function(){
                            calculator($tr);
                        });

                        $tr.find('.fa-trash').on('click',function(){

                            $tr.remove();
                            tablajeando();
                        });  

                        $('#productos_table > tbody').append($tr);

                        calculator($tr);
                        count ++;
                    });
                    
                }

                totalBruto();

            });
            
            $('input[name=ordentablajeria_pesobruto],input[name=ordentablajeria_inyeccion]').on('blur',function(){
                totalBruto();
                tablajeando();
            });
            
            $('input[name=ordentablajeria_pesobruto],input[name=ordentablajeria_inyeccion]').numeric();
            
            $('input[name=ordentablajeria_pesobruto]').on('blur',function(){
                var unidad_medida = $('input[name=producto_unidadmedida]').val();
                if(unidad_medida == 'kilogramos'){
                    var pesobruto = $('input[name=ordentablajeria_pesobruto]').val();
                    $('input[name=ordentablajeria_numeroporciones]').val(pesobruto);
                }else{
                    var numeroporciones = $('input[name=ordentablajeria_pesobruto]').val();
                    var pesoporcion = $('input[name=pesoporcion]').val();
                    var totalpeso = numeroporciones * pesoporcion;
                    $('input[name=ordentablajeria_numeroporciones]').val(totalpeso);
                }
                totalBruto();
                tablajeando();  
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/procesos/tablajeria/getproductos?q=%QUERY',
                  wildcard: '%QUERY'
                }
            });
            
            $('input[name=producto_autocomplete]').typeahead(null, {
                name: 'best-pictures',
                display: 'producto_nombre',
                hint: true,
                highlight: true,
                source: data,
                limit:100,
            });
            
            
             $('input[name=producto_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                 $('input[name=idproductoautocomplete]').val(suggestion.idproducto);
                 $('input[name=productoautocomplete_unidadmedida]').val(suggestion.unidad_medida);              
                 $('button#producto_add').prop('disabled',false);
             });
             
            //EVENTO ADD 
            var count = 0;
            $('button#producto_add').on('click',function(){
                
                var idproducto = $('input[name=idproductoautocomplete]').val();
                var producto = $('input[name=producto_autocomplete]').val();
                var unidad_medida = $('input[name=productoautocomplete_unidadmedida]').val();
                
                var $tr = $('<tr>');
                $tr.append('<td><input type="hidden" name=productos['+count+'][idproducto] value="'+idproducto+'"><input type="hidden" name=productos['+count+'][subtotal]><input type="hidden" name=productos['+count+'][pesototal] value="1"><input type="hidden" name=productos['+count+'][precioporcion]>'+producto+'</td>');
                $tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                $tr.append('<td>'+unidad_medida+'</td>');
                if(unidad_medida == 'kilogramos'){
                     $tr.append('<td><input readonly type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
                }else{
                     $tr.append('<td><input type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
                }
                $tr.append('<td class="pesototal">1</td>');
                $tr.append('<td class="precioporcion">'+accounting.formatMoney(1)+'</td>');
                $tr.append('<td class="importe">'+accounting.formatMoney(1)+'</td>');
                 /*
                 * ACL
                 */
                if(settings.idrol == 5){
                    $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada] disabled></td>');
                }else{
                    $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
                }
                $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
                $tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                
                //EVENTOS DE NUESTRAS ROW
                $tr.find('input').numeric();
                $tr.find('input').on('blur',function(){
                    calculator($tr);
                });
                
                $tr.find('.fa-trash').on('click',function(){
                    
                    $tr.remove();
                    tablajeando();
                });  
                
                $('#productos_table > tbody').append($tr);
                
                calculator($tr);

                $('input[name=idproductoautocomplete]').val('');
                $('input[name=producto_autocomplete]').val('');
                $('input[name=productoautocomplete_unidadmedida]').val('');
                
                revisadaControl();
                    
            });
            
            revisadaControl();
            
            
            //VALIDAR FOLIO
           $('input[name=ordentablajeria_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/tablajeria/validatefolio",
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
        
        plugin.edit = function(anio,mes,count){
            
            calculator();
            tablajeando();
            
            $('#productos_table tbody tr').each(function(){
                var $tr = $(this);
                //EVENTOS DE NUESTRAS ROW
                $tr.find('input').numeric();
                $tr.find('input').on('blur',function(){
                    calculator($tr);
                });
            });
            
            var minDate = firstDayOfWeek(anio,mes);
            var maxDate = new Date(minDate);
            maxDate.setDate(minDate.getDate() + 6);
            
            container.find('input[name=ordentablajeria_fecha]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/procesos/tablajeria/getproductos?q=%QUERY',
                  wildcard: '%QUERY'
                }
            });
            
            $('input[name=idproducto_autocomplete]').typeahead(null, {
                name: 'best-pictures',
                display: 'producto_nombre',
                hint: true,
                highlight: true,
                source: data,
                limit:100,
            });
            
            $('input[name=idproducto_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                if(suggestion.unidad_medida == 'kilogramos'){
                    $('label[for=ordentablajeria_pesobruto]').text('Peso bruto *');
                }else{
                    $('label[for=ordentablajeria_pesobruto]').text('Porciones *');
                    $('input[name=pesoporcion]').val(suggestion.pesoporcion);
                }
                
                $('input[name=idproducto]').val(suggestion.idproducto);
                $('input[name=producto_unidadmedida]').val(suggestion.unidad_medida);
                $('input[name=ordentablajeria_preciokilo]').val(accounting.formatMoney(suggestion.producto_costo));
                $('input[name=ordentablajeria_pesobruto]').val('');
                $('input[name=ordentablajeria_numeroporciones]').val('');
              
                //SI NO TIENE PLANTILLA DE TABLAJERIA
                if(!suggestion.plantilla_tablajeria){
                    $('input[name=producto_autocomplete]').prop('disabled',false);
                }else{
                    $('input[name=producto_autocomplete]').prop('disabled',true);
                    $('button#producto_add').prop('disabled',true);
                    var count = 0;
                    $.each(suggestion.plantilla_tablajeria,function(){
                 
                        var $tr = $('<tr>');
                        $tr.append('<td><input type="hidden" name=productos['+count+'][idproducto] value="'+this.idproducto+'"><input type="hidden" name=productos['+count+'][subtotal]><input type="hidden" name=productos['+count+'][pesototal] value="1"><input type="hidden" name=productos['+count+'][precioporcion]>'+this.producto_nombe+'</td>');
                        $tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                        $tr.append('<td>'+this.unidad_medida+'</td>');
                        if(this.unidad_medida == 'kilogramos'){
                             $tr.append('<td><input readonly type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
                        }else{
                             $tr.append('<td><input type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
                        }
                        $tr.append('<td class="pesototal">1</td>');
                        $tr.append('<td class="precioporcion">'+accounting.formatMoney(1)+'</td>');
                        $tr.append('<td class="importe">'+accounting.formatMoney(1)+'</td>');
                        $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
                        $tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                        
                        //EVENTOS DE NUESTRAS ROW
                        $tr.find('input').numeric();
                        $tr.find('input').on('blur',function(){
                            calculator($tr);
                        });

                        $tr.find('.fa-trash').on('click',function(){

                            $tr.remove();
                            tablajeando();
                        });  

                        $('#productos_table > tbody').append($tr);

                        calculator($tr);
                        count ++;
                    });
                    
                }

                totalBruto();

            });
            
            $('input[name=ordentablajeria_pesobruto],input[name=ordentablajeria_inyeccion]').on('blur',function(){
                totalBruto();
                tablajeando();
            });
            
            $('input[name=ordentablajeria_pesobruto],input[name=ordentablajeria_inyeccion]').numeric();
            
            $('input[name=ordentablajeria_pesobruto]').on('blur',function(){
                var unidad_medida = $('input[name=producto_unidadmedida]').val();
                if(unidad_medida == 'kilogramos'){
                    var pesobruto = $('input[name=ordentablajeria_pesobruto]').val();
                    $('input[name=ordentablajeria_numeroporciones]').val(pesobruto);
                }else{
                    var numeroporciones = $('input[name=ordentablajeria_pesobruto]').val();
                    var pesoporcion = $('input[name=pesoporcion]').val();
                    var totalpeso = numeroporciones * pesoporcion;
                    $('input[name=ordentablajeria_numeroporciones]').val(totalpeso);
                }
                totalBruto();
                tablajeando();  
            });
            
            var data = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                  url: '/procesos/tablajeria/getproductos?q=%QUERY',
                  wildcard: '%QUERY'
                }
            });
            
            $('input[name=producto_autocomplete]').typeahead(null, {
                name: 'best-pictures',
                display: 'producto_nombre',
                hint: true,
                highlight: true,
                source: data,
                limit:100,
            });
            
            
             $('input[name=producto_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                 $('input[name=idproductoautocomplete]').val(suggestion.idproducto);
                 $('input[name=productoautocomplete_unidadmedida]').val(suggestion.unidad_medida);              
                 $('button#producto_add').prop('disabled',false);
             });
             
            //EVENTO ADD 
            var count = count;
            $('button#producto_add').on('click',function(){
                
                var idproducto = $('input[name=idproductoautocomplete]').val();
                var producto = $('input[name=producto_autocomplete]').val();
                var unidad_medida = $('input[name=productoautocomplete_unidadmedida]').val();
                
                var $tr = $('<tr>');
                $tr.append('<td><input type="hidden" name=productos['+count+'][idproducto] value="'+idproducto+'"><input type="hidden" name=productos['+count+'][subtotal]><input type="hidden" name=productos['+count+'][pesototal] value="1"><input type="hidden" name=productos['+count+'][precioporcion]>'+producto+'</td>');
                $tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                $tr.append('<td>'+unidad_medida+'</td>');
                if(unidad_medida == 'kilogramos'){
                     $tr.append('<td><input readonly type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
                }else{
                     $tr.append('<td><input type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
                }
                $tr.append('<td class="pesototal">1</td>');
                $tr.append('<td class="precioporcion">'+accounting.formatMoney(1)+'</td>');
                $tr.append('<td class="importe">'+accounting.formatMoney(1)+'</td>');
                 /*
                 * ACL
                 */
                if(settings.idrol == 5){
                    $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada] disabled></td>');
                }else{
                    $tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
                }
                $tr.append('<td><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                
                //EVENTOS DE NUESTRAS ROW
                $tr.find('input').numeric();
                $tr.find('input').on('blur',function(){
                    calculator($tr);
                });
                
                $tr.find('.fa-trash').on('click',function(){
                    
                    $tr.remove();
                    tablajeando();
                });  
                
                $('#productos_table > tbody').append($tr);
                
                calculator($tr);

                $('input[name=idproductoautocomplete]').val('');
                $('input[name=producto_autocomplete]').val('');
                $('input[name=productoautocomplete_unidadmedida]').val('');
                
                revisadaControl();
                    
            });
            
           //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
            revisadaControl();
           
           //VALIDAR FOLIO
           $('input[name=ordentablajeria_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/tablajeria/validatefolio",
                    dataType: "json",
                    data: {folio:folio,edit:true,id:$('input[name=idordentablajeria]').val()},
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
           
           //VALIDAMOS MES Y ANIO EN CURSO PARA VER SI SE PUEDE MODIFICAR
            var now = $('input[name=ordentablajeria_fecha]').val();
            var now_array = now.split('/');
            var now = new Date(now_array[2]+'/'+now_array[1]+'/'+now_array[0]);
            if(now.format('W') != mes || now.getFullYear() != anio){
                $container.find('input,select,button').attr('disabled',true);
                $('.fa-trash').unbind();
                $('.fa-trash').css('cursor','not-allowed');
                
            }
            
            //VALIDAMOS SI EL PRODUCTO TIENE PLANTILLA DE TABLAJERIA PARA VER SI SE PUEDEN INSERTAR MAS ELEMENTOS
            var has_plantilla = $('input[name=has_plantilla]').val();
            if(has_plantilla == 1){
                $('input[name=producto_autocomplete]').prop('disabled',true);
                $('button#producto_add').prop('disabled',true);
            }else{
                 $('input[name=producto_autocomplete]').prop('disabled',false);
            }
            
            //COMENTARIOS
            var id = $('input[name=idordentablajeria]').val();
            $('#comentarios_container').comentarios({
                table:'ordentablajerianota',
                id: id,
                parent:'idordentablajeria',
            });

        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


