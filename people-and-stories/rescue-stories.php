<?php
$page_title = "救援故事｜人物與故事";
$meta_description = "文化人秘密撤離、盟軍營救與分段交通線：香港淪陷後救援行動中的人道與無名支援。";
$path_prefix = '../';
$people_stories_nav_current = 'rescue-stories';
include $path_prefix . 'inc/header.php';
?>

<main class="people-and-stories">
<?php include __DIR__ . '/_hero-nav.php'; ?>

    <section class="bg-texture-gray" id="rescue-stories">
        <div class="bg-left" style="background-image: url('../img/bg/bg_binocular_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>救援故事</h3>
                            <h6>Stories of Rescue</h6>
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
                        <img src="../img/people-and-stories/image_4_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_4_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_4_3.png" alt="Image 3" class="w-100">
                    </div>
                    <!-- Duplicated Slides for Swiper Loop Mode -->
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_4_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_4_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_4_3.png" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_binocular_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>香港淪陷後，許多人被困在危險之中。抗日文化人、民主人士、地下工作者、英軍戰俘、盟軍飛行員，以及被日軍追捕的人員，都需要秘密撤離或藏身。救援工作因此成為香港抗戰中極具人道意義的一部分。它不只關乎軍事，也關乎生命、信任和希望。</p>

                        <p>日軍入城後，大批曾在香港從事抗日宣傳和文化工作的知識分子面臨搜捕威脅。地下組織和游擊力量迅速展開秘密營救，開闢多條逃生路線，把被困者從港島、九龍、新界和離島一步步送往內地。這些行動往往需要穿越日軍崗哨、避開密探和土匪，也要克服語言、身份和物資不足等困難。</p>

                        <p>每一次救援，背後都有細密安排。有人負責接頭，有人準備掩護身份，有人安排住宿，有人熟悉山路，有人掌握水道，有人提供船隻。被救者可能化裝成難民、商人、香客或普通鄉民，在交通員和游擊隊保護下分段轉移。安全抵達目的地的那一刻，往往凝聚了許多無名者的努力。</p>

                        <p>除了文化人，港九大隊也參與營救盟軍人員。英軍戰俘、港府人員和美國飛行員在逃亡或墜機後，都曾得到游擊隊和村民協助。這些救援行動顯示香港敵後抗戰不只是地方性的抵抗，也與世界反法西斯戰爭相連。透過營救與情報合作，香港的山村、海灣和地下交通線，成為盟軍戰爭網絡的一部分。</p>

                        <p>救援故事最動人的地方，在於它們常常由許多普通人共同完成。有人只提供一晚住宿，有人只帶過一段山路，有人只遞出一碗飯或一件衣服；但少了任何一環，整個行動都可能失敗。這些人未必知道被救者日後的身份和成就，卻仍在危險中伸出援手。</p>

                        <p>因此，救援故事不只是「成功逃生」的故事，也是香港人在佔領下守護生命的故事。它讓我們看到，抗戰的意義不只在於消滅敵人，也在於保護同胞、保存文化、維持希望。當城市陷入黑暗，願意帶別人走向安全的人，本身就是歷史中最值得被記住的光。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>
