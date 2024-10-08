<!--===== FOOTER  STARTS=======-->
<div class="footer2-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-all-padding section-padding5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-logo2">
                                <div class="site-logo">
                                    <a href="/">
                                        <img src="assets/images/logo/logo.png" alt="" class="img-fluid" style="width: 100px; height: auto; filter:brightness(100)" />
                                    </a>
                                </div>
                                <p
                                    class="font-16 lineh-26 color weight-400 font-outfit margin-b24 margin-t">
                                    Providing comprehensive financial <br> solutions to ensure seamless compliance <br> and strategic growth
                                </p>
                                <div class="social2-links">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml1"><i class="fa-brands fa-google-plus-g"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml1"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml1"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="our-service-area">
                                <h1
                                    class="font-20 color-21 lineh-20 font-outfit margin-b24 weight-600">
                                    Our services
                                </h1>
                                <div class="servicefooter-list">
                                    <ul>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT id, name FROM services LIMIT 6");
                                        while ($data = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <li class="mb-2">
                                                <a
                                                    href="#"
                                                    class="font-outfit font-16 color-21 lineh-16 weight-400"><?= $data['name'] ?></a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2 col-md-6">
                            <div class="our-service-area">
                                <h1
                                    class="font-20 color-21 lineh-20 font-outfit margin-b24 weight-600">
                                    Useful Links
                                </h1>
                                <div class="servicefooter-list">
                                    <ul>
                                        <li>
                                            <a
                                                href="/"
                                                class="font-outfit font-16 color-21 lineh-16 weight-400">Home</a>
                                        </li>
                                        <li>
                                            <a
                                                href="about.php"
                                                class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#service"
                                                class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Our Services</a>
                                        </li>

                                        <li>
                                            <a
                                                href="terms-and-condition.php"
                                                class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Terms & Condition</a>
                                        </li>
                                        <li>
                                            <a
                                                href="privacy-policy.php"
                                                class="font-outfit font-16 color-21 lineh-16 weight-400 margin-t d-inline-block">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="contact-footer">
                                <h1
                                    class="font-20 color-21 lineh-20 font-outfit margin-b24 weight-600">
                                    Contact Us
                                </h1>
                                <div class="email4">
                                    <img src="assets/images/icons/email4.svg" alt="" />
                                    <a
                                        href="mailto:info@saaccounting.com"
                                        class="font-16 lineh-24 color-21 weight-400 font-outfit">info@saaccounting.com</a>
                                </div>
                                <div class="email4 margin-t">
                                    <img src="assets/images/icons/phone5.svg" alt="" />
                                    <a
                                        href="tel:93959913767"
                                        class="font-16 lineh-24 color-21 weight-400 font-outfit">+91 8011193258 / 93959 913767</a>
                                </div>
                                <div class="email4 margin-t">
                                    <img src="assets/images/icons/location3.svg" alt="" />
                                    <a
                                        href="https://maps.app.goo.gl/VvoN9mJHqvT2zTwb6?g_st=com.google.maps.preview.copy"
                                        class="font-16 lineh-24 color-21 weight-400 font-outfit">
                                        Hospital Road, sandigate <br>
                                        Kharupetia Darrang Assam 784115
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-10"></div>
    <div class="copyright">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright1">
                    <p class="font-outfit font-16 lineh-26 weight-400">
                        © 2024 SA Accounting | All Rights Reserved
                        <br>
                        Designed & Develop By <a href="http://penprogrammer.com" target="_blank" class="font-bold" rel="noopener noreferrer">Pen Programmer Team</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <img
        src="assets/images/elementor/elementor14.png"
        alt=""
        class="elementor-14" />
</div>
<!--===== FOOTER  END=======-->

<!--=====JS=======-->
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/swiper.bundle.js"></script>
<script src="assets/js/plugins/owl.carousel.min.js"></script>
<script src="assets/js/plugins/jquery-modal-video.min.js"></script>
<script src="assets/js/plugins/fontawesome.js"></script>
<script src="assets/js/plugins/counter.js"></script>
<script src="https://unpkg.com/aos%402.3.1/dist/aos.js"></script>
<script src="assets/js/plugins/jquery.nice-select.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
<script src="assets/js/plugins/propper.min.js"></script>
<script src="https://unpkg.com/imagesloaded%405.0.0/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/plugins/tippy.js"></script>
<script src="assets/js/plugins/jquery.nice-select.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/%40popperjs/core%402.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="assets/js/plugins/mobilemenu.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>