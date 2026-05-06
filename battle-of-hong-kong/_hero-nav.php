    <section class="hero">
        <img src="../img/battle-of-hong-kong/banner.png" alt="" class="hero-img" aria-hidden="true" style="object-position: 55% center;">
        <img src="../img/home/section_header-香港保衛戰.svg" alt="香港保衛戰" class="hero-title battle-of-hong-kong-hero-title">
    </section>

    <section class="border-bottom">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="before-the-storm.php"<?php echo ($battle_nav_current ?? '') === 'before-the-storm' ? ' aria-current="page"' : ''; ?>>戰前背景</a>
                <a href="eighteen-days-of-battle.php"<?php echo ($battle_nav_current ?? '') === 'eighteen-days-of-battle' ? ' aria-current="page"' : ''; ?>>戰役經過</a>
                <a href="black-christmas.php"<?php echo ($battle_nav_current ?? '') === 'black-christmas' ? ' aria-current="page"' : ''; ?>>黑色聖誕</a>
                <a href="wartime-timeline.php"<?php echo ($battle_nav_current ?? '') === 'wartime-timeline' ? ' aria-current="page"' : ''; ?>>戰時時間線</a>
            </div>
        </div>
    </section>
