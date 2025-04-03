<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="{{ asset('styles/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <img  id="imgButton" src="{{asset ('images/NavBar/1.png')}}" alt="icono menu" class="navbar__menu">
            <div id="navbarList" class="navbar__dropdown">
                <a class="navbar__dropdown__page" href="index.html">Home</a>
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
                    <img src="{{asset ('images/NavBar/Vector.png')}}" alt="icono Vector" class="navbar__icon__logo__vector">
                </div>
                <div class="navbar__icon__logo">
                    <img src="{{asset ('images/NavBar/search.png')}}" alt="icono Search" class="navbar__icon__logo__vector">
                </div>
            </div>
        </nav>
        <h2 class="header__title">THE ULTIMATE LUXURY</h2>
        <h2 class="header__section">About Us</h2>
        <div class="header__box">
            <h3 class="header__box__home">Home</h3>
            <p class="header__box__line">|</p>
            <h3 class="header__box__page">Rooms</h3>
        </div>
    </header>
    <section class="about">
        <article class="about__intro">
            <iframe class="about__intro__video" src="https://www.youtube.com/embed/Bu3Doe45lcU?si=1ykL7j9FH62Ne6Y8&amp;start=25" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <h4 class="about__intro__presentation">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h4>
            <div class="about__intro__contentDesk">
                <div class="about__intro__content">
                    <div class="about__intro__content__box">
                        <img src="{{asset ('images/AboutUS/icon 11.png')}}" alt="logo breakfast">
                        <p class="about__intro__content__box__title">BREAKFAST</p>
                    </div>
                    
                    <div class="about__intro__content__box">
                        <img src="{{asset ('images/AboutUS/plane.png')}}" alt="logo airport">
                        <p class="about__intro__content__box__title">AIRPORT PICKUP</p>
                    </div>
                </div>    
                <div class="about__intro__content">
                    <div class="about__intro__content__box">
                        <img src="{{asset ('images/AboutUS/svg-gobbler - 2022-03-02T161851.313 1.png')}}" alt=""logo city>
                        <p class="about__intro__content__box__title">CITY GUIDE</p>
                    </div>
                
                    <div class="about__intro__content__box">
                        <img src="{{asset ('images/AboutUS/svg-gobbler - 2022-03-02T162427.880 1.png')}}" alt="logo room">
                        <p class="about__intro__content__box__title">LUXURY ROOM</p>
                    </div>
                </div>  
            </div>  
        </article>
        <article class="about__restaurant">
            <img class="about__restaurant__image" src="{{asset ('images/Rooms/Room2.jpg')}}" alt="image room">
            <div class="about__restaurant_containerDesk">
                <h4 class="about__restaurant__section">RESTAURANT</h4>
                <h2 class="about__restaurant__info">Get Restaurant Facilities & Many Other More</h2>
                <p class="about__restaurant__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <button class="about__restaurant__button">TAKE A TOUR</button>
            </div>
        </article>
        <article class="about__facilities">
            <h4 class="about__facilities__title">FACILITIES</h4>
            <h2 class="about__facilities__section">Core Features</h2>
            <!--Swiper-->
            <div  class=" swiper swiper-facilities">
                        
                <div class="swiper-wrapper">
                        
                    <div class="swiper-slide">
                        <div class="about__facilities__image">
                            <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/icon 1.png')}}" alt="logo hand">
                            <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/01 (1).png')}}" alt="logo first">
                            <h2 class="about__facilities__image__title">Have High Rating</h2>
                            <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <!--Slider2-->
                    <div class="swiper-slide">
                        <div class="about__facilities__image">
                            <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/reloj.png')}}" alt="logo hand">
                            <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/02.png')}}" alt="logo first">
                            <h2 class="about__facilities__image__title">Have High Rating</h2>
                            <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <!--Slider3-->
                    <div class="swiper-slide">
                        <div class="about__facilities__image">
                            <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/ubicacion.png')}}" alt="logo hand">
                            <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/03.png')}}"  alt="logo first">
                            <h2 class="about__facilities__image__title">Have High Rating</h2>
                            <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <!--Slider4-->
                    <div class="swiper-slide">
                        <div class="about__facilities__image">
                            <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/cancellation.png')}}" alt="logo hand">
                            <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/04.png"')}} alt="logo first">
                            <h2 class="about__facilities__image__title">Have High Rating</h2>
                            <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <!--Slider5-->
                    <div class="swiper-slide">
                        <div class="about__facilities__image">
                            <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/card.png')}}" alt="logo hand">
                            <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilitieS/05.png')}}" alt="logo first">
                            <h2 class="about__facilities__image__title">Have High Rating</h2>
                            <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <!--Slider6-->
                    <div class="swiper-slide">
                        <div class="about__facilities__image">
                            <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/offers.png')}}" alt="logo hand">
                            <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/06.png')}}" alt="logo first">
                            <h2 class="about__facilities__image__title">Have High Rating</h2>
                            <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                
                </div>
                        
                <div class="swiper-pagination"></div>
                    
                        
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                
                        
            </div>
            <section class="facilitiesDesktop">
                <div class="facilitiesDesktop__container">
                    <!--Img1-->
                    <div class="about__facilities__image">
                        <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/icon 1.png')}}" alt="logo hand">
                        <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/01 (1).png')}}" alt="logo first">
                        <h2 class="about__facilities__image__title">Have High Rating</h2>
                        <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <!--Img2-->
                    <div class="about__facilities__image">
                        <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/reloj.png')}}" alt="logo hand">
                        <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/02.png')}}" alt="logo first">
                        <h2 class="about__facilities__image__title">Quiet Hours</h2>
                        <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <!--Img3-->
                    <div class="about__facilities__image">
                        <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/ubicacion.png')}}" alt="logo hand">
                        <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/03.png')}}" alt="logo first">
                        <h2 class="about__facilities__image__title">Best Locations</h2>
                        <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>    
                <div class="facilitiesDesktop__container">
                    
                    <!--Img4-->
                    
                        <div class="about__facilities__image">
                            <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/cancellation.png')}}" alt="logo hand">
                            <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/04.png')}}" alt="logo first">
                            <h2 class="about__facilities__image__title">Free Cancellation</h2>
                            <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    
                    <!--Img5-->
                    
                        <div class="about__facilities__image">
                            <img class="about__facilities__image__hand" src="{{asset ('images/AboutUS/facilities/card.png')}}" alt="logo hand">
                            <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/05.png')}}" alt="logo first">
                            <h2 class="about__facilities__image__title">Payment Options</h2>
                            <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
            
                    <!--Img6-->
                    <div class="about__facilities__image">
                        <img src="{{asset ('images/AboutUS/facilities/offers.png')}}" alt="logo offers">
                        <img class="about__facilities__image__first" src="{{asset ('images/AboutUS/facilities/06.png')}}" alt="logo first">
                        <h2 class="about__facilities__image__title">Special Offers</h2>
                        <p class="about__facilities__image__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
        
        
            </section>
        </article>
        <article class="about__counter">
            <h4 class="about__counter__title">COUNTER</h4>
            <h2 class="about__counter__section">Some Fun Facts</h2>
            <div class="about__counter__section__container">
                <div class="about__counter__section__container__box">
                    <img src="{{asset ('images/AboutUS/svg-gobbler - 2022-03-03T162637.580 1.png')}}" alt="">
                    <p class="about__counter__section__container__box__number">8000</p>
                    <img src="{{asset ('images/AboutUS/svg-gobbler - 2022-03-02T132915.921 1.png')}}" alt="">
                </div>
                <p class="about__counter__section__container__users">Happy Users</p>
            </div>
            <div class="about__counter__section__container">
                <div class="about__counter__section__container__box">
                    <img src="{{asset ('images/AboutUS/Group.png')}}" alt="">
                    <p class="about__counter__section__container__box__number">10 M</p>
                    <img src="{{asset ('images/AboutUS/svg-gobbler - 2022-03-02T132915.921 1.png')}}" alt="">
                </div>
                <p class="about__counter__section__container__users">Reviews & Appriciate</p>
            </div>
            <div class="about__counter__section__container">
                <div class="about__counter__section__container__box">
                    <img src="{{asset ('images/AboutUS/svg-gobbler - 2022-03-03T162519.735 1.png')}}" alt="">
                    <p class="about__counter__section__container__box__number">100</p>
                    <img src="{{asset ('images/AboutUS/svg-gobbler - 2022-03-02T132915.921 1.png')}}" alt="">
                </div>
                <p class="about__counter__section__container__users">Country Coverage</p>
            </div>
            <!--Swiper-->
            <div  class="swiper">
                        
                <div class="swiper-wrapper">
                        
                    <div class="swiper-slide"><img src="{{asset ('images/Rooms/AizheRK0tt4cDjSRwSea_large.jpg')}}" alt="photo room"></div>
                    <div class="swiper-slide"><img src="{{asset ('images/Rooms/descarga.jpg')}}" alt="photo room"></div>
                    ...
                    </div>
                        
                    <div class="swiper-pagination"></div>
                    
                        
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>   
            </div>
        </article>
    </section>
    @include ('profile.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script/about.js"></script>
    <script src="script/navbar.js"></script>
</body>
</html>