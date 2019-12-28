<?php 
    class Menu_M extends CI_Model {

        public function GetMenu($roleid){
            $sql = "select b.menu_id,b.menu_name,b.urls from MAPPING_MENU a inner join MENU b on a.menu_id = b.menu_id where a.user_role_id = ? ";
            $query = $this->db->query($sql, array($roleid));

            return $query;

        }

        public function GetMenuMaster(){
            $sql = "select menu_id,menu_name,urls from MENU";
            $query = $this->db->query($sql);

            return $query;
        }

        public function AddMenu($name,$urls){
            $data = array('menu_name' => $name, 'urls' => $urls);
            $this->db->insert('menu', $data);
        }

        public function GetMenuById($id){
            $sql = "select menu_id,menu_name,urls from MENU where menu_id = ? ";
            $query = $this->db->query($sql, array($id));
            $row = $query->row(0);
            return $row;

        }
        
        public function getRoleDetail($id){
            $sql = "select mapping_menu_id,menu_id,user_role_id from MAPPING_MENU where menu_id = ? ";
            $query = $this->db->query($sql, array($id));
            return $query;

        }
        public function EditMenu($id,$name,$urls){
            $data = array(
                    'menu_name' => $name,
                    'urls' => $urls
            );
            
            $this->db->where('menu_id', $id);
            $this->db->update('menu', $data);
        }
    }
?>