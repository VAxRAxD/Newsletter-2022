<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credits</title>
    <link rel="stylesheet" href="./css/master_Theme1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="header-tab">
        <div class="container">
            <p>Chrysalis Konnect - Quartz</p>
        </div>
        <img class="hamburger-menu" onclick="clickfunc()" type="button" id="hamburger-menu"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAFJJREFUSEtjZKAxYKSx+QyjFhAMYfoHUZWsxn+CzsKjoO3xDRRHY/iA5hZQ4npseukfBzT3Ac3jgOYW0DyIhr4FNI8Dmlsw9ONg1AfoIUDz0hQADicYGaj8l3UAAAAASUVORK5CYII=" />
        <img class="cross-menu" onclick="crossfunc()" type="button" id="cross-menu"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPJJREFUSEtjZKAxYKSx+QyjFhAM4YENokpZzQA2ZvYDjQ8ufMDm1HoFA4Fff386tD++vgGXV3D6AGQ4I8P/9QyM/y+wMnE6olsCMvz3v+/7Gf4zGvxnYAzEZQlOC0AG/Pn748B/BgZ9dEuQDQcacJGFmcMBly/xxgE2S0BBAXM5IcNBaglGMrol4LAGBgsxhhNlAUgRiiUQV+ENFuQIJ+gDmAWwYAFrxhHx2FISQQvQIxQcQlginuRkiu5yWLCAxHGlLpJ8gC8p4kvC6JYQzGi4IhTZErIyGsglNC0qCBaTRCogmIqINAenslELCIYgzYMIAFp5thlpElF2AAAAAElFTkSuQmCC" />
        <img class="cross-menu-light" onclick="crossfunclight()" type="button" id="cross-menu-light"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPJJREFUSEtjZKAxYKSx+QyjFhAM4YENojePrgUw//15QFDR8AM2p76/f17gLzO7g4ic1gZcXsHpA5Dh/xn+rWf4z3CB5d9vR3RLQIb/YWLdD0wmBowMTIG4LMFpAdgAZtYDQJfpo1uCbDhQ/iLL398OuHyJNw6wWQIKCpjLCRkOUkswktEtAYc1MFiIMZwoC0CKUCyBxCbeYEGOcII+gFsAjVCwZhwRjy0lEbQAPUKhhmBEPMnJFIvLwcECjmQcqYskH+BLiviSMLolhDMajghFtoSsjAZyCU2LClyRRqo4wVREqoFExwGlBsP0j/qAYEgCACkfphn1kKLOAAAAAElFTkSuQmCC" />
        <img class="hamburger-menu-light" onclick="clickfunclight()" type="button" id="hamburger-menu-light"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAFJJREFUSEtjZKAxYKSx+QyjFhAMYfoH0etHV/4TdBYeBaJyOiiOxvABzS2gxPXY9NI/DmjuA5rHAc0toHkQDX0LaB4HNLdg6MfBqA/QQ4DmpSkA4UUYGXcq+LcAAAAASUVORK5CYII=" />
        <hr>
        <div class="header-nav" id="header-nav">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="router.php?page=timeline">
                        <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Timeline</button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="router.php?page=foreword">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Foreword</button>
                    </a>
                </li>
                <li class="dropdown nav-item" role="presentation">

                    <button onclick="drpFunction()" class="dropbtn nav-link" id="pills-profile-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">From The Desks</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="router.php?page=mentor">Mentor's Desk</a>
                        <a href="router.php?page=editor">Editor's Desk</a>
                    </div>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="router.php?page=events">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Events</button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="router.php?page=alumni_speak">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Alumni Speak</button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="router.php?page=mini_stories">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Mini Stories</button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="router.php?page=credits">
                        <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Credits</button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="router.php?page=spotlight">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Spotlight</button>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent"></div>
        </div>
        <hr id="bottom">
    </div>
    <div class="container">
        <div class="row">
            <div class="ribbon credits-ribbon extra-margin">
                <img alt="ribbon" class="img-fluid">
            </div>
        </div>
    </div> 
    <section class="credits">
        <div class="container">
            <div class="row justify-content-around">
                <div class="information mentor col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/mentor.png" />
                </div>
                <div class="information creative-head col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/1.png" />
                </div>
                <div class="information artist col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/23.png" />
                </div>
                <div class="information advisor-web col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/11.png" />
                </div>
                <div class="information graphics-head col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/2.png" />
                </div>
                <div class="information audio-visual-head col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/22.png" />
                </div>
                <div class="information pr-market-head col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/20.png" />
                </div>
                <div class="information event-log-head col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/19.png" />
                </div>
                <div class="information creative-exec anushka col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/3.png" />
                </div>
                <div class="information web arvind col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/4.png" />
                </div>
                <div class="information pr-market blossom col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/5.png" />
                </div>
                <div class="information events-log-exec col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/6.png" />
                </div>
                <div class="information creative-exec isha col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/8.png" />
                </div>
                <div class="information pr-market jessica col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/7.png" />
                </div>
                <div class="information graph-exec kiran col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/10.png" />
                </div>
                <div class="information creative-exec lyann col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/9.png" />
                </div>
                <div class="information pr-market pratham col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/12.png" />
                </div>
                <div class="information audio-visual shashank col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/13.png" />
                </div>
                <div class="information graph-exec shawn col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/14.png" />
                </div>
                <div class="information pr-market shubham col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/15.png" />
                </div>
                <div class="information pr-market sid col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/16.png" />
                </div>
                <div class="information creative-exec urvi col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/18.png" />
                </div>
                <div class="information web varad col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/17.png" />
                </div>
                <div class="information audio-visual yash col-12 col-sm-12 col-md-6 col-lg-4">
                    <img class="photo img-fluid" src="./images/credits/21.png" />
                </div>
            </div>
        </div>
    </section>
    <script src="./js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>