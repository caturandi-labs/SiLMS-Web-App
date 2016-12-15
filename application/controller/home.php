<?php

class Home extends Controller{
   
    public function index()
    {
        require APP . 'view/header_view.php';
        require APP . 'view/home/index.php';
        require APP . 'view/footer_view.php';
    }

    
    public function exampleOne()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_one.php';
        require APP . 'view/_templates/footer.php';
    }

    
    public function exampleTwo()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_two.php';
        require APP . 'view/_templates/footer.php';
    }
}
