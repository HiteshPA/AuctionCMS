<div id="navbar-main">
            <!-- Fixed navbar -->
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
                        </button><a class="navbar-brand hidden-xs hidden-sm" href="#Home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
			    <?
			    foreach($nav_menu as $nav){
            $title = preg_replace('/\s+/', '', $nav['title']);
				$nav_to = "#".$title;
			    ?>
                            	<li>
                                	<a href="<?= $nav_to?>" class="smoothScroll"><?= $nav['nav_title']?></a>
                            	</li>
			    <?}?>
          <?

            if(!$_SESSION["userid"]){ ?>
            <li>
                <a href="http://localhost/AuctionCMS/site/login.php">Login</a>
            </li>

          <?}?>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
