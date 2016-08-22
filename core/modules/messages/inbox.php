<?

session_start();
//Fetch params in POST
$rows = "";
if(session_status()){
$userid = $_SESSION["userid"];
//echo "Userid of sender ".$userid;

require '../inc/bizzworks/conn.php';
require '../inc/bizzworks/sql.php';
//echo "Inside session";
//$conn = fetch_connection("localhost","root","root","AuctionCMS");
$params = array("id","sender","recipient","subject","message","sent_at","unread");
$rows = get_rows_where($conn,"table_messages",$params,"recipient=".$userid." order by sent_at desc");

//echo "Message fetched";
}else{
  //echo "Cannot be fetched!";
}
?>
