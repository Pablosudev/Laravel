<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link href="{{ asset(path: 'styles/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <img id="imgButton" src="IMAGENES/NavBar/1.png" alt="icono menu" class="navbar__menu">
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
                    <img src="{{asset('images/NavBar/Vector.png')}}" alt="icono Vector" class="navbar__icon__logo__vector">
                </div>
                <div class="navbar__icon__logo">
                    <img src="{{asset  ('images/NavBar/search.png')}}" alt="icono Search" class="navbar__icon__logo__vector">
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
    <section class = "rooms-grid">
        <div class="swiper-grid">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                 <!-- PÁGINA 1 -->
                <div class="swiper-slide">
                    <!-- CONTAINER CADA 3 HABITACIONES -->
                    <div class = "container-swipper">
                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>
                    </div>

                    <div class = "container-swipper">
                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>
                    </div>

                    <div class = "container-swipper">
                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>
                    </div>

                    <div class = "container-swipper">
                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PÁGINA 2 -->
                <div class="swiper-slide">
                    <!-- CONTAINER CADA 3 HABITACIONES -->
                    <div class = "container-swipper">
                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>
                    </div>

                    <div class = "container-swipper">
                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>
                    </div>

                    <div class = "container-swipper">
                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>
                    </div>

                    <div class = "container-swipper">
                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>

                        <div  class = "card-desktopGrid">
                            <img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt = 'photo room'/>
                            <div class="details__box__boxLogo">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/8725460_bed_icon 1.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (1).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Group.png')}}" alt="">
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Layer_1.png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (2).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (3).png')}}" alt=""> 
                                <img class="details__box__boxLogo__logo" src="{{asset ('images/SectionRooms/Vector (4).png')}}" alt=""> 
                            </div>  
                            <h2 class="details__box__title">Minimal Duplex Room</h2>
                            <p class="details__box__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmos tempor.</p>
                            <div class="details__box__container">
                                <p class="details__box__container__price">$345/Night</p>
                                <p class="details__box__container__booking">Booking Now</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    @include ('profile.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset ('js/swipper/navbar.js')}}"></script>
    <script src="{{asset ('js/swipper/grid.js')}}"></script>
</body>
</html>