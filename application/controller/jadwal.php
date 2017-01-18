<?php 

	class Jadwal extends Controller{

		public function index(){
			session_start();

			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				require APP . 'view/header_view.php';
	        	require APP . 'view/jadwal_perkuliahan_view.php';
	        	require APP . 'view/footer_view.php';
			}
		}

		
		public function showJadwal(){

		}

		public function removeJadwal($id_jadwal){
			session_start();
			if(isset($id_jadwal)){
				$this->jadwalmodel->deleteJadwal($id_jadwal);
			}else{
				header('Location:'.URL.'jadwal/');
			}
		}

		public function addJadwal(){
			session_start();
			if(isset($_POST['btn_addjadwal'])){
				$this->jadwalmodel->insertJadwal($_POST['kode_mk'],$_POST['kode_dosen'],$_POST['kode_ruang'],$_POST['kode_kelas'],$_POST['hari'],$_POST['jam_mulai'],$_POST['jam_selesai']);
			}
			// print_r($_POST);
			header('Location:'.URL.'jadwal/');
		}

		// REST API AJAX Request
		public function showMataKuliah(){
			$listMataKuliah = $this->matakuliahmodel->selectMataKuliah();
			echo json_encode($listMataKuliah);
		}

		public function showDosen(){
			$listDosen = $this->dosenmodel->selectDosen();
			echo json_encode($listDosen);
		}

		public function showKelas(){
			$lk = $this->kelasmodel->selectDataKelas();
			echo json_encode($lk);
		}

		public function showRuang(){
			$lr = $this->ruangmodel->selectRuang();
			echo json_encode($lr);
		}

		public function showLookUpJadwal(){
			$lj = $this->jadwalmodel->selectJadwal();
			echo json_encode($lj);
		}



	}