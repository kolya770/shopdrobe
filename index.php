<?php
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect();

    if($detect->isMobile()) {
        header('Location: http://shopdrobeapp.com/m.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shopdrobe - Choose wisely, Dress nicely</title>
    <meta name="description" content="Shopdrobe is a unique social-networking platform for shopaholics and people who like to set trends and share their own style with others">

    <meta property="og:title" content="Shopdrobe - Choose Wisely, Dress Nicely!" />
    <meta property="og:description" content="Shopdrobe is a unique social-networking platform for 'shopaholics' and people who like to set trends and share their own style with others" />
    <meta property="og:url" content="http://shopdrobeapp.com/" />
    <meta property="og:image" content="http://shopdrobeapp.com/img/social-logo.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <?php if ( ! $detect->isMobile() ): ?>
        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <?php endif ?>
    <link rel="stylesheet" type="text/css" href="css/taggd.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <style type="text/css">
        /*
         * PreLoader
         * css from http://joaopereirawd.github.io/fakeLoader.js/
         */
        .spinner1{width:40px;height:40px;position:relative}.double-bounce1,.double-bounce2{width:100%;height:100%;border-radius:50%;background-color:#fff;opacity:.6;position:absolute;top:0;left:0;-webkit-animation:bounce 2s infinite ease-in-out;animation:bounce 2s infinite ease-in-out}.double-bounce2{-webkit-animation-delay:-1s;animation-delay:-1s}@-webkit-keyframes bounce{0%,100%{-webkit-transform:scale(0)}50%{-webkit-transform:scale(1)}}@keyframes bounce{0%,100%{transform:scale(0);-webkit-transform:scale(0)}50%{transform:scale(1);-webkit-transform:scale(1)}}.spinner2{width:40px;height:40px;position:relative}.container1>div,.container2>div,.container3>div{width:6px;height:6px;background-color:#fff;border-radius:100%;position:absolute;-webkit-animation:bouncedelay 1.2s infinite ease-in-out;animation:bouncedelay 1.2s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner2 .spinner-container{position:absolute;width:100%;height:100%}.container2{-webkit-transform:rotateZ(45deg);transform:rotateZ(45deg)}.container3{-webkit-transform:rotateZ(90deg);transform:rotateZ(90deg)}.circle1{top:0;left:0}.circle2{top:0;right:0}.circle3{right:0;bottom:0}.circle4{left:0;bottom:0}.container2 .circle1{-webkit-animation-delay:-1.1s;animation-delay:-1.1s}.container3 .circle1{-webkit-animation-delay:-1s;animation-delay:-1s}.container1 .circle2{-webkit-animation-delay:-.9s;animation-delay:-.9s}.container2 .circle2{-webkit-animation-delay:-.8s;animation-delay:-.8s}.container3 .circle2{-webkit-animation-delay:-.7s;animation-delay:-.7s}.container1 .circle3{-webkit-animation-delay:-.6s;animation-delay:-.6s}.container2 .circle3{-webkit-animation-delay:-.5s;animation-delay:-.5s}.container3 .circle3{-webkit-animation-delay:-.4s;animation-delay:-.4s}.container1 .circle4{-webkit-animation-delay:-.3s;animation-delay:-.3s}.container2 .circle4{-webkit-animation-delay:-.2s;animation-delay:-.2s}.container3 .circle4{-webkit-animation-delay:-.1s;animation-delay:-.1s}@-webkit-keyframes bouncedelay{0%,100%,80%{-webkit-transform:scale(0)}40%{-webkit-transform:scale(1)}}@keyframes bouncedelay{0%,100%,80%{transform:scale(0);-webkit-transform:scale(0)}40%{transform:scale(1);-webkit-transform:scale(1)}}.spinner3{width:40px;height:40px;position:relative;-webkit-animation:rotate 2s infinite linear;animation:rotate 2s infinite linear}.dot1,.dot2{width:60%;height:60%;display:inline-block;position:absolute;top:0;background-color:#fff;border-radius:100%;-webkit-animation:bounce 2s infinite ease-in-out;animation:bounce 2s infinite ease-in-out}.dot2{top:auto;bottom:0;-webkit-animation-delay:-1s;animation-delay:-1s}@-webkit-keyframes rotate{100%{-webkit-transform:rotate(360deg)}}@keyframes rotate{100%{transform:rotate(360deg);-webkit-transform:rotate(360deg)}}@-webkit-keyframes bounce{0%,100%{-webkit-transform:scale(0)}50%{-webkit-transform:scale(1)}}@keyframes bounce{0%,100%{transform:scale(0);-webkit-transform:scale(0)}50%{transform:scale(1);-webkit-transform:scale(1)}}.spinner4{width:30px;height:30px;background-color:#fff;-webkit-animation:rotateplane 1.2s infinite ease-in-out;animation:rotateplane 1.2s infinite ease-in-out}@-webkit-keyframes rotateplane{0%{-webkit-transform:perspective(120px)}50%{-webkit-transform:perspective(120px) rotateY(180deg)}100%{-webkit-transform:perspective(120px) rotateY(180deg) rotateX(180deg)}}@keyframes rotateplane{0%{transform:perspective(120px) rotateX(0deg) rotateY(0deg);-webkit-transform:perspective(120px) rotateX(0deg) rotateY(0deg)}50%{transform:perspective(120px) rotateX(-180.1deg) rotateY(0deg);-webkit-transform:perspective(120px) rotateX(-180.1deg) rotateY(0deg)}100%{transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg);-webkit-transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg)}}.spinner5{width:32px;height:32px;position:relative}.cube1,.cube2{background-color:#fff;width:10px;height:10px;position:absolute;top:0;left:0;-webkit-animation:cubemove 1.8s infinite ease-in-out;animation:cubemove 1.8s infinite ease-in-out}.cube2{-webkit-animation-delay:-.9s;animation-delay:-.9s}@-webkit-keyframes cubemove{25%{-webkit-transform:translateX(42px) rotate(-90deg) scale(0.5)}50%{-webkit-transform:translateX(42px) translateY(42px) rotate(-180deg)}75%{-webkit-transform:translateX(0px) translateY(42px) rotate(-270deg) scale(0.5)}100%{-webkit-transform:rotate(-360deg)}}@keyframes cubemove{25%{transform:translateX(42px) rotate(-90deg) scale(0.5);-webkit-transform:translateX(42px) rotate(-90deg) scale(0.5)}50%{transform:translateX(42px) translateY(42px) rotate(-179deg);-webkit-transform:translateX(42px) translateY(42px) rotate(-179deg)}50.1%{transform:translateX(42px) translateY(42px) rotate(-180deg);-webkit-transform:translateX(42px) translateY(42px) rotate(-180deg)}75%{transform:translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);-webkit-transform:translateX(0px) translateY(42px) rotate(-270deg) scale(0.5)}100%{transform:rotate(-360deg);-webkit-transform:rotate(-360deg)}}.spinner6{width:50px;height:30px;text-align:center}.spinner6>div{background-color:#fff;height:100%;width:6px;margin-left:2px;display:inline-block;-webkit-animation:stretchdelay 1.2s infinite ease-in-out;animation:stretchdelay 1.2s infinite ease-in-out}.spinner6 .rect2{-webkit-animation-delay:-1.1s;animation-delay:-1.1s}.spinner6 .rect3{-webkit-animation-delay:-1s;animation-delay:-1s}.spinner6 .rect4{-webkit-animation-delay:-.9s;animation-delay:-.9s}.spinner6 .rect5{-webkit-animation-delay:-.8s;animation-delay:-.8s}@-webkit-keyframes stretchdelay{0%,100%,40%{-webkit-transform:scaleY(0.4)}20%{-webkit-transform:scaleY(1)}}@keyframes stretchdelay{0%,100%,40%{transform:scaleY(0.4);-webkit-transform:scaleY(0.4)}20%{transform:scaleY(1);-webkit-transform:scaleY(1)}}.spinner7{width:90px;height:30px;text-align:center}.spinner7>div{background-color:#fff;height:15px;width:15px;margin-left:3px;border-radius:50%;display:inline-block;-webkit-animation:stretchdelay .7s infinite ease-in-out;animation:stretchdelay .7s infinite ease-in-out}.spinner7 .circ2{-webkit-animation-delay:-.6s;animation-delay:-.6s}.spinner7 .circ3{-webkit-animation-delay:-.5s;animation-delay:-.5s}.spinner7 .circ4{-webkit-animation-delay:-.4s;animation-delay:-.4s}.spinner7 .circ5{-webkit-animation-delay:-.3s;animation-delay:-.3s}@-webkit-keyframes stretchdelay{0%,100%,40%{-webkit-transform:translateY(-10px)}20%{-webkit-transform:translateY(-20px)}}@keyframes stretchdelay{0%,100%,40%{transform:translateY(-10px);-webkit-transform:translateY(-10px)}20%{transform:translateY(-20px);-webkit-transform:translateY(-20px)}}
        .fl {margin: 50vh 50vw;}
    </style>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- jQuery for preloader-->
    <script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
    <!-- jQuery for taggd look-->
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery.taggd.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/form.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div class="fakeloader"></div>
    <script type="text/javascript">
        (function(b){b.fn.fakeLoader=function(m){var f=b.extend({timeToHide:1200,pos:"fixed",top:"0px",left:"0px",width:"100%",height:"100%",zIndex:"999",bgColor:"#2ecc71",spinner:"spinner7",imagePath:""},m);var l='<div class="fl spinner1"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>';var k='<div class="fl spinner2"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div>';var j='<div class="fl spinner3"><div class="dot1"></div><div class="dot2"></div></div>';var i='<div class="fl spinner4"></div>';var h='<div class="fl spinner5"><div class="cube1"></div><div class="cube2"></div></div>';var g='<div class="fl spinner6"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div></div>';var e='<div class="fl spinner7"><div class="circ1"></div><div class="circ2"></div><div class="circ3"></div><div class="circ4"></div></div>';var d=b(this);var c={position:f.pos,width:f.width,height:f.height,top:f.top,left:f.left};d.css(c);d.each(function(){var n=f.spinner;switch(n){case"spinner1":d.html(l);break;case"spinner2":d.html(k);break;case"spinner3":d.html(j);break;case"spinner4":d.html(i);break;case"spinner5":d.html(h);break;case"spinner6":d.html(g);break;case"spinner7":d.html(e);break;default:d.html(l)}if(f.imagePath!=""){d.html('<div class="fl"><img src="'+f.imagePath+'"></div>');a()}});setTimeout(function(){b(d).fadeOut()},f.timeToHide);return this.css({backgroundColor:f.bgColor,zIndex:f.zIndex})};function a(){var c=b(window).width();var e=b(window).height();var d=b(".fl").outerWidth();var f=b(".fl").outerHeight();b(".fl").css({position:"absolute",left:(c/2)-(d/2),top:(e/2)-(f/2)})}b(window).load(function(){a();b(window).resize(function(){a()})})}(jQuery));

        $(".fakeloader").fakeLoader({
            timeToHide:1200, //Time in milliseconds for fakeLoader disappear
            //zIndex:"999",//Default zIndex
            spinner:"spinner3",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
            bgColor:"rgb(176, 52, 61)" //Hex, RGB or RGBA colors
            //imagePath:"yourPath/customizedImage.gif" //If you want can you insert your custom image
        });
    </script>

    <div class="modal fade contact popup-wrapper" id="contactUs"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>Have questions? Contact with us!</h5>
                    <form id="contForm" method="post" action="mail.php" name="contact">
                        <label>
                            *Email address:
                            <input type="email" name="email" required="required" placeholder="example@gmail.com" id="mail" >
                        </label>
                        <label>
                            Subject:
                            <input type="text" name="subject" placeholder="Subject" id="subject">
                        </label>
                        <label>
                            *Message:
                            <textarea class="animated" name="message" placeholder="Put your message here"></textarea>
                        </label>
                        <button type="submit">Send</button>
                    </form>
                    <!-- <div class="text-center"><span>Fields marked with* are mandatory</span></div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="thanks-message">
                        <p class="thx">Thank you!<br/> We sent your message!</p>
                    </div>
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
                            <h2>LEFT OR RIGHT?</h2>
                        </div>
                        <div class="poll-header">
                            <h3>Let friends solve your <br />
                                everyday fitting room dilemmas</h3>
                        </div>
                        <div class="poll-header">
                            <h3>With Shopdrobe you can <br />
                                make the right choice quickly and easily</h3>
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
            <div class="col-sm-5 iphone">
                <img class="taggd dot" src="img/iphonegrey.png">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5 look-text">
                        <div class="look-header">
                            <h2>TAG THE <br />BRAND</h2>
                        </div>
                        <div class="look-header">
                            <h3>Got your own style?<br />
                                Then show it to others!
                            </h3>
                        </div>
                        <div class="look-header">
                            <h3>Share your looks and <br />
                                set new fashion trends</h3>
                        </div>
                    </div>
                    <div class="try-it-look">
                        <p>Click it!</p>
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
                            <h3>Surf though a selection of daily fashion inspirations</h3>
                        </div>
                        <div class="explore-header">
                            <h3>Find a voguish solution for your wardrobe</h3>
                        </div>
                    </div>
                    <div class="try-it-explore" style="display: none">
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
                                <a href="" class="col-sm-6" data-toggle="modal" data-target="#contactUs">Contact us</a>
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


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-58827011-1', 'auto');
        ga('send', 'pageview');
    </script>

    <div style="display: none">
        <!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=28086834&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/28086834/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:28086834,lang:'ru'});return false}catch(e){}"/></a><!-- /Yandex.Metrika informer --><!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter28086834 = new Ya.Metrika({id:28086834, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/28086834" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
    </div>

    <?php if ( ! $detect->isMobile() ): ?>
        <script src="js/jquery.fullPage.min.js"></script>
    <?php endif ?>

</body>
</html>