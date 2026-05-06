<?php
$page_title = "戰前背景｜香港保衛戰";
$meta_description = "二十世紀上半葉香港在抗戰大局中的位置：物資與言論空間、日軍南進壓力與英軍防線的限制，回顧香港保衛戰前的危局。";
$path_prefix = '../';
$battle_nav_current = 'before-the-storm';
include $path_prefix . 'inc/header.php';
?>

<main>
    <?php include __DIR__ . '/_hero-nav.php'; ?>

    <section id="before-the-storm">
        <div class="bg-left" style="background-image: url('../img/bg/bg_plane_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>戰前背景</h3>
                            <h6>Before the Storm</h6>
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
                        <img src="../img/battle-of-hong-kong/image_1_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_1_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_1_3.png" alt="Image 3" class="w-100">
                    </div>
                    <!-- Duplicated Slides for Swiper Loop Mode -->
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_1_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_1_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/battle-of-hong-kong/image_1_3.png" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_plane_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>戰火真正來到香港之前，這座城市早已與中國抗戰緊密相連。1937年七七事變後，中國全面抗戰爆發，華北、華中、華南相繼成為戰場。雖然香港當時仍由英國殖民政府管治，並未立即被捲入軍事衝突，但它的地理位置、港口功能和社會網絡，使它很快成為戰時中國的重要後方空間。</p>

                        <p>香港位處南中國海要衝，背靠廣東，面向東南亞，是連接華南、海外華僑社群和國際航道的重要港口。戰前的香港不只是商業城市，也是物資、人員、新聞和資金流動的節點。對中國抗戰而言，香港曾是外來物資輸入、新聞出版、救亡宣傳和民間動員的重要基地。</p>

                        <p>隨着戰事擴大，大批難民、文化人、報人、學生和民主人士南下香港。他們在這裏暫避戰火，也繼續以寫作、出版、演講、籌款和組織活動支援抗戰。香港的戲院、報館、學校、社團和工會，都在不同程度上承載了抗日救亡的聲音。這使香港雖然身處殖民管治之下，卻與中國民族抗戰的命運緊密相連。</p>

                        <p>1938年10月，廣州淪陷，香港北面的戰略壓力急速上升。日軍控制廣州後，華南多條交通線落入其手中，香港與內地之間的安全距離大幅縮短。對日本而言，香港不只是英國殖民地，更是一個可用來控制南中國海、壓迫華南、支援南進戰略的重要據點。</p>

                        <p>英國方面雖在香港部署守軍和防線，但當時英國同時面對歐洲戰場與遠東危機，能投放到香港的兵力和資源十分有限。香港守軍包括英軍、加拿大軍、印度軍、香港義勇防衛軍等，但在空軍、海軍支援、重型裝備和戰略縱深方面都處於不利位置。香港是一個重要據點，卻也是一個難以長期孤立防守的據點。</p>

                        <p>因此，戰前香港的處境充滿矛盾。它既是繁華港口，也是戰略前線；既是中國抗戰的支援基地，也是日軍眼中的軍事目標；既有市民日常生活的延續，也有戰爭迫近的陰影。當1941年12月日軍越過深圳河時，香港並不是突然被戰爭擊中，而是早已站在歷史風暴的邊緣。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>