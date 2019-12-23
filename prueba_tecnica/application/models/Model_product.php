<?php

class Model_product extends CI_Model {

    function create($formArray){//el formArray lo obtengo en el controlador
        $this->db->insert('producto', $formArray); //insert into
    }

    function all(){
        return $user=$this->db->get('producto')->result_array(); //select * from producto
    }

    // esta funcion me sirve para obtener el id para editarlo
    function getUser($productId){
    $this->db->where('id_producto', $productId);
    return $product = $this->db->get('producto')->row_array();//select * from producto where id_producto=?
    }

    function updateUser($productId, $formArray){
        $this->db->where('id_producto', $productId);
        $this->db->update('producto', $formArray); //update producto SET name=?, email=? where user_id=?
    }

    function deleteProduct($productId){
        $this->db->where('id_producto', $productId);
        $this->db->delete('producto');//delete from user where user_id=?
    }
}

?>