<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <link href="{{ asset('styles/home/home.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header__back"></div>
        <nav class="navbar">
            <img id="imgButton" src="{{ asset('images/NavBar/1.png')}}" alt="icono menu" class="navbar__menu">
            <div id="navbarList" class="navbar__dropdown">
                <a class="navbar__dropdown__page" href="about">About Us</a>
                <a class="navbar__dropdown__page" href="rooms">Rooms</a>
                <a class="navbar__dropdown__page" href="offer">Offers</a>
                <a class="navbar__dropdown__page" href="contact">Contact</a>
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
                    <img src="{{ asset('images/NavBar/Vector.png')}}" alt="icono Vector" class="navbar__icon__logo__vector">
                </div>
                <div class="navbar__icon__logo">
                    <img src="{{ asset('images/NavBar/search.png')}}" alt="icono Search" class="navbar__icon__logo__vector">
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
                    <img src="{{ asset('images/NavBar/Calendar.png')}}" alt="logo calendar" class="header__check__box__calendar__logo">
                    <input class="header__check__box__calendar__input" type="text" placeholder="24th march 2025">
                </div>
            </div>
            <div class="header__check__box">
                <label class="header__check__box__date">Le Departure Date</label>
                <div class="header__check__box__calendar">
                    <img src="{{ asset('images/NavBar/Calendar.png')}}" alt="logo calendar" class="header__check__box__calendar__logo">
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
                <button  class="data__intro__button" onclick="window.location.href='roomDetails'">BOOK NOW</button>
        </article>
        <article class="data__info">
            <div class="data__info__boxTeam">
                <img src="{{ asset('images/Rooms/Room5.jpg')}}" alt="photo room" class="data__info__boxTeam__image">
                <div class="data__info__boxTeam__team">
                    <img src="{{ asset('images/SectionData/svg-globber1.png')}}" alt="group logo" class="data__info__boxTeam__team__logo">
                    <h2 class="data__info__boxTeam__team__title">Strong Team</h2>
                    <p class="data__info__boxTeam__team__text">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit, sed <br>do eiusmod tempor.</p>
                    <img src="{{ asset('images/SectionData/globber2.png')}}" alt="logo transparent" class="data__info__boxTeam__team__transparent">
                </div>
            </div>
            <div class="data__info__box">
                <img src="{{ asset('images/Rooms/Room2.jpg')}}" alt="box" class="data__info__boxTeam__image">
                <div class="data__info__box__luxury">
                    <img src="{{asset ('images/SectionData/Group.png')}}" alt="groupLogo" class="data__info__box__luxury__logo">
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
                    <div class = "deskSwiper">
                        <img  class="rooms__slider__image" src="{{asset ('images/Rooms/Room2.jpg')}}" alt="image room">
                        <div class="rooms__slider__boxLogo">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
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
                        <img  class="rooms__slider__image" src="{{asset ('images/Rooms/Room2.jpg')}}" alt="image room">
                        <div class="rooms__slider__boxLogo">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
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
                            <img  class="rooms__slider__image" src="{{asset ('images/Rooms/Room2.jpg')}}" alt="image room">
                            <div class="rooms__slider__boxLogo">
                                <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <div class="rooms__slider__card">
                                <h2 class="rooms__slider__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__slider__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <p class="rooms__slider__card__price">$345/Night</p>
                            </div>
                        </div>
                    </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div>
                        <img  class="rooms__slider__image" src="{{asset ('images/Rooms/Room2.jpg')}}" alt="image room">
                        <div class="rooms__slider__boxLogo">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                            <img class="rooms__slider__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
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
            <img class="rooms__boxVideo__rectangleBrown" src="{{asset ('/images/Home/Rectangle 27.png')}}" alt="Brown">
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
                        <img class="facilities__image__hand" src="{{asset ('images/AboutUS/icon 1.png')}}" alt="logo hand">
                        <img class="facilities__image__first" src="{{asset ('images/Home/01 (2).png')}}" alt="logo first">
                        <h2 class="facilities__image__title">Have High Rating</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider2-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="{{asset ('images/AboutUS/facilities/reloj.png')}}" alt="logo hand">
                        <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/02 (1).png')}}" alt="logo first">
                        <h2 class="facilities__image__title">Quiet Hours</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider3-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="{{asset ('images/AboutUS/facilities/ubicacion.png')}}" alt="logo hand">
                        <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/03 (1).png')}}" alt="logo first">
                        <h2 class="facilities__image__title">Best Locations</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider4-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="{{asset ('images/AboutUS/facilities/cancellation.png')}}" alt="logo hand">
                        <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/04 (1).png')}}" alt="logo first">
                        <h2 class="facilities__image__title">Free Cancellation</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider5-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img class="facilities__image__hand" src="{{asset ('images/AboutUS/facilities/card.png')}}" alt="logo hand">
                        <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/05 (1).png')}}" alt="logo first">
                        <h2 class="facilities__image__title">Payment Options</h2>
                        <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <!--Slider6-->
                <div class="swiper-slide">
                    <div class="facilities__image">
                        <img src="{{asset ('images/AboutUS/facilities/offers.png')}}" alt="logo offers">
                        <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/06 (1).png')}}" alt="logo first">
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
                <img class="facilities__image__hand" src="{{asset ('images/AboutUS/icon 1.png')}}" alt="logo hand">
                <img class="facilities__image__first" src="{{asset ('images/Home/01 (2).png')}}" alt="logo first">
                <h2 class="facilities__image__title">Have High Rating</h2>
                <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <!--Img2-->
            <div class="facilities__image">
                <img class="facilities__image__hand" src="{{asset ('images/AboutUS/facilities/reloj.png')}}" alt="logo hand">
                <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/02 (1).png')}}" alt="logo first">
                <h2 class="facilities__image__title">Quiet Hours</h2>
                <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <!--Img3-->
            <div class="facilities__image">
                <img class="facilities__image__hand" src="{{asset ('images/AboutUS/facilities/ubicacion.png')}}" alt="logo hand">
                <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/03 (1).png')}}" alt="logo first">
                <h2 class="facilities__image__title">Best Locations</h2>
                <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>    
        <div class="facilitiesDesktop__container">
            
            <!--Img4-->
            
                <div class="facilities__image">
                    <img class="facilities__image__hand" src="{{asset ('images/AboutUS/facilities/cancellation.png')}}" alt="logo hand">
                    <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/04 (1).png')}}" alt="logo first">
                    <h2 class="facilities__image__title">Free Cancellation</h2>
                    <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            
            <!--Img5-->
            
                <div class="facilities__image">
                    <img class="facilities__image__hand" src="{{asset ('images/AboutUS/facilities/card.png')}}" alt="logo hand">
                    <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/05 (1).png')}}" alt="logo first">
                    <h2 class="facilities__image__title">Payment Options</h2>
                    <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
    
            <!--Img6-->
            <div class="facilities__image">
                <img src="{{asset ('images/AboutUS/facilities/offers.png')}}" alt="logo offers">
                <img class="facilities__image__first" src="{{asset ('images/AboutUS/facilities/06 (1).png')}}" alt="logo first">
                <h2 class="facilities__image__title">Special Offers</h2>
                <p class="facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>


    </section>
    <section class="menu">
        <img class="menu__donut" src="{{asset ('images/Home/donut.png')}}" alt="donut">
        <img class="menu__donutDesk" src="{{asset ('images/Home/DonutDesk.png')}}" alt="donutDesk">
        <h4 class="menu__title">MENU</h4>
        <h2 class="menu__section">Our Foods Menu</h2>

        <article class= "menu__foodDesk">
            
            <div class="swiper swiper-menuDesktop">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="menu__foodDesk__container">
                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/eggs.jpg')}}" alt="eggs&bacon">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Eggs & Bacon</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>
                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/coffee.jpg')}}" alt="TeaOrCoffee">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Tea or Coffee</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>

                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/chia3.jpg')}}" alt="Chia">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Chia Oatmeal</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>
                        </div>

                        <div class="menu__foodDesk__container">
                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/Parfait.jpeg')}}" alt="Parfait">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Fruit Parfait</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>

                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/mermelade.jpg')}}" alt="Mermelade">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Mermelade Selection</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>

                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/cheese plate.jpg')}}" alt="Cheese">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Cheese Plate</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="menu__foodDesk__container">
                                <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/eggs.jpg')}}" alt="eggs&bacon">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Eggs & Bacon</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                </div>
                                <div class="menu__slider__food">
                                    <img class="menu__slider__food__image" src="{{asset ('images/Home/coffee.jpg')}}" alt="TeaOrCoffee">
                                    <div class="menu__slider__food__box">
                                        <h2 class="menu__slider__food__box__title">Tea or Coffee</h2>
                                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>

                                <div class="menu__slider__food">
                                    <img class="menu__slider__food__image" src="{{asset ('images/Home/chia3.jpg')}}" alt="Chia">
                                    <div class="menu__slider__food__box">
                                        <h2 class="menu__slider__food__box__title">Chia Oatmeal</h2>
                                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                        </div>
                        <div class="menu__foodDesk__container">
                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/Parfait.jpeg')}}" alt="Parfait">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Fruit Parfait</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>

                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/mermelade.jpg')}}" alt="Mermelade">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Mermelade Selection</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>

                                    <div class="menu__slider__food">
                                        <img class="menu__slider__food__image" src="{{asset ('images/Home/cheese plate.jpg')}}" alt="Cheese">
                                        <div class="menu__slider__food__box">
                                            <h2 class="menu__slider__food__box__title">Cheese Plate</h2>
                                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>
                        </div>

                        <!-- <div class="menu__foodDesk__container">
                                <div class="menu__slider__food">
                                    <img class="menu__slider__food__image" src="{{asset ('images/Home/eggs.jpg')}}" alt="eggs&bacon">
                                    <div class="menu__slider__food__box">
                                        <h2 class="menu__slider__food__box__title">Eggs & Bacon</h2>
                                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                                <div class="menu__slider__food">
                                    <img class="menu__slider__food__image" src="{{asset ('images/Home/coffee.jpg')}}" alt="TeaOrCoffee">
                                    <div class="menu__slider__food__box">
                                        <h2 class="menu__slider__food__box__title">Tea or Coffee</h2>
                                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>

                                <div class="menu__slider__food">
                                    <img class="menu__slider__food__image" src="{{asset ('images/Home/chia3.jpg')}}" alt="Chia">
                                    <div class="menu__slider__food__box">
                                        <h2 class="menu__slider__food__box__title">Chia Oatmeal</h2>
                                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                        </div> -->
                    </div>
                </div>
            </div> 
             <!-- <div class="menu__foodDesk__container">
                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="{{asset ('images/Home/Parfait.jpeg')}}" alt="Parfait">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Fruit Parfait</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="{{asset ('images/Home/mermelade.jpg')}}" alt="Mermelade">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Mermelade Selection</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="menu__slider__food">
                    <img class="menu__slider__food__image" src="{{asset ('images/Home/cheese plate.jpg')}}" alt="Cheese">
                    <div class="menu__slider__food__box">
                        <h2 class="menu__slider__food__box__title">Cheese Plate</h2>
                        <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div> -->
        </article>

        <div class="menu__slider">
            <!-- Slider-->
            <div class=" swiper swiper-food">
                <div class="swiper-wrapper">
                <!--Slide1-->
                <div class="swiper-slide">
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/eggs.jpg')}}" alt="eggs&bacon">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Eggs & Bacon</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/coffee.jpg')}}" alt="TeaOrCoffee">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Tea or Coffee</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/chia3.jpg')}}" alt="Chia">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Chia Oatmeal</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <!--Slide2-->
                <div class="swiper-slide">
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/fruit parfait.jpg')}}" alt="eggs&bacon">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Fruit Parfait</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/marmalade selection.jpg')}}" alt="TeaOrCoffee">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Marmalade Selection</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/cheese plate.jpg')}}" alt="Chia">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Cheese Plate</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <!--Slide3-->
                <div class="swiper-slide">
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/eggs.jpg')}}" alt="eggs&bacon">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Eggs & Bacon</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/coffee.jpg')}}" alt="TeaOrCoffee">
                        <div class="menu__slider__food__box">
                            <h2 class="menu__slider__food__box__title">Tea or Coffee</h2>
                            <p class="menu__slider__food__box__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__slider__food">
                        <img class="menu__slider__food__image" src="{{asset ('images/Home/chia3.jpg')}}" alt="Chia">
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
                    <img class="menu__restaurant__img" src="{{asset ('images/Home/restaurante 1.jpg')}}" alt="Restaurant 1 ">
                    <img class="menu__restaurant__img" src="{{asset ('images/Home/restaurante 2.jpg')}}" alt="Restaurant 2">
                    <img class="menu__restaurant__img" src="{{asset ('images/Home/restaurante3.jpg')}}" alt="Restaurant 3">
                </div>
                  <div class="swiper-slide"><img src="{{asset ('images/Home/restaurante 2.jpg')}}" alt="Restaurant 2"></div>
                  <div class="swiper-slide"><img src="{{asset ('images/Home/restaurante3.jpg')}}" alt="Restaurant 3"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
            </div>
        </div>
        <div class = menu__imgDesktop>
            <img class="menu__imgDesktop__img" src="{{asset ('images/Home/restaurante 1.jpg')}}" alt="Restaurant 1 ">
            <img class="menu__imgDesktop__img" src="{{asset ('images/Home/restaurante 2.jpg')}}" alt="Restaurant 2">
            <img class="menu__imgDesktop__img" src="{{asset ('images/Home/restaurante3.jpg')}}" alt="Restaurant 3">
        </div>
    </section>
    <section class="info">
        <div class="info__section">
            <img class="info__section__image" src="{{asset ('images/Home/icon 5 (1).svg')}}" alt="rocket">
            <div class="info__section__box">
                <h2 class="info__section__box__title">84k</h2>
                <p class="info__section__box__cross">+</p>
            </div>
            <p class="info__section__text">Projects are Completed</p>
        </div>
        <div class="info__section">
            <img class="info__section__image" src="{{asset ('images/Home/backers.png')}}" alt="backers">
            <div class="info__section__box">
                <h2 class="info__section__box__title">10M</h2>
                <p class="info__section__box__cross">+</p>
            </div>
            <p class="info__section__text">Active Backers Around World</p>
        </div>
        <div class="info__section">
            <img class="info__section__image" src="{{asset ('images/Home/cetegories.png')}}" alt="categories">
            <div class="info__section__box">
                <h2 class="info__section__box__title">02k</h2>
                <p class="info__section__box__cross">+</p>
            </div>
            <p class="info__section__text">Categories Served</p>
        </div>
        <div class="info__section">
            <img class="info__section__image" src="{{asset ('images/Home/idea.png')}}" alt="idea">
            <div class="info__section__box">
                <h2 class="info__section__box__title">100M</h2>
                <p class="info__section__box__cross">+</p>
            </div>
            <p class="info__section__text">Ide Raised Funds</p>
        </div>
        
    </section>
    @include('profile.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset ('js/swipper/navbar.js')}}"></script>
    <script src="{{ asset ('js/swipper/home.js')}}"></script>

</body>
</html>