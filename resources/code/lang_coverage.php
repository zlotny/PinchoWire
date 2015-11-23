<?php

/*
	Search browser cookies to find preferred language. 
	If not set, puts spanish as default language.
*/

if(isset($_COOKIE["user_lang"])){
	include_once "../i18n/".$_COOKIE["user_lang"].".php";
}else{
	include_once "../i18n/es.php";
}


?>