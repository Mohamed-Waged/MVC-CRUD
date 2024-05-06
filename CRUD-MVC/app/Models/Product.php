<?php




class Product extends DB
{
    private $table = "products";
    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    // Return All Product
    public function getAllProducts(){
        return $this->conn->get($this->table);
    }

    // Insert Product
    public function insertProduct($data){
        return $this->conn->insert($this->table, $data);
    }

    // Delete Product Where id = $id
    public function deleteProduct($id){
        $db = $this->conn->where('id', $id);
        return $db->delete($this->table);
    }

    // Get One Product Where id = $id
    public function getProduct($id){
        $db = $this->conn->where('id', $id);
        return $db->getOne($this->table);
    }

    // Update Product Where id = $id
    public function updateProduct($id, $data){
        $db = $this->conn->where('id', $id);
        return $db->update($this->table, $data);
    }
}
