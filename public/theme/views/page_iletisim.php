<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>


<?php
$twitter = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->twitter))));
$instagram = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->instagram))));
$facebook = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->facebook))));
$email = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->email))));
$phone = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->phone))));
$adres = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->address))));
?>


			<div class="section" style="padding-bottom:65px;background-color:#1e232b;background-image:url(images/church3-section-bg3.png);background-repeat:no-repeat;background-position:left top">
				<div class="mfn-drag-helper placeholder-wrap"></div>
			</div>
			



			
	<div class="section mcb-section no-margin-v equal-height-wrap bg-cover" style="background-color:#1e232b">
				<div class="container">
					<div class="row">
						<div class="col-md-4" style="padding:80px 5% 65px;background-color:#e0dad2">
							<div class="mcb-wrap-inner">
								<div class="column mcb-column one column_column">
									<div class="column_attr clearfix mobile_align_center">
										<h4><?= $iletisim[0]->subtitle; ?></h4>
										<hr class="no_line" style="margin: 0 auto 40px auto">
										<h3><?= $site_data->phone; ?></h3>
										<hr class="no_line" style="margin: 0 auto 40px auto">
										<h4><?= $iletisim[0]->summary; ?></h4>
										<hr class="no_line" style="margin: 0 auto 20px auto">									
									</div>
									<hr class="no_line" style="margin: 0 auto 20px auto">
									<div class="iletisimIcon">
										<a href="<?=$instagram;?>"><i class="icon-instagram iletisiminsta"></i> </a>
										<a href="<?=$facebook;?>"><i class="icon-facebook iletisimface"></i></a>
										<a href="<?=$twitter;?>"><i class="icon-twitter iletisimtwitter"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4" style="background-image:url(public/theme/assets/images/iletisim1.jpg);background-repeat:no-repeat;background-position:center">
							<hr class="no_line" style="margin: 0 auto 300px auto"> </div>
						<div class="col-md-4" style="padding:40px 40px 25px;background-color:#e0dad2">
							<div class="mobile_align_center">
								<h3>RANDEVU AL</h3>
								<hr class="no_line" style="margin: 0 auto 20px auto">
								<div id="contactWrapper">
									<div id="contactform">
										<form method="post" id="reused_form">
										<?=form_open('send_mail',array('name'=>'iletisim-formu','class'=>'form-contact','id'=>'contactform'));?>
											<!-- One Second (1/2) Column -->
											<div class="column one">
												<input placeholder="İsminiz" id="name" type="text" name="Name" required="" maxlength="50"> </div>
											<!-- One Second (1/2) Column -->
											<div class="column one">
												<input placeholder="E-posta Adresiniz" id="email" type="email" name="Email" required="" maxlength="50"> </div>
											<div class="column one">
												<input placeholder="Konu" id="subject" type="text" name="Subject" maxlength="50"> </div>
											<div class="column one">
												<textarea placeholder="Mesaj" id="message" name="Message" rows="10" maxlength="6000" required=""></textarea>
											</div>
											<div class="column one">
												<button class="button-primary" id="submit" type="submit">Gönder</button>
											</div>
											<?=form_close();?>
										</form>
										<div id="success_message" style="display:none">
											<h3>MESAJINIZ BIZE ULASTI!</h3>
											<p>We will get back to you soon.</p>
										</div>
										<div id="error_message" style="width:100%; height:100%; display:none;">
											<h3>Error</h3> Sorry there was an error sending your form.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>






<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>

