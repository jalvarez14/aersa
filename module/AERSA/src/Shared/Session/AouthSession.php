<?php 

namespace Shared\Session;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;


class AouthSession extends AbstractActionController {

    /**
     * 
     * @param array $session
     * @param type $expirationTime
     */
    public function Create( array $session=null) {
        
            
            $session["idusuario"] = array_key_exists( "idusuario", $session ) ? $session["idusuario"] : null;
            $session["idrol"] = array_key_exists( "idrol", $session ) ? $session["idrol"] : null;
            $session["usuario_nombre"] = array_key_exists( "usuario_nombre", $session ) ? $session["usuario_nombre"] : null;
            $session["usuario_username"] = array_key_exists( "usuario_username", $session ) ? $session["usuario_username"] : null;
            $session["idempresa"] = array_key_exists( "idempresa", $session ) ? $session["idempresa"] : null;
            $session["idsucursal"] = array_key_exists( "idsucursal", $session ) ? $session["idsucursal"] : null;
            

            $session_data = new Container('session_data');
            $session_data->idusuario        = $session["idusuario"];
            $session_data->idrol            = $session["idrol"];
            $session_data->usuario_nombre   = $session["usuario_nombre"];
            $session_data->usuario_username = $session["usuario_username"];
            $session_data->idempresa        = $session["idempresa"];
            $session_data->idsucursal       = $session["idsucursal"];
            $session_data->notifications    = array();
    }
    
    /**
     * 
     * @return boolean
     */
    public function Close() {
        
        $session_data = new Container('session_data');
        $session_data->idusuario            = null;
        $session_data->idrol                = null;
        $session_data->usuario_nombre       = null;
        $session_data->usuario_username     = null;
        $session_data->idempresa            = null;
        $session_data->idsucursal           = null;
         $session_data->notifications           = null;

        $session_data->getManager()->getStorage()->clear('session_data');
        
        return true;  
    }
    
    /**
     * 
     * @return boolean
     */
    public function isActive() {    
        $session_data = new Container('session_data');
        if( $session_data->idusuario != null){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 
     * @return array
     */
    public function getData() {
        
        $session_data = new Container('session_data');
        
        return array(
            "idusuario"                 => $session_data->idusuario,
            "idrol"                     => $session_data->idrol,
            "usuario_nombre"            => $session_data->usuario_nombre,
            "usuario_username"          => $session_data->usuario_username,
            "idempresa"                 => $session_data->idempresa,
            "idsucursal"                => $session_data->idsucursal,
            "notifications"             => $session_data->notifications,

        );
    }
    
    public function setEmpresaAndSucursal($idempresa,$idsucrusal){
        
        $session_data = new Container('session_data');
        
        $session_data->idempresa        = $idempresa;
        $session_data->idsucursal       = $idsucrusal;

    }
    
    public function setEmpresa($idempresa){
        
        $session_data = new Container('session_data');
        
        $session_data->idempresa        = $idempresa;


    }
    
    public function setNotifications($notifications){
       

        $session_data = new Container('session_data');
        $session_data->notifications = array();
        $session_data->notifications = $notifications;
        
        
    }

}

?>