<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header__back"></div>
        <nav class="navbar">
            <img id="imgButton" src="IMAGENES/NavBar/1.png" alt="icono menu" class="navbar__menu">
            <div id="navbarList" class="navbar__dropdown">
                <a class="navbar__dropdown__page" href="about.html">About Us</a>
                <a class="navbar__dropdown__page" href="rooms.html">Rooms</a>
                <a class="navbar__dropdown__page" href="offers.html">Offers</a>
                <a class="navbar__dropdown__page" href="contact.html">Contact</a>
            </div>
            <div id="logoNavbar" class="navbar__logo">
                <div class="navbar__logo__box">
                    <h2 class="navbar__logo__box__letter">H</h2> 
                </div>
                <div>
                    <h2 class="navbar__logo__title">HOTEL</h2>
                    <h2 class="navbar__logo__subtitle">MIRANDA</h2>
                </div>
                
            </div>
            <div class="navbar__icon">
                <div class="navbar__icon__logo">
                    <img src="IMAGENES/NavBar/Vector.png" alt="icono Vector" class="navbar__icon__logo__vector">
                </div>
                <div class="navbar__icon__logo">
                    <img src="IMAGENES/NavBar/search.png" alt="icono Search" class="navbar__icon__logo__vector">
                </div>
            </div>
        </nav>
        <h2 class="header__title">THE ULTIMATE LUXURY EXPERIENCE</h2>
        <h2 class="header__section">The Perfect<br>Base For You</h2>
        <button class="header__take">TAKE A TOUR</button>
        <button class="header__learn">LEARN MORE</button>
        <div class="header__check">
            <div class="header__check__box">
                <label class="header__check__box__date" >Arrival date</label>
                <div class="header__check__box__calendar">
                    <img src="IMAGENES/NavBar/7853753_event_kashifarif_calendar_schedule_appoinment_icon 1.png" alt="logo calendar" class="header__check__box__calendar__logo">
                    <input class="header__check__box__calendar__input" type="text" placeholder="24th march 2025">
                </div>
            </div>
            <div class="header__check__box">
                <label class="header__check__box__date">Le Departure Date</label>
                <div class="header__check__box__calendar">
                    <img src="IMAGENES/NavBar/7853753_event_kashifarif_calendar_schedule_appoinment_icon 1.png" alt="logo calendar" class="header__check__box__calendar__logo">
                    <input class="header__check__box__calendar__input" type="text" placeholder="30th march 2020">
                </div>
            </div>
            <button class="header__check__button">CHECK AVAILABILITY</button>
        </div>
    </header>
    <section class="data">
        <article class="data__intro">
            <h4 class="data__intro__page">ABOUT US</h1>
                <h1 class="data__intro__title">Discover Our <br>Underground.</h1>
                <p class="data__intro__text">Lorem ipsum sit amet,consectetur adipisicing <br>elit,
                    sed do eiusmod tempor incididunt ut labore et <br>dolore magna aliqua.
                    Ut enim ad minim veniam,quis <br>nostrud exercitation ullamco laboris nisi 
                    ut aliquip ex <br>ea commodo consquat.
                </p>
                <button class="data__intro__button">BOOK NOW</button>
        </article>
        <article class="data__info">
            <div class="data__info__boxTeam">
                <img src="IMAGENES/Rooms/descarga.jpg" alt="photo room" class="data__info__boxTeam__image">
                <div class="data__info__boxTeam__team">
                    <img src="IMAGENES/SectionData/svg-gobbler - 2022-03-01T200745.428 1.png" alt="group logo" class="data__info__boxTeam__team__logo">
                    <h2 class="data__info__boxTeam__team__title">Strong Team</h2>
                    <p class="data__info__boxTeam__team__text">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit, sed <br>do eiusmod tempor.</p>
                    <img src="IMAGENES/SectionData/svg-gobbler - 2022-03-01T200745.428 2.png" alt="logo transparent" class="data__info__boxTeam__team__transparent">
                </div>
            </div>
            <div class="data__info__box">
                <img src="IMAGENES/Rooms/CibAGWB8z6i7U070F6mY_large.jpg" alt="box" class="data__info__boxTeam__image">
                <div class="data__info__box__luxury">
                    <img src="IMAGENES/SectionData/Group.png" alt="groupLogo" class="data__info__box__luxury__logo">
                    <h2 class="data__info__box__luxury__title">Luxury Room</h2>
                    <p class="data__info__box__luxury__text">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed <br> do eiusmod tempor.</p>
                </div>
            </div>
        </article>
    </section>
    <section class="rooms">
        <h2 class="rooms__page">ROOMS</h2>
        <h2 class="rooms__title">Hand Picked Rooms</h2>
    
        <div class="rooms__slider">
        <!--Slider-->
            <div class="swiper swiper-food">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!--Slide1-->
                <div class="swiper-slide">
                    <div>
                        <img  class="rooms__slider__image" src="IMAGENES/Rooms/CibAGWB8z6i7U070F6mY_large.jpg" alt="image room">
                        <div class="rooms__slider__boxLogo">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/8725460_bed_icon 1.png" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (1).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Group.png" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Layer_1.png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (2).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (3).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (4).png" alt=""> 
                        </div>  
                        <div class="rooms__slider__card">
                            <h2 class="rooms__slider__card__title">Minimal Duplex Room</h2>
                            <p class="rooms__slider__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p class="rooms__slider__card__price">$345/Night</p>
                        </div>
                    </div>
                </div>
                <!--Slide2-->
                <div class="swiper-slide">
                    <div>
                        <img  class="rooms__slider__image" src="IMAGENES/Rooms/CibAGWB8z6i7U070F6mY_large.jpg" alt="image room">
                        <div class="rooms__slider__boxLogo">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/8725460_bed_icon 1.png" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (1).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Group.png" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Layer_1.png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (2).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (3).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (4).png" alt=""> 
                        </div>  
                        <div class="rooms__slider__card">
                            <h2 class="rooms__slider__card__title">Minimal Duplex Room</h2>
                            <p class="rooms__slider__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p class="rooms__slider__card__price">$345/Night</p>
                        </div>
                    </div>
                </div>
                <!--Slide3-->
                <div class="swiper-slide">
                    <div>
                        <img  class="rooms__slider__image" src="IMAGENES/Rooms/CibAGWB8z6i7U070F6mY_large.jpg" alt="image room">
                        <div class="rooms__slider__boxLogo">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/8725460_bed_icon 1.png" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (1).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Group.png" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Layer_1.png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (2).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (3).png" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="IMAGENES/SectionRooms/Vector (4).png" alt=""> 
                        </div>  
                        <div class="rooms__slider__card">
                            <h2 class="rooms__slider__card__title">Minimal Duplex Room</h2>
                            <p class="rooms__slider__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p class="rooms__slider__card__price">$345/Night</p>
                        </div>
                    </div>
                </div>
                  
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
            </div>
        </div>
        <div class="rooms__boxVideo">
            <div class="rooms__boxVideo__container">
                <h2 class="rooms__boxVideo__container__intro">INTRO VIDEO</h2>
                <h2 class="rooms__boxVideo__container__title">Meet With Our Luxury Place.</h2>
                <p class="rooms__boxVideo__container__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
            </div>
            <img class="rooms__boxVideo__rectangleBrown" src="/IMAGENES/Home/Rectangle 27.png" alt="Brown">
            <iframe class="rooms__boxVideo__video" src="https://www.youtube.com/embed/Bu3Doe45lcU?si=1ykL7j9FH62Ne6Y8&amp;start=25" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <button class="rooms__boxVideo__buttonBook">BOOK NOW</button>
            
        </div>
    </section>
    <section class="facilities">
        <h4 class="facilities__title">FACILITIES</h4>
        <h2 class="facilities__section">Core Features</h2>
        <!--Swiper-->
        <div  class= "swiper swiper-facilities">
                        
            <div class="swiper-wrapper">
                        
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="IMAGENES/AboutUS/icon 1.png" alt="logo hand">
                        <img class="facilities__image__first" src="IMAGENES/Home/01 (2).png" alt="logo first">
                        <h2 class="facilities__image__title">Have High Rating</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider2-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="IMAGENES/AboutUS/facilities/reloj.png" alt="logo hand">
                        <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/02 (1).png" alt="logo first">
                        <h2 class="facilities__image__title">Quiet Hours</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider3-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="IMAGENES/AboutUS/facilities/ubicacion.png" alt="logo hand">
                        <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/03 (1).png" alt="logo first">
                        <h2 class="facilities__image__title">Best Locations</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider4-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="IMAGENES/AboutUS/facilities/cancellation.png" alt="logo hand">
                        <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/04 (1).png" alt="logo first">
                        <h2 class="facilities__image__title">Free Cancellation</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider5-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="IMAGENES/AboutUS/facilities/card.png" alt="logo hand">
                        <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/05 (1).png" alt="logo first">
                        <h2 class="facilities__image__title">Payment Options</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider6-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img src="IMAGENES/AboutUS/facilities/offers.png" alt="logo offers">
                        <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/06 (1).png" alt="logo first">
                        <h2 class="facilities__image__title">Special Offers</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>        
            </div>

                <div class="swiper-pagination"></div>

            </div>
    </section>
    <section class="facilitiesDesktop">
        <div class="facilitiesDesktop__container">
            <!--Img1-->
            <div class="facilities__image">
                <img class="facilities__image__hand" src="IMAGENES/AboutUS/icon 1.png" alt="logo hand">
                <img class="facilities__image__first" src="IMAGENES/Home/01 (2).png" alt="logo first">
                <h2 class="facilities__image__title">Have High Rating</h2>
                <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <!--Img2-->
            <div class="facilities__image">
                <img class="facilities__image__hand" src="IMAGENES/AboutUS/facilities/reloj.png" alt="logo hand">
                <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/02 (1).png" alt="logo first">
                <h2 class="facilities__image__title">Quiet Hours</h2>
                <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <!--Img3-->
            <div class="facilities__image">
                <img class="facilities__image__hand" src="IMAGENES/AboutUS/facilities/ubicacion.png" alt="logo hand">
                <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/03 (1).png" alt="logo first">
                <h2 class="facilities__image__title">Best Locations</h2>
                <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>    
        <div class="facilitiesDesktop__container">
            
            <!--Img4-->
            
                <div class="facilities__image">
                    <img class="facilities__image__hand" src="IMAGENES/AboutUS/facilities/cancellation.png" alt="logo hand">
                    <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/04 (1).png" alt="logo first">
                    <h2 class="facilities__image__title">Free Cancellation</h2>
                    <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            
            <!--Img5-->
            
                <div class="facilities__image">
                    <img class="facilities__image__hand" src="IMAGENES/AboutUS/facilities/card.png" alt="logo hand">
                    <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/05 (1).png" alt="logo first">
                    <h2 class="facilities__image__title">Payment Options</h2>
                    <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
    
            <!--Img6-->
            <div class="facilities__image">
                <img src="IMAGENES/AboutUS/facilities/offers.png" alt="logo offers">
                <img class="facilities__image__first" src="IMAGENES/AboutUS/facilities/06 (1).png" alt="logo first">
                <h2 class="facilities__image__title">Special Offers</h2>
                <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>


    </section>

    <section class="menu">
        <img class="menu__donut" src="IMAGENES/Home/donut.png" alt="donut">
        <img class="menu__donutDesk" src="IMAGENES/Home/DonutDesk.png" alt="donutDesk">
        <h4 class="menu__title">MENU</h4>
        <h2 class="menu__section">Our Foods Menu</h2>
        <article class= "menu__foodDesk">
            <div class="menu__foodDesk__container">
                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="IMAGENES/Home/eggs.jpg" alt="eggs&bacon">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Eggs & Bacon</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="IMAGENES/Home/coffee.jpg" alt="TeaOrCoffee">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Tea or Coffee</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="IMAGENES/Home/chia3.jpg" alt="Chia">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Chia Oatmeal</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>

            <div class="menu__foodDesk__container">
                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="IMAGENES/Home/Parfait.jpeg" alt="Parfait">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Fruit Parfait</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="IMAGENES/Home/mermelade.jpg" alt="Mermelade">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Mermelade Selection</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="IMAGENES/Home/cheese plate.jpg" alt="Cheese">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Cheese Plate</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </article>
        <div class="menu__slider">
            <!-- Slider-->
            <div class=" swiper swiper-food">
                <div class="swiper-wrapper">
                <!--Slide1-->
                <div class="swiper-slide">
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/eggs.jpg" alt="eggs&bacon">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Eggs & Bacon</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/coffee.jpg" alt="TeaOrCoffee">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Tea or Coffee</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/chia3.jpg" alt="Chia">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Chia Oatmeal</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <!--Slide2-->
                <div class="swiper-slide">
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/fruit parfait.jpg" alt="eggs&bacon">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Fruit Parfait</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/marmalade selection.jpg" alt="TeaOrCoffee">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Marmalade Selection</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/cheese plate.jpg" alt="Chia">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Cheese Plate</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <!--Slide3-->
                <div class="swiper-slide">
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/eggs.jpg" alt="eggs&bacon">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Eggs & Bacon</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/coffee.jpg" alt="TeaOrCoffee">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Tea or Coffee</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="IMAGENES/Home/chia3.jpg" alt="Chia">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Chia Oatmeal</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Pagination-->
                <div class="swiper-pagination"></div>    
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
            </div>
        </div>
        <!--SliderRestaurant-->
        <div class="menu__restaurant">
            <div class="swiper swiper-restaurant">
            
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <img class="menu__restaurant__img" src="IMAGENES/Home/restaurante 1.jpg" alt="Restaurant 1 ">
                    <img class="menu__restaurant__img" src="IMAGENES/Home/restaurante 2.jpg" alt="Restaurant 2">
                    <img class="menu__restaurant__img" src="IMAGENES/Home/restaurante3.jpg" alt="Restaurant 3">
                </div>
                  <div class="swiper-slide"><img src="IMAGENES/Home/restaurante 2.jpg" alt="Restaurant 2"></div>
                  <div class="swiper-slide"><img src="IMAGENES/Home/restaurante3.jpg" alt="Restaurant 3"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
            </div>
        </div>
    </section>
    <section class="info">
        <div class="info__section">
            <img class="info__section__image" src="IMAGENES/Home/icon 5 (1).svg" alt="rocket">
            <div class="info__section__box">
                <h2 class="info__section__box__title">84k</h2>
                <p class="info__section__box__cross">+</p>
            </div>
            <p class="info__section__text">Projects are Completed</p>
        </div>
        <div class="info__section">
            <img class="info__section__image" src="IMAGENES/Home/backers.png" alt="backers">
            <div class="info__section__box">
                <h2 class="info__section__box__title">10M</h2>
                <p class="info__section__box__cross">+</p>
            </div>
            <p class="info__section__text">Active Backers Around World</p>
        </div>
        <div class="info__section">
            <img class="info__section__image" src="IMAGENES/Home/cetegories.png" alt="categories">
            <div class="info__section__box">
                <h2 class="info__section__box__title">02k</h2>
                <p class="info__section__box__cross">+</p>
            </div>
            <p class="info__section__text">Categories Served</p>
        </div>
        <div class="info__section">
            <img class="info__section__image" src="IMAGENES/Home/idea.png" alt="idea">
            <div class="info__section__box">
                <h2 class="info__section__box__title">100M</h2>
                <p class="info__section__box__cross">+</p>
            </div>
            <p class="info__section__text">Ide Raised Funds</p>
        </div>
        
    </section>
    <footer class="footer">
        <section class="footer__section">
            <article class="footer__section__article">
                <div class= "footer__section__article__logo">
                    <div class="footer__section__article__logo__box">
                        <h2 class="footer__section__article__logo__box__letter">H</h2> 
                    </div>
                    <h2 class="footer__section__article__logo__title"><b>HOTEL</b><br>MIRANDA</h2>
                </div>
                <p class="footer__section__article__text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                <div class="footer__section__article__box">
                    <img src="IMAGENES/Footer/5282541_fb_social media_facebook_facebook logo_social network_icon 1.png" alt="logoFacebook" class="footer__section__article__box__logo">
                    <img src="IMAGENES/Footer/twitter_icon.png" alt="logoX" class="footer__box__logo">
                    <img src="IMAGENES/Footer/5282539_behance_portfolio_social network_behance logo_icon 1.png" alt="logoBehance" class="footer__section__article__box__logo">
                    <img src="IMAGENES/Footer/104493_linkedin_icon 1.png" alt="lgoLinkedin">
                    <img src="IMAGENES/Footer/5282548_play_player_video_youtube_youtuble logo_icon 1.png" alt="logoYoutube" class="footer__section__article__box__logo">
                </div>
            </article>
            <article class="footer__section__article__service">
                <h4 class="footer__section__article__service__title">Services.</h4>
                <div class="footer__section__article__service__options">
                    <li class="footer__section__article__service__options__listServices">
                        <ul class="footer__section__article__service__options__listServices__activity">+ Resturent & Bar</ul>
                        <ul class="footer__section__article__service__options__listServices__activity">+ Swimming Pool</ul>
                        <ul class="footer__section__article__service__options__listServices__activity">+ Wellness & Spa</ul>
                        <ul class="footer__section__article__service__options__listServices__activity">+ Restaurant</ul>
                        <ul class="footer__section__article__service__options__listServices__activity">+ Conference Room</ul>
                        <ul class="footer__section__article__service__options__listServices__activity">+ Coctail Party House</ul>
                    </li>
                    <li class="footer__section__article__service__options__listServices">
                        <ul class="footer__section__article__service__options__listServices__activity">+ Gaming Zone</ul>
                        <ul class="footer__section__article__service__options__listServices__activity">+ Marrige Party</ul>
                        <ul class="footer__section__article__service__options__listServices__activity">+ Party Planning</ul>
                        <ul class="footer__section__article__service__options__listServices__activity">+ Tour Consultancy</ul>
                    </li>
                </div>
            </article>
            <article class="footer__section__article__contact">
                <h4 class="footer__section__article__contact__title">Contact Us.</h4>
                <div class="footer__section__article__contact__call">
                    <img src="IMAGENES/Footer/svg-gobbler - 2022-03-02T152425.400 1.png" alt="logoPhone" >
                    <div>
                        <h4 class="footer__section__article__contact__call__phone">Phone Number</h4>
                        <p class="footer__section__article__contact__call__number">+987 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer__section__article__contact__call">
                    <img src="IMAGENES/Footer/icon 9.png" alt="logoMail">
                    <div>
                        <h4 class="footer__section__article__contact__call__phone">Phone Number</h4>
                        <p class="footer__section__article__contact__call__number">+987 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer__section__article__contact__call">
                    <img src="IMAGENES/Footer/icon 10.png" alt="logoMaps">
                    <div>
                        <h4 class="footer__section__article__contact__call__phone">Phone Number</h4>
                        <p class="footer__section__article__contact__call__number">+987 876 765 76 577</p>
                    </div>
                </div>
            </article>
            <img src="IMAGENES/Footer/Rectángulo 2 1.png" alt="fondo footer" class="footer__back">
        </section>
        <section class="footer__info">
            <p class="footer__info__copyright">Copyright By@Pablo-2025</p>
            <div class="footer__info__terms">
                <p class="footer__info__terms__use">Terms of use</p>
                <p class="footer__info__terms__line">|</p>
                <p class="footer__info__terms__privacy">Privacy Environmental Policy</p>
            </div>
        </section>
    </footer>
    <script src="script/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script/home.js"></script>
</body>
</html>