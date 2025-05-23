<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link href="{{ asset(path: 'styles/rooms/rooms.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <img id="imgButton" src="{{asset ('images/NavBar/1.png')}}" alt="icono menu" class="navbar__menu">
            <div id="navbarList" class="navbar__dropdown">
                <a class="navbar__dropdown__page" href="home">Home</a>
                <a class="navbar__dropdown__page" href="about">About Us</a>
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
                    <img src="{{asset ('images/NavBar/Vector.png')}}" alt="icono Vector" class="navbar__icon__logo__vector">
                </div>
                <div class="navbar__icon__logo">
                    <img src="{{asset ('images/NavBar/search.png')}}" alt="icono Search" class="navbar__icon__logo__vector">
                </div>
            </div>
        </nav>
        <h2 class="header__title">THE ULTIMATE LUXURY</h2>
        <h2 class="header__section">Ultimate <br>Room</h2>
        <div class="header__box">
            <h3 class="header__box__home">Home</h3>
            <p class="header__box__line">|</p>
            <h3 class="header__box__page">Rooms</h3>
        </div>
    </header>
    <section class="rooms">
       
        <div class="swiper">
            
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide2-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide3-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide4-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide5-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide6-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide7-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide8-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide9-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
                <!--Slide10-->
                <div class="swiper-slide">
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>
                    <article class="rooms__card">
                        <img src="{{asset ('images/Rooms/Room3.jpg')}}" alt="room image" class="rooms__card__img">
                        <div class = "containerRoom-desk">
                            <div class="rooms__card__boxLogo">
                                <img src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="bed logo">
                                <img src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt="wifi logo"> 
                                <img src="{{asset ('images/SectionRooms/Group.png')}}" alt="car logo">
                                <img src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt="snow logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt="gym logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt="smoke logo"> 
                                <img src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt="cocktail log"> 
                            </div>
                                <h2 class="rooms__card__title">Minimal Duplex Room</h2>
                                <p class="rooms__card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="rooms__card__date">
                                <p class="rooms__card__date__price">$345/Night</p>
                                <p class="rooms__card__date__booking">Book Now</p>
                        </div>
                    </article>

                </div>
            </div>
                <!-- Paginacion -->
                <div class="swiper-pagination"></div>
            
                <!-- Botones -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            

        </div>
    </section>
   @include ('profile.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset ('js./swipper/navbar.js')}}"></script>
    <script src="{{asset ('js/swipper/roomsDetails.js')}}"></script>
</body>
</html>