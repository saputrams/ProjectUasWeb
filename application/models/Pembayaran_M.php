<?php 
    class Pembayaran_M extends CI_Model {

        public function GetCustomerDestinationAll(){
            $sql = "select * from customer_destination";
            $query = $this->db->query($sql);

            return $query;
        }

    }
?>