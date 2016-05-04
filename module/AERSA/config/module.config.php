<?php

return array(
    'router' => array(
        'routes' => array(
            /*
             * HOME
             */
            'application' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route'    => 'admin.aersa', //LOCAL
                    //'route' => 'admin.aersamx.com', //PRODUCCION
                ),
                'may_terminate' => true,
                'child_routes' => array(
                   /*
                    * ESCRITORIO
                    */
                    'escritorio' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/',
                            'defaults' => array(
                                'controller'    => 'Application\Dashboard\Controller\Index',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'autocomplete' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/autocomplete[/:action]',
                            'defaults' => array(
                                'controller'    => 'Application\Dashboard\Controller\Index',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    /*
                    * LOGIN
                    */
                    'login' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/login[/:action]',
                            'defaults' => array(
                                'controller'    => 'Application\Login\Controller\Login',
                                'action'        => 'in',
                            ),
                        ),
                    ),
                    /*
                    * CATALOGOS
                    */
                   'catalogo' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/catalogo',
                        ),
                       'may_terminate' => false,
                       'child_routes' => array(
                           'usuario' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/usuario',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Usuario',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                   'changepassword' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/changepassword[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'changepassword',
                                            ),
                                        ),
                                    ),
                                   'administrador' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/administrador[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'administrador',
                                            ),
                                        ),
                                    ),
                                   'editaradministrador' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editaradministrador[/:id][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'editaradministrador',
                                            ),
                                        ),
                                    ),
                                   'eliminaradministrador' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminaradministrador[/:id][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'eliminaradministrador',
                                            ),
                                        ),
                                    ),
                                   'changepasswordadministrador' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/changepasswordadministrador[/:id][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'changepasswordadministrador',
                                            ),
                                        ),
                                    ),
                                   'auditor' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/auditor/nuevo[/:suc][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'auditor',
                                            ),
                                        ),
                                    ),
                                   'editarauditor' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editarauditor[/:id][/:suc][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'editarauditor',
                                            ),
                                        ),
                                    ),
                                   'changepasswordauditor' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/changepasswordauditor[/:id][/:suc][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'changepasswordauditor',
                                            ),
                                        ),
                                    ),
                                   'checkuser' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/checkuser[/:username]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'checkuser',
                                            ),
                                        ),
                                    ),
                                   
                               ),
                            ),
                           'almacen' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/almacen',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Almacen',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo[/:suc][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Almacen',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id][/:suc][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Almacen',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                               ),
                            ),
                           'proveedor' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/proveedor',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Proveedor',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Proveedor',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Proveedor',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                               ),
                            ),
                           'producto' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/producto',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Producto',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'nuevocodigo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevocodigo[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'nuevocodigo',
                                            ),
                                        ),
                                    ),
                                   'editarcodigo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editarcodigo[/:id][/:prod]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'editarcodigo',
                                            ),
                                        ),
                                    ),
                                   'eliminarcodigo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminarcodigo[/:id][/:prod]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'eliminarcodigo',
                                            ),
                                        ),
                                    ),
                                   'nuevasubreceta' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevasubreceta[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'nuevasubreceta',
                                            ),
                                        ),
                                    ),
                                   'editarsubreceta' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editarsubreceta[/:id][/:prod]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'editarsubreceta',
                                            ),
                                        ),
                                    ),
                                   'eliminarsubreceta' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminarsubreceta[/:id][/:prod]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'eliminarsubreceta',
                                            ),
                                        ),
                                    ),
                                   
                               ),
                            ),
                        
                        'iva' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/iva',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Iva',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Iva',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Iva',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Iva',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Iva',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),

                               ),
                            ),
                        'categoria' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/categoria',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Categoria',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'nuevasub' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevasub[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'nuevasub',
                                            ),
                                        ),
                                    ),
                                   'editarsub' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editarsub[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'editarsub',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                   'getsubcat' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/getsubcat[/:idcategoria]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'getsubcat',
                                            ),
                                        ),
                                    ),
                               ),
                            ),
                           'empresa' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/empresa',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Empresa',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Empresa',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Empresa',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Empresa',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Empresa',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),

                               ),
                            ),
                           'sucursal' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/empresa/sucursal',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Sucursal',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Sucursal',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id][/:emp]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Sucursal',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Sucursal',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                   'checkuser' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/checkuser[/:username]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Sucursal',
                                                'action' => 'checkuser',
                                            ),
                                        ),
                                    ),

                               ),
                            ),

                           
                            'tablajeria' => array(
                                'type' => 'Segment',
                                'options' => array(
                                    'route' => '/tablajeria',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Plantillatablajeria',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'nuevo' => array(
                                        'type' => 'Literal',
                                        'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Plantillatablajeria',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Plantillatablajeria',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'nuevo' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Plantillatablajeria',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'eliminar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Plantillatablajeria',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                    'getproducts' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getproducts[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Plantillatablajeria',
                                                'action' => 'getproducts',
                                            ),
                                        ),
                                    ),
                                    
                                ),
                            ),
                        ),
                    ),
                    /*
                     * PROCESOS
                     */
                    'procesos' => array( 
                        'type' => 'Literal', 'options' => array(
                            'route' => '/procesos', 
                        ),
                        'may_terminate' => true, 
                        'child_routes' => array( 
                            'compra' => array( 
                                'type' => 'Literal', 
                                'options' => array( 
                                    'route' => '/compra', 
                                    'defaults' => array( 
                                        'controller' => 'Application\Proceso\Controller\Compra', 'action' => 'index', 
                                    ), 
                                ), 
                                'may_terminate' => true, 
                                'child_routes' => array( 
                                    'nuevoregistro' => array( 
                                        'type' => 'Literal', 'options' => array( 
                                            'route' => '/nuevoregistro', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Compra', 
                                                'action' => 'nuevoregistro', 
                                            ), 
                                        ), 
                                    ), 
                                    'editar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/editar[/:id]', 
                                             'defaults' => array( 
                                                 'controller' => 'Application\Proceso\Controller\Compra', 
                                                 'action' => 'editar', 
                                                 ), 
                                            ), 
                                        ), 
                                    'eliminar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/eliminar[/:id]', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Compra', 
                                                'action' => 'eliminar',
                                            ), 
                                        ), 
                                    ), 
                                    'validatefolio' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/validatefolio', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Compra', 
                                                'action' => 'validatefolio',
                                            ), 
                                        ), 
                                    ),
                                ), 
                            ), 
                            'requisicion' => array( 
                                'type' => 'Literal', 
                                'options' => array( 
                                    'route' => '/requisicion', 
                                    'defaults' => array( 
                                        'controller' => 'Application\Proceso\Controller\Requisicion', 'action' => 'index', 
                                    ), 
                                ), 
                                'may_terminate' => true, 
                                'child_routes' => array( 
                                    'nuevo' => array( 
                                        'type' => 'Literal', 'options' => array( 
                                            'route' => '/nuevo', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Requisicion', 
                                                'action' => 'nuevo', 
                                            ), 
                                        ), 
                                    ), 
                                    'editar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/editar[/:id]', 
                                             'defaults' => array( 
                                                 'controller' => 'Application\Proceso\Controller\Requisicion', 
                                                 'action' => 'editar', 
                                                 ), 
                                            ), 
                                        ), 
                                    'eliminar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/eliminar[/:id]', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Requisicion', 
                                                'action' => 'eliminar',
                                            ), 
                                        ), 
                                    ),
                                    'getalmdes' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/getalmdes[/:id]', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Requisicion', 
                                                'action' => 'getalmdes',
                                            ), 
                                        ), 
                                    ), 
                                    'getconcepsal' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/getconcepsal[/:almorg][/:almdes][/:sucorg][/:sucdes]', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Requisicion', 
                                                'action' => 'getconcepsal',
                                            ), 
                                        ), 
                                    ),
                                ), 
                            ), 
                            'devolucion' => array( 
                                'type' => 'Literal', 
                                'options' => array( 
                                    'route' => '/devolucion', 
                                    'defaults' => array( 
                                        'controller' => 'Application\Proceso\Controller\Devolucion', 'action' => 'index', 
                                    ), 
                                ), 
                                'may_terminate' => true, 
                                'child_routes' => array( 
                                    'nuevoregistro' => array( 
                                        'type' => 'Literal', 'options' => array( 
                                            'route' => '/nuevoregistro', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Devolucion', 
                                                'action' => 'nuevoregistro', 
                                            ), 
                                        ), 
                                    ), 
                                    'editar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/editar[/:id]', 
                                             'defaults' => array( 
                                                 'controller' => 'Application\Proceso\Controller\Devolucion', 
                                                 'action' => 'editar', 
                                                 ), 
                                            ), 
                                        ), 
                                    'eliminar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/eliminar[/:id]', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Devolucion', 
                                                'action' => 'eliminar',
                                            ), 
                                        ), 
                                    ), 
                                ), 
                            ),
                            'ingresos' => array( 
                                'type' => 'Literal', 
                                'options' => array( 
                                    'route' => '/ingresos', 
                                    'defaults' => array( 
                                        'controller' => 'Application\Proceso\Controller\Ingresos', 
                                        'action' => 'index', 
                                    ), 
                                ), 
                                'may_terminate' => true, 
                                'child_routes' => array( 
                                    'nuevo' => array( 
                                        'type' => 'Literal', 
                                        'options' => array( 
                                            'route' => '/nuevo', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Ingresos', 
                                                'action' => 'nuevo', 
                                            ), 
                                        ), 
                                    ), 
                                    'editar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/editar[/:id]', 
                                             'defaults' => array( 
                                                 'controller' => 'Application\Proceso\Controller\Ingresos', 
                                                 'action' => 'editar', 
                                                 ), 
                                            ), 
                                        ), 
                                    'eliminar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/eliminar[/:id]', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Ingresos', 
                                                'action' => 'eliminar',
                                            ), 
                                        ), 
                                    ),
                                    'validatefolio' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/validatefolio', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Ingresos', 
                                                'action' => 'validatefolio',
                                            ), 
                                        ), 
                                    ),
                                ), 
                            ),
                            'notacredito' => array( 
                                'type' => 'Literal', 
                                'options' => array( 
                                    'route' => '/credito', 
                                    'defaults' => array( 
                                        'controller' => 'Application\Proceso\Controller\Notacredito', 'action' => 'index', 
                                    ), 
                                ), 
                                'may_terminate' => true, 
                                'child_routes' => array( 
                                    'nuevoregistro' => array( 
                                        'type' => 'Literal', 'options' => array( 
                                            'route' => '/nuevoregistro', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Notacredito', 
                                                'action' => 'nuevoregistro', 
                                            ), 
                                        ), 
                                    ), 
                                    'editar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/editar[/:id]', 
                                             'defaults' => array( 
                                                 'controller' => 'Application\Proceso\Controller\Notacredito', 
                                                 'action' => 'editar', 
                                                 ), 
                                            ), 
                                        ), 
                                    'eliminar' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/eliminar[/:id]', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Notacredito', 
                                                'action' => 'eliminar',
                                            ), 
                                        ), 
                                    ), 
                                    'validatefolio' => array( 
                                        'type' => 'Segment', 
                                        'options' => array( 
                                            'route' => '/validatefolio', 
                                            'defaults' => array( 
                                                'controller' => 'Application\Proceso\Controller\Notacredito', 
                                                'action' => 'validatefolio',
                                            ), 
                                        ), 
                                    ),
                                ), 
                            ),
                        ), 
                    ), 
                ),
            ),
            'website' => array(
                'type' => 'Hostname',
                'options' => array(
                    //'route'    => 'aersa', //LOCAL
                    'route'    => 'aersamx.com', //PRODUCCION
                    'defaults' => array(
                        'controller' => 'Website\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            

        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            /*
             * LOGIN
             */
            'Application\Login\Controller\Login' => 'Application\Login\Controller\LoginController',
            /*
             * ESCRITORIO
             */
            'Application\Dashboard\Controller\Index' => 'Application\Dashboard\Controller\IndexController',
            /*
             * CATALOGO
             */

            'Application\Catalogo\Controller\Usuario'       => 'Application\Catalogo\Controller\UsuarioController',
            'Application\Catalogo\Controller\Proveedor'     => 'Application\Catalogo\Controller\ProveedorController',
            'Application\Catalogo\Controller\Iva'           => 'Application\Catalogo\Controller\IvaController',
            'Application\Catalogo\Controller\Categoria'     => 'Application\Catalogo\Controller\CategoriaController',
            'Application\Catalogo\Controller\Empresa'       => 'Application\Catalogo\Controller\EmpresaController',
            'Application\Catalogo\Controller\Almacen'       => 'Application\Catalogo\Controller\AlmacenController',
            'Application\Catalogo\Controller\Sucursal'      => 'Application\Catalogo\Controller\SucursalController',
            'Application\Catalogo\Controller\Producto'      => 'Application\Catalogo\Controller\ProductoController',
            'Application\Catalogo\Controller\Plantillatablajeria' => 'Application\Catalogo\Controller\PlantillatablajeriaController',
            
            /*
             * PROCESO
             */
            
            'Application\Proceso\Controller\Compra' => 'Application\Proceso\Controller\CompraController',
            'Application\Proceso\Controller\Requisicion' => 'Application\Proceso\Controller\RequisicionController',
            'Application\Proceso\Controller\Devolucion' => 'Application\Proceso\Controller\DevolucionController',
            'Application\Proceso\Controller\Ingresos' => 'Application\Proceso\Controller\IngresosController',
            'Application\Proceso\Controller\Notacredito'    => 'Application\Proceso\Controller\NotacreditoController',

            /*
             * WEBSITE
             */
            'Website\Controller\Index' => 'Website\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/application/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/application/layout/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
