<?php 
	
	/**
	* @author andi
	*
	*/

	class Mahasiswa extends Controller{
		

		public function index(){
			session_start();	
			$listMahasiswa = $this->mahasiswamodel->select();
			$listJurusan = $this->jurusanmodel->selectJurusan();
			$listKelas = $this->kelasmodel->selectDataKelas();
			$listTahunajaran = $this->tahunajaranmodel->selectTahunajaran();
			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				require APP . 'view/header_view.php';
		        require APP . 'view/mahasiswa_view.php';
	    	    require APP . 'view/footer_view.php';
			}
		}

		public function addMahasiswa(){
			session_start();

			if(isset($_POST['btn_addmahasiswa'])){

				$nim     		= $_POST['nim'];
				$id_user		= $_POST['nim'];
				$nama    		= $_POST['nama_lengkap'];
				$alamat  		= $_POST['alamat'];;
				$kota   	 	= $_POST['kota'];
				$kodepos 		= $_POST['kodepos'];
				$tempat_lahir	= $_POST['tempat_lahir'];
				$tanggal_lahir  = $_POST['tanggal_lahir'];
				$agama			= $_POST['agama'];
				$jenis_kelamin  = $_POST['jenis_kelamin'];
				$jurusan 		= $_POST['jurusan'];
				$kelas 			= $_POST['kode_kelas'];
				$tahun 			= $_POST['kode_tahun'];
				$jenis_kelas = $_POST['jenis_kelas'];
				// $foto = $dest_folder . $foto_name;
				$semester_aktif = $jenis_kelas[0];
				// echo "<pre>";
				// 	print_r($_POST);
				// 	echo $semester_aktif;
				// echo "</pre>";
				// die();
				
				# insert data mhs
				$this->mahasiswamodel->insertMahasiswa($nim,$id_user,$nama,$alamat,$kota,$kodepos,$tempat_lahir,$tanggal_lahir,$agama,$jenis_kelamin,$jurusan,$kelas,$tahun,$semester_aktif);
				$this->usermodel->insertUser($nim,$tanggal_lahir,2);
				
				header('location: ' . URL . 'mahasiswa/');

			}else{
				header('location: ' . URL . 'mahasiswa/');
			}
		}

		public function removeMahasiswa($nim){
			session_start();
			if(isset($nim)){
				$this->mahasiswamodel->deleteMahasiswa($nim);
				$this->usermodel->deleteUser($nim);
			}
			header('location: ' . URL . 'mahasiswa/');
		}

		public function editMahasiswa($nim){
			session_start();	
			
			if(isset($nim)){
				$mahasiswa = $this->mahasiswamodel->selectMahasiswaById($nim);
				$listJurusan = $this->jurusanmodel->selectJurusan();
				$listKelas = $this->kelasmodel->selectDataKelas();
				$listTahunajaran = $this->tahunajaranmodel->selectTahunajaran();
				if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
					header('Location:' . URL . 'login');
				}else{
					require APP . 'view/header_view.php';
			        require APP . 'view/mahasiswa_edit_view.php';
		    	    require APP . 'view/footer_view.php';
				}
			}else{
				header('location: ' . URL . 'mahasiswa/');
			}
		}

		public function suntingMahasiswa(){
			session_start();
			if(isset($_POST['btn_addmahasiswa'])){
				
				
				// $foto_tmp  = $_FILES['foto']['tmp_name'];
				// $foto_name = $_FILES['foto']['name'];

				// $dest_folder = URL;
				// if(is_uploaded_file($foto_tmp)){
				// 	move_uploaded_file($foto_tmp, $dest_folder);
				// } 

				$nim     		= $_POST['nim'];
				$id_user		= $_POST['nim'];
				$nama    		= $_POST['nama_lengkap'];
				$alamat  		= $_POST['alamat'];;
				$kota   	 	= $_POST['kota'];
				$kodepos 		= $_POST['kodepos'];
				$tempat_lahir	= $_POST['tempat_lahir'];
				$tanggal_lahir  = $_POST['tanggal_lahir'];
				$agama			= $_POST['agama'];
				$jenis_kelamin  = $_POST['jenis_kelamin'];
				$jurusan 		= $_POST['jurusan'];
				$kelas 			= $_POST['kode_kelas'];
				$tahun 			= $_POST['kode_tahun'];

				
				// $foto = $dest_folder . $foto_name;

				// echo "<pre>";
				// 	print_r($_POST);
				// echo "</pre>";
				// die();
				$this->mahasiswamodel->updateMahasiswa($nim,$id_user,$nama,$alamat,$kota,$kodepos,$tempat_lahir,$tanggal_lahir,$agama,$jenis_kelamin,$jurusan,$kelas,$tahun);
			}else{
				header('location: ' . URL . 'mahasiswa/');
			}
			header('location: ' . URL . 'mahasiswa/');
		}

		public function showMahasiswaDetail(){

			session_start();
			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				$mahasiswa = $this->mahasiswamodel->getMahasiswa($_SESSION['username']);
				require APP . 'view/mahasiswa/header_view_mahasiswa.php';
		        require APP . 'view/mahasiswa/profil_view.php';
	    	    require APP . 'view/footer_view.php';
			}
		}


		public function showMahasiswaInJadwal($id){
			if(isset($id)){
				$mhs = $this->mahasiswamodel->selectMahasiswaByKelas($id);
				echo json_encode($mhs);
			}
		}

		public function showJadwalByKelas(){
			
		}


	}

?>