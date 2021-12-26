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

    <link rel="stylesheet" href="./css/master_Theme1.css" />
    <title>From the Desks - Mentor</title>
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

                    <button onclick="drpFunction()" class="dropbtn nav-link active" id="pills-profile-tab"
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 col-lg-1 side-col lg-h1 h-100">
          <h1>
            <span>M</span>
            <span>E</span>
            <span>N</span>
            <span>T</span>
            <span>O</span>
            <span>R</span>
          </h1>
        </div>
        <div class="col-sm col-lg-11 h-100 wrap" style="overflow-y: scroll">
          <div class="ribbon fromdesks-ribbon">
            <img alt="ribbon" class="img-fluid" />
          </div>
          <div class="container-fluid a-center">
            <div class="row">
              <div class="col-md-4 flex-center">
                <div class="img-wrap">
                  <img
                    src="./images/credits/mentor.png"
                    alt="Ms. Grinal Tuscano"
                    class="img-fluid mentor-img"
                  />
                  <span>Ms. Grinal Tuscano</span>
                </div>
              </div>
              <div class="col-md">
                <div class="side-col sm-h1">
                  <h1>
                    <span>M</span>
                    <span>E</span>
                    <span>N</span>
                    <span>T</span>
                    <span>O</span>
                    <span>R</span>
                  </h1>
                </div>
                <p class="mentor-text">
                  Every moment we've lived and every decision we've held on to
                  has contributed to our today. While the laws of the world
                  forbid us to go back and relive a day of the past, aren't we
                  blessed to be able to hold on to those memories? We have some
                  vivid memories, some hazy and some forgotten, but they make us
                  individuals. Isn't it beautiful how 7.9 billion humans are
                  unique because of their experiences? That's the power of the
                  past. It makes our story. Sometimes, I sit by the window and
                  smile as I recollect the memories of my college days. I
                  believe I'm not the only one who smiles thinking about
                  college. Our college days are probably the best days of our
                  youth. We started making our own decisions, understanding new
                  relationships, trusting friendships, partying, studying,
                  bunking and so much more during those days. Many volunteered,
                  some took up leadership opportunities, several studied and a
                  few just did not. Oh, how I wish we could relive those days,
                  just one more time. SFIT and SFITAA have left no opportunities
                  to build such memories. Every society and event has been
                  designed to give our students memories to love, laugh and live
                  forever. One such event this year would be the 'Grand
                  Unearthing of the 2012 Time Capsule'. A treasure chest of
                  photos, stories, artifacts shared by our students and teachers
                  of 2012 (who contributed to the time capsule and what does it
                  hold?). Therefore we reached out to our alumni to find out
                  what they would like to preserve if they were to contribute to
                  the new time capsule. We've been sprinkling those alumni
                  testimonials ever since our last newsletter and we even have a
                  new section named ‘Mini Stories’. If you haven't read them
                  yet, do check them out! There's more in this issue and a lot
                  more coming up. Excited as much as we are? We'd love to hear
                  back from you.
                </p>
              </div>
            </div>
          </div>
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
