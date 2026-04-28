<?php
$page_title = "Home";
$meta_description = "Home page";

include 'inc/header.php';
?>

<main>
    <section class="home-hero">
        <img src="https://placehold.co/1920x760?text=Hero+Image+Placeholder" alt="Hero placeholder image" class="w-100 home-hero-img">
    </section>

    <section class="home-intro section-padding">
        <div class="container">
            <p class="home-intro-text text-center mb-0">
                Ito Ryokan was a beloved ryokan (traditional Japanese inn) known for its cuisine and cormorant fishing. We will introduce you to little-known episodes from that time, the thoughts of the proprietress, and the story of the inn as it comes back to life, tracing its history through the ages.
            </p>
        </div>
    </section>

    <section class="home-benefits section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="mb-2">Privileges &amp; Benefits</h3>
                <p class="mb-0">
                    Explora Club Membership offers a curated collection of privileges and benefits, each designed to enrich and elevate your journey.
                </p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg">
                    <article class="benefit-card h-100">
                        <img src="https://placehold.co/500x350?text=Placeholder" alt="香港保衛戰" class="w-100 benefit-card-image mb-3">
                        <h6 class="mb-2">香港保衛戰</h6>
                        <p class="mb-0">了解香港在二戰前的戰略地位、日軍入侵的經過，以及香港淪陷前後的關鍵時刻。</p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg">
                    <article class="benefit-card h-100">
                        <img src="https://placehold.co/500x350?text=Placeholder" alt="游擊與抵抗" class="w-100 benefit-card-image mb-3">
                        <h6 class="mb-2">游擊與抵抗</h6>
                        <p class="mb-0">認識港九大隊及香港抗日游擊隊如何在敵後展開情報、營救、突襲與民間抵抗行動。</p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg">
                    <article class="benefit-card h-100">
                        <img src="https://placehold.co/500x350?text=Placeholder" alt="日治下的香港" class="w-100 benefit-card-image mb-3">
                        <h6 class="mb-2">日治下的香港</h6>
                        <p class="mb-0">探索日軍佔領期間香港市民面對的統治、糧食配給、經濟困境與日常生存經驗。</p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg">
                    <article class="benefit-card h-100">
                        <img src="https://placehold.co/500x350?text=Placeholder" alt="人物與故事" class="w-100 benefit-card-image mb-3">
                        <h6 class="mb-2">人物與故事</h6>
                        <p class="mb-0">透過抗戰人物、村落記憶與民間互助故事，看見香港人在戰火中的勇氣與抉擇。</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>