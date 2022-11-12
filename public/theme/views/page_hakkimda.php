<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>


      
		
		<div id="Content">
			<div class="section mcb-section no-margin-h no-margin-v equal-height" style="padding-top:120px;padding-bottom:120px;background-color:#e0dad2;background-image:url(public/theme/assets/images/church3-section-bg4.png);background-repeat:no-repeat;background-position:right top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="image_frame image_item no_link scale-with-grid no_border">
								<div class="image_wrapper"><img class="scale-with-grid hakkimdaresim" src="<?= site_url($about[0]->path . $about[0]->file_name); ?>" alt="church3-about-pic3" width="780" height="776"> </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="column_attr clearfix mobile_align_center" style="padding:0 3%;">
								<h2><?= $about[0]->title; ?></h2>
								<hr class="no_line" style="margin: 0 auto 30px auto">
                                <?= $about[0]->content; ?>
                                <hr class="no_line" style="margin: 0 auto 20px auto">
							</div>
						</div>
						<div class="col-12">
							<hr class="no_line" style="margin: 0 auto 80px auto"> </div>
					</div>
				</div>
			</div>
		</div>


      

<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>
