(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.cuentasporpagar = function (data) {
        var _this = $(this);
        var plugin = _this.data('cuentasporpagar');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.cuentasporpagar(this, data);

            _this.data('cuentasporpagar', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.cuentasporpagar = function (container, options) {

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


        /*
         * Public methods
         */

        plugin.init = function () {

            settings = plugin.settings = $.extend({}, defaults, options);


        }
        
        plugin.list = function () {
            
            var table = $container.find('#datatable');
            $.ajax({
                url: '/application/json/datatable/lang_es.json',
                dataType: 'json',
                success: function (data) {
                    table.dataTable({
                        "language": data,
                        "order": [],
                    });
                },
            });
        }
        
        formControl = function(pago){
            if(pago == 'cuenta'){
                //Se pone disabled el campo cuenta
                container.find('select[name=idcuentabancaria]').prop('disabled',false).prop('required',true);
                container.find('input[name=flujoefectivo_referencia]').prop('disabled',false);
                container.find('select[name=flujoefectivo_mediodepago]').prop('disabled',false).prop('required',true);
            }
        }
        
        plugin.edit = function () {
            
            container.find('input[name=flujoefectivo_fecha]').datepicker({
                format: 'dd/mm/yyyy',
            });
            
            container.find('input[name=flujoefectivo_fechacobrocheque]').datepicker({
                format: 'dd/mm/yyyy',
            });
            
            container.find('select[name=flujoefectivo_mediodepago]').on('change',function(){
                var mediopago = container.find('select[name=flujoefectivo_mediodepago] option:selected').val();
      
                if(mediopago == 'cheque'){
                    container.find('select[name=flujoefectivo_chequecirculacion]').prop('disabled',false).prop('required',true);
                }else{
                    container.find('select[name=flujoefectivo_chequecirculacion],input[name=flujoefectivo_fechacobrocheque]').prop('disabled',true).prop('required',false);
                    container.find('select[name=flujoefectivo_chequecirculacion]').val("");
                }
            });
            
            container.find('select[name=flujoefectivo_chequecirculacion]').on('change',function(){
                var chequecirculacion = parseInt(container.find('select[name=flujoefectivo_chequecirculacion] option:selected').val());
                if(Boolean(chequecirculacion)){
                    container.find('input[name=flujoefectivo_fechacobrocheque]').prop('disabled',false).prop('required',true);
                }else{
                    container.find('input[name=flujoefectivo_fechacobrocheque]').prop('disabled',true).prop('required',false);;
                }
            });
            
            container.find('select[name=flujoefectivo_pago]').on('change',function(){
                var pago = container.find('select[name=flujoefectivo_pago] option:selected').val();
                formControl(pago);
            });
            
            container.find('select[name=idcuentabancaria]').on('change',function(){
                var cuentabancaria = container.find('select[name=idcuentabancaria] option:selected').val();
                if(cuentabancaria != ""){
                    container.find('input[name=flujoefectivo_cantidad]').prop('disabled',false);
                    $.ajax({
                        url:'/flujoefectivo/cuentasporpagar/getbalance',
                        dataType:'json',
                        type:'post',
                        data:{
                            id:cuentabancaria,
                        },
                        success: function (data, textStatus, jqXHR) {
                            if(data.response){
                                container.find('span#balance').text('Balance: '+accounting.formatMoney(data.balance));
                                container.find('span#balance').slideDown();
                            }
                        }
                    });
                }else{
                    container.find('span#balance').text(accounting.formatMoney(0));
                    container.find('span#balance').slideUp();
                    container.find('input[name=flujoefectivo_cantidad]').prop('disabled',true);
                }
            });
            
            container.find('input[name=flujoefectivo_cantidad]').numeric();
            container.find('input[name=flujoefectivo_cantidad]').on('blur',function(){
                
                container.find('input[name=flujoefectivo_cantidad]').removeClass('valid');
                container.find('input[name=flujoefectivo_cantidad]').removeClass('invalid');
                
                var cantidad = container.find('input[name=flujoefectivo_cantidad]').val();
                var cuentabancaria = container.find('select[name=idcuentabancaria] option:selected').val();
                if(cantidad !== ""){
                    $.ajax({
                        url:'/flujoefectivo/cuentasporpagar/validarcantidad',
                        dataType:'json',
                        type:'post',
                        data:{
                            cuentabancaria:cuentabancaria,
                            cantidad:cantidad,
                        },
                        success: function (data, textStatus, jqXHR) {
                            if(data.response){
                                container.find('input[name=flujoefectivo_cantidad]').addClass('valid');
                            }else{
                                container.find('input[name=flujoefectivo_cantidad]').addClass('invalid');
                                container.find('input[name=flujoefectivo_cantidad]').val("");
                                alert(data.msj);
                            }
                        }
                    });
                }
            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


