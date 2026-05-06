<?php
$page_title = "游擊戰｜游擊與抵抗";
$meta_description = "港九大隊在新界與港九的機動戰術：地形利用、伏擊突襲、紙彈宣傳與以小搏大的敵後作戰方式。";
$path_prefix = '../';
$guerrilla_nav_current = 'guerrilla-warfare';
include $path_prefix . 'inc/header.php';
?>

<main>
<?php include __DIR__ . '/_hero-nav.php'; ?>

    <section class="bg-texture-gray" id="guerrilla-warfare">
        <div class="bg-left" style="background-image: url('../img/bg/bg_rifle_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>游擊戰</h3>
                            <h6>Guerrilla Warfare</h6>
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
                        <img src="../img/guerrilla-resistance/image_2_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/guerrilla-resistance/image_2_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/guerrilla-resistance/image_2_3.png" alt="Image 3" class="w-100">
                    </div>
                    <!-- Duplicated Slides for Swiper Loop Mode -->
                    <div class="swiper-slide">
                        <img src="../img/guerrilla-resistance/image_2_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/guerrilla-resistance/image_2_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/guerrilla-resistance/image_2_3.png" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_rifle_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>港九大隊面對的敵人，是擁有軍事、警察、情報和行政力量的佔領者。日軍控制主要道路、港口、城市設施和軍事據點，在兵力與裝備上都遠勝游擊隊。因此，港九大隊不能以正面決戰的方式與敵人硬碰，而必須採取靈活機動的游擊戰術。這種戰術的核心，是以小股力量尋找敵人的弱點，在適當時間突然出擊，再迅速撤離。</p>

                        <p>香港的地形為游擊戰提供了特殊條件。新界和離島有山嶺、叢林、海灣、村落和曲折小路，既便於隱蔽，也便於轉移。西貢、大嶼山、沙頭角、元朗等地，都成為游擊隊活動的重要區域。隊員熟悉本地地形，並得到村民、漁民和交通員協助，能夠在日軍難以掌握的路線中穿梭行動。</p>

                        <p>游擊戰並不只是一種軍事打法，也是一種生存方式。隊員往往白天分散隱蔽，夜間行動；敵人掃蕩時化整為零，敵人鬆懈時集中突擊。面對日軍大規模搜捕，游擊隊會利用山洞、密林、祠堂、寺院或民居藏身；當需要出擊時，又會以伏擊、突襲、爆破和短槍行動打擊敵人據點。</p>

                        <p>港九大隊的作戰目標包括日軍哨所、偽警察局、交通設施、軍事據點和重要物資。這些行動未必每次規模龐大，但往往能造成很大的心理和戰略效果。例如襲擊啟德機場、爆破九龍窩打老道火車橋、突襲日偽軍哨所和警察局等，都不只是軍事行動，也是在告訴敵人：香港雖已淪陷，但抵抗仍在發生。</p>

                        <p>除了武裝襲擊，港九大隊也重視政治和心理層面的戰鬥。「紙彈戰」便是其中一種形式。透過傳單、標語和宣傳品，游擊隊揭露日軍暴行，鼓勵市民保持抗戰信心，也向敵偽人員施加心理壓力。在佔領者嚴控新聞和言論的環境下，一張傳單有時也能成為打破沉默的武器。</p>

                        <p>因此，香港的游擊戰不是單純的山林戰，也不是零散的襲擊故事。它是一種結合地形、群眾、情報、宣傳和機動作戰的敵後抵抗方式。游擊隊以有限力量牽制敵人，以熟悉的地方對抗強大的佔領機器，也讓香港在淪陷歲月中保留了一條持續抵抗的線索。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>
