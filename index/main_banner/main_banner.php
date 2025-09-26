<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$sh_inc_url = G5_THEME_URL.'/index/main_banner';
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/index/main_banner/style.css?ver='.G5_CSS_VER.'">', 1);
?>

<div id="mainVisual">
    <div class="main_banner">
        <video src="<?= $sh_inc_url ?>/main_banner01.mp4" autoplay loop muted></video>
    </div>
    <div class="tit">
        <h1 data-aos="fade-up">정밀한 기술과 숙련된 손길로,<div>최고의 품질을 만듭니다.</div></h1>
        <a href="/">다양한 현장에 최적화된 솔루션을 제공합니다. <span data-feather="arrow-right"></span></a>
    </div>
    <div class="scroll_down" data-aos="fade-in">
        <div>SCROLL DOWN</div>
        <div class="line"></div>
    </div>
</div>