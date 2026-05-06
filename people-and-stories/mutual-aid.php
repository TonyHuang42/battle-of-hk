<?php
$page_title = "民間互助｜人物與故事";
$meta_description = "日治下缺糧缺藥的年月裏，鄰里分享、家庭掩護與婦女日常身份如何支撐游擊隊與保存社會信任。";
$path_prefix = '../';
$people_stories_nav_current = 'mutual-aid';
include $path_prefix . 'inc/header.php';
?>

<main class="people-and-stories">
<?php include __DIR__ . '/_hero-nav.php'; ?>

    <section id="mutual-aid">
        <div class="bg-left" style="background-image: url('../img/bg/bg_binocular_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>民間互助</h3>
                            <h6>Acts of Courage and Care</h6>
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
                        <img src="../img/people-and-stories/image_3.png" alt="Image 1" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_binocular_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>戰爭時期的互助，很多時候並不驚天動地，卻往往關乎生死。日治下的香港缺糧、缺藥、缺安全感，市民在壓迫中努力維持家庭和社群生活。當官方制度無法保護普通人，民間之間的照應、信任和支援，就成為許多人活下去的重要依靠。</p>

                        <p>這種互助有時表現在最基本的生活層面。有人分享糧食，有人照顧鄰居，有人收留無處可去的親友，有人幫忙照看老人和孩子。當物資稀缺時，一碗飯、一點鹽、一小包藥，都可能十分珍貴。這些微小的分享，在戰時並不只是善意，也是維持社會不致完全崩散的力量。</p>

                        <p>在敵後抗戰中，民間互助更成為抵抗網絡的一部分。有人借出房屋作臨時藏身處，有人幫忙收藏文件或物資，有人替游擊隊送飯、送藥、洗衣、帶路或傳信。許多人沒有正式身份，也不一定被記錄在名單之中，但他們的支援使地下工作和游擊行動得以持續。</p>

                        <p>婦女和家庭在其中扮演了特別重要的角色。她們常常利用日常身份作掩護，以探親、買菜、洗衣、送飯、照顧病人等方式完成危險任務。有些母親和姐妹收留隊員，有些妻子協助隱藏情報，有些婦女冒險穿過檢查站傳遞消息。她們的勇氣不一定以戰鬥形式出現，卻同樣支撐了抗戰。</p>

                        <p>民間互助也連接了游擊隊與市民。游擊隊打擊土匪、日偽哨所和欺壓百姓的敵人，保護村民利益；村民則以糧食、情報、住宿和人脈回應。這種關係不是單向的命令，而是在共同危難中建立的信任。正因如此，港九大隊才能在日軍嚴密控制下長期活動。</p>

                        <p>今天談民間互助，是為了看見抗戰中那些不容易被寫進戰報的力量。它們不一定有響亮的口號，也不一定留下清楚姓名，卻構成了香港人在黑暗中彼此扶持的證明。當一個社會面對壓迫時，願意幫助他人、守住信任，本身就是一種珍貴的抵抗。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>
