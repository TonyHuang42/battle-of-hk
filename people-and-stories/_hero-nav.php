    <section class="hero">
        <img src="../img/people-and-stories/banner.png" alt="人物與故事" class="hero-img" style="object-position: 35% center;">
        <img src="../img/home/section_header-人物與故事.svg" alt="人物與故事" class="hero-title under-japanese-occupation-hero-title">
    </section>

    <section class="border-bottom">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="resistance-figures.php"<?php echo ($people_stories_nav_current ?? '') === 'resistance-figures' ? ' aria-current="page"' : ''; ?>>抗戰人物</a>
                <a href="village-memories.php"<?php echo ($people_stories_nav_current ?? '') === 'village-memories' ? ' aria-current="page"' : ''; ?>>村落記憶</a>
                <a href="mutual-aid.php"<?php echo ($people_stories_nav_current ?? '') === 'mutual-aid' ? ' aria-current="page"' : ''; ?>>民間互助</a>
                <a href="rescue-stories.php"<?php echo ($people_stories_nav_current ?? '') === 'rescue-stories' ? ' aria-current="page"' : ''; ?>>救援故事</a>
            </div>
        </div>
    </section>
