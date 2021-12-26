<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Timeline</title>
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
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
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
            <div id="timeline">
                <div class="timeline">
                    <div class="scroller" id="scroller">
                        <div class="marker"></div>
                        <a href="#year0" class="item active" data-circle-year="year0">
                            <div class="year">1999</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year1" class="item" data-circle-year="year1">
                            <div class="year">2000</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year2" class="item" data-circle-year="year2">
                            <div class="year">2001</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year3" class="item" data-circle-year="year3">
                            <div class="year">2002</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year4" class="item" data-circle-year="year4">
                            <div class="year">2003</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year5" class="item" data-circle-year="year5">
                            <div class="year">2005</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year6" class="item" data-circle-year="year6">
                            <div class="year">2007</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year7" class="item" data-circle-year="year7">
                            <div class="year">2008</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year8" class="item" data-circle-year="year8">
                            <div class="year">2010</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year9" class="item" data-circle-year="year9">
                            <div class="year">2011</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year10" class="item" data-circle-year="year10">
                            <div class="year">2012</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year11" class="item" data-circle-year="year11">
                            <div class="year">2013</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year12" class="item" data-circle-year="year12">
                            <div class="year">2014</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year13" class="item" data-circle-year="year13">
                            <div class="year">2015</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year14" class="item" data-circle-year="year14">
                            <div class="year">2017</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year15" class="item" data-circle-year="year15">
                            <div class="year">2018</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year16" class="item" data-circle-year="year16">
                            <div class="year">2019</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year17" class="item" data-circle-year="year17">
                            <div class="year">2020</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year18" class="item" data-circle-year="year18">
                            <div class="year">2021</div>
                            <div class="link"></div>
                        </a>
                        <a href="#year19" class="item" data-circle-year="year19">
                            <div class="year">2022</div>
                            <div class="link"></div>
                        </a>
                    </div>
                </div>
         </div>
         <div class="scroll-wrap">
         <main class="timeline-wrap">
             <div class="container">
                <section class="time-section" id="year0">
                    <div class="circle-marker"></div>
                        <div class="row pos-rel">
                            <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                                <div class="year-title">
                                    <img src="images/Timeline/1999_1.jpg" alt="placeholder1" class="img-fluid">
                                </div>
                            </div>
    
                            <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                                <div class="info-wrap">
                                    <h6 class="year-span">1999</h6>
                                    <div class="year-section-header pos-rel">
                                        Inauguration of SFIT
                                    </div>
                                    <p class="year-section-info">
                                        St. Francis Institute of Technology (SFIT) was started in the academic year 1999-2000 with three branches, Computer Engineering, Information Technology Engineering and Electronics & Telecommunication Engineering with a mission to be a chrysalis where bright youngsters are transformed into technological entrepreneurs and innovative leaders of tomorrow's world, consistent with the Franciscan vision of integrity, peace and love.
                                    </p>
                                </div>
                            </div>
                        </div>
                </section>
                <section class="time-section" id="year1">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2000
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2000</h6>
                                <div class="year-section-header pos-rel">
                                    Magnafest
                                </div>
                                <p class="year-section-info">
                                    Magnafest was the first cultural event of SFIT. It was a platform where all the students and staff presented their dazzling talents. Magnafest is now rechristened as Iris.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year2">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                                <div class="year-title">
                                    <img src="images/Timeline/2000_1.jpg" alt="placeholder1" class="img-fluid">
                                </div>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2001</h6>
                                <div class="year-section-header pos-rel">
                                    Swift
                                </div>
                                <p class="year-section-info">
                                    The portrayal of extraordinary talents continued by the means of the cultural event (previously known as Magnafest), in 2001 with the new name 'Swift'. The event is now known as Iris.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year3">
                    <div class="circle-marker"></div>
                        <div class="row pos-rel">
                                <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                                    <div class="year-title">
                                        <img src="images/Timeline/2002_1.jpg" alt="placeholder1" class="img-fluid">
                                    </div>
                                </div>
                            <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                                <div class="info-wrap">
                                    <h6 class="year-span">2002</h6>
                                    <div class="year-section-header pos-rel">
                                        Computer Society of India
                                    </div>
                                    <p class="year-section-info">
                                        CSI at SFIT started in the year 2002, has always worked towards the goal of transforming students into technical and competent professionals. 
                                    </p>
                                    <div class="year-section-header pos-rel">
                                        Magnafest
                                    </div>
                                    <p class="year-section-info">
                                        Swift, a cultural event in SFIT, was once again renamed as Magnafest in the year 2002. From the year 2003 onwards Magnafest was renamed as Iris and has continued to be called so ever since.
                                    </p>
                                </div>
                            </div>
                        </div>
                </section>
                <section class="time-section" id="year4">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2003
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2003</h6>
                                <div class="year-section-header pos-rel">
                                    Mosaic
                                </div>
                                <p class="year-section-info">
                                    Mosaic is the technical fest of SFIT conducted by various Student Chapters. Mosaic is an array of events that covers various technical aspects.The event includes all the departments where students learn about different concepts in the engineering curriculum. 
                                </p>
                                <div class="year-section-header pos-rel">
                                    Iris
                                </div>
                                <p class="year-section-info">
                                    IrIS was first organised in 2003 and it has been a college trend since then on a grand scale. It is organised by the student body of the college with enormous zeal and enthusiasm. It is a platform on which students bloom into entrepreneurs. Iris epitomizes the spirit of SFITians. 
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year5">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                            <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                                <div class="year-title">
                                    <img src="images/Timeline/2005_1.jpg" alt="placeholder1" class="img-fluid">
                                </div>
                            </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2005</h6>
                                <div class="year-section-header pos-rel">
                                    R&D 
                                </div>
                                <p class="year-section-info">
                                    Keeping a vision in mind, a team of staff members led by the Principal started an R&D cell or Centre of Innovation way back in 2005 to nurture the young minds of both our faculty and students.They aimed at promoting R&D activities and technological upgradation of the staff as well as students.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Sanshodhan
                                </div>
                                <p class="year-section-info">
                                    Sanshodhan was founded in the year 2005 with the purpose of motivating and encouraging new people and training them on how to write research papers.The technical magazine of SFIT is primarily meant for publishing the research papers and technical articles written by the faculty and students of SFIT.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Synergy
                                </div>
                                <p class="year-section-info">
                                    Synergy is a mega event conducted by St. Francis Institutions, every year, which provides ample opportunities to each student to express his/her talents.

                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year6">
                    <div class="circle-marker"></div>
                        <div class="row pos-rel">
                            <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                                <h1 class="year-title">
                                    2007
                                </h1>
                            </div>
                            <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                                <div class="info-wrap">
                                    <h6 class="year-span">2007</h6>
                                    <div class="year-section-header pos-rel">
                                        Robotics and Automation Wing
                                    </div>
                                    <p class="year-section-info">
                                        Robotics and Automation Wing (Team RAW) was founded in  2007. Team RAW was built with a vision of developing task specific robots, daily endeavouring to bridge the gap between “Can we do this?” to “We did this!”.
                                    </p>
                                </div>
                            </div>
                        </div>
                </section>
                <section class="time-section" id="year7">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <div class="year-title">
                                <img src="images/GIF/Clock GIF-min.gif" alt="placeholder1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2008</h6>
                                <div class="year-section-header pos-rel">
                                    Institute of Electronics and Telecommunication Engineers
                                </div>
                                <p class="year-section-info">
                                    The IETE student Chapter at SFIT started in 2008. Their main objective is to provide a platform to the students where they can develop their technical and managerial skills by organising various technical events.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Upgrading SFIT's Structure
                                </div>
                                <p class="year-section-info">
                                    In the year 2008, SFIT expanded its structure to a 7 floored building.
                            </div>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year8">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2010
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2010</h6>
                                <div class="year-section-header pos-rel">
                                    Expansion of CMPN and EXTC branches
                                </div>
                                <p class="year-section-info">
                                    In the year 2010, SFIT expanded CMPN and EXTC branches in the college, with each of them now having 120 seats.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year9">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2011
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2011</h6>
                                <div class="year-section-header pos-rel">
                                    Information Technology Student Association
                                </div>
                                <p class="year-section-info">
                                    ITSA is a departmental student chapter of the Department of Information Technology. Founded in the academic year 2011-12, the committee organises events to bridge the gap between classroom education and the technical skills required by students to be industry ready.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year10">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <div class="year-title">
                                <img src="images/Timeline/2012_1.png" alt="placeholder1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2012</h6>
                                <div class="year-section-header pos-rel">
                                    Commencement of PG programs
                                </div>
                                <p class="year-section-info">
                                    PG programs in SFIT were introduced in the year 2012. To improve the path of developing post graduates who will be competent in exploring, developing and disseminating new knowledge in their areas of specialisation, was the main aim to introduce these programs.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Entrepreneurship Cell
                                </div>
                                <p class="year-section-info">
                                    The SFIT E-cell was founded in the year 2012, with an objective to promote the institutional vision of transforming youngsters into technological entrepreneurs and innovative leaders.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Institute of Electrical and Electronics Engineers 
                                </div>
                                <p class="year-section-info">
                                    IEEE commenced in the year 2012 into SFIT. It stands for Institute of Electrical and Electronics Engineers. IEEE-SFIT endeavours to foster technical learning and instil interpersonal competence for the overall personality development.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Time Capsule
                                </div>
                                <p class="year-section-info">
                                    The Time Capsule was buried in the year 2012. It preserves beautiful memories that will be revealed in 2022.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year11">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <div class="year-title">
                                <img src="images/GIF/Clock GIF-min.gif" alt="placeholder1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2013</h6>
                                <div class="year-section-header pos-rel">
                                    ISO Certification
                                </div>
                                <p class="year-section-info">
                                    SFIT received its ISO certification in the year 2013. The institute is certified for meeting with the Quality Management System Standards ISO 9001:2015, to provide undergraduate courses in Engineering/Technology.

                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year12">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2014
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2014</h6>
                                <div class="year-section-header pos-rel">
                                    Bits-N-Bytes
                                </div>
                                <p class="year-section-info">
                                    Bits-N-Bytes, an e-newsletter of St. Francis Institute of Technology was first issued in the year 2014. It is compiled and published (online) twice a year (as January to June and July to December).
                                </p>
                                <div class="year-section-header pos-rel">
                                    1st IEEE conference on CSCITA
                                </div>
                                <p class="year-section-info">
                                    The First IEEE International Conference on CSCITA, approved by IEEE, USA and technically co-sponsored by IEEE Bombay section, was held in the year 2014. This conference brought together academia and industry so as to have further research and collaboration between institutions and disciplines.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year13">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2015
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2015</h6>
                                <div class="year-section-header pos-rel">
                                    Prayas
                                </div>
                                <p class="year-section-info">
                                    Prayas is organised by the Department of Basic Science and Humanities annually as an exclusive platform for the First Year Engineering students to transform knowledge into application and at the same time enhancing soft skills. Prayas started in 2015 with the aim of developing scientific skills and innovating thinking among students.
                                </p>
                                <div class="year-section-header pos-rel">
                                    National Social Service
                                </div>
                                <p class="year-section-info">
                                    Formed in 2012, the sole aim of NSS is to provide hands-on experience to young students in delivering community services.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Commencement of PhD in EXTC & CMPN
                                </div>
                                <p class="year-section-info">
                                    In SFIT, PhD programs  in EXTC and CMPN were introduced in the year 2015. The main aim of introducing these programs was to help students create fresh knowledge, discover new things and develop new skills in the field of EXTC and CMPN. 
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year14">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <div class="year-title">
                                <img src="images/GIF/Clock GIF-min.gif" alt="placeholder1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2017</h6>
                                <div class="year-section-header pos-rel">
                                    CodeX 
                                </div>
                                <p class="year-section-info">
                                    CodeX, which was founded in the year 2017, aims to enhance analytical and logical problem-solving skills through advanced coding exercises.
                                </p>
                                <div class="year-section-header pos-rel">
                                    2nd IEEE International Conference on CSCITA
                                </div>
                                <p class="year-section-info">
                                    After the grand success of CSCITA 2014, SFIT came up with the 2nd International Conference on CSCITA on 7th to 8 th April, 2017 which was sponsored by IEEE Mumbai. The conference was aimed at bringing together academia and industry to foster research and provide a platform for future collaborations.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year15">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2018
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2018</h6>
                                <div class="year-section-header pos-rel">
                                    Commencement of Electrical & Mechanical Department 
                                </div>
                                <p class="year-section-info">
                                    SFIT started off having 3 departments; CMPN, EXTC and INFT. In the year 2018, two more courses commenced namely, Electrical and Mechanical Engineering having an allocation of 60 seats each.
                                </p>
                                <div class="year-section-header pos-rel">
                                    SFITAA
                                </div>
                                <p class="year-section-info">
                                    SFITAA was formally established in 2018. The association is dedicated towards strengthening the links between SFIT and its alumni. To encourage fellowship and greater interaction among SFIT alumni in India and across the world. Our mission is to organize activities to promote research & development in various fields of Engineering.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year16">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <div class="year-title">
                                <img src="images/Timeline/2019_1.jpg" alt="placeholder1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2019</h6>
                                <div class="year-section-header pos-rel">
                                    Mechanical Engineering Students Association
                                </div>
                                <p class="year-section-info">
                                    Established in 2019, MESA is a student committee exclusively for the Mechanical Engineering Department students of SFIT formed to bridge the gap between academics and industries by carrying out various seminars, webinars and Industrial visits.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Electrical Engineering Students Association
                                </div>
                                <p class="year-section-info">
                                    EESA, founded in 2019, focuses on expanding awareness and knowledge in the field of electrical engineering through activities, trying to inculcate leadership and a sense of responsibility among the students.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Inauguration of B Wing 
                                </div>
                                <p class="year-section-info">
                                    The B wing is dedicated in memory of-Late Bro. Columban Keller which was inaugurated in the year 2017 by Bro. Jose Valliara.The library, canteen as well as multiple labs come under the B wing of the SFIT campus.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Rekindle 2019
                                </div>
                                <p class="year-section-info">
                                    The very 1st Alumni meet was held on 5th January 2019. All the alumni were greeted in person with great enthusiasm.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year17">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2020
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2020</h6>
                                <div class="year-section-header pos-rel">
                                    Team TEJAS 
                                </div>
                                <p class="year-section-info">
                                    Team Tejas was formed in 2020 by a group of students from SFIT, working towards the development of a Fixed Wing RC(Radio-Controlled) Aircraft.
                                </p>
                                <div class="year-section-header pos-rel">
                                    Team GATEE
                                </div>
                                <p class="year-section-info">
                                    Established in 2020.Gate is the official go-karting team of SFIT that aims to design and fabricate Gokarts and participate in various national level competitions.
                                </p>
                                <div class="year-section-header pos-rel">
                                    3rd IEEE International Conference on CSCITA
                                </div>
                                <p class="year-section-info">
                                    SFIT organised the 3rd International Conference on CSCITA on April 3 - 4, 2020. This Conference aimed at bringing together academia and industry to foster research and provide a platform for future collaborations. The conference included keynote speeches, invited talks and technical sessions.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year18">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <div class="year-title">
                                <img src="images/Timeline/2021_1.png" alt="placeholder1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2021</h6>
                                <div class="year-section-header pos-rel">
                                    Rekindle 2021
                                </div>
                                <p class="year-section-info">
                                    Even though circumstances forced everyone to remain indoors, it didn't deter our spirit to gather all our alumni together to celebrate friendship and togetherness. Playing with technology, we decided to take on the situation and go ahead to get a Virtual Reunion held, aiming to create a platform for the Alumni to coalesce with our Alma Mater.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="time-section" id="year19">
                    <div class="circle-marker"></div>
                    <div class="row pos-rel">
                        <div class="col-md-6 animate__animated animate__fadeInLeft wow">
                            <h1 class="year-title">
                                2022
                            </h1>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight wow right-sub-section p-3">
                            <div class="info-wrap">
                                <h6 class="year-span">2022</h6>
                                <div class="year-section-header pos-rel">
                                    Rekindle 2022 - Opening of The Time Capsule
                                </div>
                                <p class="year-section-info">
                                    Stay tuned!
                                </p>
                        </div>
                    </div>
                </section>
                </div>
            </main>
         </div>
         <script>
            new WOW().init();
        </script>
        <script src="js/scrollspy.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
    
  <script>
        $(document).ready(function() {
            var navpos = $('#timeline').offset();
            console.log(navpos.top);
            $(window).bind('scroll', function() {
                if ($(window).scrollTop() > navpos.top) {
                    $('#timeline').addClass('sticky-wrap');
                    $('#year0').addClass('m-top-96');
                }
                else {
                    $('#timeline').removeClass('sticky-wrap');
                    $('#year0').removeClass('m-top-96');
                }
            });
        });
  </script>
</html>


