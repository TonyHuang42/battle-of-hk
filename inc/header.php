<?php
if (!isset($path_prefix)) {
    $path_prefix = '';
}
$nav_current_script = basename($_SERVER['SCRIPT_NAME'] ?? '');
$battle_hk_section_scripts = ['before-the-storm.php', 'eighteen-days-of-battle.php', 'black-christmas.php', 'wartime-timeline.php'];
$in_battle_hk_folder = in_array($nav_current_script, $battle_hk_section_scripts, true);
$battle_hk_url_base = $in_battle_hk_folder ? '' : ($path_prefix . 'battle-of-hong-kong/');
$nav_battle_section_current = ($nav_current_script === 'battle-of-hong-kong.php') || $in_battle_hk_folder;
$guerrilla_section_scripts = ['hk-kowloon-brigade.php', 'guerrilla-warfare.php', 'intelligence-and-rescue.php', 'underground-resistance.php'];
$in_guerrilla_folder = in_array($nav_current_script, $guerrilla_section_scripts, true);
$guerrilla_url_base = $in_guerrilla_folder ? '' : ($path_prefix . 'guerrilla-resistance/');
$nav_guerrilla_section_current = ($nav_current_script === 'guerrilla-resistance.php') || $in_guerrilla_folder;
$people_stories_section_scripts = ['resistance-figures.php', 'village-memories.php', 'mutual-aid.php', 'rescue-stories.php'];
$in_people_stories_folder = in_array($nav_current_script, $people_stories_section_scripts, true);
$people_stories_url_base = $in_people_stories_folder ? '' : ($path_prefix . 'people-and-stories/');
$nav_people_stories_section_current = ($nav_current_script === 'people-and-stories.php') || $in_people_stories_folder;
$under_japanese_section_scripts = ['occupation-rule.php', 'survival-and-rationing.php', 'economy-and-society.php', 'everyday-life-wartime.php'];
$in_under_japanese_folder = in_array($nav_current_script, $under_japanese_section_scripts, true);
$under_japanese_url_base = $in_under_japanese_folder ? '' : ($path_prefix . 'under-japanese-occupation/');
$nav_under_japanese_section_current = ($nav_current_script === 'under-japanese-occupation.php') || $in_under_japanese_folder;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Description -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars($path_prefix); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($path_prefix); ?>css/responsive.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo htmlspecialchars($path_prefix); ?>img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo htmlspecialchars($path_prefix); ?>img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo htmlspecialchars($path_prefix); ?>img/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo htmlspecialchars($path_prefix); ?>img/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo htmlspecialchars($path_prefix); ?>img/favicon/android-chrome-512x512.png">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand me-5 d-flex align-items-center gap-2" href="<?php echo htmlspecialchars($path_prefix); ?>index.php">
                    <img src="<?php echo htmlspecialchars($path_prefix); ?>img/home/logo.svg" alt="logo" class="logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-end w-100 gap-0 column-gap-4">
                        <li class="nav-item">
                            <a class="nav-link<?php echo $nav_current_script === 'index.php' ? ' nav-link--current' : ''; ?>" href="<?php echo htmlspecialchars($path_prefix); ?>index.php">
                                主頁
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle<?php echo $nav_battle_section_current ? ' nav-link--current' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                香港保衛戰
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($battle_hk_url_base); ?>before-the-storm.php">戰前背景</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($battle_hk_url_base); ?>eighteen-days-of-battle.php">戰役經過</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($battle_hk_url_base); ?>black-christmas.php">黑色聖誕</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($battle_hk_url_base); ?>wartime-timeline.php">戰時時間線</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle<?php echo $nav_guerrilla_section_current ? ' nav-link--current' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                游擊與抵抗
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($guerrilla_url_base); ?>hk-kowloon-brigade.php">港九大隊</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($guerrilla_url_base); ?>guerrilla-warfare.php">游擊戰</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($guerrilla_url_base); ?>intelligence-and-rescue.php">情報與營救</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($guerrilla_url_base); ?>underground-resistance.php">敵後抵抗網絡</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle<?php echo $nav_under_japanese_section_current ? ' nav-link--current' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                日治下的香港
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($under_japanese_url_base); ?>occupation-rule.php">佔領統治</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($under_japanese_url_base); ?>survival-and-rationing.php">生存與配給</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($under_japanese_url_base); ?>economy-and-society.php">經濟與社會</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($under_japanese_url_base); ?>everyday-life-wartime.php">戰時日常</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle<?php echo $nav_people_stories_section_current ? ' nav-link--current' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                人物與故事
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($people_stories_url_base); ?>resistance-figures.php">抗戰人物</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($people_stories_url_base); ?>village-memories.php">村落記憶</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($people_stories_url_base); ?>mutual-aid.php">民間互助</a></li>
                                <li><a class="dropdown-item" href="<?php echo htmlspecialchars($people_stories_url_base); ?>rescue-stories.php">救援故事</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>