(function ($) {


    /*
     * Handle input. Call public functions and initializers
     */

    $.fn.receta = function (data) {
        var _this = $(this);
        var plugin = _this.data('receta');

        /*Inicializado ?*/
        if (!plugin) {

            plugin = new $.receta(this, data);

            _this.data('receta', plugin);

            return plugin;
            /*Si ya fue inizializado regresamos el plugin*/
        } else {
            return plugin;
        }

    };

    /*
     * Plugin Constructor
     */

    $.receta = function (container, options) {

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
        
        plugin.resumen = function () {
        }

        plugin.detalle = function () {
        }

        /*
         * Plugin initializing
         */

        plugin.init();

    }
})(jQuery);


