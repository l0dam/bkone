<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$sh_inc_url = G5_THEME_URL.'/index/inc02';
add_stylesheet('<link rel="stylesheet" href="'.$sh_inc_url.'/style.css?ver='.G5_CSS_VER.'">', 0);
?>

<article id="inc02">
    <div class="tit">
        <div class="section_cate">Technologies & Certifications copy</div>
        <h2>기술 및 인증 </h2>
    </div>
    <div class="swiper-container inc02_slide">
        <ul class="swiper-wrapper">
            <?php 
                $pf_table='테이블명';
                $pf_width='235';
                $sql = " select * from {$g5['write_prefix']}{$pf_table} where wr_is_comment = 0 order by wr_num limit 0,6 ";
                $result = sql_query($sql);
                for ($i=0; $row = sql_fetch_array($result); $i++) {
                $thumb = get_list_thumbnail($pf_table, $row['wr_id'], $pf_width, ''); ?>			
                <li class="swiper-slide">
                    <a href="/bbs/board.php?bo_table=<?php echo $pf_table ?>&wr_id=<?php echo $row['wr_id'] ?>">
                        <div class="img_cont">
                            <img src="<?php echo $thumb['src'] ?>" alt="샘플 인증서">
                        </div>
                        <div class="txt">
                            <div><?php echo $row['wr_subject'] ?></div>
                            <p><?= cut_str(strip_tags($row['wr_content']),200, "..") ?></p>
                        </div>
                    </a>
                    <div class="bg"></div>
                </li>
            <?php }
            if($i == 0) {?>
                <li class="empty swiper-slide">게시물이 없습니다.</li>
            <?php }?>  
        </ul>
    </div>
    <div class="nav_container">
        <div class="prev_nav"><span data-feather="arrow-left"></span></div>
        <div class="next_nav"><span data-feather="arrow-right"></span></div>
    </div>
</article>
<script>
    const inc02_slide = new Swiper("#inc02 .inc02_slide", {
        loop:true,
        speed:1200,
        slidesPerView:2,
        centeredSlides:false,
        slideActiveClass: 'on',
        spaceBetween:10,
        navigation:{
            prevEl:"#inc02 .prev_nav",
            nextEl:"#inc02 .next_nav"
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        breakpoints:{
            1025:{
                slidesPerView:3,
                spaceBetween:40,
                centeredSlides:true
            },
            769:{
                slidesPerView:3,
                spaceBetween:20,
                centeredSlides:true
            },
            581:{
                slidesPerView:3,
                spaceBetween:15,
                centeredSlides:true
            },
            481:{
                slidesPerView:2,
                spaceBetween:15,
                centeredSlides:false
            },
            391:{
                slidesPerView:2,
                spaceBetween:15,
                centeredSlides:false
            }
        }
    });
</script>

