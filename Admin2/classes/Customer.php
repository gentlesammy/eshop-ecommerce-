<?php
    class Customer extends Db{

    //view all customers
    public function allCustomers(){
        $sql = "SELECT * FROM user_detail WHERE user_deleted = 0";
        $stmt =$this->connection()->prepare($sql); 
        $stmt->execute();
        $customers = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $customers;
    }

    // view specific customer
    public function userDetail($id){
        $sql = "SELECT * FROM user_detail WHERE user_id = :id";
        $stmt =$this->connection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $detail = $stmt->fetch(PDO::FETCH_OBJ);
        return $detail; 
    }

    // suspend user

    public function suspend($id){
        $sql = "update user_detail set user_suspended = 1 where user_id = :id";
        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $updatedsr = $stmt->execute();
        if($updatedsr){
            $result =[
                'code' => 201,
                "msg"   => "Salesrep deleted"
            ];
        }else{
            $result =[
                'code' => 402,
                "msg"   => "unable to delete Salesrep"
            ];
        }
        
        return $result; 

    }

    //Delete User
    public function delete($id){
        $sql = "update user_detail set user_deleted = 1 where user_id = :id";
        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $updatedsr = $stmt->execute();
        if($updatedsr){
            $result =[
                'code' => 201,
                "msg"   => "Salesrep deleted"
            ];
        }else{
            $result =[
                'code' => 402,
                "msg"   => "unable to delete Salesrep"
            ];
        }
        
        return $result; 
    }

    //rank user














    }//end of the class 
?>