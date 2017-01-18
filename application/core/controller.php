<?php

class Controller
{
    
    protected $db = null;
    protected $model = null;

    function __construct()
    {
        $this->openDatabaseConnection();
        $this->loadModel();
    }

    
    private function openDatabaseConnection()
    {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }

    /**
     * Keterangan : Setelah buat model, langsung daftarin disini
     * @return object model
    */
    public function loadModel()
    {
        require APP . 'model/model.php';
        require APP . 'model/Mahasiswamodel.php';
        require APP . 'model/Ruangmodel.php';
        require APP . 'model/Levelmodel.php';
        require APP . 'model/Usermodel.php';
        require APP . 'model/Loginmodel.php';
        require APP . 'model/Jurusanmodel.php';
        require APP . 'model/Semestermodel.php';
        require APP . 'model/Dosenmodel.php';
        require APP . 'model/Matakuliahmodel.php';
        require APP . 'model/Tahunajaranmodel.php';
        require APP . 'model/Kelasmodel.php';
        require APP . 'model/Jadwalmodel.php';
        require APP . 'model/MataKuliahJurusanmodel.php';
        require APP . 'model/Absenmodel.php';
        require APP . 'model/Krsmodel.php';

        $this->model = new Model($this->db);
        $this->mahasiswamodel = new Mahasiswamodel($this->db);
        $this->ruangmodel = new Ruangmodel($this->db);
        $this->levelmodel = new Levelmodel($this->db);
        $this->usermodel = new Usermodel($this->db);
        $this->loginmodel = new Loginmodel($this->db);
        $this->jurusanmodel = new Jurusanmodel($this->db);
        $this->semestermodel = new Semestermodel($this->db);
        $this->dosenmodel = new Dosenmodel($this->db);
        $this->matakuliahmodel = new Matakuliahmodel($this->db);
        $this->tahunajaranmodel = new Tahunajaranmodel($this->db);
        $this->kelasmodel = new Kelasmodel($this->db);
        $this->jadwalmodel = new Jadwalmodel($this->db);
        $this->matakuliahjurusanmodel = new MataKuliahJurusanmodel($this->db);
        $this->absenmodel = new Absenmodel($this->db);
        $this->krsmodel = new Krsmodel($this->db);
    }
}
