<?php

function verificar_email($email){
 	if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)){
    	return true;
	}else{
		return false;
	}
}
function verificar_pass($pass){
 	if(preg_match("/^([a-z]|[A-Z]|[0-9]){10,}$/",$pass)){
    	return true;
	}else{
		return false;
	}
}
function verificar_cp($cp){
 	if(preg_match("/^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/",$cp)){
    	return true;
	}else{
		return false;
	}
}
function verificar_nombre($nombre){
 	if(preg_match("/^[a-z\d_]{4,15}$/i",$nombre)){
    	return true;
	}else{
		return false;
	}
}
function verificar_dni($dni){
 	if(preg_match('/^([0-9]|[A-Z]|[a-z]){1}[0-9]{7}[A-Z]{1}$/',$dni)){
    	return true;
	}else{
		return false;
	}
}

?>