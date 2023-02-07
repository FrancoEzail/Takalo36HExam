<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function getUser()
        {
            $sql = "select * from Utilisateur";
            $query = $this->db->query($sql);
            $result = $query->result_array();
            return $result;
        }
        
        public function listeObjet()
        {   
            $sql = "select * from Objet";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function checkLogin($mail,$pass)
        {
            $listUser = $this->Model->getUser();
            $valiny = false;
            for($i=0;$i<count($listUser);$i++)
            {
                if($listUser[$i]['email'] == $mail && $listUser[$i]['mdp']== $pass)
            {
                $valiny = true;
            } 
            }
            return $valiny;
        }
    }
?>