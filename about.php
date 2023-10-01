<?php include './header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Support My School</title>
    <!-- font awesome icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href='../supportMySchool-web/css/styles.css' />
    <link rel="stylesheet" href="../supportMySchool-web/css/about.css" />
</head>

<body>
    <div class="aboutpage_container">
        <div class="image_desc_wrapper">

            <div class="img_container">
                <img src="./images/supportmyschool.jpg" alt="supportmyschool">
            </div>
            <div class="desc">

                <h2>How Did We Come Together?</h2>
                <p>
                    Support My School, established in 2023 by five young individuals during an event organized by the Accountability Lab, is a web platform dedicated to fostering transparency and accountability within the education sector.
                </p>
                <p>Our mission is to harness the power of technology to drive positive change within Nepal's education system through civic engagement and innovation. Additionally, we are committed to serving all public schools in Nepal by providing an online platform where they can voice their concerns, share feedback, and collaborate to discover meaningful solutions
                </p>
            </div>
        </div>

        <!-- values of our company -->
        <div class="values_wrapper">
            <h1>Our Core Values</h1>
            <ul id="list_wrapper">
                <li id="items"></li>
                <p id="desc"></p>
            </ul>
        </div>

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div>
                <h1>meet our team members</h1>
                <p>
                We are a group of young individuals and each member brings a unique set of skills and a passionate dedication to transparency, accountability, civic engagement, innovation, equality, and empowerment. Together, we are a force for positive change in the education sector.
                </p>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img">
                        <img src="./images/Richa.jpg" alt="richaneupane" />
                    </div>
                    <div class="desc_title">
                        <p>richa neupane</p>
                        <p>co-founder & team leader</p>
                        <div class="socialmedia-icons">
                            <i class="fa-brands fa-linkedin" ></i>
                            <i class="fa-brands fa-square-facebook"></i>
                            <i class="fa-brands fa-square-instagram"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="./images/manisha.jpg" alt="manishadeshar" />
                    </div>
                    <div class="desc_title">
                        <p>manisha deshar</p>
                        <p>co-founder & data scientist</p>
                        <div class="socialmedia-icons">
                            <i class="fa-brands fa-linkedin" ></i>
                            <i class="fa-brands fa-square-facebook"></i>
                            <i class="fa-brands fa-square-instagram"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="./images/samidha.jpg" alt="samidharimal" />
                    </div>
                    <div class="desc_title">
                        <p>samidha rimal</p>
                        <p>co-founder & data scientist</p>
                        <div class="socialmedia-icons">
                            <i class="fa-brands fa-linkedin" ></i>
                            <i class="fa-brands fa-square-facebook"></i>
                            <i class="fa-brands fa-square-instagram"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="./images/sarila.jpg" alt="sarilanyakhusi" />
                    </div>
                    <div class="desc_title">
                        <p>sarila nyakhusi</p>
                        <p>co-founder & software engineer</p>
                        <div class="socialmedia-icons">
                            <i class="fa-brands fa-linkedin" ></i>
                            <i class="fa-brands fa-square-facebook"></i>
                            <i class="fa-brands fa-square-instagram"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="./images/himal.png" alt="himaljrtamang" />
                    </div>
                    <div class="desc_title">
                        <p>himal JR tamang</p>
                        <p>co-founder & web developer</p>
                        <div class="socialmedia-icons">
                            <i class="fa-brands fa-linkedin" ></i>
                            <i class="fa-brands fa-square-facebook"></i>
                            <i class="fa-brands fa-square-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next" style='color: #FF6B6B; margin-right: 30px'></div>
            <div class="swiper-button-prev" style='color: #FF6B6B; margin-left: 30px'></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
    </div>

    <script src="../supportMySchool-web/js/values.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            // spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    //   spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    //   spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    //   spaceBetween: 30,
                },
            },
        });
    </script>
</body>

</html>
<?php include './footer.php'; ?>