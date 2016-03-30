<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            /*
             * HOME
             */
            'application' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route'    => 'admin.aersa',
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
                            'route'    => '/login',
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
                        ),
                    ),
                ),
            ),
            'website' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route'    => 'aersa',
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
            'Application\Catalogo\Controller\Usuario' => 'Application\Catalogo\Controller\UsuarioController',
            'Application\Catalogo\Controller\Proveedor' => 'Application\Catalogo\Controller\ProveedorController',
            
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
