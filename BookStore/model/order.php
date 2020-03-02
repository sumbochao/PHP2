<?php
    include_once ('database.php');
    class ORDER extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function newAllOrder()
        {
            $this->SetQuery("SELECT * FROM `customer` WHERE status=0 order by id DESC");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        

        function getAllOrder()
        {
            $this->SetQuery("SELECT * FROM `customer` WHERE status!=0 order by id DESC");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function getAllOrderDetail($idCustomer)
        {
            $this->SetQuery("SELECT * FROM product,orderdetail Where product.id=orderdetail.product_id and customer_id=".$idCustomer);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function getCustomerById($idCustomer)
        {
            $this->SetQuery("SELECT * FROM customer Where id=".$idCustomer);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function updateOrder($id)
        {
            $this->SetQuery("UPDATE customer SET status = '1' WHERE id=".$id);
            $this->result=$this->ThucHienLenh();
            return $this->result;
        }

        
    }
?>