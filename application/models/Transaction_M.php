<?php 
    class Transaction_M extends CI_Model {

        public function GetTransaction($id){
            $sql = "select a.destination_name, c.booking_code, c.booking_date, sum(price)price,count(*)count from destination a 
                    join destination_schedule b on a.destination_id = b.destination_id 
                    join customer_destination c on b.destination_schedule_id = c.destination_schedule_id
                    join customers d on c.customer_id = d.customer_id
                    where d.user_id = ?
                    group by a.destination_name, c.booking_code, c.booking_date
                    order by c.booking_date desc";
            $query = $this->db->query($sql,array($id));

            return $query;
        }

    }
?>