<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
        <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
      <!--  <link rel="shortcut icon" href="ico/favicon.png">-->
        <title>
            SHIELD - Free Bootstrap 3 Theme
        </title>
		<!-- Bootstrap core CSS -->
	
        <link href="http://localhost/AuctionCMS/site/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="http://localhost/AuctionCMS/site/css/main.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://localhost/AuctionCMS/site/css/icomoon.css" type="text/css">
        <link href="http://localhost/AuctionCMS/site/css/animate-custom.css" rel="stylesheet" type="text/css">
        <link data-familyname="Lato" data-cssintegration="font-family:Lato, serif;" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic" rel="stylesheet" type="text/css">
        <link data-familyname="Raleway" data-cssintegration="font-family:Raleway, serif;" href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet" type="text/css">
     
      
        <link default-stylesheet="true" rel="stylesheet" href="http://localhost/AuctionCMS/site/css/sh-default.css" type="text/css">
    </head>
<body>



    <body data-spy="scroll" data-offset="0" data-target="#navbar-main" style="cursor: auto;">


<?php
	
		$connection=auction_setup_connection();		
				
		$params = array("title","template","resources");
		
		$rows = get_rows_where($connection,"table_pages",$params,"archived!='on' order by position");

			//	echo "outside conn";
		
		
		//For the home page with cover
		$params = array("name","value");
		$site_result = get_rows_where($connection,"table_variable",$params,"name IN('site_name','site_slogan')");

		$site_name = "";
		$site_slogan = "";


		foreach($site_result as $res){
			if($res['name']=="site_name")
				$site_name = $res['value'];
			else
				$site_slogan = $res['value'];
		}

				
		
		$params = array("nav_title","title");
		$nav_menu = get_rows_where($connection,"table_pages",$params,"in_nav='on' and archived!='on'");

		

		include SERVER_ROOT."site/navbar.php";




		foreach($rows as $row){
			$page = json_decode($row["resources"],true);
			//echo $page["page_header"];
			$template = $row["template"];
			$title = $row["title"];
		
			include SERVER_ROOT."core/admin/modules/pages/templates/".$template.".php";

		}
	include SERVER_ROOT."site/footer.php";

?>
  <script src="http://localhost/AuctionCMS/site/js/test.js" type="text/javascript"></script>

</html>
