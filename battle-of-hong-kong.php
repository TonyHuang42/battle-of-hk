<?php
$page_title = "";
$meta_description = "";

include 'inc/header.php';
?>

<main>
    <section class="home-hero">
        <img src="img/battle-of-hong-kong/banner.png" alt="Hero placeholder image" class="w-100 home-hero-img">
    </section>

    <section class="container section-padding battle-bg-left">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <img src="img/home/icon_logo.svg" alt="icon" class="icon-image">
                <h3 class="text-center">戰前背景</h3>
            </div>
        </div>
    </section>

    <section class="slider-section overflow-hidden">
        <div class="swiper battleSwiper">
            <div class="swiper-wrapper align-items-center">
                <!-- Original Slides -->
                <div class="swiper-slide">
                    <img src="img/battle-of-hong-kong/image_1_1.png" alt="Image 1" class="w-100">
                </div>
                <div class="swiper-slide">
                    <img src="img/battle-of-hong-kong/image_1_2.png" alt="Image 2" class="w-100">
                </div>
                <div class="swiper-slide">
                    <img src="img/battle-of-hong-kong/image_1_3.png" alt="Image 3" class="w-100">
                </div>
                <!-- Duplicated Slides for Swiper Loop Mode -->
                <div class="swiper-slide">
                    <img src="img/battle-of-hong-kong/image_1_1.png" alt="Image 1" class="w-100">
                </div>
                <div class="swiper-slide">
                    <img src="img/battle-of-hong-kong/image_1_2.png" alt="Image 2" class="w-100">
                </div>
                <div class="swiper-slide">
                    <img src="img/battle-of-hong-kong/image_1_3.png" alt="Image 3" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="container section-padding battle-bg-right">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p class="text-center">二十世紀上半葉的香港，不只是一座殖民地港口，也是一個連接華南、東南亞與世界航道的重要節點。抗日戰爭全面爆發後，香港因其特殊地位，成為物資流通、新聞出版、難民暫避與愛國救亡活動的重要空間。許多內地文化人、報人、學生與民主人士曾在此停留，繼續宣傳抗戰、支援祖國。與此同時，日軍自佔領廣州後，已逐步控制華南交通線，香港也被推向戰爭前線。從軍事角度看，香港面積雖小，卻扼守南中國海航道，靠近廣東沿岸，既可作為日軍南進東南亞的踏腳石，也可成為其海空運輸和情報控制的據點。英方雖在新界、九龍和香港島設有防線，但兵力、空軍、海軍支援均十分有限。戰雲壓境之時，香港已不再只是遠東商埠，而成為中國抗戰、太平洋戰爭與帝國爭奪交會的一個戰場。</p>
            </div>
        </div>
    </section>

    <section class="about-history section-padding">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5">
                    <article class="history-content h-100 d-flex flex-column justify-content-center" id="historyContent">
                        <h1 class="mb-3" id="historyYear">1880</h1>
                        <h4 class="mb-3" id="historyTitle">INITIAL GEOLOGICAL PROSPECTING</h4>
                        <p class="history-description mb-3" id="historyDescription1">
                            The deposit has a long standing history. Large scale geological research was carried out since the 1880s.
                        </p>
                        <p class="history-description mb-0" id="historyDescription2">
                            Being located at a considerable distance from communication routes, the mine was initially exploited irregularly. Its history is linked to the establishment of Soviet rule in Armenia, when mining enterprises, metallurgical plants, and mines were nationalized.
                        </p>
                    </article>
                </div>

                <div class="col-lg-2">
                    <nav class="history-timeline h-100 d-flex align-items-center justify-content-center" aria-label="History timeline">
                        <ul class="history-years-list list-unstyled m-0 p-0 d-flex flex-lg-column gap-3 gap-lg-4">
                            <li><button type="button" class="history-year-btn is-active" data-year="1880">1880</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1924">1924</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1936">1936</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1940">1940</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1962">1962</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1991">1991</button></li>
                            <li><button type="button" class="history-year-btn" data-year="2004">2004</button></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-5">
                    <div class="history-image-wrap h-100">
                        <img
                            src="https://picsum.photos/seed/history-1880/1100/780"
                            alt="Historical scene from 1880"
                            class="history-image w-100 h-100"
                            id="historyImage">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    (function() {
        const historyData = {
            1880: {
                title: "INITIAL GEOLOGICAL PROSPECTING",
                paragraphs: [
                    "The deposit has a long standing history. Large scale geological research was carried out since the 1880s.",
                    "Being located at a considerable distance from communication routes, the mine was initially exploited irregularly. Its history is linked to the establishment of Soviet rule in Armenia, when mining enterprises, metallurgical plants, and mines were nationalized."
                ],
                image: "https://picsum.photos/seed/history-1880/1100/780",
                imageAlt: "Historical scene from 1880"
            },
            1924: {
                title: "REORGANIZED INDUSTRIAL OPERATIONS",
                paragraphs: [
                    "By 1924, mining activities were consolidated under centralized management and new survey campaigns were started.",
                    "Infrastructure upgrades and workforce expansion improved ore extraction consistency and prepared the region for long-term production."
                ],
                image: "https://picsum.photos/seed/history-1924/1100/780",
                imageAlt: "Mining operations around 1924"
            },
            1936: {
                title: "INFRASTRUCTURE AND PROCESSING GROWTH",
                paragraphs: [
                    "In the mid-1930s, processing facilities and transportation links were improved to support increased output.",
                    "The district transformed from a small operation into an organized industrial center with expanding residential areas."
                ],
                image: "https://picsum.photos/seed/history-1936/1100/780",
                imageAlt: "Industrial expansion around 1936"
            },
            1940: {
                title: "STRATEGIC PRODUCTION PERIOD",
                paragraphs: [
                    "During the 1940s, production priorities shifted to meet broader national industrial demand.",
                    "Operational discipline, repair capacity, and technical specialization became key factors in maintaining performance."
                ],
                image: "https://picsum.photos/seed/history-1940/1100/780",
                imageAlt: "Historic production facilities from 1940"
            },
            1962: {
                title: "MODERNIZATION AND SCALE-UP",
                paragraphs: [
                    "A modernization phase in 1962 introduced newer equipment and improved extraction technologies.",
                    "These improvements enabled larger annual throughput and helped stabilize production quality over time."
                ],
                image: "https://picsum.photos/seed/history-1962/1100/780",
                imageAlt: "Modernized mining activity in 1962"
            },
            1991: {
                title: "TRANSITION TO A NEW ECONOMIC ERA",
                paragraphs: [
                    "After 1991, the operation entered a transition period shaped by significant political and economic change.",
                    "The site adapted to new market conditions while preserving core industrial capabilities and local employment."
                ],
                image: "https://picsum.photos/seed/history-1991/1100/780",
                imageAlt: "Mining region during the 1991 transition"
            },
            2004: {
                title: "RENEWED DEVELOPMENT STAGE",
                paragraphs: [
                    "From 2004 onward, investments focused on operational efficiency, safety standards, and environmental practices.",
                    "A renewed development strategy strengthened long-term planning and set the foundation for modern operations."
                ],
                image: "https://picsum.photos/seed/history-2004/1100/780",
                imageAlt: "Renewed development phase in 2004"
            }
        };

        const yearDisplay = document.getElementById("historyYear");
        const titleDisplay = document.getElementById("historyTitle");
        const description1Display = document.getElementById("historyDescription1");
        const description2Display = document.getElementById("historyDescription2");
        const imageDisplay = document.getElementById("historyImage");
        const buttons = document.querySelectorAll(".history-year-btn");

        if (!yearDisplay || !titleDisplay || !description1Display || !description2Display || !imageDisplay || !buttons.length) {
            return;
        }

        const applyHistoryState = (year) => {
            const data = historyData[year];
            if (!data) {
                return;
            }

            yearDisplay.textContent = year;
            titleDisplay.textContent = data.title;
            description1Display.textContent = data.paragraphs[0];
            description2Display.textContent = data.paragraphs[1];
            imageDisplay.src = data.image;
            imageDisplay.alt = data.imageAlt;

            buttons.forEach((button) => {
                button.classList.toggle("is-active", button.dataset.year === year);
            });
        };

        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                applyHistoryState(button.dataset.year);
            });
        });

        // Initialize Swiper
        const battleSwiper = new Swiper('.battleSwiper', {
            slidesPerView: 2,
            centeredSlides: true,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            // breakpoints: {
            //     0: {
            //         slidesPerView: 1.5,
            //         spaceBetween: 15,
            //     },
            //     768: {
            //         slidesPerView: 2,
            //         spaceBetween: 30,
            //     }
            // }
        });
    })();
</script>

<?php include 'inc/footer.php'; ?>