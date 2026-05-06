<?php
$page_title = "黑色聖誕｜香港保衛戰";
$meta_description = "1941年12月25日香港總督投降與「黑色聖誕」的歷史意義：十八日激戰落幕、日治時期開始與敵後抗戰的銜接。";
$path_prefix = '../';
$battle_nav_current = 'black-christmas';
include $path_prefix . 'inc/header.php';
?>

<main>
<?php include __DIR__ . '/_hero-nav.php'; ?>

    <section id="black-christmas">
        <div class="bg-left" style="background-image: url('../img/bg/bg_plane_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>黑色聖誕</h3>
                            <h6>Black Christmas</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <!-- Original Slides -->
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_3_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_3_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_3_3.png" alt="Image 3" class="w-100">
                    </div>
                    <!-- Duplicated Slides for Swiper Loop Mode -->
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_3_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_3_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_3_3.png" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_plane_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>1941年12月25日，本應是聖誕節，卻成為香港歷史上最沉重的日子之一。經過十八日激戰，香港守軍已面對極端困境。多處防線被日軍突破或切斷，傷兵和平民處境危急，糧食、彈藥和醫療資源都接近枯竭。</p>

                        <p>當日下午，香港總督楊慕琦代表英國殖民政府向日軍投降，香港保衛戰正式結束。這一天後來被稱為「黑色聖誕」。它不只是一個軍事投降的日期，更象徵香港原有秩序的崩塌：一座長期作為國際港口和殖民城市運作的地方，從此進入軍事佔領之下。</p>

                        <p>投降後，香港市民很快面對新的統治現實。日軍接管行政、交通、物資和治安，實施宵禁、搜查、拘捕和新聞控制。公共建築、倉庫、學校、碼頭和民居都可能被徵用，原有的社會生活被軍事命令重新安排。市民不只失去安全感，也失去對日常生活的基本掌控。</p>

                        <p>日治時期的苦難很快展開。糧食短缺、物價波動、軍票流通、強制疏散和疾病威脅，使普通家庭陷入長期不安。有人被迫離開香港，有人留在城中忍受飢餓，有人被拘禁或捲入勞役。對許多香港人而言，保衛戰結束並不代表戰爭遠去，而是另一種更漫長、更深入生活的苦難開始。</p>

                        <p>然而，「黑色聖誕」也不是香港抗戰的終點。正面戰場結束後，抵抗轉入敵後。中國共產黨領導的華南抗日游擊力量進入港九新界，聯絡鄉民、收集武器、建立據點，逐步組成港九大隊。香港的山林、村落、海灣和城市地下網絡，開始成為新的抗戰空間。</p>

                        <p>因此，12月25日在香港歷史中具有雙重意義。它是淪陷的標誌，記錄了城市被佔領的痛苦；也是敵後抗戰逐步展開的背景，提醒我們香港人的抵抗並未在投降一刻停止。黑暗從這一天開始加深，但守護家園、支援中國抗戰的努力，也在黑暗中延續下去。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>
