<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$sh_inc_url = G5_THEME_URL.'/index/inc03';
add_stylesheet('<link rel="stylesheet" href="'.$sh_inc_url.'/style.css?ver='.G5_CSS_VER.'">', 0);
?>

<article id="inc03">
    <div class="swiper-container inc03_slide">
        <ul class="swiper-wrapper">
            <li class="swiper-slide">
                <img src="<?= $sh_inc_url ?>/img/img01.jpg" alt="샘플 기술력">
            </li>
            <li class="swiper-slide">
                <img src="<?= $sh_inc_url ?>/img/img02.jpg" alt="샘플 기술력">
            </li>
            <li class="swiper-slide">
                <img src="<?= $sh_inc_url ?>/img/img03.jpg" alt="샘플 기술력">
            </li>
        </ul>
    </div>
    <div class="about">
        <div class="section_cate">Abous Us</div>
        <h2>
            대한민국 산업 현장에서 검증된 기술력과
            <div>다양한 프로젝트 경험으로 성장해왔습니다.</div>
        </h2>
        <p class="pl">20년간 한 길만을 걸어온 용접 전문 기업입니다.
            자동차, 조선, 건설, 플랜트 등 다양한 산업 분야에서 수천 건 이상의 프로젝트를 
            성공적으로 수행하며 탄탄한 실적을 쌓아왔습니다.

            끊임없는 기술 개발과 최신 장비 도입으로 고품질, 고정밀 용접 솔루션을 제공하고 있으며,
            모든 작업은 국제 품질 기준(ISO, ASME 등)을 준수하여 진행합니다.</p>
        <dl class="count">
            <div class="num_container">
                <dt>경력</dt>
                <dd>
                    <span class="num" data-count="20">0</span>
                    <span>년</span>
                </dd>
            </div>
            <div class="num_container">
                <dt>완료 프로젝트</dt>
                <dd>
                    <span class="num comma" data-count="1200">0</span>  
                    <span>건</span>
                </dd>
            </div>
            <div class="num_container">
                <dt>고객 만족도</dt>
                <dd>
                    <span class="num" data-count="99">0</span>  
                    <span>%</span>
                </dd>
            </div>
        </dl>
    </div>
</article>

<script>
    const inc03_slide = new Swiper("#inc03 .inc03_slide", {
        loop:true,
        speed:1200,
        effect:"fade",
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        }
    });

    // 카운트
    function animateCounts() {
        $('.count .num').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({ countNum: $this.text().replace(/,/g, '')}).animate({
                countNum: countTo
            },
            {
                duration: 7000,
                easing:'linear',
                step: function() {
                    if ($this.hasClass('comma')) {
                        $this.text(Math.floor(this.countNum).toLocaleString());
                    } else {
                        $this.text(Math.floor(this.countNum));
                    }
                },
                complete: function() {
                    if ($this.hasClass('comma')) {
                        $this.text(this.countNum.toLocaleString());
                    } else {
                        $this.text(this.countNum);
                    }
                }
            });
        });
    }
    function checkIfInView() {
        var $count = $('.count');
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $count.offset().top;
        var distance = elementOffset - scrollTop;
        // 요소가 뷰포트 내에 있는지 확인
        if (distance <= windowHeight && distance >= 0) {
            $count.addClass('visible');
            animateCounts();
            // 애니메이션이 시작된 후 스크롤 이벤트 바인딩을 해제
            $(window).off('scroll', checkIfInView);
        }
    }
    $(window).on('scroll', checkIfInView);
    checkIfInView(); // 페이지 로드 시 이미 뷰포트 내에 있는지 확인
</script>