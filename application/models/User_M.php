<?php 
    class User_M extends CI_Model {

        public function GetRoleAll($id){
            $sql = "select a.user_role_id,a.role_name as rolename,b.menu_id from user_role a left join (select * from mapping_menu where menu_id = ?) b on a.user_role_id = b.user_role_id";
            $query = $this->db->query($sql,array($id));

            return $query;

        }

        public function SetRoleMenu($roleid,$menuid){
            $data = array('menu_id' => $menuid, 'user_role_id' => $roleid);
            $this->db->insert('mapping_menu', $data);
        }

        public function DeleteRoleMenu($roleid,$menuid){
            $data = array('menu_id' => $menuid, 'user_role_id' => $roleid);
            $this->db->delete('mapping_menu', $data);
        }

    }
?>