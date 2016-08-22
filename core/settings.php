<?
	echo "IN SETTINGS";
	date_default_timezone_set("Asia/Kolkata");

	// Website Environment
	$auctioncms["config"]["debug"] = true; // Set to false to stop all PHP errors/warnings from showing, or "full" to show all errors include notices and strict standards
	$auctioncms["config"]["domain"] = "http://localhost";	// "domain" should be http://www.website.com
	$auctioncms["config"]["www_root"] = "http://localhost/AuctionCMS/site/index.php/"; // "www_root" should be http://www.website.com/location/of/the/site/
	$auctioncms["config"]["static_root"] = "http://localhost/AuctionCMS/site/"; // "static_root" can either be the same as "www_root" or another domain that points to the same place -i t is used to server static files to increase page load time due to max connections per domain in most browsers.
	$auctioncms["config"]["admin_root"] = "http://localhost/AuctionCMS/site/index.php/admin/"; // "admin_root" should be the location you want to access auctioncms's admin from, i.e. http://www.website.com/admin/
	$auctioncms["config"]["force_secure_login"] = false; // If you have HTTPS enabled, set to true to force admin logins through HTTPS
	$auctioncms["config"]["environment"] = ""; // "dev" or "live"; empty to hide
	$auctioncms["config"]["environment_live_url"] = ""; // Live admin URL
//	$auctioncms["config"]["developer_mode"] = false; // Set to true to lock out all users except developers.
//	$auctioncms["config"]["maintenance_url"] = false; // Set to a URL to 307 redirect visitors to a maintenance page (driven by /templates/basic/_maintenance.php).
//	$auctioncms["config"]["routing"] = "basic";
//	$auctioncms["config"]["cache"] = false; // Enable Simple Caching
	$auctioncms["config"]["sql_interface"] = "mysqli"; // Change to "mysql" to use legacy MySQL interface in PHP.




	// Database Environment
	$auctioncms["config"]["db"]["host"] = "localhost";
	$auctioncms["config"]["db"]["name"] = "auctioncms";
	$auctioncms["config"]["db"]["user"] = "root";
	$auctioncms["config"]["db"]["password"] = "root";
	$auctioncms["config"]["db"]["port"] = "3306";
	$auctioncms["config"]["db"]["socket"] = "";



?>
