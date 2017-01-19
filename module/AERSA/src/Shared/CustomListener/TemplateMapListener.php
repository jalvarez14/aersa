<?php 

namespace Shared\CustomListener;
 
use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\Code\Reflection\ClassReflection;

class TemplateMapListener implements ListenerAggregateInterface
{
   
    protected $listeners = array();
    public function attach(EventManagerInterface $events)
    {
       $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, array($this, 'onDispatch'),1000);
    }
   
    public function detach(EventManagerInterface $events)
    {
       foreach ($this->listeners as $index => $listener) {
        
           if ($events->detach($listener)) {
                unset($this->listeners[$index]);
            }
        } 
       
    }
    
    public function onDispatch(MvcEvent $e)
    {
        
        date_default_timezone_set('America/Mexico_City');
        
        $controller_params = $e->getRouteMatch()->getParams();
        

        $controller_of_route = $controller_params['controller'];
      
        $section = new classReflection($controller_of_route.'Controller');
       
        $section = $section ->getFileName();   
      
        $section = explode('/src/',  $section);
        
        $section = explode("/",$section[1]);
        
        $template_map=$e->getApplication()->getServiceManager()->get('viewtemplatemapresolver');
       
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
      
        switch ($section[0])
        {
            case 'Website':
            
            {
                $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/website/layout/layout.phtml',
                        'error/404'          => __DIR__.'/../../../view/website/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/website/layout/error/index.phtml',                                                        
                    ));
                break;
            }
            case 'Application':{
                
                //ADMINISTRADOR AERSA
                $notification_flag = false;
                if($session['idrol'] == 1 && is_null($session['idempresa']) && is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_1.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    break;
                
                //ADMINISTRADOR AERSA ENTRANDO COMO ADMINISTRADOR DE EMPRESA
                }elseif($session['idrol'] == 1 && !is_null($session['idempresa']) && is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_2.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    break;
                    
                //ADMINISTRADOR AERSA ENTRANDO COMO ADMINISTRADOR DE EMPRESA->SUCRUSAL 
                }elseif($session['idrol'] == 1 && !is_null($session['idempresa']) && !is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_3.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    
                   
                    $notification_flag = true;
                    break;
                    
                    
                }
                //AUDITOR AERSA
                elseif($session['idrol'] == 2 && !is_null($session['idempresa']) && is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_2.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    break;
                    
                    
                }elseif($session['idrol'] == 2 && !is_null($session['idempresa']) && !is_null($session['idsucursal'])){
                  
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_3.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    
                    $notification_flag = true;
                    break;
                    
                    
                }elseif($session['idrol'] == 3 && !is_null($session['idempresa']) && !is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_3.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    
                    $notification_flag = true;
                    break;
                    
                //ADMINISTRADOR DE EMPRESA
                }elseif($session['idrol'] == 3 && !is_null($session['idempresa']) && is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_2.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    
                    break;
                    
                    
                }elseif($session['idrol'] == 4 && !is_null($session['idempresa']) && !is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_4.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    
                    $notification_flag = true;
                    break;
                     
                }elseif($session['idrol'] == 4 && !is_null($session['idempresa']) && is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_2.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    break;
                     
                }elseif($session['idrol'] == 5 && !is_null($session['idempresa']) && !is_null($session['idsucursal'])){
                    
                    $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout_5.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                    
                    $notification_flag = true;
                    break;
                    
                    
                }else{
                
                    $template_map->merge(
                        array(
                            'layout/layout'      => __DIR__.'/../../../view/application/layout/layout404.phtml',
                            'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                            'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                        ));
                    
                    break;
                }
            }


        }   
        
        /*
         * NOTIFICACIONES
         */
        $notifications_url = array();
//        if($section[1] == 'Proceso'){
//            
//             $server = $_SERVER['REQUEST_URI'] ;
//             $server = explode("/", $server);
//             $proceso = $server[2];
//             if($server[3] == "editar"){
//                $idproceso = $server[4];
//                $notification_exist = \NotificacionQuery::create()->filterByNotificacionProceso($proceso)->filterByIdproceso($idproceso)->exists();
//                if($notification_exist){
//                    $notification = \NotificacionQuery::create()->filterByNotificacionProceso($proceso)->filterByIdproceso($idproceso)->findOne();
//                    if($session['idrol'] == 1){
//                        $notification->setRol1(1)->save();
//
//                    }elseif($session['idrol'] == 2){
//                         $notification->setRol2(1)->save();
//                    }elseif($session['idrol'] == 3){
//                         $notification->setRol3(1)->save();
//                    }elseif($session['idrol'] == 4){
//                         $notification->setRol4(1)->save();
//                    }elseif($session['idrol'] == 5){
//                         $notification->setRol5(1)->save();
//                    }
//                    
//                }
//         
//             }
//
//        }
        

        if(isset($notification_flag) && $notification_flag){
            
            //BUSCAMOS NOTIFICACIONES DE ACUERDO AL ROL
            if($session['idrol'] == 1){
                $notificaciones = \NotificacionQuery::create()->select(array('idnotificacion','notificacion_proceso','idproceso'))->filterByIdsucursal($session['idsucursal'])->filterByRol1(0)->find()->toArray(null,false, \BasePeer::TYPE_FIELDNAME);
                $session = new \Shared\Session\AouthSession();
                $session->setNotifications($notificaciones);

            }elseif($session['idrol'] == 2){
                $notificaciones = \NotificacionQuery::create()->select(array('idnotificacion','notificacion_proceso','idproceso'))->filterByIdsucursal($session['idsucursal'])->filterByRol2(0)->find()->toArray(null,false, \BasePeer::TYPE_FIELDNAME);
                $session = new \Shared\Session\AouthSession();
                $session->setNotifications($notificaciones);
                
            }elseif($session['idrol'] == 3){
                $notificaciones = \NotificacionQuery::create()->select(array('idnotificacion','notificacion_proceso','idproceso'))->filterByIdsucursal($session['idsucursal'])->filterByRol3(0)->find()->toArray(null,false, \BasePeer::TYPE_FIELDNAME);
                $session = new \Shared\Session\AouthSession();
                $session->setNotifications($notificaciones);
                
            }elseif($session['idrol'] == 4){
                $notificaciones = \NotificacionQuery::create()->select(array('idnotificacion','notificacion_proceso','idproceso'))->filterByIdsucursal($session['idsucursal'])->filterByRol4(0)->find()->toArray(null,false, \BasePeer::TYPE_FIELDNAME);
                $session = new \Shared\Session\AouthSession();
                $session->setNotifications($notificaciones);
                
            }elseif($session['idrol'] == 5){
                $notificaciones = \NotificacionQuery::create()->select(array('idnotificacion','notificacion_proceso','idproceso'))->filterByIdsucursal($session['idsucursal'])->filterByRol5(0)->find()->toArray(null,false, \BasePeer::TYPE_FIELDNAME);
                $session = new \Shared\Session\AouthSession();
                $session->setNotifications($notificaciones);
                
            }
            
        }
       

         
    }
      
}