<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header_top.php');
?>
<!-- 追加 -->
<!-- <canvas class="fireworks"></canvas> -->
<!-- 追加 -->
		<!-- Header -->
		<div id="header-content" class="header-container">
<!--             <header class="header-content-inner clearfix" role="banner">
                <div class="header-logo col-xs-9 col-sm-6 col-md-4">
					<?php
					// $a = new GlobalArea('Header Site Title');
					// $a->display();
					?>
				</div>
				<div class="header-conctens col-sm-6 col-md-8">
					<div class="row">
						<div class="header-navi clearfix">
							<?php
							// $a = new GlobalArea('Header Navigation');
							// $a->display();
							?>
						</div>
						<div class="header-search clearfix">
							<?php
							// $a = new GlobalArea('Header Search');
							// $a->display();
							?>
						</div>
					</div>
				</div>
			</header> -->
				<!-- Slider -->
					<div class="container">
						<div class="row">
						<div class="top_svg">
							<div class="col-md-12">
								<?php
								$a = new Area('Slider Area');
								// $a -> enableGridContainer();
								$a->display();
								?>
							</div>
						</div>
						</div>
					</div>
				<!-- <div class="container"> -->
					<div class="row">
						<div class="col-md-12">
								<?php
								$a = new Area('slider bottom');
								$a -> enableGridContainer();
								$a->display();
								?>
							</div>
						</div>
					<!-- </div> -->
					<!-- //Slider -->

			<!-- Global Navigation -->
				<div class="container">
					<div class="row">
			<div class="global-navi<?php $u = new User(); if ( $u->isLoggedIn() ) { echo ' login'; } ?>">
						<?php
							$a = new GlobalArea('Global Navigation');
							$a->display();
						?>
					</div>
				</div>
			</div><!-- //Global Navigation -->
        </div><!-- //Headerー -->




