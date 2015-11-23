<?php
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shopdrobe - Choose wisely, Dress nicely</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <?php if ( ! $detect->isMobile() ): ?>
        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <?php endif ?>

    <link rel="stylesheet" type="text/css" href="css/taggd.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div class="modal fade contact popup-wrapper" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-body ">
                    <h5>Have questions? Contact with us!</h5>
                    <form id="contForm"  action="send.php" name="contact">
                        <label for="email">
                            *Email address:
                            <input type="email" name="email" required="required" spellcheck="false" placeholder="example@gmail.com" id="email">
                        </label>
                        <label>
                            Subject:
                            <input type="text" name="subject" spellcheck="true" placeholder="Subject" id="subject">
                        </label>
                        <label>
                            *Message:
                            <textarea class="animated" name="message" spellcheck="true" required="required" id="message" placeholder="Put your message here" style="overflow: hidden; word-wrap: break-word; resize: horizontal;"></textarea>
                        </label>
                        <button type="submit" id="sendmail">Send</button>
                    </form>
                        <!-- <div class="text-center"><span>Fields marked with* are mandatory</span></div> -->
                </div>
            </div>
        </div>
    </div>

    <div id="fullpage">

        <div class="main-screen section">
            <div class="container">
                <h1 class="header">bring fashion into your life</h1>
                <div class="row">
                    <div class="col-sm-5 header sub">
                        with
                    </div>
                    <div class="col-sm-7 header-logo">
                        <img src="img/shopdrobe.png">
                    </div>
                </div>
                <div class="row">
                    <button class="get-it-btn">
                        <div class="shirt"></div>
                        <div class="cta-btn">Get it now!</div>
                    </button>
                </div>
            </div>
        </div>
        <div class="poll-screen section">
            <div class="before_after_slider iphone">
                <div class="color">
                    <img src="img/iphone-poll1.png" class="poll-photo-1" alt="" />
                </div>
                <div class="black_white">
                    <img src="img/iphone-poll2.png" class="poll-photo-2" alt="black_white" />
                </div>
            </div>
            <img class="iphone-photo" src="img/iphone-poll.png">
            <img id="photo2" class="bg-poll-photo2" src="img/photo-poll2.png">
            <img id="photo1" class="bg-poll-photo1" src="img/photo-poll1.png">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 poll-text">
                        <div class="poll-header">
                            <h2>WHICH ONE IS BETTER?</h2>
                        </div>
                        <div class="poll-header">
                            <h3>Swipe photos and vote <br/>for the best one!</h3>
                        </div>
                        <div class="poll-header">
                            <h3>With us you can dive into shopping in seconds!</h3>
                        </div>
                    </div>
                    <div class="try-it">
                        <img src="img/arrow.png">
                        <p>Move it!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="look-screen section">
            <img id="shirt" src="img/shirt.png" class="bg-look-shirt">
            <img id="coat" src="img/coat.png" class="bg-look-coat">
            <img id="pants" src="img/pants.png" class="bg-look-pants">
            <img id="shoes" src="img/shoes.png" class="bg-look-shoes">
            <div class="iphone">
                <img class="taggd" src="img/iphonegrey.png">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5 look-text">
                        <div class="look-header">
                            <h2>TAG THE <br />BRAND</h2>
                        </div>
                        <div class="look-header">
                            <h3>Let us know what you wear!</h3>
                        </div>
                        <div class="look-header">
                            <h3>Provide us details and receive related content</h3>
                        </div>
                    </div>
                    <div class="try-it-look">
                        <div class="text">
                            <p>Click it!</p>
                        </div>
                        <img src="img/arrowlook.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-screen section">
            <img class="question" src="img/question.png">
            <div class="iphone">
                <img src="img/iphonegold2.png">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 explore-text">
                        <div class="explore-header">
                            <h2>EXPLORE AND<br/>INSPIRE</h2>
                        </div>
                        <div class="explore-header">
                            <h3>Join our fashion community!</h3>
                        </div>
                        <div class="explore-header">
                            <h3>Exchange ideas with other fashionistas</h3>
                        </div>
                    </div>
                    <div class="try-it-explore">
                        <div class="text">
                            <p>Try it</p>
                        </div>
                        <img src="img/arrowexplore.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="choose-wisely section">
            <div class="container">
                <div class="row">
                    <h2 class="header">CHOOSE WISELY, DRESS NICELY!</h2>
                    <button class="get-it-btn">
                        <img src="img/footerbutton.png">
                    </button>
                </div>
                <footer class="container">
                    <div class="row">
                        <div class="copyright col-sm-4">
                            <div class="row links">
                                <small class="col-sm-6">© 2015 Shopdrobe</small>
                                <a class="col-sm-6" data-toggle="modal" data-target="#contactUs">Contact us</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row icons">
                                <div class="col-sm-4">
                                    <a href="https://twitter.com/shopdrobe" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="https://www.facebook.com/shopdrobe" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="https://instagram.com/shopdrobe/" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row links">
                                <a href="policy.html" target="_blank" class="col-sm-6">Privacy Policy</a>
                                <a href="terms.html" target="_blank" class="col-sm-6">Terms & Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery.taggd.min.js"></script>

    <?php if ( ! $detect->isMobile() ): ?>
        <script src="js/jquery.fullPage.min.js"></script>
    <?php endif ?>

    <script src="js/main.js"></script>
    <script src="js/test.js"></script>
</body>
</html>