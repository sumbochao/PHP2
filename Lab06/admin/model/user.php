<?php
 include('database.php');
 class USER extends DATABASE
 {
     function __construct()
     {
         parent::__construct();
     }

     function checkuser($email,$pass){
         $sql="SELECT * FROM admin WHERE email='$email' and password='$pass' ";
         $this->SetQuery($sql);
         $this->result=$this->ThucHienTruyVan();
         $rows_affected = $this->result->rowCount();
         if ($rows_affected == 0) {
            return false;
         }else{
             return true;
         }
     }
     
}
?>