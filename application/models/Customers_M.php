<?php 
    class Customers_M extends CI_Model {

        public function GetDataCustomersDetails($id){
            $sql = "select b.customer_id, a.full_name, b.customer_address,(case when b.customer_gender = 'L' then 'Laki-laki' else 'Perempuan' end) customer_gender,customer_identity,customer_phone
            from users a inner join customers b on a.user_id = b.user_id";
            $query = $this->db->query($sql);
            $row = $query->row(0);
            return $row;
        }

    }
?>