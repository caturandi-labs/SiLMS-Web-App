<?php

class Problem extends Controller{

    public function index()
    {
    	session_start();
        require APP . 'view/problem/index.php';
    }

}
