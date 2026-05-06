<?php
$page_title = "村落記憶｜人物與故事";
$meta_description = "西貢、沙頭角、大嶼山等新界村落在日治時期如何成為游擊隊據點與記憶載體，以及鄉民支援與日軍報復下的沉重歷史。";
$path_prefix = '../';
$people_stories_nav_current = 'village-memories';
include $path_prefix . 'inc/header.php';
?>

<main class="people-and-stories">
<?php include __DIR__ . '/_hero-nav.php'; ?>

    <section class="bg-texture-gray" id="village-memories">
        <div class="bg-left" style="background-image: url('../img/bg/bg_binocular_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>村落記憶</h3>
                            <h6>Villages That Remember</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_2.png" alt="Image 1" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_binocular_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>在香港抗戰史中，新界村落並不是單純的背景，而是敵後抵抗得以延續的重要根基。西貢、沙頭角、烏蛟騰、赤徑、黃毛應、大嶼山和元朗等地，都曾在日治時期留下抗戰足跡。這些地方有山路、海灣、祠堂、教堂、岩洞和民居，既是村民生活的空間，也是游擊隊藏身、轉移、補給和聯絡的據點。</p>

                        <p>村落之所以重要，是因為游擊戰離不開地方知識。熟悉山路的人能帶隊避開日軍巡邏；熟悉水道的人能安排船隻轉移；熟悉鄉里關係的人能判斷誰可信、哪裏安全、什麼時候可以行動。這些知識不是地圖上能完全看見的，而是世代生活在當地的人才能掌握的經驗。</p>

                        <p>許多村民在抗戰中提供了重要支援。他們為游擊隊提供糧食、衣物、藥物、住宿和情報，也協助照顧傷病隊員。有些村民把食物放在山中約定地點，讓隊員夜間取走；有些人以耕作、砍柴、探親或買賣作掩護，傳遞消息和觀察敵情。看似平凡的生活行動，在佔領時期往往具有抗戰意義。</p>

                        <p>然而，村落支援也伴隨巨大風險。日軍知道游擊隊依靠民眾，因此經常對村莊進行掃蕩、搜查、拷問和恐嚇。有些村民因不肯供出游擊隊行蹤而遭受酷刑，甚至犧牲生命。這些故事使村落記憶帶有沉重色彩：村莊不只是保護抗戰力量的地方，也常常是承受報復和苦難的地方。</p>

                        <p>村落記憶還保存在具體的地點之中。祠堂、舊屋、教堂、山洞、古廟、碼頭和紀念碑，都可能曾經見證秘密會議、物資收藏、傷員照護、交通接應或敵人搜捕。這些地方今天看似平靜，但一旦放回歷史脈絡，便能看見它們曾經承載的危險與勇氣。</p>

                        <p>因此，記錄村落記憶，就是記錄香港抗戰最貼近土地的一面。它提醒我們，歷史不只發生在政府大樓、軍事據點和城市中心，也發生在山村小路、漁港碼頭和鄉民家中。正是這些村落和居民，使香港在淪陷歲月中仍保有支援抗戰、守護同胞的力量。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>
