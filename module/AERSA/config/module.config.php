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
                               ),
                               'may_terminate' => true,
                               'child_routes' => array(
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
                               ),
                            ),
                           'productos' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/producto',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Productos',
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
                                                'controller' => 'Application\Catalogo\Controller\Productos',
                                                'action' => 'nuevo',
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
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            'website' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route'    => 'aersa', //LOCAL
                    //'route'    => 'aersamx.com', //PRODUCCION
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
            'Application\Catalogo\Controller\Productos'     => 'Application\Catalogo\Controller\ProductosController',
            

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
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
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
