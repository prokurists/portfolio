<?php
include __DIR__ . '/../private/DBdata.php';
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
    <nav class="uk-container uk-navbar" uk-sticky>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <a href="#">PAVLOVS<strong>.LV</strong></a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@s">
                <li><a class="uk-text-large" href="#profils">Par mani</a></li>
                <li><a class="uk-text-large" href="#digital">Digitālās pieredze</a></li>
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
                <li><a class="uk-text-large" href="#profils">Par mani</a></li>
                <li><a class="uk-text-large" href="#digital">Digitālās zināšanas</a></li>
                <li><a class="uk-text-large" href="#reviews">Atsauksmes</a></li>
                <li><a class="uk-text-large" href="#contact">Saziņa</a></li>
            </ul>
        </div>
    </div>

    <div id="profils" class="container-fluid fullHeight">
        <h1 class="uk-heading-divider" id="typewritter-hello"></h1>

        <div>
            <div class="uk-card uk-card-default uk-card-body    " uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                <img class="uk-border-pill uk-align-left" src="assets/images/me.png" width="200" height="200" alt="Border pill">

                <p class="uk-text-default ">

                    Esmu elektroniskās komercijas speciālists uzņēmumā LMT Retail & Logistics SIA.
                    Mani galvenie pienākumi ir apkalpot korporatīvos klientus attālināti, izmantojot uzņēmumu iekšējo CRM un citas sistēmas.
                    Programmēšanu apgūstu pašapmācības ceļā - kursos un @CODECADEMY plaftormā.
                </p>
            </div>
        </div>
        <h1 class="uk-heading-divider ">Piedāvāju:</h1>

        <div class="uk-grid-divider uk-child-width-expand@s uk-grid-match" uk-grid>

            <div>
                <div class="uk-card-body uk-card-default">Risinājumus e-komercijā pasūtījuma apstrādes laika mazināšanai.</div>
            </div>
            <div>
                <div class="uk-card-body uk-card-primary">Individuālo pieeju katram projektam un klientam.</div>
            </div>
            <div>
                <div class="uk-card-body uk-card-secondary">Ātru un efektīvu produkta piegādi jau sākuma ciklā.</div>
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
                    </ul>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title"><span uk-icon="icon: world; ratio: 3"></span></h3>
                    <ul class="uk-list uk-list-striped">
                        <li>HTML5: <strong>Junior</strong></li>
                        <li>CSS: <strong>Junior</strong></li>
                        <li>UIKIT: <strong>Beginner</strong></li>
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
                    <h3 class="uk-card-title">RIGA CODING SCHOOL</h3>
                    <p>WEB BOOTCAMP kursi - PROCESĀ</p>
                </div>
            </div>


        </div>
    </div>
    <div id="reviews" class="container-fluid fullHeight">
        <h1 class="uk-heading-divider ">Atsauksmes</h1>
        <div class="uk-child-width-1-2@s" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

            <form action="/private/api.php?" onsubmit="postRequest(event, this, addNewReview);">
                <fieldset class="uk-fieldset">
                    <div class="uk-margin">
                        <input class="uk-input" type="text" name="name" placeholder="Vārds" required>
                    </div>
                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" name="review" placeholder="Atsauksme..." required></textarea>
                    </div>
                </fieldset>
                <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Submit</button>

            </form>
            <div>
                <div class="uk-margin-medium uk-card uk-card-default uk-card-body">Pagaidām nav nevienas atsauksmes...</div>
            </div>
        </div>
    </div>

    <div id="contact" class="container-fluid fullHeight">
        <h1 class="uk-heading-divider ">Saziņa</h1>


        <div class="uk-child-width-1-2@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title">Rakstīt ziņu...</h3>
                    <form action="/private/api.php?" onsubmit="postRequest(event, this, addNewMessage);">
                        <fieldset class="uk-fieldset">
                            <div class="uk-margin">
                                <input class="uk-input" type="text" name="e-mail" placeholder="E-pasts" required>
                            </div>
                            <div class="uk-margin">
                                <textarea class="uk-textarea" rows="5" name="message" placeholder="Jautājums.." required></textarea>
                            </div>
                        </fieldset>
                        <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Submit</button>

                    </form>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-card-between">
                    <h3 class="uk-card-title">Saziņai</h3>
                    <span uk-icon="icon: mail; ratio: 3"></span><a class="uk-link-heading" href="mailto:aleksejs@pavlovs.lv"> Email Us</a><br>

                    <span uk-icon="icon: whatsapp; ratio: 3"></span><a class="uk-link-heading" href="tel:+37125994741"> Click to Call!</a><br>

                    <span uk-icon="icon:  github-alt; ratio: 3"></span><a class="uk-link-heading" href=""> GitHub</a><br>

                    <span uk-icon="icon:  linkedin; ratio: 3"></span><a class="uk-link-heading" href=""> LinkedIn</a><br>


                </div>
            </div>
        </div>




    </div>

    <a class="to-top" href="" uk-totop></a>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
    <script src="assets/javascript/javascript.js"></script>
</body>

</html>