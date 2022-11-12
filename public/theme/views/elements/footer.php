
<?php
$twitter = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->twitter))));
$instagram = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->instagram))));
$facebook = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->facebook))));
$email = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->email))));
$phone = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->phone))));
$adres = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace('', '', $site_data->address))));
?>


	<footer id="Footer" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 100px"> </div>
					<div class="col-md-4 text-center">
						<h4>SOSYAL MEDYA</h4>
						<hr class="no_line" style="margin: 0 auto 10px auto">
						<a href="<?=$instagram;?>"><p> İnstagram <i class="icon-right-thin"></i> <i class="icon-instagram"></i> </a>
						<a href="<?=$facebook;?>"><br> Facebook <i class="icon-right-thin"></i> <i class="icon-facebook"></i></a>
					</div>
					<div class="col-md-4 text-center">
						
						<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
							<div class="image_wrapper"><img class="scale-with-grid footer-logo" src='public/theme/assets/images/logohead.png' alt="logo" width="94" height="182"> </div>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<h4>İLETİŞİM BİLGİLERİ</h4>
						<hr class="no_line" style="margin: 0 auto 10px auto">
						<p> <?=$adres;?> </p>
						<hr class="no_line" style="margin: 0 auto 10px auto">
							<br> Eposta: <a href="mailto:<?=$email;?>"><?=$email;?></a> </p>
					</div>
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 80px"> </div>
				</div>
			</div>
			<div class="footer_copy">
				<div class="container">
					<div class="column one"> <a id="back_to_top" class="footer_button" href=""><i class="icon-up-open-big"></i></a>
						<div class="copyright"> © 2022 - Kübra Esen.</div>
					</div>
				</div>
			</div>
		</footer>
		<div id="Side_slide" class="right dark" data-width="250">
		<div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
		<div class="extras">
			<div class="extras-wrapper"></div>
		</div>
		<div class="menu_wrapper"></div>
	</div>
	<div id="body_overlay"></div>