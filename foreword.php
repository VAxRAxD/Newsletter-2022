<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="./css/master_Theme2.css" />
    <title>Foreword</title>
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
                        <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill"
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
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
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
      <div class="ribbon foreword-ribbon">
        <img alt="ribbon" class="img-fluid" />
      </div>
    </div>
    <div class="container-fluid foreword-container">
      <div class="row justify-content-center foreword-header">
        <div class="col-md-4 d-flex justify-content-center">
          <div class="foreword-img-wrap d-flex justify-content-center align-items-center">
            <img src="./images/Foreword/Hiren Tank.jpeg" alt="Foreword-Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-8 foreword-name">
          <h3>Mr. Hiren Tank</h3>
          <h4>Joint Treasurer</h4>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="col-md-8">
          <p class="foreword-para">
            What started as a reboot in a new avatar, back in July 2020,
            ‘Chrysalis Konnect’, our biannual Alumni Newsletter, just in its 4th
            edition, has already received fantastic response and positive
            feedback which is exciting and simply inspiring!
          </p>
          <p class="foreword-para">
            To me, this edition – and the previous one as well – illustrates how
            we all were able to persist and innovate through these trying times.
            Despite the challenges; the college, students and the SFITAA team
            have been putting in all their efforts to ensure that the business
            runs as usual in the Alumni office. A befitting example has to be
            the Rekindle ‘21 event – a first of its kind virtual reunion we’ve
            ever seen, more than 15 batches participated remotely without any
            hassles, and what a reception! An event entirely conceived,
            designed, managed and run by our very own people and within our very
            own playground. The participating numbers in the event proves that
            nothing can stop us from reconnecting and reliving our old memories
            together. Adding to this are the many webinars and virtual
            conferences that were successfully organized and executed during
            this period. I would encourage all to visit and relive these through
            our Alumni archives. A BIG shout out to one and all who were
            directly or indirectly involved in making these events a success!
          </p>

          <p class="foreword-para">
            Coming back to our newsletter, along with its other interesting news
            and articles, this edition will also speak about unveiling of a
            historic and important event in 2022, ‘Unearthing of the SFIT Time
            Capsule’ which was planted by our fellow friends and faculty members
            in IRIS ‘12 (themed Foresight). A much-awaited event which will make
            us reflect on our choices and changes that have taken place within
            us and our surroundings in the past decade. Appreciate all the hard
            work put in by the team in creating, compiling and editing this
            newsletter; some interesting content follows here, so happy reading
            folks!
          </p>
          <p class="foreword-para">
            As much as you’ll have been hearing from SFITAA, SFITAA wants to
            hear from you too. We urge you to think of ways in which you can
            contribute back to the institute to whatever degree you are
            comfortable – be it, career and academic counselling or mentoring,
            volunteering time at on and off campus events, or by simply
            attending academic and social events. SFITAA encourages you to
            follow and explore all that is on offer to stay connected through
            our website and our social networking sites. We’d love to hear about
            your stories and accomplishments!
          </p>
          <p class="foreword-para">
            Wish you and your family better health and prosperity in the New
            Year!
          </p>
          <p class="foreword-para">Best wishes and warm regards.</p>
          <!-- <p class="foreword-para">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus
            dicta, quaerat dolore molestias totam, illo voluptatem dolorem atque
            autem at iure exercitationem, nam esse tenetur distinctio unde nisi
            ut iusto.
          </p>
          <p class="foreword-para">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus
            dicta, quaerat dolore molestias totam, illo voluptatem dolorem atque
            autem at iure exercitationem, nam esse tenetur distinctio unde nisi
            ut iusto. Praesentium, ex architecto! At nulla facere pariatur
            magnam nihil ea doloribus saepe maxime, animi dolorum iure neque
            quia accusantium inventore impedit dicta ipsa culpa asperiores
            commodi veritatis adipisci? Sed, neque! Totam molestiae optio
            voluptas vero, architecto, cupiditate vel rerum tempore recusandae
            repellendus
          </p> -->
        </div>
      </div>
    </div>
    <script src="./js/header.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
