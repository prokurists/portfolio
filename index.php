<?php
include __DIR__ . '/classes/DBdata.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>PAVLOVS.LV</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/style/style.css">

</head>

<body>
    <nav class="uk-navbar uk-background-default" uk-sticky>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <a href="#" id="typewritter-hello"></a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@s">
                <li><a class="uk-text-large" href="#">Par mani</a></li>
                <li><a class="uk-text-large" href="#digital">Digitālā pieredze</a></li>
                <li><a class="uk-text-large" href="#reviews">Atsauksmes</a></li>
                <li><a class="uk-text-large" href="#contact">Saziņa</a></li>
            </ul>
            <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
        </div>
    </nav>
    </header>

    <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav">
                <li><a class="uk-text-large" href="#">Par mani</a></li>
                <li><a class="uk-text-large" href="#digital">Digitālā pieredze</a></li>
                <li><a class="uk-text-large" href="#reviews">Atsauksmes</a></li>
                <li><a class="uk-text-large" href="#contact">Saziņa</a></li>
            </ul>
        </div>
    </div>

    <div id="profils" class="container-fluid fullHeight">

        <div>
            <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                <img class="uk-border-pill uk-align-left" src="assets/images/me.png" width="200" height="200" alt="Border pill">

                <p class="uk-text-default">
                    Sveiki, mani sauc Aleksejs Pavlovs.<br>
                    Esmu elektroniskās komercijas speciālists uzņēmumā LMT Retail & Logistics SIA.<br>
                    Mani galvenie pienākumi ir apkalpot korporatīvos klientus attālināti, izmantojot uzņēmumu iekšējo CRM un citas sistēmas.<br>
                    Programmēšanu apgūstu pašapmācības ceļā - kursos un @CODECADEMY plaftormā.<br>
                </p>
            </div>
        </div>
        <h1 class="uk-heading-divider ">Piedāvāju:</h1>

        <div class="uk-grid-divider uk-child-width-expand@s uk-grid-match" uk-grid>

            <div>
                <div class="uk-card-body uk-card-default uk-box-shadow-hover-large uk-padding">Risinājumus pasūtījuma apstrādes laika mazināšanai elektroniskajā komercijā.</div>
            </div>
            <div>
                <div class="uk-card-body uk-card-primary uk-box-shadow-hover-large uk-padding">Individuālu pieeju katram klientam un projektam.</div>
            </div>
            <div>
                <div class="uk-card-body uk-card-secondary uk-box-shadow-hover-large uk-padding">Ātru un efektīvu produkta piegādi jau sākuma ciklā.</div>
            </div>
        </div>
    </div>
    </div>

    <div id="digital" class="container-fluid fullHeight">
        <h1 class="uk-heading-divider ">Digitāla pieredze</h1>
        <div class="uk-child-width-1-3@s uk-text-center uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: false">

            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title"><span uk-icon="icon: code; ratio: 3"></span></h3>
                    <ul class="uk-list uk-list-striped">
                        <li>PHP: <strong>Junior</strong></li>
                        <li>MySQL: <strong>Junior</strong></li>
                        <li>Javascript: <strong>Junior</strong></li>

                    </ul>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title"><span uk-icon="icon: world; ratio: 3"></span></h3>
                    <ul class="uk-list uk-list-striped">
                        <li>HTML5: <strong>Junior</strong></li>
                        <li>CSS: <strong>Junior</strong></li>
                        <li>BOOTSTRAP: <strong>Junior</strong></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title"><span uk-icon="icon: git-fork; ratio: 3"></span></h3>
                    <ul class="uk-list uk-list-striped">
                        <li>GIT: <strong>Junior</strong></li>
                        <li>NPM: <strong>Beginner</strong></li>
                        <li>NODE: <strong>Beginner</strong></li>
                    </ul>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title">Rīgas Tehniskā universitāte</h3>
                    <p>“Web portālu izstrāde. Modernās tīmekļa tehnoloģijas programmatūras izstrādei”. 80 stundas, 2KP apjomā, 2020.gadā</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body" uk-scrollspy-class="uk-animation-slide-top">
                    <h3 class="uk-card-title">CODECADEMY</h3>
                    <p>263 žetoni, 8 pabeigti īsie kursi sākot no 2014. gada.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title">RIGACODINGSCHOOL</h3>
                    <p>WEB BOOTCAMP kursi - Teoretiskās un praktiskās zināšanas WEB izstrādē. 90 stundas, 2021. gadā</p>
                </div>
            </div>


        </div>
    </div>
    <div id="reviews" class="container-fluid fullHeight">
        <h1 class="uk-heading-divider ">Atsauksmes</h1>
        <div uk-grid>
            <div class="uk-width-1-2@s ">
                <div class="uk-slider-container-offset" uk-slider="autoplay: true">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-1@s uk-grid" id="review_list">
                            <li class="template">
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title author">Headline</h3>
                                        <p class="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
            </div>
            <div class="uk-width-1-2@s">
                <form action="/controller/api.php" onsubmit="postRequest(event, this, addNewReview);" class="uk-card">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <input class="uk-input" type="text" name="name" placeholder="Vārds" required>
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" name="review" placeholder="Raksti savu atsauksmi šeit" required></textarea>
                        </div>
                    </fieldset>
                    <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Iesniegt</button>

                </form>
            </div>
        </div>



    </div>

    <div id="contact" class="container-fluid fullHeight">
        <h1 class="uk-heading-divider ">Saziņa</h1>


        <div class="uk-child-width-1-2@s uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-top; target: .uk-card; delay: 300; repeat: false">
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title">Rakstīt ziņu...</h3>
                    <form action="/controller/api.php" onsubmit="postRequest(event, this, addNewMessage);">
                        <fieldset class="uk-fieldset">
                            <div class="uk-margin">
                                <input class="uk-input" type="email" name="e-mail" placeholder="E-pasts" required>
                            </div>
                            <div class="uk-margin">
                                <textarea class="uk-textarea" rows="5" name="message" placeholder="Jautājums.." required></textarea>
                            </div>
                        </fieldset>
                        <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Iesniegt</button>

                    </form>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-secondary uk-card-body ">
                    <h3 class="uk-card-title">Saziņai</h3>
                    <div class="uk-text-left uk-child-width-1-2@s" uk-grid>
                        <div>
                            <div class="uk-card">
                                <span uk-icon="icon: mail; ratio: 3"></span><a class="uk-link-heading" href="mailto:aleksejs@pavlovs.lv"> Email</a><br>

                                <span uk-icon="icon: whatsapp; ratio: 3"></span><a class="uk-link-heading" href="https://wa.me/+37125994741"> Whatsapp</a><br>

                                <span uk-icon="icon:  github-alt; ratio: 3"></span><a class="uk-link-heading" href="https://github.com/prokurists"> GitHub</a><br>

                                <span uk-icon="icon:  linkedin; ratio: 3"></span><a class="uk-link-heading" href="https://www.linkedin.com/in/aleksejs-pavlovs-77aa34a5/"> LinkedIn</a><br>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card">
                                <img src="assets/images/contact.svg" uk-svg>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>




    </div>

    <div class="uk-padding-large">
        <div class="uk-text-center">Created by Aleksejs Pavlovs 2021</div>

    </div>
    <a class="to-top" href="#profils" uk-totop></a>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
    <script src="assets/javascript/javascript.js"></script>

</body>

</html>