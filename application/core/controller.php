<?php

class Controller
{
    
    public $db = null;
    public $model = null;

    /**
     * Whenever controller is created, open a database connection too and load "the model".
     */
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
        // create new "model" (and pass the database connection)

        $this->model = new Model($this->db);
        $this->mahasiswamodel = new Mahasiswamodel($this->db);
        $this->ruangmodel = new Ruangmodel($this->db);
        $this->levelmodel = new Levelmodel($this->db);
        $this->usermodel = new Usermodel($this->db);
        $this->loginmodel = new Loginmodel($this->db);
    }
}
