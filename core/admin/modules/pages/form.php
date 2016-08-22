<form action="../process/create.php" method="post">
<label for="title"><b>Page Title:</b></label><input type="text" name="title" value=""><br/>
<input type="checkbox" name="in_nav" value="on"><b>Navigation Menu</b></input><br/>
<label for="nav_title"><b>Navigation Title:</b></label><input type="text" name="nav_title" value=""><br/>
<label for="position"><b>Position:</b></label><input type="text" name="position" value=""><br/>
	<?php
	//Assuming chosen template is hard coded

	$template = "content";


	require '../../inc/bizzworks/sql.php';

	$sql = fetch_connection("localhost","root","root","AuctionCMS");
	$rows = get_rows_where($sql,"table_templates",array("name","resources"),"id='".$template."'");



	$field_types = json_decode($rows[0]["resources"],true);
	$resources = array();

	foreach($field_types as $field){
		?><h5><?=$field["title"]?></h5>
		<?
		$resources[$field["id"]] = "";
		include "../form-field-types/".$field['type'].".php";

	}?>

<?

?>
<br/><br/>

<input type='hidden' name='resources' value="<?php echo htmlentities(serialize($resources)); ?>" />
<input type="submit" value="Create">
</form>
