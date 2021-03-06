<?php
use Digidez\Functions;
use Digidez\Helper;

#Helper::_debug($section_data);

$section_class = ($section_data['section_desktop_illustration_type'] == 'nothing') ? 'without-bg product-header' : 'product-header';

$option_h1_title_field = $section_data['option_h1_title_field'];
switch($option_h1_title_field){
	case "section_title":
		$section_title_tag = 'h1';
		$section_content_tag = 'p';
		break;
	case "section_content":
		$section_title_tag = 'div';
		$section_content_tag = 'h1';
		break;
	default:
		$section_title_tag = 'h1';
		$section_content_tag = 'p';
		break;
}

?>
<section id="<?=$section_name;?>-section" class="<?=$section_class;?>">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xxl-9">
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xxl-12 text-center">
						<<?=$section_title_tag;?> class="h1"><?=$section_data['section_title'];?></<?=$section_title_tag;?>>
						<<?=$section_content_tag;?> class="section-content"><?=$section_data['section_content'];?></<?=$section_content_tag;?>>
						<div><?=Functions::render_section_button($section_data['section_button'], ['class' => 'btn btn-secondary shadow']);?></div>
						<div class="mobile-content d-lg-none pt-6 pb-3">
						<?php if($section_data['section_desktop_illustration_type'] != 'nothing'):?>
							<img class="w-100 h-auto" src="<?=$section_data['section_mobile_image'];?>" alt="" title="">
						<?php endif;?>
						</div>
						<div class="tablet-container d-none d-lg-inline-block">
						<?php if($section_data['section_desktop_illustration_type'] == 'image'):?>
							<img src="<?=$section_data['section_desktop_image'];?>" alt="" title="">
						<?php elseif($section_data['section_desktop_illustration_type'] == 'video'):?>
							<div class="video-carousel play">
								<div class="poster" style="background-image: url(<?=$section_data['section_desktop_video_poster'];?>);"></div>
								<video class="w-100" autoplay muted loop>
									<source src="<?=$section_data['section_desktop_video'];?>">
								</video>
							</div>
						<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
