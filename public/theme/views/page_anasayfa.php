<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>
<?php
$facebook = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->facebook))));
?>
<?php
$instagram = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->instagram))));
?>
<?php
$twitter = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->twitter))));
?>


<div id="Content">
<?php if ((isset($slider)) and ($slider == TRUE)) : ?>
	<div id="hero" class="section">
	<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-color: transparent; background-repeat: no-repeat; background-image: url(<?= site_url($slider[0]->path . $slider[0]->file_name); ?>); background-size: cover; background-position: 50% 50%; width: 100%; height: 100%; opacity: 1; top: 0px; left: 0px; visibility: inherit; z-index: 20;">
			<div style="line-height: 87px;">
				<h2 class="sliderBaslik"><?php echo $slider[0]->title; ?>
					<br>
					<?php echo $slider[0]->video_name; ?>
					<br>
					<?php echo $slider[0]->button; ?>
				</h2>
				<h5 id="slider-1-slide-1-layer-3" class="sliderAciklama" style="z-index:9;font-family:Roboto;color:white;"><?php echo $slider[0]->description; ?></h5>
				<a id="slider-1-slide-1-layer-4" class="anasayfaButon" href="/tr/tedaviler">Daha Fazla&nbsp;&nbsp;<i class="icon-right-thin"></i> </a>
			</div>
	  </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
	</div>
	<?php endif; ?>

	<?php if ((isset($anasayfa_icerik)) and ($anasayfa_icerik == TRUE)): ?>
	<div id="hakkimda" class="section"
		style="padding-top:120px;padding-bottom:80px;background-color:#1e232b;background-image:url(public/theme/assets/images/church3-section-bg2.png);background-repeat:no-repeat;background-position:left top">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<div class="image_frame image_item no_link scale-with-grid no_border">
						<div class="image_wrapper">
							<img class="scale-with-grid"
								src="<?= site_url($anasayfa_icerik[0]->path . $anasayfa_icerik[0]->file_name); ?>"
								alt="church3-home-pic3" width="780" height="910">
						</div>
					</div>
				</div>
				<div class="col-md-6" style="padding:70px 3% 0">
					<h2>
						<?= $anasayfa_icerik[0]->title; ?>
					</h2>
					<hr class="no_line" style="margin: 0 auto 30px auto">
					<p style="color:#F5F5F5;">
						<?= $anasayfa_icerik[0]->content; ?>
					</p>
					<hr class="no_line" style="margin: 0 auto 50px auto">
					<ul class="list_custom" style="color:#F5F5F5;">
						<li>
							<?= $anasayfa_icerik[0]->summary; ?>
						</li>
					</ul>
					<hr class="no_line" style="margin: 0 auto 30px auto"> <a
						class="button has-icon button_right button_size_2" href="/tr/hakkimizda"
						style="color:#fff;"><span class="button_label">Daha Fazla</span> <span class="button_icon"><i
								class="icon-right-thin" style="color:#ffffff!important;"></i></span></a>
				</div>

			</div>
		</div>
	</div>
	<?php endif; ?>

	<div id="siyah" class="section"
		style="padding-top:120px;padding-bottom:80px;background-color:#1e232b;background-image:url(public/theme/assets/images/church3-section-bg2.png);background-repeat:no-repeat;background-position:left top">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<div class="mcb-wrap-inner">
						<div class="column mcb-column one column_divider">
							<hr class="no_line" style="margin: 0 auto 80px auto">
						</div>
					</div>
				</div>

				<div class="col-md-6" style="padding:0 4% 0 0">
					<div class="row">
						<div class="col-12">
							<div class="column_attr clearfix mobile_align_center" style="padding:10px 0 0;">
								<h6 style="color: #626974;">Dr. Kübra Esen<span style="margin-left: 30px;"
										class="themecolor">⸻</span></h6>
								<hr class="no_line" style="margin: 0 auto 30px auto">
								<h2>
									<?= $anasayfa_icerik[2]->title; ?>
								</h2>
								<hr class="no_line" style="margin: 0 auto 30px auto">

							</div>
						</div>
						<div class="col-md-6 text-center">
							<a href="/tr/tedaviler/klinik-dermatoloji/alopesi-areata-sac-kiran">
								<div class="icon_box icon_position_top no_border">
									<div class="image_wrapper"><img
											src="<?= site_url($kozmetik_c[0]->path . $kozmetik_c[0]->file_name); ?>"
											class="scale-with-grid" width="77px" height="80px"> </div>
									<hr class="no_line" style="margin:0 auto 20px">
									<div class="desc_wrapper">
										<div class="desc">
											<p style="color:#F5F5F5;">
												<?= $kozmetik_c[0]->title; ?>
											</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 text-center anasayfaI">
							<a href="/tr/tedaviler/klinik-dermatoloji/egzama">
								<div class="icon_box icon_position_top no_border">
									<hr class="" style="padding-top: 5px">
									<div class="image_wrapper"><img
											src="<?= site_url($kozmetik_c[2]->path . $kozmetik_c[2]->file_name); ?>"
											class="scale-with-grid" width="77px" height="80px"> </div>
									<hr class="no_line" style="margin-bottom">
									<div class="desc_wrapper">
										<div class="desc">
											<p style="color:#F5F5F5;">
												<?= $kozmetik_c[2]->title; ?>
											</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12">
							<hr class="no_line" style="margin: 0 auto 20px auto">
						</div>
						<div class="col-md-6 text-center">
							<a href="/tr/tedaviler/kozmetik-dermatoloji/lazerle-cilt-tedavileri">
								<div class="icon_box icon_position_top no_border">
									<div class="image_wrapper"><img
											src="<?= site_url($klinik_c[7]->path . $klinik_c[7]->file_name); ?>"
											class="scale-with-grid" width="97px" height="120px"> </div>
									<hr class="no_line" style="margin:0 auto 20px">
									<div class="desc_wrapper">
										<div class="desc">
											<p style="color:#F5F5F5;">
												<?= $klinik_c[7]->title; ?>
											</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 text-center">
							<a href="/tr/tedaviler/kozmetik-dermatoloji/mezoterapi">
								<div class="icon_box icon_position_top no_border">
									<div class="image_wrapper"><img
											src="<?= site_url($klinik_c[8]->path . $klinik_c[8]->file_name); ?>"
											class="scale-with-grid" width="77px" height="80px"> </div>
									<hr class="no_line" style="margin:0 auto 40px">
									<div class="desc_wrapper">
										<div class="desc">
											<p style="color:#F5F5F5;">
												<?= $klinik_c[8]->title; ?>
											</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12">
							<hr class="no_line" style="margin: 0 auto 35px auto">
						</div>
						<div class="col-12"> <a class="button has-icon button_right button_size_2" href="/tr/tedaviler"
								style="color:#fff;"><span class="button_label">TÜM TEDAVİLER
								</span> <span class="button_icon"><i class="icon-right-thin"
										style="color:#ffffff!important;"></i></span></a> </div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row">
						<div class="col-12">
							<div class="image_frame image_item no_link scale-with-grid no_border">
								<div class="image_wrapper"><img class="scale-with-grid"
										src="<?= site_url($anasayfa_icerik[1]->path . $anasayfa_icerik[1]->file_name); ?>"
										alt="church3-home-pic2" width="780" height="845"> </div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="section" style="padding-top:120px;padding-bottom:80px">
		<?php if ((isset($blog)) and ($blog == TRUE)): ?>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="placeholder"> &nbsp; </div>
				</div>
				<div class="col-md-8 text-center">
					<h3>HABERLER</h4>
						<h5>VE</h5>
						<hr class="no_line" style="margin: 0 auto 39px auto">
						<h2>İLGİNİZİ ÇEKEBİLECEK YAZILAR</h2>
				</div>
				<div class="col-12">
					<hr class="no_line" style="margin: 0 auto 40px auto">
				</div>
				<div class="col-12 column_blog">
					<div class="column_filters">
						<div class="blog_wrapper isotope_wrapper clearfix">
							<div class="posts_group lm_wrapper col-3 grid" style="max-width:100%">
								<?php $run = 0;
	        foreach ($blog as $w): ?>
								<div class="post-item isotope-item clearfix post">

									<div class="image_frame post-photo-wrapper scale-with-grid image">
										<div class="image_wrapper">
											<a
												href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>">
												<div class="mask"></div><img style="width:1000px; height:200px;"
													src="<?= site_url($w->path . $w->file_name); ?>"
													class="scale-with-grid wp-post-image" loading="lazy">
											</a>
											<div class="image_links double"> <a
													href="<?= site_url($w->path . $w->file_name); ?>" class="zoom"
													rel="prettyphoto"><i class="icon-search"></i></a><a
													href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>"
													class="link"><i class="icon-link"></i></a>
											</div>
										</div>
									</div>
									<div class="post-desc-wrapper">
										<div class="post-desc">

											<div class="post-title">
												<h4 class="entry-title"><a
														href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>">
														<?= $w->title; ?>
													</a></h4>
											</div>
											<div class="post-excerpt">
												<?= $w->summary; ?>
											</div>

										</div>
									</div>

								</div>
								<?php $run++;
		        if ($run == 4)
			        break;
	        endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>


<?php $this->load->view($theme . 'views/elements/footer'); ?>
<?php $this->load->view($theme . 'views/core/scripts'); ?>
<?php $this->load->view($theme . 'views/core/close'); ?>