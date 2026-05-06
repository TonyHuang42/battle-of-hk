<?php
$page_title = "抗戰人物｜人物與故事";
$meta_description = "港九大隊成員與敵後工作者的多重面貌：從武裝行動到情報交通，理解個人抉擇與集體支援下的香港抗戰人物。";
$path_prefix = '../';
$people_stories_nav_current = 'resistance-figures';
include $path_prefix . 'inc/header.php';
?>

<main class="people-and-stories">
<?php include __DIR__ . '/_hero-nav.php'; ?>

    <section id="resistance-figures">
        <div class="bg-left" style="background-image: url('../img/bg/bg_binocular_r.png');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="../img/home/icon_ornament.svg" alt="icon" class="icon-image">
                            <h3>抗戰人物</h3>
                            <h6>Those Who Stood Up</h6>
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
                        <img src="../img/people-and-stories/image_1_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_1_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_1_3.png" alt="Image 3" class="w-100">
                    </div>
                    <!-- Duplicated Slides for Swiper Loop Mode -->
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_1_1.png" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_1_2.png" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/people-and-stories/image_1_3.png" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('../img/bg/bg_binocular_l.png');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>香港抗戰的歷史，不只是軍隊、戰役和政治局勢的歷史，也是一個個普通人在危難中作出選擇的歷史。當香港被戰火吞沒、城市進入日治之後，許多人被迫重新思考自己與家園、民族和時代的關係。有些人走上前線，有些人進入敵後，有些人留在城市暗處工作，也有人以家庭、村落和職業身份作掩護，默默支援抵抗。</p>

                        <p>港九大隊的成員來自不同背景，包括工人、學生、農民、漁民、原居民和愛國青年。他們並非一開始就是歷史書中的「英雄」，很多人原本只是香港日常社會中的普通一員。戰爭改變了他們的人生方向，也迫使他們面對艱難選擇：是沉默自保，還是冒險參與抗戰；是等待局勢改變，還是主動守護家園。</p>

                        <p>這些抗戰人物的工作形式十分多樣。有人參與武裝行動，突襲日軍哨所、破壞交通設施、打擊漢奸和偽警；有人負責情報、交通、翻譯、宣傳、後勤和醫療；也有人在市區中以「不帶槍的游擊隊」身份活動，依靠機智、關係和日常身份在敵人眼皮底下工作。抗戰因此不只屬於拿槍的人，也屬於每一個在危險中承擔任務的人。</p>

                        <p>不少人物的故事帶有沉重代價。有些人在戰鬥中犧牲，有些人在被捕後遭受酷刑，仍然保守秘密；有些人因掩護隊友、保護情報或支援游擊隊而失去生命。這些犧牲並不只是個人悲劇，也反映出日治時期香港敵後工作的危險程度。每一次行動背後，都可能牽連家庭、村落和整個地下網絡。</p>

                        <p>同時，抗戰人物也不應只被理解為孤立的英雄。他們之所以能夠行動，往往依靠家人、鄉親、同學、工友和地下組織的支援。許多人物背後都有一張人際網絡：有人提供情報，有人安排住宿，有人送信，有人照顧傷員。個人的勇氣，常常是在集體互助中被支撐起來的。</p>

                        <p>今天回望這些人物，不只是為了紀念他們的名字，更是為了理解他們所代表的精神。他們在香港最黑暗的歲月中作出選擇，把個人的安危放在家園與民族大義之後。正因為有這些人的行動，香港抗戰才不只是宏大的歷史敘述，而成為有血有肉、有面孔、有聲音的記憶。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $path_prefix . 'inc/accordion.php'; ?>
</main>

<?php include $path_prefix . 'inc/footer.php'; ?>
