<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<footer id="sh_ft">
    <div class="top">
        <img src="<?= G5_THEME_URL ?>/hd/top_menu/logo.png" alt="<?php echo $config['cf_title'] ?>" />
        <div class="cs">
            <span>고객센터</span>
            <span class="num">1234-5678</span>
        </div>
    </div>
    <div class="info">고객사 주소 하단 정보가 들어가는 곳입니다.</div>
    <div class="btm">
        <div class="copy">Copyright ⓒ Sample All rights reserved.</div>
        <div class="link">
            <?php if($is_admin=='super'){?> 
                <a href="<?= G5_THEME_URL ?>/menu_set/designkits_menu_set.php">MENU</a>
            <?php }?>
            <div class="to_top"><span data-feather="chevron-up"></span>BACK TOP</div>
        </div>
    </div>
</footer> 

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>