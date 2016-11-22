<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ComentariosController extends AbstractActionController {
    
    
    public function getAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $request = $this->getRequest();
        
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $table = ucfirst($post_data['table']).'Query';
            $query = new $table();
            $query = $query->orderBy($post_data['table'].'_fecha',  \Criteria::DESC)->joinUsuario()->withColumn('usuario_nombre')->filterBy(ucfirst($post_data['filter_by']), $post_data['id'])->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
            
            $comentarios_array = array();
            foreach ($query as $nota){
                $fecha = new \DateTime($nota[$post_data['table'].'_fecha']);
                $tmp['id'] = $nota['id'.$post_data['table']];
                $tmp['idusuario'] = $nota['idusuario'];
                $tmp['usuario'] = $nota['usuario_nombre'];
                $tmp['fecha'] = $fecha->format('d/m/Y h:i A' );
                $tmp['nota'] = $nota[$post_data['table'].'_nota'];
                $comentarios_array[] = $tmp;
                
            }

            return $this->getResponse()->setContent(json_encode(array('response' => true,'data' => $comentarios_array,'usuario_session' => $session['idusuario'])));
            
            
            
            
        }
        
    }
    
    public function editAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $table = ucfirst($post_data['table']).'Query';
            $query = new $table();
            $entity = $query->findPk($post_data['id']);

            $entity->setByName($post_data['table'].'_nota', $post_data['nota'], \BasePeer::TYPE_FIELDNAME);
            $entity->save();
            return $this->getResponse()->setContent(json_encode(array('response' => true)));
        }
    }
    public function deleteAction(){
        
        $request = $this->getRequest();
         if($request->isPost()){
             $post_data = $request->getPost();
             
             $table = ucfirst($post_data['table']).'Query';
             $query = new $table();
             $entity = $query->findPk($post_data['id']);
             $entity->delete();
             
             return $this->getResponse()->setContent(json_encode(array('response' => true)));
            
             
         }
    }
    public function createAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        
        if($request->isPost()){
            $post_data = $request->getPost();
           
            
             $table = ucfirst($post_data['table']);
             $class = new $table();
             
             $class->setByName($post_data['parent'], $post_data['id'], \BasePeer::TYPE_FIELDNAME);
             $class->setIdusuario($session['idusuario']);
             $class->setByName($post_data['table'].'_fecha', new \DateTime(), \BasePeer::TYPE_FIELDNAME);
             $class->setByName($post_data['table'].'_nota', $post_data['nota'], \BasePeer::TYPE_FIELDNAME);
            

             $class->save();

             $nota['id'] = $class->getByName('id'.$post_data['table'],  \BasePeer::TYPE_FIELDNAME);
             $nota['idusuario'] = $class->getByName('idusuario',  \BasePeer::TYPE_FIELDNAME);
             $nota['usuario'] = $class->getUsuario()->getUsuarioNombre();
             $fecha = new \DateTime($class->getByName($post_data['table'].'_fecha', \BasePeer::TYPE_FIELDNAME));
             $nota['fecha'] = $fecha->format('d/m/Y h:i A' );
             $nota['nota'] = $class->getByName($post_data['table'].'_nota',  \BasePeer::TYPE_FIELDNAME);
            
             return $this->getResponse()->setContent(json_encode(array('response' => true,'data' => $nota)));

        }
    }
    
}
