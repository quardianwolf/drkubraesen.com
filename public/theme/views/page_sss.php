<?php $page = $this->publish->get_page($lang_in_use,'6','ibs'); ?>
<?php $page = $page[0]; ?>

<?php $article_list = $this->publish->get_articles($lang_in_use,$page->id_page,null,'0','logical_date','asc','ibs'); ?>

<section class="pt-5 pt-xl-7 pt-xxl-8">
  <div class="container-fluid">
    <div class="row justify-content-center pb-5">
      <div class="col-lg-10">
        <div class="text-center mb-5 mb-lg-6">
          <h2 class="fs-2 fs-sm-3"> <?=$page->subtitle;?></h2>
          <hr class="hr-ornate">
        </div>
        <div class="row">
          <div class="accordion mt-4">
            <?php $run=0; foreach ($article_list as $w): ?>
              <h5 class="title <?=$run==0 ? 'active' : null;?>">
                <span class="fa fa-plus mr-1 text-800"></span> <?=$w->title;?>
              </h5>
              <div class="content pl-5 <?=$run==0 ? 'active' : null;?>">
                <?=$w->content;?>
              </div>
            <?php $run++; endforeach;  // foreach ($article_list as $w) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




	
	
<div class="mfn-main-slider mfn-rev-slider">
			<p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
				style="background:transparent;margin-top:0;margin-bottom:0;">
				<rs-module id="rev_slider_1_1" data-version="6.4.11">
					<rs-slides>
						<rs-slide data-key="rs-1" data-title="Slide" data-out="a:false;">
							
							<img src="<?= site_url($slider[0]->path . $slider[0]->file_name); ?>"
								class="sliderResim" style="z-index:20;"/>
							<rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-rsp_ch="on"
								data-xy="x:c;yo:280px,280px,196px,196px;"
								data-text="w:normal;s:20,20,20,20;l:25,25,24,24;a:center;"
								data-frame_0="y:-50,-50,-31,-31;" data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
								style="z-index:10;font-family:Roboto;"></rs-layer>
							<rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-color="#ab815a"
								data-rsp_ch="on" data-xy="x:c;xo:1px,1px,0,1px;yo:345px,345px,282px,282px;"
								data-text="w:normal;s:80,80,70,70;l:84,84,72,72;a:center;" data-basealign="slide"
								data-frame_0="y:-50,-50,-31,-31;" data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
								style="z-index:8;font-family:Gilda Display;">
								<?php echo $slider[0]->title; ?>
								<br>
								<?php echo $slider[0]->video_name; ?>
								<br>
								<?php echo $slider[0]->button; ?>
							</rs-layer>
							<rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-rsp_ch="on"
								data-xy="x:c;yo:648px,648px,406px,406px;"
								data-text="w:normal;s:20,20,12,12;l:25,25,15,15;a:center;"
								data-dim="w:600px,600px,376px,376px;" data-vbility="t,t,f,t"
								data-frame_0="y:50,50,31,31;" data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
								style="z-index:9;font-family:Roboto;">
								<?php echo $slider[0]->description; ?>
							</rs-layer>
							<a id="slider-1-slide-1-layer-4" class="rs-layer rev-btn" href="/tr/tedaviler"
								target="_self" data-type="button" data-color="#ab815a" data-rsp_ch="on"
								data-xy="x:c;yo:759px,759px,563px,563px;"
								data-text="w:normal;s:20,20,22,22;l:55,55,60,60;fw:500;"
								data-dim="minh:0px,0px,none,0px;" data-padding="r:35;l:35;"
								data-border="bor:24px,24px,24px,24px;" data-frame_0="y:50,50,31,31;"
								data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
								data-frame_hover="c:#fff;bgc:#ab815a;bor:24px,24px,24px,24px;"
								style="z-index:15;background-color:rgba(255,255,255,1);font-family:Cinzel;">Daha Fazla
								&nbsp;&nbsp;<i class="icon-right-thin"></i> </a>
							<rs-layer id="slider-1-slide-1-layer-6" data-type="object" data-rsp_ch="on"
								data-xy="xo:50px,50px,31px,31px;yo:228px,228px,142px,142px;"
								data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-frame_999="o:0;st:w;"
								style="z-index:14;font-family:Roboto;">
							</rs-layer>
						</rs-slide>
					</rs-slides>
				</rs-module>
			</rs-module-wrap>
		</div>








		<?php if ((isset($slider)) and ($slider == TRUE)) : ?>
	<div id="hero" class="section">
	<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-color: transparent; background-repeat: no-repeat; background-image: url(<?= site_url($slider[0]->path . $slider[0]->file_name); ?>); background-size: cover; background-position: 50% 50%; width: 100%; height: 100%; opacity: 1; top: 0px; left: 0px; visibility: inherit; z-index: 20;"><div></div></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
	</div>
	<?php endif; ?>