<?php 
    class Destination_M extends CI_Model {

        public function GetDestinationAll(){
            $sql = "select *,(case when now() > b.last_register then 1 else 0 end) isExpired from destination a join destination_schedule b on a.destination_id = b.destination_id";
            $query = $this->db->query($sql);

            return $query;
        }

        public function GetDestinationInvoice($id){
            $sql = "select * from destination a join destination_schedule b on a.destination_id = b.destination_id
                    where destination_schedule_id = ?";
            $query = $this->db->query($sql, array($id));
            $row = $query->row(0);
            return $row;
        }

        public function CheckCode($code){
            $sql = "select count(*) jumlah from customer_destination
                    where booking_code = ? ";
            $query = $this->db->query($sql, array($code));
            $row = $query->row(0);
            return $row;
        }

        public function Transaction($cust_id,$des_id,$size,$book_code){
            $sql = "select * from transactionTrip(?,?,?,?)";
            $query = $this->db->query($sql, array((int)$cust_id,(int)$des_id,(int)$size,$book_code));
            $row = $query->row(0);
            return $row;
        }

    }
?>