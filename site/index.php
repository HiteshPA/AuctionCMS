<?
	$server_root = str_replace("site/index.php","",strtr(__FILE__, "\\", "/"));	
	echo "In site index ".__FILE__;
	include "../core/launch.php";
?>
