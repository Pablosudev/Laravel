<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles/contact/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="{{ asset('styles/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <img id="imgButton" src="{{asset ('images/NavBar/1.png')}}" alt="icono menu" class="navbar__menu">
            <div id="navbarList" class="navbar__dropdown">
                <a class="navbar__dropdown__page" href="index.html">Home</a>
                <a class="navbar__dropdown__page" href="about.html">About Us</a>
                <a class="navbar__dropdown__page" href="rooms.html">Rooms</a>
                <a class="navbar__dropdown__page" href="offers.html">Offers</a>
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
        <h2 class="header__section">New Details</h2>
        <div class="header__box">
            <h3 class="header__box__home">Home</h3>
            <p class="header__box__line">|</p>
            <h3 class="header__box__page">Rooms</h3>
        </div>
    </header>
    <section class="contact">
        <!--Tarjeta 1-->
        <article class="contact__cards">
            <div class="contact__cards__box">
                <div class="contact__cards__box__container">
                    <img class="contact__cards__box__container__image" src="{{asset ('images/Contact/icon 9 (1).png')}}" alt="Logo mail">
                    <div>   
                        <h4 class="contact__cards__box__container__section">Hotel Adress</h4>
                        <p class="contact__cards__box__container__text">19/A, Cirikon City hall Tower <br>New York.NYC</p>
                    </div>
                </div>
                <img class="contact__cards__box__background" src="{{asset ('images/Contact/01.png')}}" alt="background 1">
            </div>
        </article>
        <!--Tarjeta 2-->
        <article class="contact__cards">
            <div class="contact__cards__box">
                <div class="contact__cards__box__container">
                    <img class="contact__cards__box__container__image" src="{{asset ('images/Contact/svg-gobbler - 2022-03-02T152425.400 1 (1).png')}}" alt="Logo mail">
                    <div>   
                        <h4 class="contact__cards__box__container__section">Phone Number</h4>
                        <p class="contact__cards__box__container__text">+ 97656 8675 7864 7 <br>+ 8767668675 765 6</p>
                    </div>
                </div>
                <img class="contact__cards__box__background" src="{{asset ('images/Contact/02.png')}}" alt="background 1">
            </div>
        </article>
        <!--Tarjeta 3-->
        <article class="contact__cards">
            <div class="contact__cards__box">
                <div class="contact__cards__box__container">
                    <img class="contact__cards__box__container__image" src="{{asset ('images/Contact/icon 10 (1).png')}}" alt="Logo mail">
                    <div>   
                        <h4 class="contact__cards__box__container__section">Email</h4>
                        <p class="contact__cards__box__container__text">info@webmail.com <br>jobs.webmail@mail.com</p>
                    </div>
                </div>
                <img class="contact__cards__box__background" src="{{asset ('images/Contact/03.png')}}" alt="background 1">
            </div>
        </article>
        
    </section>
    <section class="form">
        <img class="form__image" src="{{asset ('images/Rooms/Room2.jpg')}}" alt="photo room">
        <div  class="form__inputDesk">
            <div class="form__inputDesk__container">
                <div class="form__input">
                    <input class="form__input__date" type="text" placeholder="Your full name">
                    <img class="form__input__logo" src="{{asset ('images/Contact/392531_account_friend_human_man_member_icon 1.png')}}" alt="logo name">
                </div>
                <div class="form__input">
                    <input class="form__input__date" type="text" placeholder="Add phone number">
                    <img class="form__input__logo" src="{{asset ('images/Contact/2703069_phone_cell_contact_telephone_icon 1.png')}}" alt="logo phone">
                </div>
            </div>
            <div class="form__inputDesk__container">
                <div class="form__input">
                    <input class="form__input__date" type="text" placeholder="Enter email addres">
                    <img class="form__input__logo" src="{{asset ('images/Contact/1904660_email_envelope_letter_mail_message_icon 1.png')}}" alt="logo email">
                </div>
                <div class="form__input">
                    <input class="form__input__date" type="text" placeholder="Enter subject">
                    <img class="form__input__logo" src="{{asset ('images/Contact/pen.png')}}" alt="logo subject">
                </div>
            </div>
        </div>
        <div class="form__inputDesk__message">
            <input class="form__input__message" type="text" placeholder="Enter message">
            <img class="form__input__logoMessage" src="{{asset ('images/Contact/svg-gobbler - 2022-03-03T212453.252 2.png')}}" alt="logo message">
        </div>
        <button class="form__button">SEND</button>
    </section>
    @include('profile.partials.footer')
    <script src="script/navbar.js"></script>
</body>