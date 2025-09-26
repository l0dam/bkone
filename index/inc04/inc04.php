<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$sh_inc_url = G5_THEME_URL.'/index/inc04';
add_stylesheet('<link rel="stylesheet" href="'.$sh_inc_url.'/style.css?ver='.G5_CSS_VER.'">', 0);
?>

<article id="inc04">
    <div class="notice">
        <div class="top">
            <div class="tit">
                <div class="section_cate">News & Notice</div>
                <h2>새로운 소식과 공지</h2>
            </div>
            <a class="section_more" href="/">VIEW MORE <span data-feather="plus"></span></a>
        </div>
        <ul>
            <?php 
                $pf_table='테이블명';
                $sql = " select * from {$g5['write_prefix']}{$pf_table} where wr_is_comment = 0 order by wr_num limit 0,2 ";
                $result = sql_query($sql);
                for ($i=0; $row = sql_fetch_array($result); $i++) {?>			
                <li>
                    <a href="/bbs/board.php?bo_table=<?php echo $pf_table ?>&wr_id=<?php echo $row['wr_id'] ?>">
                        <div class="cont">
                            <div><?php echo $row['wr_subject'] ?></div>
                            <p><?= cut_str(strip_tags($row['wr_content']),200, "..") ?></p>
                        </div>
                        <div class="date"><?php echo date("y.m.d", strtotime($row['wr_datetime'])) ?></div>
                    </a>
                </li>
            <?php }
            if($i == 0) {?>
                <li class="empty">게시물이 없습니다.</li>
            <?php }?>  
        </ul>
    </div>
    <div class="swiper-container inc04_slide">
        <ul class="swiper-wrapper">
            <?php 
                $pf_table='테이블명';
                $pf_width='1000';
                $sql = " select * from {$g5['write_prefix']}{$pf_table} where wr_is_comment = 0 order by wr_num limit 0,2 ";
                $result = sql_query($sql);
                for ($i=0; $row = sql_fetch_array($result); $i++) {
                $thumb = get_list_thumbnail($pf_table, $row['wr_id'], $pf_width, ''); ?>			
                <li class="swiper-slide">
                    <a href="/bbs/board.php?bo_table=<?php echo $pf_table ?>&wr_id=<?php echo $row['wr_id'] ?>">
                        <div class="img_cont">
                            <img src="<?php echo $thumb['src'] ?>" alt="샘플 서비스">
                        </div>
                    </a>
                </li>
            <?php }
            if($i == 0) {?>
                <li class="empty swiper-slide">게시물이 없습니다.</li>
            <?php }?>  
        </ul>
    </div>
</article>
<div id="sh_ft_btns">
    <div class="btns">
        <?php // 카카오버튼 사용시 btns에 'row2' 클래스 추가하세요.?>
        <a class="tel" href="tel:12345678"><i class="fa fa-phone"></i>1234-5678</a>
        <?php //<a class="kakao" href=""><i class="fa fa-comments-o"></i>카카오 문의</a>?>
    </div>
</div>
<script>
    const inc04_slide = new Swiper("#inc04 .inc04_slide", {
        loop:true,
        speed:1200,
        effect:"fade",
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        }
    })
</script>