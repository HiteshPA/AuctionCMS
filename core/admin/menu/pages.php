<div class="page-header">
							<h1>
								Pages
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Customize pages of the website
								</small>
							</h1>
						</div>

<?php
						require '../inc/bizzworks/sql.php';

						$sql = fetch_connection("localhost","root","root","AuctionCMS");
						$params = array("title","archived");
						$pages = get_rows($sql,"table_pages",$params,"position");
						$templates = get($sql,"table_templates",array("id,name"));

?>

<div class="well well-sm"><b>Create Page<br>
        Choose Template :</b>
<!--<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li class="dropdown">
													<a data-toggle="dropdown" class="dropdown-toggle" href="#">
														Select Template &nbsp;
														<i class="ace-icon fa fa-caret-down bigger-110 width-auto"></i>
													</a>

													<ul class="dropdown-menu dropdown-info">

														<li>
															<a data-toggle="tab" href="#dropdown1"></a>
														</li>

													</ul>
												</li>
											</ul>

											<div class="tab-content">


												<div id="dropdown1" class="tab-pane fade">
													<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
												</div>

												<div id="dropdown2" class="tab-pane fade">
													<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
												</div>
											</div>
										</div>
</div>

-->
<div class="tabbable">
	<div>
	<div class="input-group">
		<b class="text-primary">Select Template:</b>
		&nbsp;
		<select>
			<?
			foreach ($templates as $template) { ?>
			<option onclick="window.open('http://localhost/AuctionCMSMain/core/admin/draw/create.php')"><?= $template["name"]?></option>
					<?}?>
		</select>
	</div>
	<div class="tab-content">
		<div id="dropdown1" class="tab-pane fade">
				<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
			</div>

			<div id="dropdown2" class="tab-pane fade">
				<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
			</div>
	</div>
</div>
</div>


<div class="well well-sm">
	<h4>Active Pages</h4>
<?
//Pages
foreach ($pages as $page) {
	if($page["archived"]!="on"){
?>

<div class="well well-sm"><?= $page["title"]?>
<button class="btn btn-sm btn-success sh-active-element">Edit</button>
<button class="btn btn-sm btn-danger">Delete</button>
<button class="btn btn-sm btn-warning">Archive</button>
</div>
<?
	}
}
?>
</div>



<div class="well well-sm">
	<h4>Archived Pages</h4>
<?
//Archived Pages
foreach ($pages as $page) {
	if($page["archived"]=="on"){
?>

<div class="well well-sm"><?= $page["title"]?>
<button class="btn btn-sm btn-success sh-active-element">Edit</button>
<button class="btn btn-sm btn-danger">Delete</button>
<button class="btn btn-sm btn-warning">Unarchive</button>
</div>
<?
	}
}
?>
</div>


<!--
<div class="well well-sm">Page 1
<button class="btn btn-sm btn-success sh-active-element">Edit</button>
<button class="btn btn-sm btn-danger">Delete</button>
<button class="btn btn-sm btn-warning">Archive</button>
</div>
-->
