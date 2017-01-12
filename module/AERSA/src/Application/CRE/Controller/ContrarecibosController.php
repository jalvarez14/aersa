<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\CRE\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ContrarecibosController extends AbstractActionController
{
    
    public function dropzoneAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_files = $request->getFiles();
            $target_dir = $_SERVER['DOCUMENT_ROOT']."/application/tmp";

            
            $cfdi_array = array();
            $total = 0;
            foreach ($post_files['file'] as $file){
                
                $target_file = "/application/tmp/".str_replace(" ","",explode(".",microtime())[1]);
                
                $file_name = $file['name']; $file_name = explode('.', $file_name); $file_name = $file_name[0];
                
                if(!isset($cfdi_array[$file_name])){
                    $cfdi_array[$file_name] = array(
                        'folio' => NULL,
                        'xml' => NULL,
                        'pdf' => NULL,
                        'total' => NULL,
                    );
                }

                if($file['type'] == 'application/pdf' &&  move_uploaded_file($file["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$target_file.".pdf")){
                    $cfdi_array[$file_name]['pdf'] = $target_file.'.pdf';
                }elseif($file['type'] == 'text/xml' &&  move_uploaded_file($file["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$target_file.".xml")){
                    
                    $cfdi_array[$file_name]['xml'] = $target_file.'.xml';
                    
                    $xml = file_get_contents($_SERVER['DOCUMENT_ROOT'].$target_file.".xml");
                    $reader = new \CFDIReader\CFDIReader($xml);
                    $cfdi = $reader->comprobante();
                    
                    $total+=floatval($cfdi['total']);
                    $cfdi_array[$file_name]['total'] = floatval($cfdi['total']);
                    $cfdi_array[$file_name]['folio'] = floatval($cfdi['folio']);
                   
                }
                
            }
            
            $cfdi_array_copy = array();
            $count = 1;
            foreach ($cfdi_array as $key => $value){
                $cfdi_array_copy[$count] = $value;
                $count++;
            }
            
            return $this->getResponse()->setContent(json_encode(array('info' => array('total' => $total),'data' => $cfdi_array_copy)));

        }
    }
    
    public function indexAction()
    {
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/cre/contrarecibos/index');
        return $view_model;
        
        
        

    }
    
    public function nuevoAction()
    {

      

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        

        $view_model = new ViewModel();
        $view_model->setTemplate('application/cre/contrarecibos/nuevo');
        return $view_model;
        
        
        

    }


}
