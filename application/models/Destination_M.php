<?php 
    class Destination_M extends CI_Model {

        public function GetDestinationAll(){
            $sql = "select * from destination a join destination_schedule b on a.destination_id = b.destination_id";
            $query = $this->db->query($sql);

            return $query;
        }

    }
?>