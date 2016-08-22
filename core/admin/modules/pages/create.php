<?
//$limit = count($_POST) - $_POST['field_count'] - 1;
//foreach ($_POST as $key => $value)
// echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";





 $resources = unserialize($_POST['resources']);

 foreach ($resources as $key => $value){
   $resources[$key] = $_POST[$key];

 }
$params = $_POST;
array_splice($params,4,count($resources));

require_once "jsonString.php";

$str = array2json($resources);
//echo $str;

$params["title"] = "'".$params["title"]."'";
$params["in_nav"] = "'".$params["in_nav"]."'";
$params["nav_title"] = "'".$params["nav_title"]."'";
$params["resources"] = "'".$str."'";
$params["template"] = "'content'";
$params["created_at"] = "'".date("Y-m-d H:i:s")."'";
require '../../inc/bizzworks/sql.php';
//echo "tama";
$sql = fetch_connection("localhost","root","root","AuctionCMS");
add($sql,"table_pages",array_keys($params),array_values($params));

header("location: /AuctionCMSMain/indexTest.php");
//new($conn,"table_pages",);


?>
