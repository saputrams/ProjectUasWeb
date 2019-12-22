<?php 
    class Login_M extends CI_Model {

        public function CheckLogin($user,$password){
            $sql = "SELECT * FROM loginauth(?,?)";
            $query = $this->db->query($sql, array($user, $password));

            $row = $query->row(0);

            return $row;

        }
    }
?>