<?php

    class Salesrep extends Db{
        
    //add a new sales rep
    public function create($fname, $email, $psw, $phone){
        if($this->salesRepExist($email)){
            $result = [

                'code'  => 400,
                'msg'   => 'An account for this salerep exist'
                     ];
        }else{
            if($this->maxSalesrepreached()){
                $result = [

                    'code'  => 400,
                    'msg'   => 'You can only add four salesrep. Upgrade your account to add more'
                 ];
            }else{
                $sql = "INSERT INTO salesrep(sr_fullname, sr_email, sr_Password, sr_phone)
                VALUES(:fname, :email, :psw, :phone)"; 
                $stmt = $this->connection()->prepare($sql); 
                $stmt->bindParam(':fname', $fname);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':psw', $psw);
                $stmt->bindParam(':phone', $phone);
                $salesrepadded = $stmt->execute();
                if($salesrepadded){
                    $result =[
                        'code' => 201,
                        "msg"   => "salesrep added successfully"
                    ];
                }else{
                    $result =[
                        'code' => 401,
                        "msg"   => "salerep not added"
                    ];
                }
            }
        }




        return $result;
    }


    //view salerep detail
    public function detail($srid){
        $sql = "SELECT * FROM salesrep WHERE sr_id = :srid";
        $stmt =$this->connection()->prepare($sql);
        $stmt->bindParam(':srid', $srid);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result; 
    }



    //view list of salesrep
    public function viewSalesRepList(){
        $sql = "SELECT * FROM salesrep WHERE sr_deleted = 0";
        $stmt = $this->connection()->query($sql);
        $salesreplist = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $salesreplist;
    }

    //block/unblock salesrep
        public function blocked($currentstatus, $srId){
            if($currentstatus == 0){
                $sql = "update salesrep set sr_blocked = 1 where sr_id = :srId";
            }else{
                $sql = "update salesrep set sr_blocked = 0 where sr_id = :srId";
            }
            $stmt = $this->connection()->prepare($sql);
            $stmt->bindParam(':srId', $srId);
            $updatedsr = $stmt->execute();
            if($updatedsr){
                $result =[
                    'code' => 201,
                    "msg"   => "Salesrep record updated successfully"
                ];
            }else{
                $result =[
                    'code' => 402,
                    "msg"   => "Unable to update Salesrep record"
                ];
            }
            
            return $result; 
        }


    //make active/inactive
    public function activeInactive($currentstatus, $srId){
        if($currentstatus == 0){
            $sql = "update salesrep set sr_active = 1 where sr_id = :srId";
        }else{
            $sql = "update salesrep set sr_active = 0 where sr_id = :srId";
        }
        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam(':srId', $srId);
        $updatedsr = $stmt->execute();
        if($updatedsr){
            $result =[
                'code' => 201,
                "msg"   => "Salesrep record updated successfully"
            ];
        }else{
            $result =[
                'code' => 402,
                "msg"   => "Unable to update Salesrep record"
            ];
        }
        
        return $result; 
    }



    //delete salesrep 
    public function delete($srId){
        $sql = "update salesrep set sr_deleted = 1 where sr_id = :srId";
        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam(':srId', $srId);
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
        

    /*
        constraint for adding salesrep into database
    */

    //check the number of salesrep in the db. only four sales rep allowed
    public function maxSalesrepreached(){
        $sql = "SELECT sr_id FROM salesrep WHERE sr_deleted = 0"; 
        $stmt = $this->connection()->prepare($sql); 
        $stmt->execute();
        $no=$stmt->rowCount();
        if($no>4){
            return true;
        }else{
            return false;
        }

    }
    //check if salesrep exist before using email
    public function salesRepExist($email){
        $sql ="select sr_id from salesrep where sr_email = :email";
        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $no=$stmt->rowCount();
        if($no>0){
            return true;
        }else{
            return false;
        }

    }






























    }//end of class. 



?>