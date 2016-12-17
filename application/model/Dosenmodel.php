<?php 

	class Dosenmodel extends Model{
		public function select()
	    {
	        $sql = "SELECT * FROM dosen";
	        $query = $this->db->prepare($sql);
	        $query->execute();
	        return $query->fetchAll();
	    }
	}