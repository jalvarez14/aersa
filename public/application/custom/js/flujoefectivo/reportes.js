(function ($) {

    $.fn.reportes = function (data) {
        var _this = $(this);
        var plugin = _this.data('reportes');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.reportes(this, data);

            _this.data('reportes', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    $.reportes = function (container, options) {

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
        
        plugin.mensual = function () {
            $('select[name=ano]').on('change', function () {
                if($('select[name=ano] option:selected').val()!="") {
                    if($('select[name=mes] option:selected').val()!="")
                        $('#mensual_generar').attr('disabled', false);
                    else 
                        $('#mensual_generar').attr('disabled', true);
                } else {
                    $('#mensual_generar').attr('disabled', true);
                }
            });
            
            $('select[name=mes]').on('change', function () {
                if($('select[name=ano] option:selected').val()!=""){
                    if($('select[name=mes] option:selected').val()!="") 
                        $('#mensual_generar').attr('disabled', false);
                    else 
                        $('#mensual_generar').attr('disabled', true);
                } else {
                    $('#mensual_generar').attr('disabled', true);
                }
            });
            
            
            $('#mensual_generar').on('click', function () {
                //$container.find('reporte_table tbody tr').remove();
                 $("#reporte_table").find("tr:gt(0)").remove();
                var mes = $('select[name=mes] option:selected').val();
                var ano = $('select[name=ano] option:selected').val();
                var total=0;
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "/flujoefectivo/reportes/mensual/reporte",
                    dataType: "json",
                    data: {mes:mes,ano:ano},
                    success: function (data) {
                        if (data.length != 0) {
                            for (var k in data) {
                                //bgcolor="#ADD8E6"
                                if(k.includes("<h5>")) {
                                    var tr = $('<tr bgcolor="#ADD8E6">');
                                    total+=parseFloat(data[k][0]);
                                } else {
                                    var tr = $('<tr>');
                                }
                                tr.append('<td> '+ k + '</td>');
                                tr.append('<td>'+data[k][0]+' </td>');
                                
                                if (typeof data[k][1] == "undefined")
                                    tr.append('<td>0% </td>');    
                                else
                                    tr.append('<td>'+data[k][1]+'% </td>');
                                $('#reporte_table tbody').append(tr);
                                //console.log(k);
                            }
                            var tr = $('<tr>');
                            tr.append('<td> </td>');
                            tr.append('<td> '+total+'</td>');
                            tr.append('<td> 100% </td>');
                            $('#reporte_table tbody').append(tr);
                        } else {
                            alert("No existen datos para el año "+ano+" y mes "+mes);
                        }
                    },
                });
            });
        }
        

        plugin.anual = function () {

        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


