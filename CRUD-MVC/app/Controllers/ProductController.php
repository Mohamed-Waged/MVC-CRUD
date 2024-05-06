<?php
class ProductController{
    
    public function index(){
        $db = new Product();
        $data['products'] = $db->getAllProducts();
        View::load("product/index",$data);
    }

    public function add(){
        View::load("product/add");
    }

    public function store(){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];

            $data = Array ( "name" => $name ,
                            "description" => $description ,
                            "price" => $price ,
                            "qty" => $qty 
                            );

            $db = new Product();
            if ($db->insertProduct($data)) {
                View::load("product/add",["success" => "Data Created Successfully"]);
            }
        }else{
            View::load("product/add");
        }
    }

    public function delete($id){
        $db = new Product();
        if ($db->getProduct($id)) {
            if ($db->deleteProduct($id)) {
                View::load("product/delete",["success" => "Data Deleted Successfully"]);
            }
        }else{
            View::load("error",["error" => "This Product ID Not Found"]);
        }
    }

    public function edit($id){
        $db = new Product();
        if ($db->getProduct($id)) {
            $data['product'] = $db->getProduct($id);
            View::load("product/edit",$data);
        }else{
            // $data['products'] = $db->getAllProducts();
            // View::load("product/index",$data);
            View::load("error",["error" => "This Product ID Not Found"]);
        }
    }   


    public function update($id){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];

            $updatedData = Array ( "name" => $name ,
                            "description" => $description ,
                            "price" => $price ,
                            "qty" => $qty 
                            );

            $db = new Product();
            if ($db->updateProduct($id,$updatedData)) {
                View::load("product/edit",["success" => "Product Updated Successfully"]);
            }
        }
    }

}