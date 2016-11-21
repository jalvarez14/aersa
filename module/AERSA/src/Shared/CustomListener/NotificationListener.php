<?php

namespace Shared\CustomListener;

use Zend\Mvc\Router\RouteMatch;

use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;

use Zend\Code\Reflection\ClassReflection;
use Shared\Session\AouthSession;
use Shared\Session\ClientSession;

class NotificationListener implements ListenerAggregateInterface {
    
    protected $listeners = array();
    
    /*
     * Enlace con el listener de la aplicacion con la accion principal de onDispatch y maxima prioridad 1000
     */
    public function attach(EventManagerInterface $events, $priority = 950){
        $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, array($this, 'onDispatch'), $priority);
    }
    
    /*
     * Elimina todos los eventos para que se use el onDispatch
     */
    public function detach(EventManagerInterface $events)
    {
        foreach($this->listeners as $index => $listener){
            if($events->detach($listener)){
                unset($this->listeners[$index]);
            }
        }
    }
    
    /*
     * Verifica si existe una sesión con datos:
     *  Si no existe redirige al login
     *  Si existe permite ingresar
     * 
     * Excluye las rutas publicas de la verificación
     */
    public function onDispatch (MvcEvent $e)
    {
       
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        //SI TIENE SESION ACTIVA
        if(!is_null($session['idusuario'])){
    
            
        }
        
        

    }

}