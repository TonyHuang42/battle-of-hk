<?php
$page_title = "戰役經過｜香港保衛戰";
$meta_description = "1941年12月8日至25日香港保衛戰的攻防節奏：邊境開戰、新界九龍失守、港島登陸與慘烈巷戰，重溫十八日的戰事經過。";
$path_prefix = '../';
$battle_nav_current = 'eighteen-days-of-battle';
include $path_prefix . 'inc/header.php';
?>

<main>
<?php include __DIR__ . '/_hero-nav.php'; ?>

    <section class="bg-texture-gray" id="eighteen-days-of-battle">
        <div class="bg-left" style="background-image: url('../img/bg/bg_plane_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>戰役經過</h3>
                            <h6>Eighteen Days of Battle</h6>
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
                        <img src="../img/battle-of-hong-kong/image_2_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_2_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_2_3.png" alt="Image 3" class="w-100">
                    </div>
                    <!-- Duplicated Slides for Swiper Loop Mode -->
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_2_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_2_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_2_3.png" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_plane_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>1941年12月8日，太平洋戰爭爆發後不久，日軍由深圳河以北向香港發動進攻，香港保衛戰正式開始。同日，日軍空襲啟德機場，迅速削弱守軍的空中力量。這場戰役從一開始便顯示出雙方實力的不平衡：日軍掌握主動權，並在兵力、火力和制空權上佔有明顯優勢。</p>

                        <p>戰事最初在新界展開。守軍沿新界北部部署防線，並嘗試利用道路、橋樑、山地和防禦工事拖慢日軍推進。然而，日軍進攻速度很快，守軍在多處承受巨大壓力。新界面積廣闊，防線難以處處兼顧；一旦日軍突破關鍵位置，守軍便不得不逐步南撤。</p>

                        <p>醉酒灣防線原本被視為阻延日軍進入九龍的重要屏障。它橫跨新界南部，以山地和工事構成防禦線，希望為香港島防守爭取時間。然而，這條防線很快被日軍突破。防線失守後，守軍被迫撤出新界，九龍半島隨即成為下一個戰場。</p>

                        <p>到12月13日前後，九龍半島基本失守，守軍撤往香港島，維多利亞港成為雙方之間最後的天然屏障。這一撤退使香港戰局急速收縮：原本橫跨新界、九龍和香港島的防守空間，變成孤島防禦。對守軍而言，補給、聯絡和部署越來越困難；對市民而言，炮火與恐慌則一步步迫近。</p>

                        <p>12月18日夜，日軍在香港島東北岸登陸，戰鬥進入最激烈階段。港島地形複雜，山路、峽谷、街道和建築物交錯，使戰鬥變得殘酷而混亂。守軍在黃泥涌峽、灣仔峽、赤柱等地頑強抵抗，不同部隊在孤立和混亂中仍努力守住陣地。</p>

                        <p>然而，日軍登陸後，港島防線逐漸被切割，守軍傷亡不斷增加，彈藥、糧食和醫療資源也迅速消耗。短短十八日內，香港由一座重要港口變成被圍困的戰場。香港保衛戰雖最終以失敗告終，但守軍與市民在戰火中承受的壓力、犧牲和苦難，成為香港二戰歷史中不可忽視的一章。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>
