<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>
<?php $this->load->view($theme . 'views/elements/banner'); ?>

<?php if ((isset($article)) and ($article == TRUE)) : ?>

    <div id="Content ">
            <div class="content_wrapper clearfix medyacon">
                <div class="sections_group">
                    <div id="post-947" class="post-947 post  format-standard has-post-thumbnail  category-priest">
                        <div class="section section-post-header">
                            <div class="section_wrapper clearfix">
                                <div class="column one single-photo-wrapper">
                                    <div class="share_wrapper">
                                        <span class='st_facebook_vcount' displaytext='Facebook'></span><span class='st_twitter_vcount' displaytext='Tweet'></span><span class='st_pinterest_vcount' displaytext='Pinterest'></span>
                                        <script src="../../../../../button/buttons.js"></script>
                                        <script>
                                            stLight.options({
                                                publisher: "1390eb48-c3c3-409a-903a-ca202d50de91",
                                                doNotHash: false,
                                                doNotCopy: false,
                                                hashAddressBar: false
                                            });
                                        </script>
                                    </div>
                                    <div class="image_frame scale-with-grid ">
                                        <div class="image_wrapper">
                                        <iframe width="800" height="480" src="<?= $article->subtitle; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                         </iframe>
											</a>
                                            <div class="image_links">
                                                <a href="public/theme/assets/images/home_church_blog_4-1200x800.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Content-->
                        <div class="post-wrapper-content medyapost">
                            <div class="entry-content">
                                <div class="section the_content has_content">
                                    <div class="section_wrapper">
                                        <div class="the_content_wrapper">
                                            <h5><?= $article->title; ?></h5>
                                            <p>
											<?= $article->content; ?>
											</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section section-post-footer">
                                <div class="section_wrapper clearfix">
                                    <!-- One full width row-->
                                    <div class="column one post-pager"></div>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
            </div>
        </div>
    
<?php else : ?>

    <?php $page_list = $this->publish->get_sub_pages($lang_in_use, $page_data->id_page, '0', 'ibs'); ?>
    <?php if ((isset($page_list)) and ($page_list == TRUE)) : ?>
    <?php if (count($page_list) == 1) : ?>
    <?php header('Location: ' . base_url($link_p[$lang_in_use . '/' . $page_list[0]->id_page])); ?>
    <?php endif; ?>
        

    <?php else : ?>

        <?php $article_list = $this->publish->get_articles($lang_in_use, $page_data->id_page, null, '0', 'logical_date', 'asc', 'ibs'); ?>
        <?php if ((isset($article_list)) and ($article_list == TRUE)) : ?>
            <div id="Content">
			<div class="container">
				<div class="row">
				
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 60px"> </div>
					<div class="col-12 column_blog">
						<div class="blog_wrapper isotope_wrapper">
							<div class="posts_group lm_wrapper grid col-3" style="max-width:100%">
							<?php foreach ($article_list as $w) : ?>
								<div class="post-item isotope-item clearfix author-admin post">
									<div class="image_frame post-photo-wrapper scale-with-grid image">
										<div class="image_wrapper">
                                        <a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>" class="orb-blog-card">
                                            <iframe width="560" height="315" src="<?= $w->subtitle; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                                                </iframe>
										</div>
									</div>
									<div class="post-desc-wrapper " >
										<div class="post-desc">
											<div class="post-title">
												<h4 class="entry-title"><a href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>"><?= $w->title; ?></a></h4> </div>
											<div class="post-excerpt"> <?= $w->summary; ?> </div>
										</div>
									</div>
								</div>
								<?php endforeach;  ?>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
        <?php endif; ?>
    <?php endif; ?>



<?php endif; ?>

<?php $this->load->view($theme . 'views/elements/footer'); ?>
<?php $this->load->view($theme . 'views/core/scripts'); ?>
<?php $this->load->view($theme . 'views/core/close'); ?>


