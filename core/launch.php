<?
	echo "IN LAUNCH";
	// Setup the AuctionCMS variable "namespace"
	$auctioncms = array();

	$auctioncms["config"] = array();
	$auctioncms["config"]["debug"] = false;



	// Newer installs should use a strict $server_root variable to launch properly from shared cores
	
	if (empty($server_root)) {
		$server_root = str_replace("core/launch.php","",strtr(__FILE__, "\\", "/"));
	}

	include $server_root."core/settings.php";
	include $server_root."core/router.php";

?>
