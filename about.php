<?php
$page_title = "";
$meta_description = "";

include 'inc/header.php';
?>

<main>
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
    })();
</script>

<?php include 'inc/footer.php'; ?>