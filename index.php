<?php
if ($_SERVER ['SERVER_NAME'] == 'adultentertainmentexpo.dev.domain.com') {
$ane_link = 'http://www.noveltyexpo.dev.domain.com/';
$aee_trade_link = 'http://trade.adultentertainmentexpo.dev.domain.com/';
$aee_fan_link = 'http://fan.adultentertainmentexpo.dev.domain.com/';
$avnawards_link = 'http://avnawards.dev.domain.com/';
} else {
$ane_link = 'http://www.noveltyexpo.com/';
$aee_trade_link = 'http://trade.adultentertainmentexpo.com/';
$aee_fan_link = 'http://fan.adultentertainmentexpo.com/';
$avnawards_link = 'http://avnawards.avn.com/';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adult Entertainment Expo 2015</title>

        <link rel="icon" href="images/favicon.ico?new=yes" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom -->
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="top-carousel">
            <div class="top-social visible-xs">
                <a href="https://www.facebook.com/AVNSHOW" target="_blank"><img src="images/fb.png" alt="fb"></a> <a href="http://instagram.com/avnshow" target="_blank"><img src="images/in.png" alt="in" /></a> 
                <a href="https://twitter.com/AEexpo" target="_blank"><img src="images/tw.png" alt="tw" /></a>
            </div>
            <div id="carousel-example-generic" class="carousel slide"data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner hidden-xs">
                    <div class="item slide1 active">
                        <img src="images/slide-1.jpg" alt="">
                    </div>
                    <div class="item slide2">
                        <img src="images/slide-2.jpg" alt="">
                    </div>
                    <div class="item slide3">
                        <img src="images/slide-3.jpg" alt="">
                    </div>
                    <div class="item slide4">
                        <img src="images/slide-4.jpg" alt="">
                    </div>
                    <div class="item slide5">
                        <img src="images/slide-5.jpg" alt="">
                    </div>
                </div>

                <div class="carousel-inner visible-xs">
                    <div class="item slide1 active">
                        <img src="images/slide-xs-1.jpg" alt="">
                    </div>
                    <div class="item slide2">
                        <img src="images/slide-xs-2.jpg" alt="">
                    </div>
                    <div class="item slide3">
                        <img src="images/slide-xs-3.jpg" alt="">
                    </div>
                    <div class="item slide4">
                        <img src="images/slide-xs-4.jpg" alt="">
                    </div>
                    <div class="item slide5">
                        <img src="images/slide-xs-5.jpg" alt="">
                    </div>
                </div>
                <!-- Controls -->
                <div class="container">
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="icon-prev"></span></a> 
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="icon-next"></span></a>
                </div>
            </div>
        </div>

        <div class="btn-row">
            <section class="container">
                <div class="">
                    <div class="btns brow1">
                        <a href="<?=$ane_link?>" class="rowbtn btn-1" target="_blank"></a>
                    </div>
                    <div class="btns brow2">
                        <a href="<?=$aee_trade_link?>" class="rowbtn btn-2" target="_blank"></a>
                    </div>
                    <div class="btns brow3">
                        <a href="<?=$aee_fan_link?>" class="rowbtn btn-3" target="_blank"></a>
                    </div>
                    <div class="btns brow4">
                        <a href="<?=$avnawards_link?>" class="rowbtn btn-4" target="_blank"></a>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <section class="container footer">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-lg-push-4 quicknav-div">
                        <ul class="quicknav list-unstyled">
                            <li><a href="#" onClick="comingsoon()">Buy Tickets</a></li>
                            <li><a href="#" onClick="comingsoon()">Get a Room</a></li>
                            <li><a href="http://www.avn.com" target="_blank">AVN.com</a></li>
                        </ul>
                    </div>

                    <div
                        class="col-lg-4 col-md-8 col-sm-6 hidden-xs newsletter    col-lg-push-4">
                        <h3>SIGN UP FOR OUR NEWSLETTER</h3>
                        <form action="<?=$aee_fan_link?>/subscribe/" method="post" onsubmit="return checkForm();">
                            <input type="hidden" name="subform" value="1" />
                            <div>
                                <input type="text" name="email" id="email" placeholder="Enter a Valid Email Address" />
                                <button type="submit" class="btn-white">Submit</button>
                            </div>
                        </form>
                        <script type="text/javascript">
                            function checkForm() {
                                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                if (!re.test($('#email').val())) {
                                    alert('Wrong email!');
                                    return false;
                                } else {
                                    return true;
                                }
                            }
                        </script>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-3 col-xs-12 social col-lg-push-4">
                        <a href="https://www.facebook.com/AVNSHOW" target="_blank"><img src="images/fb.png" alt="fb"></a> <a href="http://instagram.com/avnshow" target="_blank"><img src="images/in.png" alt="in" /></a> <a href="https://twitter.com/AEexpo" target="_blank"><img src="images/tw.png" alt="tw" /></a>
                    </div>
                    <div class="avnlogo">
                        <img src="images/footer-xs-logo.png">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12     col-lg-pull-8">
                        <div class="col-sm-10 col-sm-push-1 col-xs-10 col-xs-push-1 flinks col-lg-push-0 col-lg-12">
                            <p>© 2014 AVNAwards.com is a property of AVN Media Network. All
                                rights reserved. Reproduction in whole or in part is prohibited.
                            </p>
                            <p class="priv-usc-cont">
                                <a class=""><a href="http://www.avn.com/about-us/privacy-policy.html" target="_blank">Privacy Policy</a></a>&nbsp;|&nbsp;<a class=""><a href="http://www.avn.com/about-us/2257-notice.html" target="_blank">18 U.S.C. 2257</a></a>&nbsp;|&nbsp;<a class=""><a href="mailto:aeetrade@avn.com" target="_blank">Contact us</a></a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>



        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                $('.btn-row .btn-1').hover(function () {
                    $('.carousel .item').removeClass('active');
                    $('.carousel .slide2').addClass('active');
                });
                $('.btn-row .btn-2').hover(function () {
                    $('.carousel .item').removeClass('active');
                    $('.carousel .slide3').addClass('active');
                });
                $('.btn-row .btn-3').hover(function () {
                    $('.carousel .item').removeClass('active');
                    $('.carousel .slide4').addClass('active');
                });
                $('.btn-row .btn-4').hover(function () {
                    $('.carousel .item').removeClass('active');
                    $('.carousel .slide5').addClass('active');
                })
            });
            function comingsoon() {
                alert('Coming Soon!');
            }
        </script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-2521515-47', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
