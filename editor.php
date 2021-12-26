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
    <title>From the Desks - Editor</title>
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
            <span>E</span>
            <span>D</span>
            <span>I</span>
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
                    src="./images/credits/1.png"
                    alt="Ms. Anisa Victoria Futado"
                    class="img-fluid mentor-img"
                  />
                  <span>Ms. Anisa Victoria Furtado</span>
                </div>
              </div>
              <div class="col-md">
                <div class="side-col sm-h1">
                  <h1>
                    <span>E</span>
                    <span>D</span>
                    <span>I</span>
                    <span>T</span>
                    <span>O</span>
                    <span>R</span>
                  </h1>
                </div>
                <p class="mentor-text">Hello, and many greetings from SFIT!</p>
                <p class="mentor-text">
                  Another year has passed, the seasons have turned, the weather
                  has gotten colder, people are happier and the world is growing
                  bright with Christmas lights and decorations. As the year
                  draws to a close and everyone slips into a holiday mode, we
                  bring you news from all corners of St. Francis Institute of
                  Technology, where faculty and students alike are finding new
                  ways to further their common interests; and from far away,
                  where our older alumni are thriving personally and
                  professionally, and our younger ones are blazing new trails
                  and setting out their own path leading to a future full of
                  hope.
                </p>
                <p class="mentor-text">
                  I do know that it's said to live in the present and work for a
                  bright future. But it’s also good to take a step back to
                  replenish the every-day experiences, and teleport ourselves
                  back into lives we have partially forgotten, but never really
                  left behind. One such momentous occasion was the setting up of
                  the Time Capsule, which holds the key to the stories of the
                  past. The unearthing of the Time Capsule will take place in
                  the beginning of the coming year and hence we took this
                  opportunity to revisit the past and cherish all the milestones
                  SFIT has marked till date. And that’s exactly what our theme
                  is about!
                </p>
                <p class="mentor-text">
                  In this edition, we have three eye-catching sections lined up
                  for you guys. Starting off with my personal favorite (here’s
                  to hoping it will be yours too), as it comes from our
                  inspiring ‘Sensei’. In this section named ‘Mini Stories’, the
                  professors and the lab assistants alike have spoken their
                  hearts out just to reach our very own Alumni. We also have
                  another section that received a lot of love from the entire
                  SFIT family; ‘Alumni Speak 2.0’ and I don't think I have to
                  say what’s in it cause the name says it all! Although, this
                  time there is a small twist to it. Finally the last surprise
                  for you guys, ‘Spotlight’! I'm pleased that we not only got to
                  view hidden talents of our alums, but also from faculty
                  members and current grad students. It’s a great beginning to
                  these sections and we look forward to many such contributions
                  for the future editions.
                </p>
                <p class="mentor-text">
                  I'm sure back in your college days you used to sit in the
                  class and dream of a future where success and prosperity would
                  be yours. I hope you have achieved your dreams. But now is the
                  time to look back and walk down the memory lane as we, SFITAA,
                  bring to you 'Rekindle 2022', a reunion to reminisce with your
                  old friends, a chance to share some memories, and play those
                  songs again! Do not let this significant "Trip to Nostalgia''
                  pass without a celebration!
                </p>
                <p class="mentor-text">
                  As our special issue comes to a close, I want to thank all of
                  the contributors of this edition. Not forgetting the precious
                  gems in this team working behind the scenes to make this
                  possible. Remember no arm of fate can thwart your dreams if
                  you keep allure.
                </p>
                <p class="mentor-text">
                  Laugh and sigh with us, and above all stay in touch. Have a
                  jolly Christmas and a magical New Year!
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
