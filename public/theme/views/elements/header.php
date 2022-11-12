<?php
$headerPhone = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->phone))));
?>
<?php
$facebook = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->facebook))));
?>
<?php
$instagram = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->instagram))));
?>
<?php
$twitter = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->twitter))));
?>


<div id="Header_wrapper">
	<header id="Header">
		<div id="Top_bar">
			<div class="container">
				<div class="column one">
					<div class="top_bar_left clearfix">
						<div class="logo">
							<a id="logo" href="/" title="Dr. Kubra Esen" data-height="132" data-padding="40"><img
									class="logo-main scale-with-grid" src="public/theme/assets/images/logo1.png"
									data-retina="public/theme/assets/images/logo1.png" data-height="132" alt="church3"><img
									class="logo-sticky scale-with-grid" src="public/theme/assets/images/logo1.png"
									data-retina="public/theme/assets/images/logo1.png" data-height="132" alt="church3"><img
									class="logo-mobile scale-with-grid" src="public/theme/assets/images/logo1.png"
									data-retina="public/theme/assets/images/logo1.png" data-height="132" alt="church3"><img
									class="logo-mobile-sticky scale-with-grid"
									src="public/theme/assets/images/logo1.png"
									data-retina="public/theme/assets/images/logo1.png" data-height="132" alt="church3"></a>
						</div>
						<div class="menu_wrapper">
							<div class="orb-menu-frame">
								<nav id="menu">
									<?= $menu; ?>
								</nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
</div>