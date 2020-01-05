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

        public function GetDestination(){
            $sql = "select * from destination";
            $query = $this->db->query($sql);

            return $query;
        }

        public function GetDestinationSchedule($id){
            $sql = "select * from destination_schedule where destination_id = ?";
            $query = $this->db->query($sql,array($id));

            return $query;
        }

        public function AddDestination($destination_id,$time_start,$time_end,$slot,$last_register,$price){
            $data = array(
                    'destination_id' => $destination_id, 
                    'time_start' => "to_date('".$time_start."','MM/DD/YYYY')", 
                    'time_end' => "to_date('".$time_end."','MM/DD/YYYY')",
                    'slot' => $slot, 
                    'remaining' => $slot, 
                    'last_register' => "to_date('".$last_register."','MM/DD/YYYY')", 
                    'is_close' => 'N', 
                    'price' => $price
            );
            $this->db->insert('destination_schedule', $data);
        }
    }
?>