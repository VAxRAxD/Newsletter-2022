<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/master_Theme1.css" />
  <title>Spotlight</title>
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
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Credits</button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="router.php?page=spotlight">
                        <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Spotlight</button>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent"></div>
        </div>
        <hr id="bottom">
    </div>

  <div class="modal" tabindex="-1" id="myEnv">
    <div class="modal-dialog modal-dialog-centered ann-modal">
      <div class="modal-content">
        <div class="modal-content-holder" id="modal-content-img">
          <a data-bs-toggle="modal" href="#myModal" role="button">
            <img src="./images/announcement_envelope.png" alt="Envelope Image" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" tabindex="-1" id="myModal">
    <div class="modal-dialog modal-dialog-centered ann-modal">
      <div class="modal-content">
        <div class="modal-content-holder" id="modal-content-ann">
          <div class="announcement_wrap">
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-auto">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              </div>
              <h2>Announcement</h2>
              <p>
                SFITAA is coming back with the most awaited event, ‘Rekindle 22’ and this year it’s bigger and better. Join us for an extraordinary celebration as we reconnect with our college campus, reminisce with old friends, make new ones, peep into the time capsule, toast to the talent of our friends and celebrate SFIT. Want to know what’s in store? So stay tuned to find out more.
              </p>
              <p>
We received an overwhelming response for our Spotlight section during this edition and we can't wait to showcase it to you all! We appreciate the love and participation shown by our alumni, students and professors, and hope to receive more such entries from you all for the upcoming editions.

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="ribbon spotlight-ribbon">
      <img src="./images/label-dark.png" alt="ribbon" class="img-fluid" />
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sm d-flex align-items-center f-col my-5">
        <div class="spotlight-card">
          <h5 class="spotlight-name">Parthosarthi Karmorkar</h5>
          <h6 class="spotlight-subtitle">CMPN 2004</h6>
          <img src="./images/spotlight/Parthosarthi.png" alt="" class="spotlight-img" />
        </div>
        <div class="modal fade" id="poem" tabindex="-1" aria-labelledby="poemLabel" aria-hidden="true">
          <div class="
                modal-dialog
                modal-md
                modal-dialog-centered
                modal-dialog-scrollable
              ">
            <div class="modal-content">
              <div class="modal-body">
                <div class="modal-content-holder" id="modal-content-ann">
                  <div class="announcement_wrap">
                    <div class="container-fluid">
                      <div class="row justify-content-between">
                        <div class="col">
                          <h1 class="text-center text-maroon">
                            A Psalm of Life
                          </h1>
                        </div>
                        <div class="col-auto">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col text-center">
                          <p>
                            Time is such a valuable commodity and yet so much in abundance for you!<br>
                            Cherish each moment and your friends you make here, <br>
                            the moments of friendship as long as they are near. <br>
                            Where entering into a new chapter you feel such lost yet assured that college would help
                            with a guiding torch <br>
                            Where friends play roles of more than a family yet never they lose the chance to make you
                            look silly.<br>
                            Among the sections the constant tinkering ,bickering andalways rustling like the autumn
                            foliage<br>
                            But fighting as one when pitted against another college <br>
                            Where mass bunking shows the utmost unity<br>
                            And complete attendance during the final days showing the attendance’s gravity<br>
                            Where sharing lab notes and journals depicts the fraternity bond <br>
                            And helping prep for the vivas are act of kindness though for the examiner it’s almost like
                            a repeat audition song <br>
                            To fight over the silly interclass trophies and new formed relationships , <br>
                            these are times when life gives you its gifts. <br>
                            Cherish the time to grow and glow, <br>
                            don’t worry about what it temporarily shows.<br>
                            For grades and assignments are merely a road marker to the path that you could take,<br>
                            life will eventually surely dissect the real from the fake<br>
                            Choose your path carefully ,for this is the time when you study for yourself ,for your
                            future ,for the next few decades, for you will
                            remember these opportunities when your youth would fade.<br>
                            Your friends shall again cross your paths to
                            cherish these eternal moments which makes you go
                            back to the first steps to your future<br>
                            The damning pressure of necessary exams , the deadlines of
                            journals, the crazy timelines to achieve so many
                            things and cram a lifetime of someone’s teaching
                            in 4 years( or more:) )<br>
                            Do not let the small pressures tie you down ,to not cherish each moment
                            of the college life,<br>
                            for these times would make your spine strong , to withstand the pressure and
                            weight of the real world outside.<br>
                            To make you ready and beat the fear,<br>
                            cherish each moment and
                            your friends you make in here
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-maroon rounded-0" data-bs-toggle="modal" data-bs-target="#poem">
          View
        </button>
      </div>
      <div class="col-sm d-flex align-items-center f-col my-5">
        <div class="spotlight-card">
          <h5 class="spotlight-name">Jeson Jose Tharakan</h5>
          <h6 class="spotlight-subtitle">EXTC 2010</h6>
          <img src="./images/spotlight/Jeson_Jose_Tharakan.png" alt="" class="spotlight-img" />
        </div>
        <div class="modal" tabindex="-1" id="video-jeson">
          <div class="modal-dialog modal-dialog-centered ann-modal">
            <div class="modal-content">
              <div class="modal-content-holder">
                <iframe height="300px" width="100%" src="https://www.youtube.com/embed/NsA5DwVBFUU" frameborder="0"
                  allowtransparency="true" allowfullscreen>
                </iframe>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-maroon rounded-0" data-bs-toggle="modal" data-bs-target="#video-jeson">
          View
        </button>
      </div>
      <div class="col-sm d-flex align-items-center f-col my-5">
        <div class="spotlight-card">
          <h5 class="spotlight-name">Anson Tuscano</h5>
          <h6 class="spotlight-subtitle">CMPN 2010</h6>
          <img src="./images/spotlight/Anson_Tuscano.png" alt="" class="spotlight-img" />
        </div>
        <div class="modal" tabindex="-1" id="video-anson">
          <div class="modal-dialog modal-dialog-centered ann-modal">
            <div class="modal-content">
              <div class="modal-content-holder">
                <iframe height="300px" width="100%" src="https://www.youtube.com/embed/41TN8tZJDDY" frameborder="0"
                  allowtransparency="true" allowfullscreen>
                </iframe>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-maroon rounded-0" data-bs-toggle="modal" data-bs-target="#video-anson">View</button>
      </div>
    </div>
    <div class="row row-cols-auto justify-content-center">
      <div class="col-sm d-flex align-items-center f-col my-5">
        <div class="spotlight-card">
          <h5 class="spotlight-name">Viraj Mhatre</h5>
          <h6 class="spotlight-subtitle">INFT 2024</h6>
          <img src="./images/spotlight/Viraj_Mhatre.png" alt="" class="spotlight-img" />
        </div>
        <div class="modal" tabindex="-1" id="video-viraj">
          <div class="modal-dialog modal-dialog-centered ann-modal">
            <div class="modal-content">
              <div class="modal-content-holder">
                <iframe height="300px" width="100%" src="https://www.youtube.com/embed/XDjmkHOwgxw" frameborder="0"
                  allowtransparency="true" allowfullscreen>
                </iframe>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-maroon rounded-0" data-bs-toggle="modal" data-bs-target="#video-viraj">View</button>
      </div>
      <div class="col-sm d-flex align-items-center f-col my-5">
        <div class="spotlight-card">
          <h5 class="spotlight-name">Manasi Hemant Madkar</h5>
          <h6 class="spotlight-subtitle">CMPN 2024</h6>
          <img src="./images/spotlight/Manasi_Hemant_Madkar.png" alt="" class="spotlight-img" />
        </div>
        <div class="modal" tabindex="-1" id="video-manasi">
          <div class="modal-dialog modal-dialog-centered ann-modal">
            <div class="modal-content">
              <div class="modal-content-holder">
                <iframe height="300px" width="100%" src="https://www.youtube.com/embed/XUGR2Q64qTI" frameborder="0"
                  allowtransparency="true" allowfullscreen>
                </iframe>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-maroon rounded-0" data-bs-toggle="modal" data-bs-target="#video-manasi">View</button>
      </div>
      <div class="col-sm d-flex align-items-center f-col my-5">
        <div class="spotlight-card">
          <h5 class="spotlight-name">Dr.Nikita Rai</h5>
          <h6 class="spotlight-subtitle">Faculty</h6>
          <img src="./images/spotlight/Dr._Nitika_Rai_-_Faculty.png" alt="" class="spotlight-img" />
        </div>
        <div class="modal" tabindex="-1" id="pic-nikita-mam">
          <div class="modal-dialog modal-dialog-centered ann-modal">
            <div class="modal-content">
              <div class="modal-content-holder">
                <img src="./images/spotlight/Dr._Nitika_Rai_-_Faculty_1.jpg" alt="Drawing">
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-maroon rounded-0" data-bs-toggle="modal" data-bs-target="#pic-nikita-mam">View</button>
      </div>
    </div>
  </div>
  <script src="./js/header.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script>
    var myModal = new bootstrap.Modal(document.getElementById("myEnv"), {
      keyboard: false,
    });
    myModal.toggle();
  </script>
</body>

</html>
