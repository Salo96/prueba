<?php

class Controller_product extends CI_Controller {

    function index(){
        $this->load->model('Model_product');
        $product = $this->Model_product->all();//product me va contener todo la informacion del modelo de la funcion all (selecto * from)
        $data = array();//creo un array
        $data['product']=$product;//dentro [product] es una variable y afuera product estoy pasando informacion del modelo
        $this->load->view('list', $data);//lo paso en la vista pero la varible a utilizar es users

       
    }


    function create(){
           
        $this->load->model('Model_product');
        $this->form_validation->set_rules('producto', 'Producto', 'required|max_length[20]');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|max_length[100]');
        $this->form_validation->set_rules('cantidad', 'Cantidad', 'required|integer|max_length[10]');

        if($this->form_validation->run() == false){
             $this->load->view('crear_producto');
        }else{
            // guardar en la bd
            $formArray=array();
            $formArray['nombre_producto']=$this->input->post('producto');
            $formArray['descripcion']=$this->input->post('descripcion');
            $formArray['cantidad']=$this->input->post('cantidad');
    
            $this->Model_product->create($formArray);//envio el arreglo formArray al modelo
            $this->session->set_flashdata('success', 'se ha guardado correctamene');
            redirect(base_url().'index.php/Controller_product/index');
        } 
    }

    function edit($productId){
        $this->load->model('Model_product');
        $product = $this->Model_product->getUser($productId);//sirve va capturar el id desde el modelo
        $data=array();//creo un array
        $data['product']=$product;//paso la informacion de product (el id) a data para mostrar en la vista

        $this->form_validation->set_rules('producto', 'Producto', 'required|max_length[20]');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|max_length[100]');
        $this->form_validation->set_rules('cantidad', 'Cantidad', 'required|integer|max_length[10]');

        if($this->form_validation->run() == false){
            $this->load->view('edit', $data);
       }else{
            // actualizar producto
            $formArray=array();
            $formArray['nombre_producto']=$this->input->post('producto');
            $formArray['descripcion']=$this->input->post('descripcion');
            $formArray['cantidad']=$this->input->post('cantidad');
   
            $this->Model_product->updateUser($productId, $formArray);
            $this->session->set_flashdata('success', 'se ha actualizado correctamente');
            redirect(base_url().'index.php/controller_product/index');
        }
    }

    function delete($productId){
        $this->load->model('Model_product');
        $product = $this->Model_product->getUser($productId);
        if(empty($product)){
            $this->session->set_flashdata('error', 'NO se ha actualizado correctamente');
           redirect(base_url().'index.php/Controller_product/index');
        }else{
            $this->Model_product->deleteProduct($productId);
            $this->session->set_flashdata('success', 'se ha eliminado correctamente');
            redirect(base_url().'index.php/Controller_product/index');
        }
    }

}

?>