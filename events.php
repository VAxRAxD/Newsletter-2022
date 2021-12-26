<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="./css/master_Theme1.css" />
  <title>Events</title>
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
                        <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill"
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
  <!--MODALS-->
  <div class="modal fade" tabindex="-1" id="video-5G">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe height="300px" width="100%" src="https://www.youtube.com/embed/jcAHvhmUOng" frameborder="0"
            allowtransparency="true" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" id="video-project-mang">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe height="300px" width="100%" src="https://www.youtube.com/embed/kaNFOnFlQIM" frameborder="0"
            allowtransparency="true" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" id="video-linkedin">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe height="300px" width="100%" src="https://www.youtube.com/embed/aSJCyXJQ5qY" frameborder="0"
            allowtransparency="true" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" id="video-NLP">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe height="300px" width="100%" src="https://www.youtube.com/embed/BsruBShAk3k" frameborder="0"
            allowtransparency="true" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" id="video-CV">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe height="300px" width="100%" src="https://www.youtube.com/embed/avTQKy3B2Ek" frameborder="0"
            allowtransparency="true" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" id="video-bootstrap">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe height="300px" width="100%" src="https://www.youtube.com/embed/Nn86zdp2C3o" frameborder="0"
            allowtransparency="true" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" id="video-time-mang">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe height="300px" width="100%" src="https://www.youtube.com/embed/K78wPllINLY" frameborder="0"
            allowtransparency="true" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" id="video-figma">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <iframe height="300px" width="100%" src="https://www.youtube.com/embed/SYB5KPcV7-U" frameborder="0"
            allowtransparency="true" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <!--THE CARDS-->
  <div class="container">
    <div class="ribbon events-ribbon">
      <img  alt="ribbon" class="img-fluid" />
    </div>
    <div class="row row-cols-auto justify-content-center">
      <div class="col-md-auto">
        <div class="flip-card">
          <div class="card-container">
            <div class="card polaroid-card">
              <a class="polaroid-img" data-bs-toggle="modal" data-bs-target="#video-5G" role="button">
                <img src="./images/events/thumbnail_5g.jpg" alt="5G Networks">
              </a>
              <h5 class=" title">5G Networks: An Innovation</h5>
              <div class="subtitle">View description</div>
            </div>
            <div class="card polaroid-card-back">
              <p>
                The session aims to introduce the participants to the new and
                forthcoming 5G Network Technology and their ineluctable
                effects on the future. The speaker for the event, Ms. Uttara
                Sawant (INFT 2004) who has led diverse development groups at
                the Network Engineering Services team in Ericsson, North
                America explained the concept of 5G, its architectural
                components and application. She further answered various
                questions asked by the audience and cleared their queries on
                the same.
              </p>
              <div class="subtitle">Back to video</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-auto">
        <div class="flip-card">
          <div class="card-container">
            <div class="card polaroid-card">
              <a class="polaroid-img" data-bs-toggle="modal" data-bs-target="#video-project-mang" role="button">
                <img src="./images/events/thumbnail_proj_mang.jpg" alt="Project Management">
              </a>
              <h5 class="title">Milestone to Project Management</h5>
              <div class="subtitle">View description</div>
            </div>
            <div class="card polaroid-card-back">
              <p>
                The speaker Mr. Kailash Upadhyay, a Project Management
                Certified Professional and Founder of Addon Skills, addressed
                what exactly is Project Management and how to become a Project
                Manager. He further explained various aspects of a project and
                the multiple processes involved in Project Management. The
                session concluded with a question and answer round.
              </p>
              <div class="subtitle">Back to video</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-auto">
        <div class="flip-card">
          <div class="card-container">
            <div class="card polaroid-card">
              <a class="polaroid-img" data-bs-toggle="modal" data-bs-target="#video-linkedin" role="button">
                <img src="./images/events/thumbnail_linkedin.jpg" alt="Linked In">
              </a>
              <h5 class="title">
                LinkedIn: The World of Professional Networking
              </h5>
              <div class="subtitle">View description</div>
            </div>
            <div class="card polaroid-card-back">
              <p>
                Mr. Adhish Rane (EXTC 2013), an Account Director at LinkedIn
                for 2+ years, began the webinar with the discussion of
                LinkedIn being one of the largest Professional Networking
                platforms and providing the world with a number of
                opportunities. He highlighted various points to be kept in
                mind regarding building a good LinkedIn profile, advised the
                students about the do's and don'ts and gave useful tips
                related to multiple important points such as Networking,
                Internships, Skill Tests, etc.
              </p>
              <div class="subtitle">Back to video</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-auto">
        <div class="flip-card">
          <div class="card-container">
            <div class="card polaroid-card">
              <a class="polaroid-img" data-bs-toggle="modal" data-bs-target="#video-NLP" role="button">
                <img src="./images/events/thumbnail_NLP.jpg" alt="NLP">
              </a>
              <h5 class="title">NLP: Man and Machine</h5>
              <div class="subtitle">View description</div>
            </div>
            <div class="card polaroid-card-back">
              <p>
                The session was taken by Mr. Sanil Mhatre (EXTC 2004), a Lead
                Data Scientist at World Wide Technology. He discussed what NLP
                is all about, followed by explaining different types of data.
                Further, he highlighted important topics such as Career
                prospects, Business applications, Tools & Techniques used in
                NLP. He also shed light by giving some real-life examples on
                NLP-based projects followed by answering some questions taken
                up from the audience.
              </p>
              <div class="subtitle">Back to video</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-auto">
        <div class="flip-card">
          <div class="card-container">
            <div class="card polaroid-card">
              <a class="polaroid-img" data-bs-toggle="modal" data-bs-target="#video-CV" role="button">
                <img src="./images/events/thumbnail_CV.jpg" alt="CV and Resume">
              </a>
              <h5 class="title">A Session on CV and Resume</h5>
              <div class="subtitle">View description</div>
            </div>
            <div class="card polaroid-card-back">
              <p>
                Mr. Heramb Pendse (EXTC 2004), the Vice President of JP Morgan
                Chase, India talked about how to build a perfect and impactful
                CV/Resume. He discussed the structure of a CV/Resume and the
                do's and don'ts in making one. Further, he clarified on the
                recruitment process in various companies. Various doubts from
                the audience were answered by the speaker which helped them
                identify the flaws in their CVs/Resume.
              </p>
              <div class="subtitle">Back to video</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-auto">
        <div class="flip-card">
          <div class="card-container">
            <div class="card polaroid-card">
              <a class="polaroid-img" data-bs-toggle="modal" data-bs-target="#video-bootstrap" role="button">
                <img src="./images/events/thumbnail_bootstrap.jpg" alt="Bootstrap">
              </a>
              <h5 class="title">Fundamentals of Bootstrap</h5>
              <div class="subtitle">View description</div>
            </div>
            <div class="card polaroid-card-back">
              <p>
                The speaker for the event, Mr. Royston Gaga (CMPN 2011), a
                Consultant at Argon & Co. gave an overview of Bootstrap in
                this session. He explained the concept of bootstrap, its uses,
                pros & cons, and how it has helped Web Developers over the
                years. Further, he gave a demonstration of various layouts and
                components in bootstrap and discussed the alternatives for the
                same. The session was followed by a question and answer round
                from the attendees.
              </p>
              <div class="subtitle">Back to video</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-auto">
        <div class="flip-card">
          <div class="card-container">
            <div class="card polaroid-card">
              <a class="polaroid-img" data-bs-toggle="modal" data-bs-target="#video-time-mang" role="button">
                <img src="./images/events/thumbail_time_mang.jpg" alt="Time Management">
              </a>
              <h5 class="title">Prioritize with Time Management</h5>
              <div class="subtitle">View description</div>
            </div>
            <div class="card polaroid-card-back">
              <p>
                The session was taken by Mr. Hansel D'Souza (CMPN 2004),
                Director of Embeddable Banking at Zeta Suite, where he
                explained the need for Time Management. Proceeding ahead, he
                showed various techniques used for Time Management as well as
                interactively offered solutions to real time issues faced by
                the participants. He also highlighted the causes and ill
                effects of lack of Time management in particular mental
                conditions. The session concluded with a QnA round.
              </p>
              <div class="subtitle">Back to video</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-auto">
        <div class="flip-card">
          <div class="card-container">
            <div class="card polaroid-card">
              <a class="polaroid-img" data-bs-toggle="modal" data-bs-target="#video-figma" role="button">
                <img src="./images/events/thumbnail_figma.jpg" alt="Figma">
              </a>
              <h5 class="title">Introduction to Figma</h5>
              <div class="subtitle">View description</div>
            </div>
            <div class="card polaroid-card-back">
              <p>
                The speaker for the session was Mr. Rishabh Kapoor, a Product
                Designer at Zeta Suite, who gave an overview of the working
                and perks of using Figma. He began the webinar by depicting
                all the functionalities on the editing screen window along
                with its features and further moved to the final presentation
                of the prototype. The concepts were made clear by a live
                demonstration of the functionalities on the platform and by
                solving real-time issues faced by the attendees. The session
                was concluded with a QnA round.
              </p>
              <div class="subtitle">Back to video</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/header.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script>
    var subtitle = document.getElementsByClassName("subtitle");
    var card = document.getElementsByClassName("card-container");
    Array.from(subtitle).forEach(func);

    function func(element, index) {
      element.addEventListener("click", () => {
        if (index % 2 != 0) {
          card[(index - 1) / 2].style.transform = "rotateY(0deg)";
        } else {
          card[index / 2].style.transform = "rotateY(180deg)";
        }
      });
    }
  </script>
</body>

</html>