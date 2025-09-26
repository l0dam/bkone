<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$sh_inc_url = G5_THEME_URL.'/index/inc01';
add_stylesheet('<link rel="stylesheet" href="'.$sh_inc_url.'/style.css?ver='.G5_CSS_VER.'">', 0);
include_once(G5_PATH.'/lib/thumbnail.lib.php');
?>

<article id="inc01">
    <div class="bg"></div>
    <div class="tit">
        <div class="section_cate">Our Services</div>
        <h2>신뢰받는 용접 기술,<div>고객 만족을 최우선으로</div></h2>
        <a class="section_more" href="/">VIEW MORE <span data-feather="plus"></span></a>
    </div>
    <div class="swiper-container inc01_slide">
        <ul class="swiper-wrapper">
            <?php 
                $pf_table='테이블명';
                $pf_width='1000';
                $sql = " select * from {$g5['write_prefix']}{$pf_table} where wr_is_comment = 0 order by wr_num limit 0,6 ";
                $result = sql_query($sql);
                for ($i=0; $row = sql_fetch_array($result); $i++) {
                $thumb = get_list_thumbnail($pf_table, $row['wr_id'], $pf_width, ''); ?>			
                <li class="swiper-slide">
                    <a href="/bbs/board.php?bo_table=<?php echo $pf_table ?>&wr_id=<?php echo $row['wr_id'] ?>">
                        <div class="img_cont">
                            <img src="<?php echo $thumb['src'] ?>" alt="샘플 서비스">
                        </div>
                        <div class="txt">
                            <div><?php echo $row['wr_subject'] ?></div>
                            <p><?= cut_str(strip_tags($row['wr_content']),200, "..") ?></p>
                        </div>
                    </a>
                </li>
            <?php }
            if($i == 0) {?>
                <li class="empty swiper-slide">게시물이 없습니다.</li>
            <?php }?>  
        </ul>
        <div class="controller">
            <div class="nav_container">
                <div class="prev_nav"><span data-feather="arrow-left"></span></div>
                <div class="next_nav"><span data-feather="arrow-right"></span></div>
            </div>
            <div class="pager"></div>
        </div>
    </div>
</article>
<script>
    const inc01_slide = new Swiper("#inc01 .inc01_slide", {
        loop:true,
        speed:1200,
        spaceBetween:10,
        slidesPerView:1.2,
        centeredSlides:true,
        navigation:{
            prevEl:".prev_nav",
            nextEl:".next_nav"
        },
        pagination:{
            el:"#inc01 .pager",
            type:"progressbar",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        breakpoints:{
            1581:{
                spaceBetween:30,
                slidesPerView:3.2,
                centeredSlides:false
            },
            1025:{
                spaceBetween:20,
                slidesPerView:2.8,
                centeredSlides:false
            },
            769:{
                spaceBetween:20,
                slidesPerView:3,
                centeredSlides:false
            },
            481:{
                spaceBetween:15,
                slidesPerView:2,
                centeredSlides:false
            },
            391:{
                spaceBetween:12,
                slidesPerView:1.25,
                centeredSlides:true
            }
        }
    });
</script>