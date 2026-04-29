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
    <link href="https://fonts.googleapis.com/css2?family=Chiron+Sung+HK:ital,wght@0,200..900;1,200..900&family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="img/logo/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/logo/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="img/logo/favicon/android-chrome-512x512.png"> -->
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand me-5 d-flex align-items-center gap-2" href="index.php">
                    <img src="img/home/icon_logo.svg" alt="logo" class="logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-end w-100 gap-0 column-gap-4">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                主頁
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="battle-of-hong-kong.php">
                                香港保衛戰
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="guerrilla-and-resistance.php">
                                游擊與抵抗
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="under-japanese-rule.php">
                                日治下的香港
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="people-and-stories.php">
                                人物與故事
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="historical-data.php">
                                歷史資料
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>