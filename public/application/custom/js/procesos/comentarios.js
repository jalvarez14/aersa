(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.comentarios = function(data){
        var _this = $(this);
        var plugin = _this.data('comentarios');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.comentarios(this, data);
            
            _this.data('comentarios', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.comentarios = function(container, options){
        
        var plugin = this;
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        var $table;

        
        var defaults = {
            editable:true,
        };
        
        /*
        * Private methods
        */

        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            plugin.getComentarios();
            //El evento nuevo
            $container.find('#nota_nuevo').on('click',function(){
                var tmpl = [
                    '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                        '<div class="modal-header">',
                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                            '<h4 class="modal-title">Nuevo comentario</h4>',
                        '</div>',
                        '<div class="modal-body">',
                            '<div class="row">',
                                '<div class="col-md-12">',
                                    '<div class="form-group">',
                                        '<label for="nota">Comentario *</label>',
                                        '<textarea class="form-control" type="text" name="nota"></textarea>',
                                    '</div>',
                                '</div>',
                            '</div>',
                        '</div>',
                        '<div class="modal-footer">',
                            '<a id="save" href="javascript:;" class="btn blue">Guardar</a>',
                        '</div>',
                    '</div>',  
                ].join('');
                var $modal = $(tmpl);
                $modal.modal();
                $modal.find('#save').on('click',function(){
                    $modal.find('textarea[name=nota]').removeClass('invalid');
                    var empty = false;
                    var value = $modal.find('textarea[name=nota]').val();
                    if(value==""){
                        empty =true;
                        $modal.find('textarea[name=nota]').addClass('invalid');
                    }
                    if(!empty){
                        
                        $.ajax({
                            url: '/procesos/comentarios/create',
                            type: 'POST',
                            data: {
                                table: settings.table,
                                id: settings.id,
                                parent:settings.parent,
                                nota: value,
                            },
                            dataType: 'JSON',
                            success: function (data) {
                            
                                if (data.response) {
                                    
                                    var tmpl = [
                                        '<div id="'+data.data.id+'" class="mt-comment">',
                                            '<div class="mt-comment-body">',
                                                '<div class="mt-comment-info">',
                                                    '<span class="mt-comment-author">'+data.data.usuario+'</span>',
                                                    '<span class="mt-comment-date">'+data.data.fecha+'</span>',
                                                '</div>',
                                                '<div class="mt-comment-text">'+data.data.nota+'</div>',
                                                '<div class="mt-comment-details">',
                                                    '<ul class="mt-comment-actions">',
                                                        '<li><a class="editar_nota" href="javascript:;">Editar</a></li>',
                                                        '<li><a class="eliminar_nota" href="javascript:;">Eliminar</a></li>',
                                                    '</ul>',
                                                '</div>',
                                            '</div>',
                                        '</div>',
                                    ].join('');
                                    tmpl = $(tmpl);
                                    tmpl.find('.eliminar_nota').on('click', function () {
                                        var comment = $(this).closest('.mt-comment');
                                        var id = $(this).closest('.mt-comment').attr('id');
                                        var tmpl = [
                                            // tabindex is required for focus
                                            ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                                            '<div class="modal-header">',
                                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                                            '<h4 class="modal-title">ADVERTENCIA</h4>',
                                            '</div>',
                                            '<div class="modal-body">',
                                            '<p>¿Estas seguro que deseas eliminar el registro seleccionado?</p>',
                                            '</div>',
                                            '<div class="modal-footer">',
                                            '<a href="#" data-dismiss="modal" class="btn btn-default">Cancelar</a>',
                                            '<button id="eliminar_nota" class="btn btn-danger" type="submit">Eliminar</button>',
                                            '</div>',
                                            '</div>'
                                        ].join('');
                                        var $modal = $(tmpl);
                                        $modal.modal();
                                        $modal.find('#eliminar_nota').on('click', function () {
                                            $.ajax({
                                                url: '/procesos/comentarios/delete',
                                                type: 'POST',
                                                data: {
                                                    table: settings.table,
                                                    id: id,
                                                },
                                                dataType: 'JSON',
                                                success: function (data) {
                                                    if (data.response) {
                                                        comment.remove();
                                                        $modal.modal('hide');
                                                    }
                                                }
                                            });
                                        });
                                    });
                                    tmpl.find('.editar_nota').on('click', function () {
                                        var comment = $(this).closest('.mt-comment');
                                        var nota = comment.find('.mt-comment-text').text();

                                        var id = $(this).closest('.mt-comment').attr('id');
                                        var tmpl = [
                                            '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                            '<div class="modal-header">',
                                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                            '<h4 class="modal-title">Editar comentario</h4>',
                                            '</div>',
                                            '<div class="modal-body">',
                                            '<div class="row">',
                                            '<div class="col-md-12">',
                                            '<div class="form-group">',
                                            '<label for="nota">Comentario *</label>',
                                            '<textarea class="form-control" type="text" name="nota">' + nota + '</textarea>',
                                            '</div>',
                                            '</div>',
                                            '</div>',
                                            '</div>',
                                            '<div class="modal-footer">',
                                            '<a id="save" href="javascript:;" class="btn blue">Guardar</a>',
                                            '</div>',
                                            '</div>',
                                        ].join('');
                                        tmpl = $(tmpl);
                                        var $modal = $(tmpl);
                                        $modal.modal();
                                        $modal.find('#save').on('click', function () {
                                            $modal.find('textarea[name=nota]').removeClass('invalid');
                                            var empty = false;
                                            var value = $modal.find('textarea[name=nota]').val();
                                            if (value == "") {
                                                empty = true;
                                                $modal.find('textarea[name=nota]').addClass('invalid');
                                            }
                                            if (!empty) {
                                                $.ajax({
                                                    url: '/procesos/comentarios/edit',
                                                    type: 'POST',
                                                    data: {
                                                        table: settings.table,
                                                        id: id,
                                                        nota: value,
                                                    },
                                                    dataType: 'JSON',
                                                    success: function (data) {
                                                        if (data.response) {
                                                            comment.find('.mt-comment-text').text(value);
                                                            $modal.modal('hide');
                                                        }
                                                    }
                                                });
                                            }
                                        });
                                    });
                                    $container.find('.mt-comments').prepend(tmpl); 
                                    $modal.modal('hide');
                                    
                                }
                                
                            }
                        });
                    }
                });
            });
        }
        
        plugin.getComentarios = function(){
            
            $.ajax({
                url:'/procesos/comentarios/get',
                type:'POST',
                data:{
                    table:settings.table,
                    id:settings.id,
                    filter_by:settings.parent,
                },
                dataType:'JSON',
                success: function (data) {
                    if(data.response){
                        $.each(data.data,function(){
                            if(settings.editable){
                                var tmpl = [
                                    '<div id="'+this.id+'" class="mt-comment">',
                                        '<div class="mt-comment-body">',
                                            '<div class="mt-comment-info">',
                                                '<span class="mt-comment-author">'+this.usuario+'</span>',
                                                '<span class="mt-comment-date">'+this.fecha+'</span>',
                                            '</div>',
                                            '<div class="mt-comment-text">'+this.nota+'</div>',
                                            '<div class="mt-comment-details">',
                                                '<ul class="mt-comment-actions">',
                                                    '<li><a class="editar_nota" href="javascript:;">Editar</a></li>',
                                                    '<li><a class="eliminar_nota" href="javascript:;">Eliminar</a></li>',
                                                '</ul>',
                                            '</div>',
                                        '</div>',
                                    '</div>',
                                ].join('');
                            }else{
                                var tmpl = [
                                    '<div id="'+this.id+'" class="mt-comment">',
                                        '<div class="mt-comment-body">',
                                            '<div class="mt-comment-info">',
                                                '<span class="mt-comment-author">'+this.usuario+'</span>',
                                                '<span class="mt-comment-date">'+this.fecha+'</span>',
                                            '</div>',
                                            '<div class="mt-comment-text">'+this.nota+'</div>',
                                        '</div>',
                                    '</div>',
                                ].join('');
                            }
                            tmpl = $(tmpl);
                            if(this.idusuario != data.usuario_session){
                               
                                tmpl.find('.editar_nota').parent('li').remove();
                                tmpl.find('.eliminar_nota').parent('li').remove();
                            }
                            tmpl.find('.eliminar_nota').on('click',function(){
                                var comment = $(this).closest('.mt-comment');
                                var id = $(this).closest('.mt-comment').attr('id');
                                var tmpl = [
                                  // tabindex is required for focus
                                  ' <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">',
                                    '<div class="modal-header">',
                                      '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                                      '<h4 class="modal-title">ADVERTENCIA</h4>', 
                                    '</div>',
                                      '<div class="modal-body">',
                                        '<p>¿Estas seguro que deseas eliminar el registro seleccionado?</p>',
                                      '</div>',
                                      '<div class="modal-footer">',
                                        '<a href="#" data-dismiss="modal" class="btn btn-default">Cancelar</a>',
                                        '<button id="eliminar_nota" class="btn btn-danger" type="submit">Eliminar</button>',
                                      '</div>',
                                  '</div>'
                                ].join('');
                                var $modal = $(tmpl);
                                $modal.modal();
                                $modal.find('#eliminar_nota').on('click',function(){
                                     $.ajax({
                                        url:'/procesos/comentarios/delete',
                                        type:'POST',
                                        data:{
                                            table:settings.table,
                                            id:id,
                                        },
                                        dataType:'JSON',
                                        success: function (data) {
                                            if(data.response){
                                                comment.remove();
                                                $modal.modal('hide');
                                            }
                                        }
                                     });
                                });
                            });
                            tmpl.find('.editar_nota').on('click',function(){
                                var comment = $(this).closest('.mt-comment');
                                var nota = comment.find('.mt-comment-text').text();

                                var id = $(this).closest('.mt-comment').attr('id');
                                var tmpl = [
                                    '<div class="modal fade bs-modal-lg in" aria-hidden="true" role="dialog" tabindex="-1" style="display: block;">',
                                        '<div class="modal-header">',
                                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>',
                                            '<h4 class="modal-title">Editar comentario</h4>',
                                        '</div>',
                                        '<div class="modal-body">',
                                            '<div class="row">',
                                                '<div class="col-md-12">',
                                                    '<div class="form-group">',
                                                        '<label for="nota">Comentario *</label>',
                                                        '<textarea class="form-control" type="text" name="nota">'+nota+'</textarea>',
                                                    '</div>',
                                                '</div>',
                                            '</div>',
                                        '</div>',
                                        '<div class="modal-footer">',
                                            '<a id="save" href="javascript:;" class="btn blue">Guardar</a>',
                                        '</div>',
                                    '</div>',  
                                ].join('');
                                tmpl = $(tmpl);
                                var $modal = $(tmpl);
                                $modal.modal();
                                $modal.find('#save').on('click',function(){
                                    $modal.find('textarea[name=nota]').removeClass('invalid');
                                    var empty = false;
                                    var value = $modal.find('textarea[name=nota]').val();
                                    if(value==""){
                                        empty =true;
                                        $modal.find('textarea[name=nota]').addClass('invalid');
                                    }
                                    if(!empty){
                                         $.ajax({
                                             url: '/procesos/comentarios/edit',
                                             type: 'POST',
                                             data: {
                                                table: settings.table,
                                                id: id,
                                                nota: value,
                                            },
                                            dataType: 'JSON',
                                            success: function (data) {
                                                if(data.response){
                                                    comment.find('.mt-comment-text').text(value);
                                                    $modal.modal('hide');
                                                }
                                            }
                                         });
                                    }
                                });
                            });
                            $container.find('.mt-comments').append(tmpl);                            
                        });
                        
                    };
                }
                
            });
        }
        
        

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


