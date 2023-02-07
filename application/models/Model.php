<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function find()
        {
            return array('nom'=>'Franco','Prenom'=>'ezail');
        }

        public function listeProduit()
        {   
            $_SESSION['franco'] = "bonjour";
            $sql = "select * from Marque";
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
            $valiny = false;
            if($mail == 'francoezail@gmail.com' && $pass == 'iverson')
            {
                $valiny = true;
            }
            return $valiny;
        }
    }
?>