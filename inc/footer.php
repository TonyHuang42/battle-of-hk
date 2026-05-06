    <footer class="d-flex align-items-center">
        <div class="container">
            <div class="copyright">
                <div>© <?php echo date('Y'); ?> 香港抗戰歷史 版權所有</div>
                <!-- <div class="terms">
                        <a href="terms.php">Terms of Use</a>
                        <a href="privacy.php">Privacy Policy</a>
                    </div> -->
            </div>
        </div>
    </footer>

    <?php if (!isset($path_prefix)) { $path_prefix = ''; } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="<?php echo htmlspecialchars($path_prefix); ?>js/script.js"></script>
    </body>

    </html>