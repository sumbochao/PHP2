<?php
    include_once('database.php');
    class ORDER extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllOrder()
        {
            $this->SetQuery("SELECT * FROM `customer` WHERE status=0");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function getAllOrderDetail($idCustomer)
        {
            $this->SetQuery("SELECT * FROM product,orderdetail Where product.id=orderdetail.product_id and customer_id=".$idCustomer);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        
    }
?>