<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master_Theme2.css" />
    <title>Alumni Speak</title>
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
                        <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill"
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
        <div class="row">
            <div class="ribbon alumni-ribbon">
                <img alt="ribbon" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="bg-container flex-center">
        <div class="container-fluid">
            <div class="row gx-5">
                <div class="col-md px-5">
                    <div class="row py-5">
                        <div class="col-auto flex-center">
                            <img src="./images/alumni/AaronAllan.jpg" alt="Temp profile"
                                class="img-fluid profile-pic">
                        </div>
                        <div class="col">
                            <p class="alumni-text">
                                This time capsule would contain a lot of memories which
                                people would look back at and cherish. It would contain
                                expectations for the future, now present.
                            </p>
                            <button type="button" class="btn btn-danger btn-sm rounded-0 btn-pull-right"
                                data-bs-toggle="modal" data-bs-target="#msg-modal-1">
                                Read More
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="msg-modal-1" tabindex="-1" aria-labelledby="msg-modal-1Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="msg-box">
                                            <div class="header-img">
                                                <img src="./images/alumni/AaronAllan.jpg" alt="temp">
                                            </div>
                                            <div class="msg-text">
                                                <h2>Aaron Allan Rebello</h2>
                                                <div class="row">
                                                    <div class="col-md">

                                                        <p>
                                                            This time capsule would contain a lot of memories which
                                                            people would look back at and cherish. It would contain
                                                            expectations for the future, now present. It would contain
                                                            the vision that people had for our country and our society.
                                                            It would be a great tool to analyse how far we have come and
                                                            how close we are to achieve our expectations.

                                                            Perhaps the most obvious item to place in our hypothetical
                                                            time capsule would be the face mask. In 10 years' time, you
                                                            might find yours in a drawer and marvel at how it became
                                                            such a dominant part of life in 2020-21. I would also put a
                                                            syringe, a stethoscope and rubber gloves to represent the
                                                            phenomenal efforts put in by the doctors, health workers and
                                                            sanitation workers as they literally played a huge role in
                                                            the survival of the society as we know it.

                                                        </p>
                                                    </div>
                                                    <div class="col-md line">

                                                        <p>
                                                            I would also put
                                                            images of our River Yamuna and the article showing how toxic
                                                            it has become and how it has 2-3 feet tall iceberg like
                                                            structures of toxic froth.
                                                            The purpose is because we want to
                                                            be optimistic about our future and when in future these
                                                            pictures are looked at people would be happy to know that
                                                            they don't live in that world anymore. By placing a
                                                            top-of-the-line computer system into our time capsule, we
                                                            can provide our future generation with the acknowledgment of
                                                            success and probably a little humour in the field of
                                                            computers.

                                                            This year was a clear representation of human zeal and
                                                            perseverance to never give up and to keep going even when
                                                            there is a pandemic around. It would be great to find out
                                                            when the time capsule is opened again that fossil fuels are
                                                            obsolete and we are living on renewable resources with net
                                                            zero or negative carbon footprint.
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
                </div>
                <div class="col-md px-5">
                    <div class="row py-5">
                        <div class="col-auto flex-center">
                            <img src="./images/alumni/GeorgioCheruvelil.jpeg" alt="Temp profile"
                                class="img-fluid profile-pic">
                        </div>
                        <div class="col">
                            <p class="alumni-text">
                                Time flies. It's been 10 years since the Time Capsule was
                                buried in the campus of SFIT and it brings back some great
                                memories. IRIS 2012 was themed around the Time Capsule
                                concept as this was really unique and had never been done in
                                Mumbai before.
                            </p>
                            <button type="button" class="btn btn-danger btn-sm rounded-0 btn-pull-right"
                                data-bs-toggle="modal" data-bs-target="#msg-modal-2">
                                Read More
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="msg-modal-2" tabindex="-1" aria-labelledby="msg-modal-2Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="msg-box">
                                            <div class="header-img">
                                                <img src="./images/alumni/GeorgioCheruvelil.jpeg" alt="temp">
                                            </div>
                                            <div class="msg-text">
                                                <h2>Georgio Cheruvelil</h2>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>
                                                            Time flies. It's been 10 years since the Time Capsule was
                                                            buried in the campus of SFIT and it brings back some great
                                                            memories. IRIS 2012 was themed around the Time Capsule
                                                            concept as this was really unique and had never been done in
                                                            Mumbai before. The idea was put forth by one of our
                                                            colleagues at SFIT and my co- Event Director and I
                                                            completely supported this idea. Once we got the idea
                                                            approved by our college Director, we set up a team to
                                                            exclusively manage all 'Time capsule' operations. The
                                                            construction of the Time Capsule was outsourced to a
                                                            third-party vendor and we hired an external artist for the
                                                            creative stuff. Our internal creative team spent a
                                                            significant amount of effort as well.
                                                        </p>
                                                    </div>
                                                    <div class="col-md line">
                                                        <p>
                                                            The Time Capsule also
                                                            got some media coverage as far as I can remember. Once the
                                                            Time Capsule was ready to be buried, we invited letters and
                                                            messages from the entire student body. The idea was to write
                                                            a letter or place an item in an envelope to be given to a
                                                            particular individual in 2022 when the time capsule will be
                                                            unearthed. We received a ton of envelopes till the last day
                                                            and even a few hours before the time capsule pit was to be
                                                            sealed. The team this year would have a challenging task of
                                                            reaching out to everyone to whom the letters have been
                                                            addressed. I wish the team good luck.
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
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-md px-5">
                    <div class="row py-5">
                        <div class="col-auto flex-center">
                            <img src="./images/alumni/JesonJose.jpeg" alt="Temp profile"
                                class="img-fluid profile-pic">
                        </div>
                        <div class="col">
                            <p class="alumni-text">
                                SFIT has been an institution which has moulded engineers to
                                be leaders in their professional journey. I am fortunate
                                that I gained the experience of academics and people
                                management skills to be currently in the senior leadership
                                position in my field of choice.
                            </p>
                            <button type="button" class="btn btn-danger btn-sm rounded-0 btn-pull-right"
                                data-bs-toggle="modal" data-bs-target="#msg-modal-3">
                                Read More
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="msg-modal-3" tabindex="-1" aria-labelledby="msg-modal-3Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="msg-box">
                                            <div class="header-img">
                                                <img src="./images/alumni/JesonJose.jpeg" alt="temp">
                                            </div>
                                            <div class="msg-text">
                                                <h2>Jeson Jose Tharakan</h2>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>
                                                            SFIT has been an institution which has moulded engineers to
                                                            be leaders in their professional journey. I am fortunate
                                                            that I gained the experience of academics and people
                                                            management skills to be currently in the senior leadership
                                                            position in my field of choice. The teaching staff and the
                                                            senior management had always provided a platform for me to
                                                            develop accountability in every aspect, which is a critical
                                                            skill set in any professional journey. Learning through a
                                                            tough academic curriculum has moulded me to be a disciplined
                                                            and result oriented professional. My advice to all my fellow
                                                            SFITians, cherish your experience. Each year brings new
                                                            challenges which we engineers love to overcome. These are
                                                            the building blocks for a successful journey ahead.
                                                        </p>
                                                    </div>
                                                    <div class="col-md line">
                                                        <p>
                                                            The
                                                            legacy that SFIT provides is priceless! I am glad to know
                                                            that the time capsule was established in 2012.
                                                            Unfortunately, it was established after I graduated. 10
                                                            years back in time I would have kept my short-term vision of
                                                            where I see myself leading a business venture and I would
                                                            have been proud to bring all the learnings in my SFIT and
                                                            professional journey to inspire future leaders who pass out
                                                            from this prestigious institution to lead the next
                                                            generation of sustainable and entrepreneurial visionaries to
                                                            strive to be employers and not employees. Happy to see the
                                                            growth of the institution as they provide a diverse academic
                                                            curriculum backed by a strong teaching team and qualified
                                                            senior leaders. I wish all the very best and success to the
                                                            students and the institution. I am a true ambassador of SFIT
                                                            and always will be proud to be a part of this institution.
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
                </div>
                <div class="col-md px-5">
                    <div class="row py-5">
                        <div class="col-auto flex-center">
                            <img src="./images/alumni/MohakJani.jpg" alt="Temp profile"
                                class="img-fluid profile-pic">
                        </div>
                        <div class="col">
                            <p class="alumni-text">
                                The SFIT Time Capsule is definitely not only special but
                                also an iconic place throughout SFIT. As to what it shall
                                hold, I am pretty sure it contains lots of memories such as
                                photos, newspapers, letters and more.
                            </p>
                            <button type="button" class="btn btn-danger btn-sm rounded-0 btn-pull-right"
                                data-bs-toggle="modal" data-bs-target="#msg-modal-4">
                                Read More
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="msg-modal-4" tabindex="-1" aria-labelledby="msg-modal-4Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="msg-box">
                                            <div class="header-img">
                                                <img src="./images/alumni/MohakJani.jpg"  alt="temp">
                                            </div>
                                            <div class="msg-text">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>
                                                            The SFIT Time Capsule is definitely not only special but
                                                            also an iconic place throughout SFIT. As to what it shall
                                                            hold, I am pretty sure it contains lots of memories such as
                                                            photos, newspapers, letters and more. It would be really
                                                            interesting to see what's inside & read the content inside
                                                            it. I am sure it would be really special for the batch that
                                                            buried it & the batch that will recover it. Sitting near the
                                                            stage & the Time Capsule, I always wondered what I would put
                                                            in the capsule. Thinking about it a little I would say it
                                                            would definitely be photos & photo collage, especially of
                                                            IRIS, unity of IT department (if you know, you know) & that
                                                            of my ECell family & TEDxSFIT. I would like to put these
                                                            photos in particular because it has a special place in my
                                                            heart, no matter where I go.
                                                        </p>
                                                    </div>
                                                    <div class="col-md line">
                                                        <p>
                                                            IRIS & traditional day make the
                                                            list since it's that time of the month when you enjoy the
                                                            most & thus you make a lot of memories. Lastly, Ecell,
                                                            because it has been a big part of my engineering journey
                                                            from being an Eleader in FE, to co-chairing it, then being
                                                            an advisor & even a super advisor (thanks to our very kind
                                                            super juniors). I have quite a few memories near the Time
                                                            Capsule, but the one particularly etched is the one during
                                                            the end of my BE. As a batch of 2021, our college ended in
                                                            front of our laptop screens in the comfort of our rooms. I
                                                            was at college collecting my LORs & to my surprise, I met my
                                                            batchmates (it was a total coincidence). We had a great
                                                            photo session around the Time Capsule. Hence it became one
                                                            of my last college memories as a student.
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
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-md px-5">
                    <div class="row py-5">
                        <div class="col-auto flex-center">
                            <img src="./images/alumni/SherinGilson.jpg" alt="Temp profile" class="img-fluid profile-pic">
                        </div>
                        <div class="col">
                            <p class="alumni-text">
                                If every memory I had during my college years could be
                                captured and cherished, I would call it the Time Capsule and
                                this was the primary reason behind the inception of the SFIT
                                Time Capsule.
                            </p>
                            <button type="button" class="btn btn-danger btn-sm rounded-0 btn-pull-right"
                                data-bs-toggle="modal" data-bs-target="#msg-modal-5">
                                Read More
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="msg-modal-5" tabindex="-1" aria-labelledby="msg-modal-5Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="msg-box">
                                            <div class="header-img">
                                                <img src="./images/alumni/SherinGilson.jpg"  alt="temp">
                                            </div>
                                            <div class="msg-text">
                                                <h2>Sherin Gilson</h2>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>
                                                            “There is a moment which is frozen in time
                                                            Waiting for you to unlock it from its ice prison
                                                            Set that memory free, let it go, then move on
                                                            Release the chill to discover your shine.”
                                                            - A. Bentley<br>

                                                            If every memory I had during my college years could be
                                                            captured and cherished, I would call it the Time Capsule and
                                                            this was the primary reason behind the inception of the SFIT
                                                            Time Capsule. In 2012, the Iris committee realised the
                                                            ardent need to cherish all these amazing memories in a box
                                                            that would be opened 10 years later just to remember those
                                                            wonderful and fun-filled times!
                                                        </p>
                                                    </div>
                                                    <div class="col-md line">
                                                        <p>
                                                            I remember an incident where
                                                            one of my close friends put a lighter in the time capsule to
                                                            commemorate his first memory of smoking a cigarette and
                                                            another friend put a CD of mix tapes her boyfriend gifted
                                                            her. To each SFITian, the contents of the time capsule has
                                                            significant relevance as it is a part of them in the box. I
                                                            cannot wait to see the box open and have the contents
                                                            revealed. It is a reminder to each one of us about the
                                                            friendships, laughter, joy and madness each of us bought to
                                                            make us what we are today!
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
                </div>
                <div class="col-md px-5">
                    <div class="row py-5">
                        <div class="col-auto flex-center">
                            <img src="./images/alumni/Stephen.jpg" alt="Temp profile"
                                class="img-fluid profile-pic">
                        </div>
                        <div class="col">
                            <p class="alumni-text">
                                When I was first asked about the Time Capsule by the SFITAA
                                Team, I was totally unaware of it. They mentioned that it
                                was buried back in the year 2012 near the basketball court
                                of our college. I am a little excited to know what was put
                                in it. It will be fun to look back into the past and see
                                what was sent to the future.
                            </p>
                            <button type="button" class="btn btn-danger btn-sm rounded-0 btn-pull-right"
                                data-bs-toggle="modal" data-bs-target="#msg-modal-6">
                                Read More
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="msg-modal-6" tabindex="-1" aria-labelledby="msg-modal-6Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="msg-box">
                                            <div class="header-img">
                                                <img src="./images/alumni/Stephen.jpg" alt="temp">
                                            </div>
                                            <div class="msg-text">
                                                <h2>Stephen</h2>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>
                                                            When I was first asked about the Time Capsule by the SFITAA
                                                            Team, I was totally unaware of it. They mentioned that it
                                                            was buried back in the year 2012 near the basketball court
                                                            of our college. I am a little excited to know what was put
                                                            in it. It will be fun to look back into the past and see
                                                            what was sent to the future. As to what the time capsule
                                                            might contain, it could be messages people wanted to give
                                                            themselves in the future, a piece of tech or art of that
                                                            time or maybe a cryptic message predicting the future.
                                                            Whatever it may be, I am sure it will be worth the 10 year
                                                            wait to have it finally opened. If I was given an
                                                            opportunity to put an element in the Time Capsule back then,
                                                            it would be a message for myself in the future, mentioning
                                                            the goal I need to achieve in 10 years.
                                                        </p>
                                                    </div>
                                                    <div class="col-md line">
                                                        <p>
                                                            It will be a good
                                                            marker to gauge if I am on track in pursuing my goals. Or it
                                                            could be a reminder to tell me what my roots are and to stay
                                                            grounded in reality rather than pursue phantoms of success.
                                                            When I thought about why I would want to put that message,
                                                            it was to have a constant reminder to stay the course. It is
                                                            very easy to veer away from your goals over a long period of
                                                            time. As the change is gradual, you always never see it
                                                            until it is too late. Apart from a message to keep pursuing
                                                            my goal, I would put in a memento from my final days in
                                                            college. The memento will help me look back at all the
                                                            wonderful memories I have had attending SFIT for my
                                                            graduation.
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
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="./js/header.js"></script>
</body>

</html>
