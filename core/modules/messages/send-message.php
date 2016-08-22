<?
session_start();
//Fetch params in POST
if(session_status()){
$userid = $_SESSION["userid"];
//echo "Userid of sender ".$userid;

$subject = "'".$_POST["subject"]."'";
$message = "'".$_POST["message"]."'";
$sent_at = "'".date("Y-m-d H:i:s")."'";
$sender = "";

require '../../inc/bizzworks/sql.php';
echo "Inside session";
$conn = fetch_connection("localhost","root","root","AuctionCMS");
$rows = get_rows_where($conn,"table_users",array("id"),"email='".$_POST["recipient"]."'");

$cols = array("sender","recipient","subject","message","sent_at");
$vals = array($userid,$rows[0]["id"],$subject,$message,$sent_at);

add($conn,"table_messages",$cols,$vals);
echo "Message sent";
header("location: ../index.php");
}else{
  echo "Cannot be sent!";
}
?>
