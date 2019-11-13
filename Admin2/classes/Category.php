<?php

class Category extends Db{
    use Routeguard; 
    public function construct(){
        $this->adminOnly(); 
    }




    //method to fetch categories 
    public function fetchAllCategories(){
      $sql = "SELECT * FROM category";
      $stmt =$this->connection()->prepare($sql); 
      $stmt->execute();
      $catlist = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $catlist;
    }

    //method to create category
    public function create($name, $description){
        if($this->categoryExist($name)){
            $result = [

                        'code'  => 400,
                        'msg'   => 'categoryname exist'
            ];
        }else{
            $sql = "INSERT INTO `category` (`cat_name`, `cat_description`) VALUES (?, ?)";
            $stmt =$this->connection()->prepare($sql);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $description);
            $addCatgory = $stmt->execute();
            if($addCatgory){
                $result =[
                    'code' => 201,
                    "msg"   => "category added successfully"
                ];
            }
            else{
                $result =[
                    'code' => 401,
                    "msg"   => "category not added"
                ];
            }
        }
        return $result;
    }


    //method edit category
    public function edit($id, $name, $description){
        if($this->categoryExist($name)){
            $result = [

                        'code'  => 400,
                        'msg'   => 'categoryname exist'
            ];
        }
        else{
        $sql = "UPDATE category set cat_name =:name, cat_description = :description where cat_id = :id";
        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $id);
        $updatedcat = $stmt->execute();
        if($updatedcat){
            $result =[
                'code' => 201,
                "msg"   => "category updated successfully"
            ];
        }else{
            $result =[
                'code' => 402,
                "msg"   => "Unable to update category"
            ];
        }
    }
        return $result; 
    }

    //method to update category status
    public function categoryStatusUpdate($currentstatus, $id){
        if($currentstatus == 0){
            $sql = "update category set cat_active = 1 where cat_id = :id";
        }else{
            $sql = "update category set cat_active = 0 where cat_id = :id";
        }
        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $updatedcat = $stmt->execute();
        if($updatedcat){
            $result =[
                'code' => 201,
                "msg"   => "category updated successfully"
            ];
        }else{
            $result =[
                'code' => 402,
                "msg"   => "Unable to update category"
            ];
        }
        
        return $result; 
    }//

    //check if category exist before
    public function categoryExist($catname){
        $sql ="select cat_id from category where cat_name = :catname";
        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam(':catname', $catname);
        $stmt->execute();
        $no=$stmt->rowCount();
        if($no>0){
            return true;
        }else{
            return false;
        }

    }






}//end of class