(function ($) {
    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.cierresinventarios = function (data) {
        var _this = $(this);
        var plugin = _this.data('cierresinventarios');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.cierresinventarios(this, data);

            _this.data('cierresinventarios', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.cierresinventarios = function (container, options) {

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
            
container.find('input[name=fecha_inicio]').datepicker({
	beforeShowDay: function(date) {
		var a = new Array();
		a[0] = date.getDay() == 1;
		a[1] = '';
		a[2] = '';
		return a;
	}
});

    
            container.find('input[name=fecha_inicio]').datepicker({
                format: 'dd/mm/yyyy',
            });
            
            container.find('input[name=fecha_fin]').datepicker({
                format: 'dd/mm/yyyy',
                beforeShowDay: function(date){ return [date.getDay() == 1,""]}
            });
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


