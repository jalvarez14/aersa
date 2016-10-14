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
                    'route' => 'admin.aersa', //LOCAL
                    //'route' => 'admin.aersamx.com', //PRODUCCION
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    /*
                     * ESCRITORIO
                     */
                    'escritorio' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/',
                            'defaults' => array(
                                'controller' => 'Application\Dashboard\Controller\Index',
                                'action' => 'index',
                            ),
                        ),
                    ),
                    'autocomplete' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/autocomplete[/:action]',
                            'defaults' => array(
                                'controller' => 'Application\Dashboard\Controller\Index',
                                'action' => 'index',
                            ),
                        ),
                    ),
                    /*
                     * LOGIN
                     */
                    'login' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/login[/:action]',
                            'defaults' => array(
                                'controller' => 'Application\Login\Controller\Login',
                                'action' => 'in',
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
                            'trabajadorespromedio' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/trabajador_promedio',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Trabajadorespromedio',
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
                                                'controller' => 'Application\Catalogo\Controller\Trabajadorespromedio',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Trabajadorespromedio',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'eliminar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Trabajadorespromedio',
                                                'action' => 'eliminar',
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
                                    'batch' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/batch[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Proveedor',
                                                'action' => 'batch',
                                            ),
                                        ),
                                    ),
                                    'validateproveedorcfdi' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validateproveedorcfdi',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Proveedor',
                                                'action' => 'validateproveedorcfdi',
                                            ),
                                        ),
                                    ),
                                    'associatevendor' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/associatevendor',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Proveedor',
                                                'action' => 'associatevendor',
                                            ),
                                        ),
                                    ),
                                    'export' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/export',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Proveedor',
                                                'action' => 'export',
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
                                    'validateproduct' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validateproduct',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'validateproduct',
                                            ),
                                        ),
                                    ),
                                    'renameproduct' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/renameproduct',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'renameproduct',
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
                                    'getprod' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getprod[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'getprod',
                                            ),
                                        ),
                                    ),
                                    'export' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/export',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Producto',
                                                'action' => 'export',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'altaproductos' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/altaproductos',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Altaproductos',
                                        'action' => 'index',
                                    ),
                                ),
                            ),
                            'productosasociacion' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/asociacionproductos',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Productosasociacion',
                                        'action' => 'index',
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
                                    'getweekarray' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getweekarray',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Sucursal',
                                                'action' => 'getweekarray',
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
                            'comentarios' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/comentarios',
                                    'defaults' => array(
                                        'controller' => 'Application\Proceso\Controller\Comentarios',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'get' => array(
                                        'type' => 'Literal', 'options' => array(
                                            'route' => '/get',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Comentarios',
                                                'action' => 'get',
                                            ),
                                        ),
                                    ),
                                    'create' => array(
                                        'type' => 'Literal', 'options' => array(
                                            'route' => '/create',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Comentarios',
                                                'action' => 'create',
                                            ),
                                        ),
                                    ),
                                    'delete' => array(
                                        'type' => 'Literal', 'options' => array(
                                            'route' => '/delete',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Comentarios',
                                                'action' => 'delete',
                                            ),
                                        ),
                                    ),
                                    'edit' => array(
                                        'type' => 'Literal', 'options' => array(
                                            'route' => '/edit',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Comentarios',
                                                'action' => 'edit',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
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
                            'consignacion' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/consignacion',
                                    'defaults' => array(
                                        'controller' => 'Application\Proceso\Controller\Consignacion', 'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'nuevoregistro' => array(
                                        'type' => 'Literal', 'options' => array(
                                            'route' => '/nuevoregistro',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Consignacion',
                                                'action' => 'nuevoregistro',
                                            ),
                                        ),
                                    ),
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Consignacion',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'eliminar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Consignacion',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                    'validatefolio' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validatefolio',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Consignacion',
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
                                    'gettipopro' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/gettipopro[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Requisicion',
                                                'action' => 'gettipopro',
                                            ),
                                        ),
                                    ),
                                    'getres' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getres[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Requisicion',
                                                'action' => 'getres',
                                            ),
                                        ),
                                    ),
                                    'validatefolio' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validatefolio',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Requisicion',
                                                'action' => 'validatefolio',
                                            ),
                                        ),
                                    ),
                                    'getproductos' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getproductos[/:q]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Requisicion',
                                                'action' => 'getproductos',
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
                                    'validatefolio' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validatefolio',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Devolucion',
                                                'action' => 'validatefolio',
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
                            'venta' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/venta',
                                    'defaults' => array(
                                        'controller' => 'Application\Proceso\Controller\Venta',
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
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'eliminar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                    'validatefolio' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validatefolio',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'validatefolio',
                                            ),
                                        ),
                                    ),
                                    'validateproduct' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validateproduct',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'validateproduct',
                                            ),
                                        ),
                                    ),
                                    'validateproductexist' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validateproductexist',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'validateproductexist',
                                            ),
                                        ),
                                    ),
                                    'renameproduct' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/renameproduct',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'renameproduct',
                                            ),
                                        ),
                                    ),
                                    'getreceta' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getreceta',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'getreceta',
                                            ),
                                        ),
                                    ),
                                    'nuevoproducto' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/nuevoproducto',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'nuevoproducto',
                                            ),
                                        ),
                                    ),
                                    'nuevosubreceta' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/nuevosubreceta',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Venta',
                                                'action' => 'nuevosubreceta',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'ordentablajeria' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/tablajeria',
                                    'defaults' => array(
                                        'controller' => 'Application\Proceso\Controller\Tablajeria',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'nuevoregistro' => array(
                                        'type' => 'Literal', 'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Tablajeria',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Tablajeria',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'eliminar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Tablajeria',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                    'validatefolio' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validatefolio',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Tablajeria',
                                                'action' => 'validatefolio',
                                            ),
                                        ),
                                    ),
                                    'getproductos' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getproductos',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Tablajeria',
                                                'action' => 'getproductos',
                                            ),
                                        ),
                                    ),
                                    'gettablajeria' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/gettablajeria[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Tablajeria',
                                                'action' => 'gettablajeria',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'ajustesinventarios' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/ajustesinventarios',
                                    'defaults' => array(
                                        'controller' => 'Application\Proceso\Controller\Ajustesinventarios',
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
                                                'controller' => 'Application\Proceso\Controller\Ajustesinventarios',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Ajustesinventarios',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'eliminar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Ajustesinventarios',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                    'validarcuenta' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validarcuenta',
                                            'defaults' => array(
                                                'controller' => 'Application\Proceso\Controller\Ajustesinventarios',
                                                'action' => 'validarcuenta',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    /*
                     * FLUJO DE EFECTIVO
                     */
                    'flujoefectivo' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/flujoefectivo',
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'ingresos' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/ingresos',
                                    'defaults' => array(
                                        'controller' => 'Application\Flujoefectivo\Controller\Ingresos',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Ingresos',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'nuevo' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/nuevo[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Ingresos',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'getdetails' => array(
                                        'type' => 'Literal',
                                        'options' => array(
                                            'route' => '/getdetails',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Ingresos',
                                                'action' => 'getdetails',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'cuentaporcobrar' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/cuentaporcobrar',
                                    'defaults' => array(
                                        'controller' => 'Application\Flujoefectivo\Controller\Cuentaporcobrar',
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
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentaporcobrar',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'movimientos' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/movimientos[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentaporcobrar',
                                                'action' => 'movimientos',
                                            ),
                                        ),
                                        'may_terminate' => true,
                                        'child_routes' => array(
                                            'pago' => array(
                                                'type' => 'Literal',
                                                'options' => array(
                                                    'route' => '/pago',
                                                    'defaults' => array(
                                                        'controller' => 'Application\Flujoefectivo\Controller\Cuentaporcobrar',
                                                        'action' => 'pago',
                                                    ),
                                                ),
                                            ),
                                            'eliminar' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/eliminar[/:idm]',
                                                    'defaults' => array(
                                                        'controller' => 'Application\Flujoefectivo\Controller\Cuentaporcobrar',
                                                        'action' => 'eliminarmovimiento',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'editarmovimiento' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editarmovimiento[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentaporcobrar',
                                                'action' => 'editarmovimiento',
                                            ),
                                        ),
                                    ),
                                    'saldocuentabancaria' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/saldocuentabancaria[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentaporcobrar',
                                                'action' => 'saldocuentabancaria',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'cuentasporpagar' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/cuentasporpagar',
                                    'defaults' => array(
                                        'controller' => 'Application\Flujoefectivo\Controller\Cuentasporpagar',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentasporpagar',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'getbalance' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getbalance',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentasporpagar',
                                                'action' => 'getbalance',
                                            ),
                                        ),
                                    ),
                                    'validarcantidad' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validarcantidad',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentasporpagar',
                                                'action' => 'validarcantidad',
                                            ),
                                        ),
                                    ),
                                    'eliminarmovimiento' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminarmovimiento[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentasporpagar',
                                                'action' => 'eliminarmovimiento',
                                            ),
                                        ),
                                    ),
                                    'editarmovimiento' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editarmovimiento[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentasporpagar',
                                                'action' => 'editarmovimiento',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'cuentabancaria' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/cuentabancaria',
                                    'defaults' => array(
                                        'controller' => 'Application\Flujoefectivo\Controller\Cuentabancaria',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'nuevo' => array(
                                        'type' => 'Literal', 'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentabancaria',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentabancaria',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'eliminar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentabancaria',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                    'validarcuenta' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validarcuenta',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Cuentabancaria',
                                                'action' => 'validarcuenta',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'saldoproveedores' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/saldoproveedores',
                                    'defaults' => array(
                                        'controller' => 'Application\Flujoefectivo\Controller\Saldoproveedores',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'movimientos' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/movimientos[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Saldoproveedores',
                                                'action' => 'movimientos',
                                            ),
                                        ),
                                        'may_terminate' => true,
                                        'child_routes' => array(
                                            'abono' => array(
                                                'type' => 'Literal',
                                                'options' => array(
                                                    'route' => '/abono',
                                                    'defaults' => array(
                                                        'controller' => 'Application\Flujoefectivo\Controller\Saldoproveedores',
                                                        'action' => 'abono',
                                                    ),
                                                ),
                                            ),
                                            'eliminar' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/eliminar[/:idm]',
                                                    'defaults' => array(
                                                        'controller' => 'Application\Flujoefectivo\Controller\Saldoproveedores',
                                                        'action' => 'eliminarmovimiento',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'validateref' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/validateref',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Saldoproveedores',
                                                'action' => 'validateref',
                                            ),
                                        ),
                                    ),
                                    'editarmovimiento' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editarmovimiento[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Saldoproveedores',
                                                'action' => 'editarmovimiento',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'reportes' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/reportes',
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'mensual' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/mensual',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Reportes',
                                                'action' => 'mensual',
                                            ),
                                        ),
                                        'may_terminate' => true,
                                        'child_routes' => array(
                                            'reporte' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/reporte',
                                                    'defaults' => array(
                                                        'controller' => 'Application\Flujoefectivo\Controller\Reportes',
                                                        'action' => 'reportem',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'anual' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/anual',
                                            'defaults' => array(
                                                'controller' => 'Application\Flujoefectivo\Controller\Reportes',
                                                'action' => 'anual',
                                            ),
                                        ),
                                        'may_terminate' => true,
                                        'child_routes' => array(
                                            'reporte' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/reporte',
                                                    'defaults' => array(
                                                        'controller' => 'Application\Flujoefectivo\Controller\Reportes',
                                                        'action' => 'reportea',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    /*
                     * REPORTES
                     */
                    'reportes' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/reportes',
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'variacioncostos' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/variacioncostos',
                                    'defaults' => array(
                                        'controller' => 'Application\Reportes\Controller\Reportes',
                                        'action' => 'variacioncostos',
                                    ),
                                ),
                                'may_terminate' => true,
                            ),
                            'formatoinventario' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/formatoinventario',
                                    'defaults' => array(
                                        'controller' => 'Application\Reportes\Controller\Reportes',
                                        'action' => 'formatoinventario',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'getrecientes' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getrecientes',
                                            'defaults' => array(
                                                'controller' => 'Application\Reportes\Controller\Reportes',
                                                'action' => 'getrecientes',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'entradasporcompras' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/entradasporcompras',
                                    'defaults' => array(
                                        'controller' => 'Application\Reportes\Controller\Reportes',
                                        'action' => 'entradasporcompras',
                                    ),
                                ),
                                'may_terminate' => true,
                            ),
                            'informeacumulados' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/informeacumulados',
                                    'defaults' => array(
                                        'controller' => 'Application\Reportes\Controller\Reportes',
                                        'action' => 'informeacumulados',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'getrecientes' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/getrecientes',
                                            'defaults' => array(
                                                'controller' => 'Application\Reportes\Controller\Reportes',
                                                'action' => 'getrecientes',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'kardex' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/kardex',
                                    'defaults' => array(
                                        'controller' => 'Application\Reportes\Controller\Cardex',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'almacen' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/almacen',
                                            'defaults' => array(
                                                'controller' => 'Application\Reportes\Controller\Cardex',
                                                'action' => 'almacen',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'recetas' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/recetas',
                                    'defaults' => array(
                                        'controller' => 'Application\Reportes\Controller\Reportes',
                                        'action' => 'recetas',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'resumen' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/resumen',
                                            'defaults' => array(
                                                'controller' => 'Application\Reportes\Controller\Reportes',
                                                'action' => 'recetasresumen',
                                            ),
                                        ),
                                    ),
                                    'detalle' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/detalle',
                                            'defaults' => array(
                                                'controller' => 'Application\Reportes\Controller\Reportes',
                                                'action' => 'recetasdetalle',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    /*
                     * ADMINISTRACION
                     */
                    'administracion' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/administracion',
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'reportes' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/reportes',
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'cierresinventarios' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/cierresinventarios',
                                            'defaults' => array(
                                                'controller' => 'Application\Administracion\Controller\Reportes\Cierresinventarios',
                                                'action' => 'index',
                                            ),
                                        ),
                                    ),
                                    'estadisticosmensuales' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/estadisticosmensuales',
                                            'defaults' => array(
                                                'controller' => 'Application\Administracion\Controller\Reportes\Estadisticosmensuales',
                                                'action' => 'index',
                                            ),
                                        ),
                                    ),
                                    'monitoreotablajeria' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/monitoreotablajeria',
                                            'defaults' => array(
                                                'controller' => 'Application\Administracion\Controller\Reportes\Monitoreotablajeria',
                                                'action' => 'index',
                                            ),
                                        ),
                                    ),
                                    'estadisticosanuales' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/estadisticosanuales',
                                            'defaults' => array(
                                                'controller' => 'Application\Administracion\Controller\Reportes\Estadisticosanuales',
                                                'action' => 'index',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'auditoria' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/auditoria',
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'cierresemana' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/cierresemana',
                                    'defaults' => array(
                                        'controller' => 'Application\Auditoria\Controller\Cierresinventarios',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'nuevo' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Auditoria\Controller\Cierresinventarios',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                    'editar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Auditoria\Controller\Cierresinventarios',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                    'eliminar' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Auditoria\Controller\Cierresinventarios',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                    'batch' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/batch[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Auditoria\Controller\Cierresinventarios',
                                                'action' => 'batch',
                                            ),
                                        ),
                                    ),
                                    'encargado' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/encargado[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Auditoria\Controller\Cierresinventarios',
                                                'action' => 'encargado',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'inventariociclico' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/inventariociclico',
                                    'defaults' => array(
                                        'controller' => 'Application\Auditoria\Controller\Inventariociclico',
                                        'action' => 'index',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'batch' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/batch[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Auditoria\Controller\Inventariociclico',
                                                'action' => 'batch',
                                            ),
                                        ),
                                    ),
                                    'encargado' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/encargado[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Auditoria\Controller\Inventariociclico',
                                                'action' => 'encargado',
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
                    'route' => 'aersa', //LOCAL
                    //'route' => 'aersamx.com', //PRODUCCION
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'index' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/',
                            'defaults' => array(
                                'controller' => 'Website\Controller\Website',
                                'action' => 'index',
                            ),
                        ),
                    ),
                    'nosotros' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/nosotros',
                            'defaults' => array(
                                'controller' => 'Website\Controller\Website',
                                'action' => 'nosotros',
                            ),
                        ),
                    ),
                    'diagnostico' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/diagnostico',
                            'defaults' => array(
                                'controller' => 'Website\Controller\Website',
                                'action' => 'diagnostico',
                            ),
                        ),
                    ),
                    'servicios' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/servicios',
                            'defaults' => array(
                                'controller'    => 'Website\Controller\Website',
                                'action'        => 'servicios',
                            ),
                        ),
                    ),
                    'contacto' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/contacto',
                            'defaults' => array(
                                'controller' => 'Website\Controller\Website',
                                'action' => 'contacto',
                            ),
                        ),
                    ),
                    'sendCotizacion' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/sendCotizacion',
                            'defaults' => array(
                                'controller' => 'Website\Controller\Website',
                                'action' => 'sendCotizacion',
                            ),
                        ),
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
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
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
            'Application\Catalogo\Controller\Usuario' => 'Application\Catalogo\Controller\UsuarioController',
            'Application\Catalogo\Controller\Proveedor' => 'Application\Catalogo\Controller\ProveedorController',
            'Application\Catalogo\Controller\Iva' => 'Application\Catalogo\Controller\IvaController',
            'Application\Catalogo\Controller\Categoria' => 'Application\Catalogo\Controller\CategoriaController',
            'Application\Catalogo\Controller\Empresa' => 'Application\Catalogo\Controller\EmpresaController',
            'Application\Catalogo\Controller\Almacen' => 'Application\Catalogo\Controller\AlmacenController',
            'Application\Catalogo\Controller\Sucursal' => 'Application\Catalogo\Controller\SucursalController',
            'Application\Catalogo\Controller\Producto' => 'Application\Catalogo\Controller\ProductoController',
            'Application\Catalogo\Controller\Altaproductos' => 'Application\Catalogo\Controller\AltaproductosController',
            'Application\Catalogo\Controller\Productosasociacion' => 'Application\Catalogo\Controller\ProductosasociacionController',
            'Application\Catalogo\Controller\Plantillatablajeria' => 'Application\Catalogo\Controller\PlantillatablajeriaController',
            'Application\Catalogo\Controller\Trabajadorespromedio' => 'Application\Catalogo\Controller\Trabajadorespromediocontroller',
            /*
             * PROCESO
             */
            'Application\Proceso\Controller\Compra' => 'Application\Proceso\Controller\CompraController',
            'Application\Proceso\Controller\Consignacion' => 'Application\Proceso\Controller\ConsignacionController',
            'Application\Proceso\Controller\Requisicion' => 'Application\Proceso\Controller\RequisicionController',
            'Application\Proceso\Controller\Devolucion' => 'Application\Proceso\Controller\DevolucionController',
            'Application\Proceso\Controller\Ingresos' => 'Application\Proceso\Controller\IngresosController',
            'Application\Proceso\Controller\Notacredito' => 'Application\Proceso\Controller\NotacreditoController',
            'Application\Proceso\Controller\Tablajeria' => 'Application\Proceso\Controller\TablajeriaController',
            'Application\Proceso\Controller\Venta' => 'Application\Proceso\Controller\VentaController',
            'Application\Proceso\Controller\Comentarios' => 'Application\Proceso\Controller\ComentariosController',
            'Application\Proceso\Controller\Ajustesinventarios' => 'Application\Proceso\Controller\AjustesinventariosController',
            /*
             * FLUJO EFECTIVO
             */
            'Application\Flujoefectivo\Controller\Cuentabancaria' => 'Application\Flujoefectivo\Controller\CuentabancariaController',
            'Application\Flujoefectivo\Controller\Saldoproveedores' => 'Application\Flujoefectivo\Controller\SaldoproveedoresController',
            'Application\Flujoefectivo\Controller\Cuentasporpagar' => 'Application\Flujoefectivo\Controller\CuentasporpagarController',
            'Application\Flujoefectivo\Controller\Cuentaporcobrar' => 'Application\Flujoefectivo\Controller\CuentaporcobrarController',
            'Application\Flujoefectivo\Controller\Ingresos' => 'Application\Flujoefectivo\Controller\IngresosController',
            'Application\Flujoefectivo\Controller\Reportes' => 'Application\Flujoefectivo\Controller\ReportesController',
            /*
             * REPORTES
             */
            'Application\Reportes\Controller\Reportes' => 'Application\Reportes\Controller\ReportesController',
            'Application\Reportes\Controller\Cardex' => 'Application\Reportes\Controller\CardexController',
            /*
             * ADMINISTRACION
             */
            'Application\Administracion\Controller\Reportes\Cierresinventarios' => 'Application\Administracion\Controller\Reportes\CierresinventariosController',
            'Application\Administracion\Controller\Reportes\Estadisticosmensuales' => 'Application\Administracion\Controller\Reportes\EstadisticosmensualesController',
            'Application\Administracion\Controller\Reportes\Monitoreotablajeria' => 'Application\Administracion\Controller\Reportes\MonitoreotablajeriaController',
            'Application\Administracion\Controller\Reportes\Estadisticosanuales' => 'Application\Administracion\Controller\Reportes\EstadisticosanualesController',
            /*
             * AUDITORIA
             */
            'Application\Auditoria\Controller\Cierresinventarios' => 'Application\Auditoria\Controller\CierresinventariosController',
            'Application\Auditoria\Controller\Inventariociclico' => 'Application\Auditoria\Controller\InventariociclicoController',
            /*
             * WEBSITE
             */
            'Website\Controller\Website' => 'Website\Controller\WebsiteController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/application/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/application/layout/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
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
