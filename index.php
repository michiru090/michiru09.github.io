<?php
include('koneksidb.php');
$query_sql = "SELECT * FROM tb_petugas";
$sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
$totaldata = mysqli_num_rows($sql);
$data = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>TeaTi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="image/zentea.png" type="image/x-icon" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="keywords" content="mz,mzcreatives,creatives,template,website,onepage,webdesign,portfolio,build website,themeforest" />
    <meta name="description" content="Now you can buy or use template from themeforest design by mzcreatives" />
    <meta property="og:title" content="One page website template for multipurpose website" />


    <!---Common css---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/common.css" rel="stylesheet" type="text/css" />
    <!----Media queries css--->
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/theme1024.css" rel="stylesheet" type="text/css" />
    <link href="css/theme990.css" rel="stylesheet" type="text/css" />
    <link href="css/theme768.css" rel="stylesheet" type="text/css" />
    <link href="css/theme480.css" rel="stylesheet" type="text/css" />
    <link href="css/theme320.css" rel="stylesheet" type="text/css" />
    <link href="css/theme319.css" rel="stylesheet" type="text/css" />
    <link href="css/quickweb.css" rel="stylesheet" type="text/css" />
    <link href="fonts/style.css" rel="stylesheet" type="text/css" />
    <link href="css/slider_css.css" type="text/css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700,900' rel='stylesheet' type='text/css' />



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/plugin.js"></script>
</head>

<body>
    <div class="main">
        <header class="header">
            <div class="container">
                <div class="col-12">
                    <div class="col-4 mb-11 logo-set">
                        <div class="logo"><img src="image/TeaTI.png" /></div>

                    </div>

                    <nav class="mob-menu-icon mb-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </nav>


                    <nav class="col-8 menu mob-menu pull-right">

                        <nav class="mob-menu-icon" style="padding: 26px 26px;width: 100%;box-sizing: border-box;border-bottom:2px solid #1565C0; ">

                            <span class="icon-bar slide-icon-menu-color"></span>
                            <span class="icon-bar slide-icon-menu-color"></span>
                            <span class="icon-bar slide-icon-menu-color"></span>

                        </nav>
                        <!-- <div class="menu-item-box center "><a href="#" class="menu_link">Home</a>

                            <div class="sub_cata" style="height: 200px;position: absolute;z-index: 99999;background-color: #000;margin-top: 29px;">
                                Test sub cata
                            
                            </div>

                        </div>-->
                        <div class="menu-item-box center "><a href="#home" class="menu-link">Home</a></div>
                        <div class="menu-item-box center "><a href="#about" class="menu-link">Best Seller</a></div>
                        <div class="menu-item-box center "><a href="#portfolio" class="menu-link">Menu</a></div>
                        <div class="menu-item-box center "><a href="#testimonial" class="menu-link">Testimonial</a></div>
                        <div class="menu-item-box center "><a href="#contact" class="menu-link">Contact us</a></div>


                    </nav>




                </div>
            </div>
        </header>
        <section class="banner top" id="home" style="background-image:url(image/JASMINETEA.png);">
            <div class="texture">
                <div class="container">
                    <div class="col-5 mb-12 mb-center banner-box">

                        <div class="banner_line1">The best tea from the Himalayan mountains and has many types of tea</div>
                        <div class="banner_brief_text">Tea is not just ordinary tea, but tea is also good to drink when the weather is cold and makes us very relaxed</div>
                        <div class="mb-center mb-12">
                            <div class="button-1">
                                <a href="#contact">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 mb-12 banner-image" style="position:relative;"><!--<img src="image/banner2_image.png"  />--></div>
                </div>
            </div>
            <!--  <div class="col-12 banner-extra-div color-black-s-light">

    </div>-->
        </section>
        <section class="choose-theme section-padding color-white" id="about">
            <div class="container">
                <div class="main-title font-color-m-light">Best Seller</div>
                <p class="main-content">Try it Now</p>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="image/blacktea.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/lemontea.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/chinesetea.jpeg" alt="Third slide">
                        </div>
                    </div>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            BlackTea
                            <div class="d-block w-100" style=""> Black tea was discovered in China in the mid-17th century. For many years, only green and oolong teas were consumed. The story of how black tea came to be is that an army from Jianxi entered the Fujian Province and camped at a nearby tea factory.
                            </div>
                            <a href="https://en.wikipedia.org/wiki/Black_tea">
                                <div class="view-template">More</div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            Lemontea
                            <div class="d-block w-100" style="">Modern iced tea with lemon is only about a century old with examples dating back to at least 1884. However hot tea with lemon has been a practice among western tea drinkers since European aristocrats started drinking it that way not long after tea was introduced to the continent
                            </div>
                            <a href="https://www.tribunnewswiki.com/2021/06/14/es-lemon-tea">
                                <div class="view-template">More</div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            Chinesetea
                            <div class="d-block w-100" style="">The history of tea dates back to ancient China, almost 5,000 years ago. According to legend, in 2732 B.C. Emperor Shen Nong discovered tea when leaves from a wild tree blew into a pot of boiling water in his garden. Finding the flavor enjoyable, he is said to have begun researching the plant.
                            </div>
                            <a href="https://en.wikipedia.org/wiki/Chinese_tea">
                                <div class="view-template">More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="multiple-template section-padding color-light-white" id="portfolio">
            <div class="container">



                <div class="main-title font-color-s-light">Menu</div>
                <p class="main-content">What is your flavour?</p>



                <?php


                do {
                    if ($totaldata == 0) {
                        echo '';
                    } else { ?>
                        <div class="col-4" style="padding:5px;">
                            <div style="height:235px;border:1px solid #f5f5f5;border-radius:3px;box-sizing:border-box">
                                <div class="template-header" style="padding: 10px 0px;background-color: rgb(255, 255, 255);border-bottom: 1px solid rgb(222, 222, 222); text-align:center;"><?php
                                                                                                                                                                                            echo $data['Nama'];
                                                                                                                                                                                            ?>
                                    <span style="height: 5px;width: 5px;background-color: #929292;display: block;border-radius: 15px;float:left;margin-left:10px;"></span>
                                    <span style="height: 5px;width: 5px;background-color: #929292;display: block;border-radius: 15px;float:left;margin-left:3px;"></span>
                                    <span style="height: 5px;width: 5px;background-color: #929292;display: block;border-radius: 15px;float:left;margin-left:3px;"></span>
                                    <div style="clear:both"></div>
                                </div>
                                <?php
                                $tempat_foto = "image/" . $data['Lokasi'];
                                // echo $tempat_foto;
                                ?>
                                <div class="temp-data-box" style="height:210px;background-color:#fff;position:relative;overflow:hidden;background-position:center 0px;background-size:cover;">
                                    <?php
                                    echo  "<img src=\"$tempat_foto\" style=\"width:100%;\" />" . "<br>";
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php }
                } while ($data = mysqli_fetch_assoc($sql));
                ?>
            </div>

        </section>
        <section class="team section-padding color-light-white" id="team">
            <div class="container">
                <div class="main-title font-color-m-light">Developer</div>
                <p class="main-content">Start from the beginning from the easiest and don't give up to learn more so that there is a future</p>


                <div class="col-4 padding-lr team-member">
                    <div class="team-image" style="position:relative;overflow:hidden;text-align:center"><img src="image/yudha.jpg" />
                        <!-- <div class="team-overlay">

                            <span style="width:1px;height:100%;display:inline-block;vertical-align:middle;"></span>
                            <div class="social-link" style="vertical-align: middle;display: inline-block;">
                                <a href="#"> <i class="quickweb-icon-facebook"></i></a><a href="#"> <i class="quickweb-icon-twitter"></i></a><a href="#"> <i class="quickweb-icon-gplus-1"></i></a>
                            </div>
                        </div> -->
                    </div>
                    <div class="team-name">Yudha Chen</div>
                    <div class="team-position">Developer</div>
                </div>
                <div class="col-4 padding-lr team-member">
                    <div class="team-image" style="position:relative;overflow:hidden;text-align:center"><img src="image/anonymous (1).jpeg" />
                        <!-- <div class="team-overlay">

                            <span style="width:1px;height:100%;display:inline-block;vertical-align:middle;"></span>
                            <div class="social-link" style="vertical-align: middle;display: inline-block;">
                                <a href="#"> <i class="quickweb-icon-facebook"></i></a><a href="#"> <i class="quickweb-icon-twitter"></i></a><a href="#"> <i class="quickweb-icon-gplus-1"></i></a>
                            </div>
                        </div> -->
                    </div>
                    <div class="team-name">Ronny Andrian</div>
                    <div class="team-position">Developer</div>
                </div>

                <div class="col-4 padding-lr team-member">
                    <div class="team-image" style="position:relative;overflow:hidden;text-align:center;position:relative"><img src="image/mka nando.jpg" />
                        <!-- <div class="team-overlay">

                            <span style="width:1px;height:100%;display:inline-block;vertical-align:middle;"></span>
                            <div class="social-link" style="vertical-align: middle;display: inline-block;">
                                <a href="#"> <i class="quickweb-icon-facebook"></i></a><a href="#"> <i class="quickweb-icon-twitter"></i></a><a href="#"> <i class="quickweb-icon-gplus-1"></i></a>
                            </div>
                        </div> -->
                    </div>
                    <div class="team-name">Fernando</div>
                    <div class="team-position">Developer</div>
                </div>

            </div>
        </section>
        <section class="happy-client section-padding color-white" id="testimonial">
            <div class="container">
                <div class="main-title font-color-m-light">Our Clients<i class="quickweb-icon-smile"></i>with us</div>


                <div id="main_slider">
                    <div class="thumb_slider" style="">
                        <div class="thumbs quote-box" style="padding:25px 0px;">
                            <p class="quote-text center"><i class="quickweb-icon-quote-left" style="padding:0px 15px;font-size: 22px;color:#7d7d7d;"></i>Green tea has been a staple in my daily routine for years now. The subtle, earthy flavor is incredibly soothing, and I love knowing that it's packed with antioxidants. It's the perfect drink to start my day with a calm and focused mind.
                                <i class="quickweb-icon-quote-right" style="padding:0px 15px;font-size: 22px;color:#7d7d7d;"></i>
                            </p>
                            <h2 class="quote-company-name center" style="margin-top:25px">- Sarah W - </h2>
                            <h5 class="quote-company-position center"></h5>


                        </div>
                        <div class="thumbs quote-box" style="padding:25px 0px;">
                            <p class="quote-text center"><i class="quickweb-icon-quote-left" style="padding:0px 15px;font-size: 22px;color:#7d7d7d;"></i>Lemon tea is my go-to beverage when I need a refreshing pick-me-up. The bright, tangy flavor of the lemon combined with the warmth of the tea is just unbeatable, and I find it helps soothe my throat and boost my immune system.
                                <i class="quickweb-icon-quote-right" style="padding:0px 15px;font-size: 22px;color:#7d7d7d;"></i>
                            </p>
                            <h2 class="quote-company-name center" style="margin-top:25px">- John M- </h2>
                            <h5 class="quote-company-position center"></h5>


                        </div>
                        <div class="thumbs quote-box" style="padding:25px 0px;">
                            <p class="quote-text center"><i class="quickweb-icon-quote-left" style="padding:0px 15px;font-size: 22px;color:#7d7d7d;"></i>There's nothing quite like the delicate fragrance of jasmine tea. It's like drinking a cup of relaxation. The floral notes are subtle yet distinct, making each sip a delightful experience. It's my favorite way to unwind after a long day.
                                <i class="quickweb-icon-quote-right" style="padding:0px 15px;font-size: 22px;color:#7d7d7d;"></i>
                            </p>
                            <h2 class="quote-company-name center" style="margin-top:25px">- Emily R- </h2>
                            <h5 class="quote-company-position center"></h5>


                        </div>
                    </div>
                    <div class="prev" style=""><i class="quickweb-icon-left-open-1"></i></div>
                    <div class="next" style=""><i class="quickweb-icon-right-open-1"></i></div>

                </div>
            </div>
        </section>

        <section class="map color-light-white" id="contact">
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Jl.%20Sei%20Deli%20No.18,%20Silalas,%20Kec.%20Medan%20Bar.,%20Kota%20Medan,%20Sumatera%20Utara%2020114+(IBBI%20UNIVERSITY)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>

        <section class="contact-address section-padding color-light-white">
            <div class="container">
                <div class="col-12">
                    <div class="contact-box col-4">
                        <div class="col-12 contact-icon"><i class="quickweb-icon-direction"></i></div>
                        <div class="col-12 contact-title">Jl. Sei Deli No.18<br /> Medan,North Sumatera</div>

                    </div>
                    <div class="contact-box col-4">
                        <div class="col-12 contact-icon"><i class="quickweb-icon-phone"></i></div>
                        <div class="col-12 contact-title">+628116541881</div>

                    </div>
                    <div class="contact-box col-4">
                        <div class="col-12 contact-icon"><i class="quickweb-icon-mail-alt"></i></div>
                        <div class="col-12 contact-title">ibbi.ac.id</div>
                    </div>


                </div>
            </div>
        </section>
        <section class="footer">

            <div class="bottom-footer">
                <div class="container">
                    <div class="col-12">
                        <div class="col-6 mb-6" style="color:#606873">
                            <div class="footer-menu" style="vertical-align:middle;">
                                <div class="col-3 footer-menu-box-link">Privacy policy</div>
                            </div>
                        </div>
                        <div class="col-6 mb-6 social right">
                            <div class="col-3"><i class="quickweb-icon-facebook"></i></div>
                            <div class="col-3"><i class="quickweb-icon-twitter"></i></div>
                            <div class="col-3"><i class="quickweb-icon-youtube"></i></div>
                        </div>
                    </div>
                    <div class="col-12 creator" style="padding-top:25px;">
                        <div class="col-6 copyright">© 2024 All Rights Reserved by TeaTI</div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script type="text/javascript">
        thumb_slider({

            thumbs_to_show: 1,
            thumbs_to_move: 1,
            thumbs_width: 0,
            thumbs_count: 0,
            timeout: 10000,
            parent_id: "main_slider",
            container_class: "thumb_slider",
            thumb_class: "thumbs",
            spacing: 0,
            processing: false,
            hover: false,
            next_class: "next",
            prev_class: "prev",
            timer: setTimeout(function() {})

        });
    </script>
</body>

</html>