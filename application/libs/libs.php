<?php 
	
	//helper fungsi deklarasikan disini

	function sanitize($param){
        return htmlspecialchars($param, ENT_QUOTES, 'UTF-8');
    }