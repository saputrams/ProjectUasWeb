<?php 
    class Customers_M extends CI_Model {

        public function GetDataCustomersDetails($id){
            $sql = "select b.customer_id, a.full_name, b.customer_address,(case when b.customer_gender = 'L' then 'Laki-laki' else 'Perempuan' end) customer_gender,customer_identity,customer_phone
            from users a inner join customers b on a.user_id = b.user_id where a.user_id = ?";
            $query = $this->db->query($sql, array($id));
            $row = $query->row(0);
            return $row;
        }

        public function GetDataCustomersEdit($id){
            $sql = "select b.customer_id, a.full_name, b.customer_address,b.customer_gender,customer_identity,customer_phone
            from users a inner join customers b on a.user_id = b.user_id where a.user_id = ?";
            $query = $this->db->query($sql, array($id));
            $row = $query->row(0);
            return $row;
        }

        public function Edit($id,$address,$gender,$phone){
            $data = array(
                    'customer_gender' => $gender,
                    'customer_address' => $address,
                    'customer_phone' => $phone
            );
            
            $this->db->where('customer_id', $id);
            $this->db->update('customers', $data);
        }

        public function GetListCustomer(){
            $sql = "select customer_identity,full_name,email,customer_address,(case when customer_gender = 'L' then 'Laki-laki' else 'Perempuan' end)customer_gender,customer_phone
            from users a inner join customers b on a.user_id = b.user_id";
            $query = $this->db->query($sql);
            return $query;
        }

    }
?>