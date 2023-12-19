<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'homepage';
	switch($page){
		case "homepage";
			include("module/inicio/view/inicio.php");
			break;
		case "controller_property";
			include("module/property/controller/".$_GET['page'].".php");
			break;
		case "services";
			include("module/services/".$_GET['page'].".php");
			break;
		case "aboutus";
			include("module/aboutus/".$_GET['page'].".php");
			break;
		case "contactus";
			include("module/contact/".$_GET['page'].".php");
			break;
		case "404";
			include("view/inc/error".$_GET['page'].".php");
			break;
		case "503";
			include("view/inc/error".$_GET['page'].".php");
			break;
		default;
			include("module/inicio/view/inicio.php");
			break;
	}
?>