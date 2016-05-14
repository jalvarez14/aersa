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
        var iva = parseFloat($("#ivaValor").val());
        var defaults = {
           
       };
        
        /*
        * Private methods
        */
       
        
        var caluclator = function($tr)
        {            
            
            var cantidad = $tr.find('input[name*=cantidad]').val() != "" ? parseFloat($tr.find('input[name*=cantidad]').val()) : 1;
            var precio = $tr.find('input[name*=precio]').val() != "" ? parseFloat($tr.find('input[name*=precio]').val()) : 0;
            var descuento = $tr.find('input[name*=descuento]').val() != "" ? parseFloat($tr.find('input[name*=descuento]').val()) : 0;
            var ieps = $tr.find('input[name*=ieps]').val() != "" ? parseFloat($tr.find('input[name*=ieps]').val()) : 0;
            
            
            
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
            var notacredito_subtotal = 0.00;
            $('#productos_table tbody').find('input[name*=subtotal]').filter(function(){
                notacredito_subtotal= notacredito_subtotal + parseFloat($(this).val());
            });
            $('#productos_table tfoot').find('#subtotal').text(accounting.formatMoney(notacredito_subtotal));
            $('#productos_table tfoot').find('input[name=notacredito_subtotal]').val(notacredito_subtotal);
            
            //notacredito IEPS

            var notacredito_ieps = 0.00;
            $('#productos_table tbody tr').filter(function(){
                var precio = $(this).find('input[name*=precio]').val();
                var ieps = $(this).find('input[name*=ieps]').val();
                var cantidad = $(this).find('input[name*=cantidad]').val();
                
                var row_ieps = ((precio * ieps) / 100) * cantidad;
                notacredito_ieps = notacredito_ieps + row_ieps;
            });
            
            $('#productos_table tfoot').find('#ieps').text(accounting.formatMoney(notacredito_ieps));
            $('#productos_table tfoot').find('input[name=notacredito_ieps]').val(notacredito_ieps);
            
            //notacredito IVA
            var notacredito_iva = 0.00;
            
            
            
            $('#productos_table tbody tr').filter(function(){
                
                var has_iva = $(this).find('input[name*=producto_iva]').val(); 
                if(has_iva == 'true'){
                    var subtotal = parseFloat($(this).find('input[name*=subtotal]').val());
                    var row_iva = (subtotal * iva) / 100;
                        
                    notacredito_iva = notacredito_iva + row_iva;
                }
                
            });
           
            
            $('#productos_table tfoot').find('#iva').text(accounting.formatMoney(notacredito_iva));
            $('#productos_table tfoot').find('input[name=notacredito_iva]').val(notacredito_iva);
            
            //notacredito TOTAL
            var notacredito_total = notacredito_subtotal + notacredito_iva;
            $('#productos_table tfoot').find('#total').text(accounting.formatMoney(notacredito_total));
            $('#productos_table tfoot').find('input[name=notacredito_total]').val(notacredito_total);
            
            
            
            
       
        }
        
        var revisadaControl = function () {

            $('select[name=notacredito_revisada]').on('change', function () {
               
                var selected = $('select[name=notacredito_revisada] option:selected').val();
              
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
                    $('select[name=notacredito_revisada]').val(0);
               }else{
                    $('select[name=notacredito_revisada]').val(1);
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

            //ELIMINAR notacredito
            $('.delete_credito').click(function(){
              var id = $(this).closest('tr').attr('id');
              var tmpl = [
                // tabindex is required for focus
                ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                  '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h4 class="modal-title">ADVERTENCIA</h4>', 
                  '</div>',
                  '<form method="post" action="/procesos/credito/eliminar/'+id+'">',
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
            
            container.find('input[name=notacredito_fechacreacion]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            container.find('input[name=notacredito_fechanotacredito]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            
            container.find('input[name=notacredito_fechaentrega]').datepicker({
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
                tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][precio] value="0"></td>');
                tr.append('<td class="costo_unitario">'+accounting.formatMoney(0)+'</td>');
                tr.append('<td><input type="text" name=productos['+count+'][descuento] value="0"></td>');
                tr.append('<td><input type="text" name=productos['+count+'][ieps] value="0"></td>');
                tr.append('<td class="subtotal">'+accounting.formatMoney(0)+'</td>');
                tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
                tr.append(almacenen_select);
                tr.append('<td class="text-center"><a href="javascript:;"><i class="fa fa-trash"></i></a></td>');
                
                //AQUI HACEMOS HACEMOS NUMERICOS TODOS NUESTRO CAMPOS INPUTS
                tr.find('input').numeric();
                
                //ADJUNTAMOS EL EVENTO CALCULATOR PARA CALCULAR SUBTOTAL,TOTAL,IEPS, ETC
                tr.find('input').on('blur',function(){
                    var $tr = $(this).closest(tr);
                    caluclator($tr);
                });
                
                var revisada = $('select[name=notacredito_revisada] option:selected').val();
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
           $('input[name=notacredito_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/credito/validatefolio",
                    dataType: "json",
                    data: {folio:folio},
                    success: function (exist) {
                        console.log(exist);
                        if(exist){
                            //alert('El folio "'+folio+'" ya fue utilizado en los últimos 2 meses');
                            $this.addClass('invalid');
                            $("label[for=notacredito_folio]").addClass("invalid");
                            $("label[for=notacredito_folio]").text("Este folio ya fue utilizado");
                        }else{
                            $this.addClass('valid');
                            $this.removeClass('invalid');
                            $("label[for=notacredito_folio]").removeClass("invalid");
                            $("label[for=notacredito_folio]").text("Folio *");
                        }
                        
                    },
                });
                         
           });
                         
        }
        
        plugin.edit = function(anio,mes,mes_notacredito,anio_notacredito,almacenes,count){


            var minDate = new Date(anio + '/' + mes + '/' + '01');
            var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth()+1));
            maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate()-1));
            
            container.find('input[name=notacredito_fechacreacion]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            container.find('input[name=notacredito_fechanotacredito]').datepicker({
                startDate:minDate,
                endDate:maxDate,
                format: 'dd/mm/yyyy',
            });
            
            container.find('input[name=notacredito_fechaentrega]').datepicker({
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
                
                var revisada = $('select[name=notacredito_revisada] option:selected').val();
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
            //Si el tipo de entidad es orden de notacredito, el campo de almacén (entidad) y almacén (registro) se encuentra disable
           $('select[name=notacredito_tipo]').on('change',function(){
               
               var selected = $('select[name=notacredito_tipo] option:selected').val();
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
           $('input[name=notacredito_folio]').on('blur',function(){
                var folio = $(this).val();
                var $this = $(this);
                $this.removeClass('valid');
                $.ajax({
                    url: "/procesos/credito/validatefolio",
                    dataType: "json",
                    data: {folio:folio},
                    success: function (exist) {
                        if(exist){
                            //alert('El folio "'+folio+'" ya fue utilizado en los últimos 2 meses');
                            $this.addClass('invalid');
                            $("label[for=notacredito_folio]").addClass("invalid");
                            $("label[for=notacredito_folio]").text("Este folio ya fue utilizado");
                        }else{
                            $this.addClass('valid');
                            $this.removeClass('invalid');
                            $("label[for=notacredito_folio]").removeClass("invalid");
                            $("label[for=notacredito_folio]").text("Folio *");
                        }
                        
                    },
                });
                         
           });
           
           //VALIDAMOS MES Y ANIO EN CURSO PARA VER SI SE PUEDE MODIFICAR
            var now = new Date();
            if(mes_notacredito != mes || anio_notacredito != anio){
                $container.find('input,select,button').attr('disabled',true);
                $('.fa-trash').unbind();
                $('.fa-trash').css('cursor','not-allowed');
                
            }
            $("#productos_table tbody tr").each(function()
            {
                var tr = $(this);
                $(this).find("input").on("blur", function()
                {
                    caluclator(tr);
                });
            });

        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    $('#frm-nota').on('submit', function (e) 
    {
        if( $("[name=notacredito_folio]").hasClass('invalid'))
            return false;
    });
    
})( jQuery );


