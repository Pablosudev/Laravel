<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms Details</title>
    <link rel="stylesheet" href="styles/roomsDetails/roomsDetails.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <img id="imgButton" src="{{asset ('images/NavBar/1.png')}}" alt="icono menu" class="navbar__menu">
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
    <section class="details">
        <div class = "containerForm">
            <div class = "containerDesktop">
                <div class = "containerInfo">
                    <div>
                        <h4 class="details__tipe">DOUBLE BED</h4>
                        <h2 class="details__title">Luxury Double Bed</h2>
                    </div>
                    <div class="details__price">
                        <p class="details__price__dolar">$345</p>
                        <p class="details__price__time">/Night</p>
                    </div>
                </div>
                <img class="details__rooms"  src="{{asset ('images/Rooms/AizheRK0tt4cDjSRwSea_large.jpg')}}" alt="room image" >
            </div>
            <div class = "formDesktop">
                <h4 class="details__availability">Ceck Availability</h4>
                <div class="details__container">
                    <label for="" class="details__container__check">Check In</label>
                    <input type="text" placeholder="Fri, 14th June 2025"  class="details__container__calendar">
                    <img src="{{asset ('images/RoomsDetails/calendar.png')}}" alt="logo calendar" class="details__container__logoIn">
                    <label for="" class="details__container__check">Check Out</label>
                    <input type="text" placeholder="Sun, 16th June 2025"  class="details__container__calendar">
                    <img src="{{asset ('images/RoomsDetails/calendar.png')}}" alt="logo calendar" class="details__container__logoOut">
                    <button class="details__container__button">CHECK AVAILABILITY</button>
                </div>
            </div>
        </div>
        <section class = "sectionDesktop">
            <p class="details__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            <h4 class="details__amenities">Amenities</h4>
            <img src="{{asset ('images/RoomsDetails/Rectangle 85.png')}}" alt="">
            <div class="details__services">
                <!-- Lista movil -->
                <li class="details__services__list">
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/aire acondicioando.png')}}" alt="logo air" class="details__services__list__info__logo">Air conditioner</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/breakfast.png')}}" alt="logo breakfast" class="details__services__list__info__logo">Breakfast</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/Cleaning.png')}}" alt="logo Cleaning" class="details__services__list__info__logo">Cleaning</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/grocery.png')}}" alt="logo grocery" class="details__services__list__info__logo">Grocery</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/shop.png')}}" alt="logo shop" class="details__services__list__info__logo">Shop near</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/support.pn')}}g" alt="logo support" class="details__services__list__info__logo">24/7 Online Support</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/security.png')}}" alt="logo security" class="details__services__list__info__logo">Smart Security</ul>
                </li>
                <li class="details__services__list">
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/wifi.png')}}" alt="logo wifi" class="details__services__list__info__logo">High speed WIFI</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/kitchen.png')}}" alt="logo kitchen" class="details__services__list__info__logo">Kitchen</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/Shower.png')}}" alt="logo Shower" class="details__services__list__info__logo">Shower</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/single bed.png')}}" alt="logo single bed" class="details__services__list__info__logo">Single bed</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/towels.png')}}" alt="log towels" class="details__services__list__info__logo">Towels</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/key.png')}}" alt="logo key" class="details__services__list__info__logo">Strong Locker</ul>
                    <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/team.png')}}" alt="logo team" class="details__services__list__info__logo">Expert Team</ul>
                </li>
                <!-- Lista Desktop -->
                 
                    <li class="ListDesk">
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/aire acondicioando.png')}}" alt="logo air" class="details__services__list__info__logo">Air conditioner</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/breakfast.png')}}" alt="logo breakfast" class="details__services__list__info__logo">Breakfast</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/Cleaning.png')}}" alt="logo Cleaning" class="details__services__list__info__logo">Cleaning</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/grocery.png')}}" alt="logo grocery" class="details__services__list__info__logo">Grocery</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/shop.png')}}" alt="logo shop" class="details__services__list__info__logo">Shop near</ul>
                    </li>
                    <li class="ListDesk">
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/support.pn')}}g" alt="logo support" class="details__services__list__info__logo">24/7 Online Support</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/security.png')}}" alt="logo security" class="details__services__list__info__logo">Smart Security</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/wifi.png')}}" alt="logo wifi" class="details__services__list__info__logo">High speed WIFI</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/kitchen.png')}}" alt="logo kitchen" class="details__services__list__info__logo">Kitchen</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/Shower.png')}}" alt="logo Shower" class="details__services__list__info__logo">Shower</ul>
                    </li>
                    <li class="ListDesk">
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/single bed.png')}}" alt="logo single bed" class="details__services__list__info__logo">Single bed</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/towels.png')}}" alt="log towels" class="details__services__list__info__logo">Towels</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/key.png')}}" alt="logo key" class="details__services__list__info__logo">Strong Locker</ul>
                        <ul class="details__services__list__info"><img src="{{asset ('images/RoomsDetails/team.png')}}" alt="logo team" class="details__services__list__info__logo">Expert Team</ul>
                    </li>
                 
            </div>
            <div class="details__founder">
                <img class="details__founder__ellipse" src="{{asset ('images/RoomsDetails/Ellipse 4.png')}}" alt="Ellipse">
                <img class="details__founder__check" src="{{asset ('images/RoomsDetails/8665019_check_mark_icon 1.png')}}" alt="logo check">
                <img class="details__founder__photo" src="{{asset ('images/RoomsDetails/1726741504852.jpg')}}" alt="photo">
                <h2 class="details__founder__name">Pablo López</h2>
                <h3 class="details__founder__co">FOUNDER, QUX CO.</h3>
                <p class="details__founder__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <h4 class="details__cancellation">Cancellation</h4>
            <img src="{{asset ('images/RoomsDetails/Rectangle 85.png')}}" alt="img line">
            <p class="details__text">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
            <h4 class="details__cancellation">Related Rooms</h4>
            <img src="{{asset ('images/RoomsDetails/Rectangle 85.png')}}" alt="img line">
            <div class="details__box">
                
                    <!--SWIPER-->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                            <div class="swiper-slide"><img class="details__box__image" src="{{asset ('images/Rooms/descarga (2).jpg')}}" alt="photo room"></div>
                            <div class="swiper-slide"><img class="details__box__image" src="{{asset ('images/Rooms/descarga (3).jpg')}}" alt="photo room"></div>
                            <div class="swiper-slide"><img class="details__box__image" src="{{asset ('images/Rooms/descarga.jpg')}}" alt="photo room"></div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <!--BoxLogo-->
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
        </section>
    </section>
    @include ('profile.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script/roomsDetails.js"></script>
    <script src="script/navbar.js"></script>
</body>
</html>