<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="{{ asset('styles/offers/offer.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
         <nav class="navbar">
            <img id="imgButton" src="{{asset ('images/NavBar/1.png')}}" alt="icono menu" class="navbar__menu">
            <div id="navbarList" class="navbar__dropdown">
                <a class="navbar__dropdown__page" href="home">Home</a>
                <a class="navbar__dropdown__page" href="about">About Us</a>
                <a class="navbar__dropdown__page" href="rooms">Rooms</a>
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
                    <img src="{{asset ('images/NavBar/Vector.png')}}" alt="icono Vector" class="navbar__icon__logo__vector">
                </div>
                <div class="navbar__icon__logo">
                    <img src="{{asset ('images/NavBar/search.png')}}" alt="icono Search" class="navbar__icon__logo__vector">
                </div>
            </div>
        </nav>
        <h2 class="header__title">THE ULTIMATE LUXURY</h2>
        <h2 class="header__section">Our Offers</h2>
        <div class="header__box">
            <h3 class="header__box__home">Home</h3>
            <p class="header__box__line">|</p>
            <h3 class="header__box__page">Rooms</h3>
        </div>
    </header>
    <section class="offers">
        <article class="offers__cards">
            <img class="offers__cards__room" src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room">
            <div class = "container-desk">
                <div class = "lineDesk"></div>
                <div class="offers__cards__box">
                    <div class="offers__cards__box__price">
                        <p class="offers__cards__box__price__dolar">$500</p>
                        <p class="offers__cards__box__price__day">/Night</p>
                    </div>
                    <div class="offers__cards__box__offer">
                        <p class="offers__cards__box__offer__dolar">$345</p>
                        <p class="offers__cards__box__offer__day">/Night</p>
                    </div>
                </div>
                <h4 class="offers__cards__tipe">DOUBLE BED</h4>
                <h2 class="offers__cards__model">Luxury Double <br> Bed</h2>
                <div class = "containerDesk-sec">
                    <p class="offers__cards__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="offers__cards__services">
                        <li class="offers__cards__services__list">
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/aire acondicioando.png')}}" alt="logo air" class="offers__cards__services__list__info__logo">Air conditioner</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/breakfast.png')}}" alt="logo breakfast" class="offers__cards__services__list__info__logo">Breakfast</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/Cleaning.png')}}" alt="logo Cleaning" class="offers__cards__services__list__info__logo">Cleaning</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/grocery.png')}}" alt="logo grocery" class="offers__cards__services__list__info__logo">Grocery</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/shop.png')}}" alt="logo shop" class="offers__cards__services__list__info__logo">Shop near</ul>
                        </li>
                        <li class="offers__cards__services__list">
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/wifi.png')}}" alt="logo wifi" class="offers__cards__services__list__info__logo">High speed WIFI</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/kitchen.png')}}" alt="logo kitchen" class="offers__cards__services__list__info__logo">Kitchen</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/Shower.png')}}" alt="logo Shower" class="offers__cards__services__list__info__logo">Shower</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/single bed.png')}}" alt="logo single bed" class="offers__cards__services__list__info__logo">Single bed</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/towels.png')}}" alt="log towels" class="offers__cards__services__list__info__logo">Towels</ul>
                        </li>
                    </div>
                </div>
                <button class="offers__cards__button">BOOK NOW</button>
                
            </div>
        </article>
        <article class="offers__cards">
            <img class="offers__cards__room" src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room">
            <div class = "container-desk">
                <div class = "lineDesk"></div>
                <div class="offers__cards__box">
                    <div class="offers__cards__box__price">
                        <p class="offers__cards__box__price__dolar">$500</p>
                        <p class="offers__cards__box__price__day">/Night</p>
                    </div>
                    <div class="offers__cards__box__offer">
                        <p class="offers__cards__box__offer__dolar">$345</p>
                        <p class="offers__cards__box__offer__day">/Night</p>
                    </div>
                </div>
                <h4 class="offers__cards__tipe">DOUBLE BED</h4>
                <h2 class="offers__cards__model">Luxury Double <br> Bed</h2>
                <div class = "containerDesk-sec">
                    <p class="offers__cards__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="offers__cards__services">
                        <li class="offers__cards__services__list">
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/aire acondicioando.png')}}" alt="logo air" class="offers__cards__services__list__info__logo">Air conditioner</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/breakfast.png')}}" alt="logo breakfast" class="offers__cards__services__list__info__logo">Breakfast</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/Cleaning.png')}}" alt="logo Cleaning" class="offers__cards__services__list__info__logo">Cleaning</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/grocery.png')}}" alt="logo grocery" class="offers__cards__services__list__info__logo">Grocery</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/shop.png')}}" alt="logo shop" class="offers__cards__services__list__info__logo">Shop near</ul>
                        </li>
                        <li class="offers__cards__services__list">
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/wifi.png')}}" alt="logo wifi" class="offers__cards__services__list__info__logo">High speed WIFI</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/kitchen.png')}}" alt="logo kitchen" class="offers__cards__services__list__info__logo">Kitchen</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/Shower.png')}}" alt="logo Shower" class="offers__cards__services__list__info__logo">Shower</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/single bed.png')}}" alt="logo single bed" class="offers__cards__services__list__info__logo">Single bed</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/towels.png')}}" alt="log towels" class="offers__cards__services__list__info__logo">Towels</ul>
                        </li>
                    </div>
                </div>
                <button  class="offers__cards__button">BOOK NOW</button>
                
            </div>
        </article>
        <article class="offers__cards">
            <img class="offers__cards__room" src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room">
            <div class = "container-desk">
                <div class = "lineDesk"></div>
                <div class="offers__cards__box">
                    <div class="offers__cards__box__price">
                        <p class="offers__cards__box__price__dolar">$500</p>
                        <p class="offers__cards__box__price__day">/Night</p>
                    </div>
                    <div class="offers__cards__box__offer">
                        <p class="offers__cards__box__offer__dolar">$345</p>
                        <p class="offers__cards__box__offer__day">/Night</p>
                    </div>
                </div>
                <h4 class="offers__cards__tipe">DOUBLE BED</h4>
                <h2 class="offers__cards__model">Luxury Double <br> Bed</h2>
                <div class = "containerDesk-sec">
                    <p class="offers__cards__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="offers__cards__services">
                        <li class="offers__cards__services__list">
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/aire acondicioando.png')}}" alt="logo air" class="offers__cards__services__list__info__logo">Air conditioner</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/breakfast.png')}}" alt="logo breakfast" class="offers__cards__services__list__info__logo">Breakfast</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/Cleaning.png')}}" alt="logo Cleaning" class="offers__cards__services__list__info__logo">Cleaning</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/grocery.png')}}" alt="logo grocery" class="offers__cards__services__list__info__logo">Grocery</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/shop.png')}}" alt="logo shop" class="offers__cards__services__list__info__logo">Shop near</ul>
                        </li>
                        <li class="offers__cards__services__list">
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/wifi.png')}}" alt="logo wifi" class="offers__cards__services__list__info__logo">High speed WIFI</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/kitchen.png')}}" alt="logo kitchen" class="offers__cards__services__list__info__logo">Kitchen</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/Shower.png')}}" alt="logo Shower" class="offers__cards__services__list__info__logo">Shower</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/single bed.png')}}" alt="logo single bed" class="offers__cards__services__list__info__logo">Single bed</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/towels.png')}}" alt="log towels" class="offers__cards__services__list__info__logo">Towels</ul>
                        </li>
                    </div>
                </div>
                <button  class="offers__cards__button">BOOK NOW</button>
                
            </div>
        </article>
        <article class="offers__cards">
            <img class="offers__cards__room" src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room">
            <div class = "container-desk">
                <div class = "lineDesk"></div>
                <div class="offers__cards__box">
                    <div class="offers__cards__box__price">
                        <p class="offers__cards__box__price__dolar">$500</p>
                        <p class="offers__cards__box__price__day">/Night</p>
                    </div>
                    <div class="offers__cards__box__offer">
                        <p class="offers__cards__box__offer__dolar">$345</p>
                        <p class="offers__cards__box__offer__day">/Night</p>
                    </div>
                </div>
                <h4 class="offers__cards__tipe">DOUBLE BED</h4>
                <h2 class="offers__cards__model">Luxury Double <br> Bed</h2>
                <div class = "containerDesk-sec">
                    <p class="offers__cards__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="offers__cards__services">
                        <li class="offers__cards__services__list">
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/aire acondicioando.png')}}" alt="logo air" class="offers__cards__services__list__info__logo">Air conditioner</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/breakfast.png')}}" alt="logo breakfast" class="offers__cards__services__list__info__logo">Breakfast</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/Cleaning.png')}}" alt="logo Cleaning" class="offers__cards__services__list__info__logo">Cleaning</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/grocery.png')}}" alt="logo grocery" class="offers__cards__services__list__info__logo">Grocery</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/shop.png')}}" alt="logo shop" class="offers__cards__services__list__info__logo">Shop near</ul>
                        </li>
                        <li class="offers__cards__services__list">
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/wifi.png')}}" alt="logo wifi" class="offers__cards__services__list__info__logo">High speed WIFI</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/kitchen.png')}}" alt="logo kitchen" class="offers__cards__services__list__info__logo">Kitchen</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/Shower.png')}}" alt="logo Shower" class="offers__cards__services__list__info__logo">Shower</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/single bed.png')}}" alt="logo single bed" class="offers__cards__services__list__info__logo">Single bed</ul>
                            <ul class="offers__cards__services__list__info"><img src="{{asset ('images/RoomsDetails/towels.png')}}" alt="log towels" class="offers__cards__services__list__info__logo">Towels</ul>
                        </li>
                    </div>
                </div>
                <button  class="offers__cards__button">BOOK NOW</button>
                
            </div>
        </article>
        <article  class="offers__popular">
            <h4 class="offers__popular__list">POPULAR LIST</h4>
            <h2 class="offers__popular__rooms">Popular Rooms</h2>
            <!-- POPULAR BOX DESKTOP -->
            <div class = "popular-box-desktop">
                <div class = "cardDesktop">
                    <img class="offers__popular__box__slide" src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room">
                    <div class="offers__popular__box__boxLogo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                    </div>
                    <div class="offers__popular__box__container">
                        <h2 class="offers__popular__box__container__room">Minimal Duplex Room</h2>
                        <p class="offers__popular__box__container__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="offers__popular__box__container__price">
                            <p class="offers__popular__box__container__price__pricing">$345/Night</p>
                            <p class="offers__popular__box__container__price__booking">BOOK  NOW</p>
                        </div>
                    </div>
                </div>

                <div class = "cardDesktop">
                    <img class="offers__popular__box__slide" src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room">
                    <div class="offers__popular__box__boxLogo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                    </div>
                    <div class="offers__popular__box__container">
                        <h2 class="offers__popular__box__container__room">Minimal Duplex Room</h2>
                        <p class="offers__popular__box__container__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="offers__popular__box__container__price">
                            <p class="offers__popular__box__container__price__pricing">$345/Night</p>
                            <p class="offers__popular__box__container__price__booking">BOOK  NOW</p>
                        </div>
                    </div>
                </div>

                <div class = "cardDesktop">
                    <img class="offers__popular__box__slide" src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room">
                    <div class="offers__popular__box__boxLogo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                    </div>
                    <div class="offers__popular__box__container">
                        <h2 class="offers__popular__box__container__room">Minimal Duplex Room</h2>
                        <p class="offers__popular__box__container__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="offers__popular__box__container__price">
                            <p class="offers__popular__box__container__price__pricing">$345/Night</p>
                            <p class="offers__popular__box__container__price__booking">BOOK  NOW</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- BOX SLIDE -->
            <div class  = "slide">
                <div class="offers__popular__box">
                        <!--SWIPER-->
                        <div class="swiper swiper-offers">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <!-- Slide1 -->
                                <div class="swiper-slide">
                                    <img class="offers__popular__box__slide" src="{{asset ('images/Rooms/habitacion1.jpg')}}" alt="room">
                                    <div class="offers__popular__box__boxLogo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                                    </div>
                                    <div class="offers__popular__box__container">
                                        <h2 class="offers__popular__box__container__room">Minimal Duplex Room</h2>
                                        <p class="offers__popular__box__container__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                                        <div class="offers__popular__box__container__price">
                                            <p class="offers__popular__box__container__price__pricing">$345/Night</p>
                                            <p class="offers__popular__box__container__price__booking">BOOK  NOW</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide2 -->
                                <div class="swiper-slide">
                                    <img class="offers__popular__box__slide" src="{{asset ('images/Rooms/habitacion2.png')}}" alt="room">
                                    <div class="offers__popular__box__boxLogo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                                    </div>
                                    <div class="offers__popular__box__container">
                                        <h2 class="offers__popular__box__container__room">Minimal Duplex Room</h2>
                                        <p class="offers__popular__box__container__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                                        <div class="offers__popular__box__container__price">
                                            <p class="offers__popular__box__container__price__pricing">$345/Night</p>
                                            <p class="offers__popular__box__container__price__booking">BOOK  NOW</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Slide3 -->
                                <div class="swiper-slide">
                                    <img class="offers__popular__box__slide" src="{{asset ('images/Rooms/habitacion3.jpg')}}" alt="room">
                                    <div class="offers__popular__box__boxLogo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                        <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                                    </div>
                                    <div class="offers__popular__box__container">
                                        <h2 class="offers__popular__box__container__room">Minimal Duplex Room</h2>
                                        <p class="offers__popular__box__container__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                                        <div class="offers__popular__box__container__price">
                                            <p class="offers__popular__box__container__price__pricing">$345/Night</p>
                                            <p class="offers__popular__box__container__price__booking">BOOK  NOW</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        
                        </div>
                </div>
                <!-- <div class="offers__popular__box__boxLogo">
                    <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                    <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                    <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                    <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                    <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                    <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                    <img  class="offers__popular__box__boxLogo__img" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                </div>
                <div class="offers__popular__box__container">
                    <h2 class="offers__popular__box__container__room">Minimal Duplex Room</h2>
                    <p class="offers__popular__box__container__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="offers__popular__box__container__price">
                        <p class="offers__popular__box__container__price__pricing">$345/Night</p>
                        <p class="offers__popular__box__container__price__booking">BOOK  NOW</p>
                    </div>
                </div> -->
            </div>
            
        </article> 
    </section>
    @include ('profile.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset ('js/swipper/navbar.js')}}"></script>
    <script src="{{asset ('js/swipper/offers.js')}}"></script>
</body>
</html>