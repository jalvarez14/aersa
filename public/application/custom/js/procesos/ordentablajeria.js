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

            var cantidad = parseFloat($tr.find('input[name*=cantidad]').val());
            var pesoporcion = parseFloat($tr.find('input[name*=pesoporcion]').val());
            var pesototal =  cantidad * pesoporcion;

            //ROW UPDATE
            $tr.find('td.pesototal').text(pesototal);
           
            //TOTALES
            var peso_total = 0;
            $('#productos_table tbody td.pesototal').filter(function(){

                peso_total = peso_total + parseFloat($(this).text());
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
            
            var pesobruto = ($('input[name=ordentablajeria_pesobruto]').val() != "") ? $('input[name=ordentablajeria_pesobruto]').val() : 0;
            var preciokilo = accounting.unformat($('input[name=ordentablajeria_preciokilo]').val());
            var precioneto = pesobruto * preciokilo;
            $('input[name=ordentablajeria_totalbruto]').val(accounting.formatMoney(precioneto));
            
        }
        
        var tablajeando = function(){
            
            //TOTALES
            var peso_total = 0;
            $('#productos_table tbody td.pesototal').filter(function(){

                peso_total = peso_total + parseFloat($(this).text());
            });
            $('#peso_total').text(peso_total);
            
            var importe_total = 0;
            $('#productos_table tbody td.importe').filter(function(){
                importe_total = importe_total + accounting.unformat($(this).text());
            });
            $('#importe_total').text(accounting.formatMoney(importe_total));
            
            var pesobruto = ($('input[name=ordentablajeria_pesobruto]').val() != "") ? parseFloat($('input[name=ordentablajeria_pesobruto]').val()) : 0;
            var inyeccion = ($('input[name=ordentablajeria_inyeccion]').val() != "") ? parseFloat($('input[name=ordentablajeria_inyeccion]').val()) : 0;
            var pesoneto =  parseFloat($('#peso_total').text());
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
                var cantidad = parseFloat($tr.find('input[name*=cantidad]').val());
                var pesoporcion = parseFloat($tr.find('input[name*=pesoporcion]').val());
                var pesototal =  parseFloat($tr.find('td.pesototal').text());
                var precioporcion = pesoporcion * precioneto;
                var importe = cantidad * precioporcion;
                
                $tr.find('td.precioporcion').text(accounting.formatMoney(precioporcion));
                $tr.find('td.importe').text(accounting.formatMoney(importe));
                

            });
            
            //TOTALES
            var peso_total = 0;
            $('#productos_table tbody td.pesototal').filter(function(){

                peso_total = peso_total + parseFloat($(this).text());
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
        
        plugin.new = function(anio,mes,almacenes){

            var minDate = new Date(anio + '/' + mes + '/' + '01');
            var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth()+1));
            maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate()-1));
            
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
                limit:5,
            });
            
            $('input[name=idproducto_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                if(suggestion.unidad_medida == 'kilogramos'){
                    $('label[for=ordentablajeria_pesobruto]').text('Peso bruto *');
                }else{
                    $('label[for=ordentablajeria_pesobruto]').text('Porciones *');
                }
                
                $('input[name=idproducto]').val(suggestion.idproducto);
                $('input[name=producto_unidadmedida]').val(suggestion.unidad_medida);
                $('input[name=ordentablajeria_preciokilo]').val(accounting.formatMoney(suggestion.producto_ultimocosto));
                $('input[name=ordentablajeria_pesobruto]').val('');
                $('input[name=ordentablajeria_numeroporciones]').val('');
                
                //SI NO TIENE PLANTILLA DE TABLAJERIA
                if(!suggestion.plantilla_tablajeria){
                    $('input[name=producto_autocomplete]').prop('disabled',false);
                }else{
                    $('input[name=producto_autocomplete]').prop('disabled',true);
                    $('button#producto_add').prop('disabled',true);
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
                }
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
                limit:5,
            });
            
            
             $('input[name=producto_autocomplete]').bind('typeahead:select', function(ev, suggestion) {
                 $('input[name=idproductoautocomplete]').val(suggestion.idproducto);
                 $('input[name=productoautocomplete_unidadmedida]').val(suggestion.unidad_medida);              
                 $('button#producto_add').prop('disabled',false);
             });
             
            //EVENTO ADD 
            var count = 0;
            $('button#producto_add').on('click',function(){
                
                var producto = $('input[name=producto_autocomplete]').val();
                var unidad_medida = $('input[name=productoautocomplete_unidadmedida]').val();
                
                var $tr = $('<tr>');
                $tr.append('<td>'+producto+'</td>');
                $tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                $tr.append('<td>'+unidad_medida+'</td>');
                $tr.append('<td><input type="text" name=productos['+count+'][pesoporcion] value="1"></td>');
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

                $('input[name=idproductoautocomplete]').val('');
                $('input[name=producto_autocomplete]').val('');
                $('input[name=productoautocomplete_unidadmedida]').val('');
                
                revisadaControl();
                    
            });
            
             revisadaControl();
    
        }
        
        plugin.edit = function(anio,mes,almacenes,count,compra_tipo){
            
            //SI ES ORDEN DE COMPRA DESHABILITAMOS LOS SELECT DE ALMACEN
            if(compra_tipo == 'ordecompra'){
                $container.find('select[name=idalmacen]').attr('disabled',true);
                $container.find('select[name*=almacen]').attr('disabled',true);
            }

            var minDate = new Date(anio + '/' + mes + '/' + '01');
            var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth()+1));
            maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate()-1));
            
            container.find('input[name=compra_fechacompra]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
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
                limit:5,
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
                limit:5,
            });
            
            $('input#producto_autocomplete').bind('typeahead:select', function(ev, suggestion) {
                $('#producto_add').attr('disabled',false);
                $('input#idproducto').val(suggestion.id);
                $('input#producto_iva').val(suggestion.producto_iva);
                
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
                
                var tipo = $('select[name=compra_tipo] option:selected').val();
                
                if(tipo == 'ordecompra'){
                   
                    almacenen_select.find('select').attr('disabled',true);
                }

                               
                var tr = $('<tr>');
                tr.append('<td><input name=productos['+count+'][subtotal] type=hidden><input name=productos['+count+'][costo_unitario] type=hidden><input type="hidden"  name=productos['+count+'][producto_iva] value="'+$('input#producto_iva').val()+'"><input type="hidden"  name=productos['+count+'][idproducto] value="'+$('input#idproducto').val()+'">'+$('input#producto_autocomplete').typeahead('val')+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][precio] value="0"></td>');
                tr.append('<td class="costo_unitario">'+accounting.formatMoney(0)+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][descuento] value="0"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][ieps] value="0"></td>');
                tr.append('<td class="subtotal">'+accounting.formatMoney(0)+'</td>');
                tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
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
                    data: {folio:folio,edit:true,id:$('input[name=idcompra]').val()},
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
            var now = new Date($('input[name=compra_fechacreacion]').val());
            
            if((now.getMonth()+1) != mes || now.getFullYear() != anio){
                $container.find('input,select,button').attr('disabled',true);
                $('.fa-trash').unbind();
                $('.fa-trash').css('cursor','not-allowed');
                
            }

        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


