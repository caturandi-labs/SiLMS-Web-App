<?php 
	
	function sanitize($param){
		return htmlspecialchars($param, ENT_QUOTES, 'UTF-8');
	}


?>