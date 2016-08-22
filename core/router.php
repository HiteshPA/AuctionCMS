<?

	echo "IN ROUTER";
	// Set some config vars automatically and setup some globals.
	$domain = rtrim($auctioncms["config"]["domain"],"/");
	// This is set now in index.php but is left for backwards compatibility.
	$server_root = isset($server_root) ? $server_root : str_replace("core/router.php","",strtr(__FILE__, "\\", "/"));
	$site_root = $server_root."site/";
	$www_root = $auctioncms["config"]["www_root"];
	$admin_root = $auctioncms["config"]["admin_root"];
	$static_root = isset($auctioncms["config"]["static_root"]) ? $auctioncms["config"]["static_root"] : $www_root;
	$secure_root = str_replace("http://","https://",$www_root);



	define("WWW_ROOT",$www_root);
	define("STATIC_ROOT",$static_root);
	define("SECURE_ROOT",$secure_root);
	define("DOMAIN",$domain);
	define("SERVER_ROOT",$server_root);
	define("SITE_ROOT",$site_root);
	define("ADMIN_ROOT",$admin_root);


	define("SERVER_ROOT",$server_root);
	//define("STATIC_ROOT",$static_root);
	// Include required utility functions
	include SERVER_ROOT."core/inc/auctioncms/utils.php";
	echo "AFTER UTIL";

	// Connect to MySQL and include the shorterner functions
	include SERVER_ROOT."core/inc/auctioncms/sql.php";
	echo "After SQL";

	include SERVER_ROOT."core/index.php";
	echo "AFTER INDEX CALL";

?>
