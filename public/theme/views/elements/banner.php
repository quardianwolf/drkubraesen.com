<?php if ((isset($article)) and ($article->title == TRUE)) : ?>

	<div id="Intro" class=" full-screen" style="background-size:cover;background-image:url(public/theme/assets/images/church3-section-bg3.png);">
			<div class="intro-inner">
				<h1 class="intro-title" style=""><?= $article->title; ?></h1>
			</div>
			<div class="intro-next"> <i class="icon-down-open-big"></i> </div>
		</div>
<?php else: ?>
  <div id="Subheader">
				<div class="container">
					<div class="row">
						<h1 class="title" style=""><?php echo $page_data->title; ?></h1> </div>
				</div>
			</div>
<?php endif; ?>
