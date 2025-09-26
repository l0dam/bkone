<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/hd/sub_main_banner/style.css?ver='.G5_CSS_VER.'">', 0);
?>

<div id="shSub">
    <div class="txt_area">
    	<p><?php echo $gr['ca_name']?></p>
        <div>
            <a href="/">Home</a>
            <i data-feather="chevron-right"></i>
            <?php echo $gr['ca_name']?>
            <i data-feather="chevron-right"></i>
            <?php echo $pa['ca_name']?>
        </div>
    </div>
</div>
