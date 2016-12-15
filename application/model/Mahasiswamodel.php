<?php 
/*
*
* @author andi
*/
	

	class Mahasiswamodel extends Model{

		public function select()
	    {
	        $sql = "SELECT * FROM mahasiswa";
	        $query = $this->db->prepare($sql);
	        $query->execute();
	        return $query->fetchAll();
	    }
	    
	    // public function insert(){
	    //     $sql = "INSERT INTO mahasiswa VALUES (:nim, :nama, :alamatJalan, :kota ,:kodepos,:tempatLahir,:tanggal_lahir,:agama,:jenisKelamin,:kodeProdi")";
	    //     $query = $this->db->prepare($sql);
	    //     $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link);

	    //     // useful for debugging: you can see the SQL behind above construction by using:
	    //     // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

	    //     $query->execute($parameters);
	    // }



	}

?>