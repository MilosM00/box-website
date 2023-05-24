<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c28c53cee.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="style/index.css">
    <script src="js/hamburger.js" defer></script>
    <script src="js/instructors.js" defer></script>
    <script src="js/countdown.js" defer></script>
    <script src="js/modal-video.js" defer></script>
    <script src="js/modal-gallery.js" defer></script>
    <title>Box Website</title>
</head>
<body>

    <?php include("navbar.php"); ?>


    <!-- START HERO -->
    <div class="hero">
        <img src="images/box-hero.webp" alt="Box Website" />
        <div class="hero-overlay">
            <p class="text-one">
                Sign up to our school for boxing now!
            </p>

            <p class="text-two">
                ''It ain't about how hard you can hit.
                It's about how hard you can get hit and keep moving forward.''
            </p>

            <div>
                <a href="#about">Learn More</a>
                <a href="#pricelist">Pricelist</a>
            </div>
        </div>
    </div>
    <!-- END HERO -->


    <!-- START ABOUT -->
    <div class="about" id="about">

        <p class="section-title">About Us</p>
        <p class="horisontal-line"></p>

        <div class="about-inline">
            <div>
                <i class="fa fa-fist-raised"></i>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Accusantium dignissimos labore eligendi corporis cumque.
                </p>
            </div>

            <div>
                <i class="fa fa-dumbbell"></i>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Accusantium dignissimos labore eligendi corporis cumque.
                </p>
            </div>

            <div>
                <i class="fa fa-trophy"></i>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Accusantium dignissimos labore eligendi corporis cumque.
                </p>
            </div>
        </div>

    </div>
    <!-- END ABOUT -->


    <!-- START CTA -->
    <div class="cta-section">
        <p>Check out our prices!</p>
        <a href="#pricelist">Pricelist</a>
    </div>
    <!-- END CTA -->


    <!-- START INSTRUCTORS -->
    <div class="instructors" id="instructors">
        
        <p class="section-title">Our Instructors</p>
        <p class="horisontal-line"></p>

        <div class="instructors-inline">
            <div id="instructor-div">
                <img src="images/instructor1.webp" alt="Box Website" />
                <div class="instructor-name">
                    <p>Carl Brown</p>
                </div>
                <div class="instructor-image-overlay"></div>
                <div class="social-media-overlay">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            
            <div id="instructor-div">
                <img src="images/instructor2.jfif" alt="Box Website" />
                <div class="instructor-name">
                    <p>Hank Johnson</p>
                </div>
                <div class="instructor-image-overlay"></div>
                <div class="social-media-overlay">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            
            <div id="instructor-div">
                <img src="images/instructor3.jpg" alt="Box Website" />
                <div class="instructor-name">
                    <p>Jason Smith</p>
                </div>
                <div class="instructor-image-overlay"></div>
                <div class="social-media-overlay">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>

    </div>
    <!-- END INSTRUCTORS -->


    <!-- START COUNTDOWN -->
    <div class="countdown">
        <div class="countdown-overlay">

            <p class="countdown-title">
                Be quick, grab an incredible discount of 30% on our prices!
            </p>
            <p class="horisontal-line-countdown"></p>

            <div class="timer-inline">
                <div id="timer"></div>
                <div id="timer"></div>
                <div id="timer"></div>
                <div id="timer"></div>
            </div>

            <div class="time-left">
                <div><p>D</p></div>
                <div><p>H</p></div>
                <div><p>M</p></div>
                <div><p>S</p></div>
            </div>

            <a href="#pricelist" id="countdown-pricelist">PRICELIST</a>
            
            <p id="time-end">TIME EXPIRED!</p>
            
        </div>
    </div>
    <!-- END COUNTDOWN -->

    <!-- START PRICELIST -->
    <div class="pricelist" id="pricelist">
        <p class="section-title">Our Packages</p>
        <p class="horisontal-line"></p>

        <div class="inline-pricelist">
            <div>
                <p><b>EASY</b></p>
                <div class="price">35$ <del>50$</del></div>
                <span><b>PER MONTH</b></span>
                <ul>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                </ul>
                <a href="form.php?pack=Easy">BUY</a>
                <div class="sale">-30%</div>
            </div>

            <div>
                <p><b>MEDIUM</b></p>
                <div class="price">56$ <del>80$</del></div>
                <span><b>PER MONTH</b></span>
                <ul>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                </ul>
                <a href="form.php?pack=Medium">BUY</a>
                <div class="sale">-30%</div>
            </div>

            <div>
                <p><b>HARD</b></p>
                <div class="price">91$ <del>130$</del></div>
                <span><b>PER MONTH</b></span>
                <ul>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                    <li>◆ Lorem ipsum dolor sit</li>
                </ul>
                <a href="form.php?pack=Hard">BUY</a>
                <div class="sale">-30%</div>
            </div>
        </div>
    </div>
    <!-- END PRICELIST -->


    <!-- START VIDEO -->
    <div class="video">
        <img src="images/box-video.jpg" alt="Box Webiste" />
        <div class="video-overlay">
            <i class="fa fa-play" id="open-button"></i>
        </div>
    </div>
    <!-- END VIDEO -->

    <!-- START MODAL VIDEO -->
    <div class="modal-video">
        <div>
            <i class="fa fa-times" id="close-button"></i>
            <iframe src="https://www.youtube.com/embed/jNQXAC9IVRw"></iframe>
        </div>
    </div>
    <!-- END MODAL VIDEO-->


    <!-- START GALLERY -->
    <div class="gallery" id="gallery">
        <div class="section-title">Gallery</div>
        <div class="horisontal-line"></div>

        <div class="grid-gallery">
            <div>
                <img src="images/box-hero.webp" alt="Box Website" />
                <div class="gallery-overlay"></div>
            </div>
            
            <div>
                <img src="images/boxing-countdown.webp" alt="Box Website" />
                <div class="gallery-overlay"></div>
            </div>
            
            <div>
                <img src="images/box-video.jpg" alt="Box Website" />
                <div class="gallery-overlay"></div>
            </div>
            
            <div>
                <img src="images/gallery4.jpg" alt="Box Website" />
                <div class="gallery-overlay"></div>
            </div>
            
            <div>
                <img src="images/gallery5.jpg" alt="Box Website" />
                <div class="gallery-overlay"></div>
            </div>
            
            <div>
                <img src="images/gallery6.png" alt="Box Website" />
                <div class="gallery-overlay"></div>
            </div>
        </div>

    </div>
    <!-- END GALLERY -->

    <!-- START MODAL GALLERY -->
    <div class="modal-gallery">
        <div>
            <img id="modal-image-gallery" src="" alt="Box Website" />
            <div id="close-modal-gallery" class="fa fa-times"></div>
        </div>
    </div>
    <!-- END MODAL GALLERY -->


    <!-- START CONTACT -->
    <div class="contact" id="contact">
        <div>
            <i class="fa fa-envelope"></i>
            <p>boxing@gmail.com</p>
            <a href="mailto:boxing@gmail.com">CONTACT US</a>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>055 789 789</p>
            <a href="mailto:boxing@gmail.com">CALL US</a>
        </div>
    </div>
    <!-- END CONTACT -->


    <!-- START TESTIMONIALS -->
    <div class="testimonials" id="testimonials">

        <p class="section-title">What Our Clients Say</p>
        <p class="horisontal-line"></p>

        <div class="testimonials-inline">
    
            <div>
                <div>
                    <img src="images/testimonial1.jpg" alt="Box Website" />
                    <p>
                        JOHN ROSS <br />
                        <span style="color:#000;">Actor</span>
                    </p>
                </div>
    
                <p>Lorem ipsum dolor sit amet adipisicing elit lorem ipsum dolor.</p>
            </div>
    
            <div>
                <div>
                    <img src="images/testimonial2.jpg" alt="Box Website" />
                    <p>
                        ANNA PINK <br />
                        <span style="color:#000;">Doctor</span>
                    </p>
                </div>
    
                <p>Lorem ipsum dolor sit amet adipisicing elit lorem ipsum dolor.</p>
            </div>
    
            <div>
                <div>
                    <img src="images/testimonial3.jpg" alt="Box Website" />
                    <p>
                        CARL BROWN <br />
                        <span style="color:#000;">Developer</span>
                    </p>
                </div>
    
                <p>Lorem ipsum dolor sit amet adipisicing elit lorem ipsum dolor.</p>
            </div>

        </div>

    </div>
    <!-- END TESTIMONIALS -->

    
    <?php include("footer.php"); ?>
    
</body>
</html>