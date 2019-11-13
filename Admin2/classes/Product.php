<?php

class Product extends Db{
    // fetch all products
    public function products(){
        $sql = "SELECT * FROM products";
        $stmt =$this->connection()->prepare($sql); 
        $stmt->execute();
        $prolist = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $prolist;
    }


    //add product
    public function add(  ){
        
    }


    //view product details 


    //edit product


    //product available/unavailable


    //product on cover page * check conditions 


    //product deleted 















}//end of class