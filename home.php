<?php
include 'process.php';
session_start();

/** To assure that no one can go to the page without logging in**/
if(!isset($_SESSION["username"])){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Strawberry Lightning Con Site</title>
    </head>
    <body>
        <!--========== NAVIGATION BAR ==========-->
        <?php require_once('header.php')?>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class="bx bx-chevron-up scrolltop__icon"></i>
        </a>


        <main class="l-main">
        <!--========== EXPLORE ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Hex<br>Con</h1>
                        <h2 class="home__subtitle">Dreams can <br>become reality.</h2>
                    </div>

                    <img src="assets/img/home.png" alt="" class="home__img">
                </div>
            </section>

        <!--========== EVENTS ==========-->
            <!--=== ANIME & MANGA ===-->
            <section class="event section bd-container" id="event">
        <span class="section-subtitle">Browse Conventions</span>
        <h2 class="section-title" id="anime">Anime & Manga Cons</h2>

        <div class="event__container bd-grid">
                <div class="event__content">
                <img src="assets/img/cosplaymania.jpg" alt="" class="event__img">
                <h3 class="event__name">Cosplay Mini Matsuri 2021</h3>
                <span class="event__detail">Only fully vaccinated guests will be allowed to enter the event, and tickets will be limited per day to ensure social distancing.</span>
                <span class="event__preci">December 28-30, 2021</span>
                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
            </div>

            <div class="event__content">
                <img src="assets/img/anime_LA.jpg" alt="" class="event__img">
                <h3 class="event__name">Animé Los Angeles 2022</h3>
                <span class="event__detail">Animé Los Angeles is a medium-sized fan-run convention, "on the other side of the year" -- in the winter.</span>
                <span class="event__preci">January 6-9, 2022</span>
                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
            </div>

            <div class="event__content">
                <img src="assets/img/ANIMEZAP.jpg" alt="" class="event__img">
                <h3 class="event__name">Anime-ZAP</h3>
                <span class="event__detail">Anime-ZAP! is a three day convention that celebrates anime, video games, comic books, and popular culture. Attend the event in costume and make new friends who like anime. Over a thousand people who like anime and pop culture will join us for a fun time filled with cosplays, vendors selling anime merchandise, and amazingly talented artists.</span>
                <span class="event__preci">January 7 - 9, 2022</span>
                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
            </div>

            <div class="event__content">
                <img src="assets/img/ichibancon.png" alt="" class="event__img">
                <h3 class="event__name">Ichibancon</h3>
                <span class="event__detail">Ichibancon is an anime convention in the area of Charlotte, North Carolina. We will be having 4 days of events in January of 2022 with tons of fun events to attend, a dealers room, video showings, an artist alley, a big video and tabletop game room, an awesome rave, plenty of good panels, cosplay contest and much more</span>
                <span class="event__preci">January 13-16, 2022</span>
                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
            </div>

            <div class="event__content">
                <img src="assets/img/oad20.jpg" alt="" class="event__img">
                <h3 class="event__name">Orlando AnimeDay</h3>
                <span class="event__detail">Our show is the one day anime mini-convention that brings all your anime/manga needs to you without all the hassle or extra expense associated with other conventions. </span>
                <span class="event__preci">January 8, 2022</span>
                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
            </div>

            <div class="event__content">
                <img src="assets/img/fanexpo.jpg" alt="" class="event__img">
                <h3 class="event__name">Fan Expo New Orleans 2022</h3>
                <span class="event__detail">FAN EXPO New Orleans is the ultimate go-to event for sci-fi, horror, anime, and gaming event in New Orleans that attracts thousands of people to the Ernest N. Morial Convention Center.</span>
                <span class="event__preci">January 7-9, 2022</span>
                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
            </div>

            <div class="event__content">
                <img src="assets/img/animeimpulse.png" alt="" class="event__img">
                <h3 class="event__name">Anime Impulse 2022</h3>
                <span class="event__detail">This coming January on the 15th and 16th, ANIME Impulse makes its grand return to the Pomona Fairplex for its 6th year!Don't forget, a pass at ANIME Impulse also grants you access to Asian American Expo, K-PLAY! Fest and Sneaker Expo.</span>
                <span class="event__preci">January 15-16, 2022</span>
                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
            </div>
        </div>
            </section>

            <!--=== COMICS ===-->
            <section class="event section bd-container" id="event">
                    <span class="section-subtitle">Browse Conventions</span>
                    <h2 class="section-title" id="comics">Comic Cons</h2>

                    <div class="event__container bd-grid">

                        <div class="event__content">
                            <img src="assets/img/wondercon.jpg" alt="" class="event__img">
                            <h3 class="event__name">WonderCon 2022</h3>
                            <span class="event__detail">WonderCon is returning to your living room for panels, exhibits, contests, and more!</span>
                            <span class="event__preci">April 1 - 3, 2022</span>
                            <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>

                        <div class="event__content">
                            <img src="assets/img/shoff.png" alt="" class="event__img">
                            <h3 class="event__name">Comic Book & Non-Sports Card Show 2022</h3>
                            <span class="event__detail">Shoff Promotions Comic Book & Non-Sports Card Show is a family friendly event jam-packed with thousands of Gold, Silver, Bronze and Modern Age Comic Books, Superheroes Toys, Anime, Non sports cards including Pokemon & Magic, and Baseball, Football, Basketball, and Hockey cards vintage to the present and sports memorabilia Plus Hobby Supplies for all your collecting needs.</span>
                            <span class="event__preci">January 7-9, 2022</span>
                            <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>

                        <div class="event__content">
                            <img src="assets/img/fanexpo1.jpg" alt="" class="event__img">
                            <h3 class="event__name">Fan Expo 2022</h3>
                            <span class="event__detail">Shop hundreds of retailers from all over to make your experience unforgettable. Whether it’s a rare comic book, original artwork, graphic novels, memorabilia, Blu-ray's, videos, games, toys or t-shirts – you'll find it all here.</span>
                            <span class="event__preci">Price</span>
                            <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
            </section>

            <!--=== GAMES ===-->
            <section class="event section bd-container" id="event">
                        <span class="section-subtitle">Browse Conventions</span>
                        <h2 class="section-title" id="games">Games Cons</h2>

                        <div class="event__container bd-grid">

                            <div class="event__content">
                                <img src="assets/img/gamicon.PNG" alt="" class="event__img">
                                <h3 class="event__name">Gamicon 2022</h3>
                                <span class="event__detail">Gamicon is Eastern Iowa’s premier game convention. We offer three days of family friendly events ranging from scheduled board, card and role-playing games to a live game auction and a huge game library that lets you choose the gaming experience you want.</span>
                                <span class="event__preci">Feb 25-27, 2022</span>
                                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>

                            <div class="event__content">
                                <img src="assets/img/anime_LA.jpg" alt="" class="event__img">
                                <h3 class="event__name">Animé Los Angeles 2022</h3>
                                <span class="event__detail">Animé Los Angeles is a medium-sized fan-run convention, "on the other side of the year" -- in the winter.</span>
                                <span class="event__preci">January 6-9, 2022</span>
                                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>

                            <div class="event__content">
                                <img src="assets/img/hexacon.png" alt="" class="event__img">
                                <h3 class="event__name">HexaCon</h3>
                                <span class="event__detail">HexaCon is a Denver-based convention for Board games, Role-playing games (RPGs), Miniatures games, and Train games</span>
                                <span class="event__preci">Feb 14-17, 2022 </span>
                                <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
            </section>

            <!--=== CONTESTS ===-->
            <section class="event section bd-container" id="event">
            <span class="section-subtitle">Browse for Contests</span>
            <h2 class="section-title" id="contests">Contests</h2>

            <div class="event__container bd-grid">

                <div class="event__content">
                    <img src="assets/img/sakuracon.jpg" alt="" class="event__img">
                    <h3 class="event__name">Sakura Contest 2022</h3>
                    <span class="event__detail">We are beyond excited to announce that registration for Sakura-Con’s 25th anniversary in 2022 is now open!</span>
                    <span class="event__preci">Exlusive for Members</span>
                    <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
                </div>

                <div class="event__content">
                    <img src="assets/img/3amvcontest.jpg" alt="" class="event__img">
                    <h3 class="event__name">Anime LA AMV Contest</h3>
                    <span class="event__detail">Anime Music Videos, or AMVs, are short fan-made music videos that pay homage to many of our favorite shows. Whether you are a renowned award winning talent or just starting out with your first ever project, our event welcomes creators of all skills and experiences. With some persistence, a desire to create, and admittedly a bit of luck, you just might see your work compete on the main stage!</span>
                    <span class="event__preci">January 12, 2022</span>
                    <a href="Get Involved.php#ticket" class="button event__button"><i class="bx bx-right-arrow-alt"></i></a>
                </div>


            </div>
            </section>

    <!--========== FOOTER ==========-->
    <?php require_once('footer.php')?>

    <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
        </main>
    </body>
</html>
