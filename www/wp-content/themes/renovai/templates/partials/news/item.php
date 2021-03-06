<?php
use Digidez\Functions;

$bg = IMAGES_URI.'/spacer.gif';
if(!empty($_post->cf['news_post_image'])){
	$bg = Functions::get_the_attachment_thumbnail($_post->cf['news_post_image'], '491x260', ['alt' => '', 'title' => ''], false, false);
}
?>
<div class="col-12 col-lg-6 mb-md-10 pr-lg-6">
	<div class="media align-items-stretch flex-column">
		<div class="news-item-image">
			<div class="img" style="background-image: url(<?=$bg;?>)"></div>
			<?php if(!empty($_post->cf['news_post_logo'])):?>
				<img class="logo" src="<?=$_post->cf['news_post_logo'];?>" alt="" title="">
			<?php endif;?>
		</div>
		<div class="media-body d-flex flex-column">
			<?php if(!empty($_post->cf['news_post_date'])):?>
				<div class="news-item-date"><?=$_post->cf['news_post_date'];?></div>
			<?php endif;?>
			<div class="h3"><?=$_post->post_title;?></div>
			<div class="d-none d-md-block">
				<p><?=$_post->cf['news_post_description'];?></p>
			</div>
			<div class="mt-auto"><?=Functions::render_section_button($_post->cf['news_post_button'], [
				'class' => 'text-decoration-underline news-item-link',
				'data' => [[
					'modal_1' => $modal_1,
					'modal_2' => $modal_2,
				]]
			]);?></div>
		</div>
	</div>
</div>
