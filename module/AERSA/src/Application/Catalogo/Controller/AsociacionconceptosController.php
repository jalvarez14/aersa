<?php

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class AsociacionconceptosController extends AbstractActionController
{
    
    public $column_map = array(
         0 => 'ProductoNombre',
         1 => 'a.ProductocfdiNombre',
    );
    
    public function eliminarAction(){
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();

            \ProductocfdiQuery::create()->filterByIdproducto($post_data['idproducto'])->delete();
                    
            $this->flashMessenger()->addSuccessMessage('Asociación eliminado satisfactoriamente!');
            return $this->redirect()->toUrl('/catalogo/asociacionconceptos');

        }
        
    }
    
    public function asociarAction(){
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
           

            \ProductocfdiQuery::create()->filterByIdproducto($post_data['idproducto'])->delete();
            $producto_cfdi = new \Productocfdi();
            $producto_cfdi->setIdproducto($post_data['idproducto'])
                           ->setProductocfdiNombre($post_data['productocfdi_nombre'])
                           ->setIdempresa($session['idempresa'])
                           ->save();
                    
            $this->flashMessenger()->addSuccessMessage('Producto asociado satisfactoriamente!');
            return $this->redirect()->toUrl('/catalogo/asociacionconceptos');

        }
        
    }


    public function indexAction()
    {
      
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \ProductoQuery();
            
             //JOIN
            //$query->useProveedorescfdiQuery('a')->endUse();
            //$query->withColumn('a.ProveedorescfdiNombre', 'proveedorescfdi_nombre');

            
            //WHERE
            $query->filterByIdempresa($session['idempresa']);
            $records_filtered = $query->count();
            
            //SEARCH
            if(!empty($post_data['search']['value'])){
                $search_value = $post_data['search']['value'];
                $search_value = str_replace("Ñ", "Ã‘", $search_value);
                $search_value = str_replace("L'", "L'", $search_value);
                $search_value = str_replace("Ç", "Ã‡", $search_value);
                $search_value = str_replace("À", "Ã€", $search_value);
                $search_value = str_replace("È", "Ãˆ", $search_value);
                $search_value = str_replace("Û", "Ã›", $search_value);
                $search_value = str_replace("´", "Â´", $search_value);
                $search_value = str_replace("ñ", "Ã±", $search_value);
                $search_value = str_replace("Ú", "Ãš", $search_value);
                $search_value = str_replace("é", "Ã©", $search_value);
                $search_value = str_replace("Á", "Ã", $search_value);
                $search_value = str_replace("ó", "Ã³", $search_value);
                $search_value = str_replace("'", "'", $search_value);
                $search_value = str_replace("ú", "Ãº", $search_value);
                if ( strpos($search_value, 'Ð') !== false)
                {
                    $search_value = str_replace("Ð", "Ã", $search_value);
                }
                if ( strpos($search_value, 'Á') !== false )
                {
                    $search_value = str_replace("Á", "Ã", $search_value);
                }
                if ( strpos($search_value, 'Í') !== false )
                {
                    $search_value = str_replace("Í", "Ã", $search_value);
                }
                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('producto.producto_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                //$c2= $c->getNewCriterion('proveedorescfdi.proveedorescfdi_nombre', '%'.$search_value.'%', \Criteria::LIKE);
          


                $query->addAnd($c1);
                
                $records_filtered = $query->count();
                
            }
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER


            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->column_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
          

            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                
                $emisor = "N/D";
                $proveedor_cfdi = \ProductocfdiQuery::create()->filterByIdproducto($value['idproducto'])->exists();
                if($proveedor_cfdi){
                     $producto_cfdi = \ProductocfdiQuery::create()->filterByIdproducto($value['idproducto'])->findOne();
                     $emisor = $producto_cfdi->getProductocfdiNombre();
                }
                
                
                $tmp['DT_RowId'] = $value['idproducto'];
                $tmp['producto_nombre'] = $value['producto_nombre'];
                $tmp['productocfdi_nombre'] = $emisor;
                $tmp['options'] = '<td class="text-left"><div class="btn-group"><button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones <i class="fa fa-angle-down"></i></button><ul class="dropdown-menu" role="menu"><li><a href="javascript:;" class="asociar_modal"><i class="fa fa-exchange"></i> Asociar </a></li><li><a href="javascript:;" class="delete_modal"><i class="fa fa-trash"></i> Eliminar </a></li></ul></div></td>';

                
                $data[] = $tmp;
 
            }   
      
            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $records_filtered,
                "data"            => $data
            );
            

            
            return $this->getResponse()->setContent(json_encode($json_data));
           
            
            

        }

        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/asociacionconceptos/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
        ));
        return $view_model;

    }
    


}
