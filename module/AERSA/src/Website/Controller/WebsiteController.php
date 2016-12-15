<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Website\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class WebsiteController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout('website/layout/layout');
        return new Viewmodel();
    }
    public function nosotrosAction()
    {
      $this->layout('website/layout/layout');
      return new Viewmodel();
    }
    public function diagnosticoAction()
    {
      $this->layout('website/layout/layout');
      $php = new \PHPMailer();
      return new Viewmodel();
    }
    public function contactoAction()
    {
      $this->layout('website/layout/layout');
      $php = new \PHPMailer();
      return new Viewmodel();
    }
    public function sendCotizacionAction()
    {
      $request = $this->getRequest();

      if ($request->isPost())
      {
          $post_data = $request->getPost();

          $mail = new \PHPMailer;
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'lopez.victor94@gmail.com';                 // SMTP username
          $mail->Password = '******************' ;                          // SMTP password;
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;
          $mail->setFrom('lopez.victor94@gmail.com', 'Mailer');
          $mail->addAddress('lopez.victor94@gmail.com', '');
          $mail->isHTML(true);
          $mail->Subject = 'Contacto';
          $mail->CharSet = 'UTF-8';

          $body = "";
          // return $this->getResponse()->setContent(json_encode($post_data['administracion']));
          $giro         = $post_data['giro'];
          $admin        = $post_data['administracion'];
          $almacen      = $post_data['almacen'];
          $almacenText  = $post_data['almacenText'];
          $sistemas     = $post_data['sistemas'];
          $finanzas     = $post_data['finanzas'];
          $finanzasText = $post_data['finanzasText'];
          $compras      = $post_data['compras'];
          $comprasText  = $post_data['comprasText'];

          $body    = $body.'<h2 style="color: #0E0959">Bloque administracion</h2>';
          $body    = $body.'<br>Giro de la empresa: <b>'.$giro.'</b>';
          for ($i=0; $i < count($admin) ; $i++)
            $body    = $body.'<br><br>'.$admin[$i];

          // Llenado de almacén
          $body    = $body.'<br><br><h2 style="color: #0E0959">Bloque almacén</h2>';
          for ($i=0; $i < count($almacen) ; $i++)
            $body    = $body.'<br><br>'.$almacen[$i];
          for ($i=0; $i < count($almacenText) ; $i++)
            $body    = $body.'<br><br>'.$almacenText[$i];
          // Llenado de almacén

          // Llenado de sistemas
          $body    = $body.'<br><br><h2 style="color: #0E0959">Bloque sistemas</h2>';
          for ($i=0; $i < count($sistemas) ; $i++)
            $body    = $body.'<br><br>'.$sistemas[$i];
          // Llenado de sistemas

          // Llenado de finanzas
          $body    = $body.'<br><br><h2 style="color: #0E0959">Bloque finanzas</h2>';
          for ($i=0; $i < count($finanzas) ; $i++)
            $body    = $body.'<br><br>'.$finanzas[$i];
          for ($i=0; $i < count($finanzasText) ; $i++)
            $body    = $body.'<br><br>'.$finanzasText[$i];
          // Llenado de finanzas

          // Llenado de compras
          $body    = $body.'<br><br><h2 style="color: #0E0959">Bloque compras</h2>';
          for ($i=0; $i < count($compras) ; $i++)
            $body    = $body.'<br><br>'.$compras[$i];
          for ($i=0; $i < count($comprasText) ; $i++)
            $body    = $body.'<br><br>'.$comprasText[$i];
          // Llenado de compras


          $mail->Body    = $body;
          if(!$mail->send()) {
              return $this->getResponse()->setContent(json_encode($mail->ErrorInfo));
          } else {
              return $this->getResponse()->setContent(json_encode('good'));
          }
      }
    }
    public function serviciosAction()
    {
        
        $this->layout('website/layout/layout');
        $tipo = $this->params()->fromRoute('tipo');
        $view_model = new ViewModel();
        if($tipo == 'servicios'){
             $view_model->setTemplate('website/servicios/servicios');
        }else{
            $view_model->setTemplate('website/servicios/productos');
        }
       
        return $view_model;
    }


}
