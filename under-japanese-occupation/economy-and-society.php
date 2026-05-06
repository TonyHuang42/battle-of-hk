<?php
$page_title = "經濟與社會｜日治下的香港";
$meta_description = "軍票、通脹與黑市下的日治香港：貿易停頓、失業蔓延與依靠親鄰網絡的社會應對。";
$path_prefix = '../';
$under_japanese_nav_current = 'economy-and-society';
include $path_prefix . 'inc/header.php';
?>

<main class="under-japanese-occupation">
<?php include __DIR__ . '/_hero-nav.php'; ?>

    <section id="economy-and-society">
        <div class="bg-left" style="background-image: url('../img/bg/bg_radio_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>經濟與社會</h3>
                            <h6>A City Under Strain</h6>
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
                        <img src="../img/under-japanese-occupation/image_3_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/under-japanese-occupation/image_3_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/under-japanese-occupation/image_3_3.png" alt="Image 3" class="w-100">
                    </div>
                    <!-- Duplicated Slides for Swiper Loop Mode -->
                    <div class="swiper-slide">
                        <img src="../img/under-japanese-occupation/image_3_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/under-japanese-occupation/image_3_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/under-japanese-occupation/image_3_3.png" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_radio_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>日治時期，香港的經濟秩序遭到嚴重破壞。戰前香港依靠港口貿易、金融、航運、轉口和工業活動維持繁榮，但戰爭與佔領使這套系統幾乎停頓。海上交通受限，商業網絡中斷，許多工廠和商店缺乏原料與顧客，失業和貧困迅速蔓延。昔日繁忙的城市，變成物資短缺、交易萎縮的佔領地。</p>

                        <p>日本軍票是日治經濟中最具代表性的壓迫工具之一。日軍強迫市民使用軍票，並逐步取代原有貨幣流通。對佔領者而言，這是一種控制經濟和榨取資源的手段；對市民而言，卻意味着多年積蓄可能迅速失去價值。當貨幣不再可信，家庭財產和商業信用都受到沉重打擊。</p>

                        <p>隨着軍票濫發和物資不足，通脹與黑市交易變得普遍。官方價格往往買不到足夠物資，市民只好透過私下交換、黑市買賣或以物易物來維持生活。食物、藥品、布料、燃料和日用品，都可能成為高價資源。經濟困境令社會關係變得緊張，也使貧富差距和生存壓力更加明顯。</p>

                        <p>佔領經濟還製造了新的社會分化。有些人因與日軍、偽組織或黑市活動關係密切而獲利；另一些人則因拒絕合作、失去工作、被徵用財產或缺乏糧食而陷入困境。戰爭迫使市民不斷在道德、現實和生存之間掙扎。合作、妥協、抵抗和求生，有時並不是容易區分的選項。</p>

                        <p>城市中的社會服務亦受到巨大衝擊。教育停頓或被改造，醫療資源短缺，慈善和互助機構難以正常運作。許多家庭因疏散、死亡、失業或拘禁而破碎，兒童、老人和病人特別脆弱。在這種環境下，親族、鄰里、同鄉和村落網絡變得更加重要，因為官方制度已無法可靠地保護普通人。</p>

                        <p>因此，日治下的經濟與社會變化，不只是「物價上升」或「貨幣改變」這些表面現象。它是一場由佔領造成的全面生活崩壞：工作不穩、貨幣失信、物資稀缺、人心受壓。也正因如此，那些在困境中仍願意分享食物、傳遞消息、照顧鄰里和支援抵抗的人，才顯得格外珍貴。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>
