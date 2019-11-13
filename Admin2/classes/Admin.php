<?php

class Admin extends Db{
    use namecheck;


    //user exist
    public function userExist($email){
        $sql="SELECT * FROM admin WHERE admin_email = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$email]);
        $checkrow = $stmt->rowCount();
        if ($checkrow === 1){
            // email exist, grab the details of the account for use.
              while ($row = $stmt->fetch()){
              $result= $row;
            }
              return $result;
          }else{
              return false;
          }
    }

    //login
    public function login($email, $password){
        if (!$this->userExist($email)){
            $result = [
                        'code' => 401,
                        'msg'  => 'Invalid login details'
            ];
      }else{
          //username exist
          //store details into variable for the user
          $details = $this->userExist($email); 
          //checkpassword
          if($password != $details['admin_pass']){
              //password not correct
              $result = [
                'code' => 401,
                'msg'  => 'Invalid login details'
            ];

          }else{
              //password correct
              //check if active
              if($details['admin_active'] === 0){
                  //admin not active
                  $result = [
                    'code' => 402,
                    'msg'  => 'You are currently not active on this platform'
                    ];

              }else{
                //you are currently logged in 
                //set session 
                    $_SESSION['admin_logged']           = true;
                    $_SESSION['admin']                   = array();
                    $_SESSION['admin'][]                  = $details['admin_id'];
                    $_SESSION['admin'][]                  = $details['admin_fullname'];
                    $_SESSION['admin'][]                  = $details['admin_email'];
                    $_SESSION['admin'][]                  = $details['admin_rank'];

                    
                $result = [
                    'code' => 200,
                    'msg'  => 'You are logged in'
                ];


              }     
          }
      }
      return $result;
    }


    //logout

    public static function logOut(){
        session_destroy();
        header('location:../../index.php');
        exit();
    }









    
}