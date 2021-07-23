<?php


function prx($arg,$exit=true){

echo '<pre style="background:black;color:white;font-size:0.9rem;width:100%;">';
	if(is_array($arg)){
		print_r($arg);
	}elseif(is_object($arg) or is_null($arg) or is_bool($arg)){
		var_dump($arg);
	}else{
		echo $arg;
	}

	echo '</pre>';

	if($exit==true){
		exit;	
	}
	
}