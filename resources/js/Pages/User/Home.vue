<template>
    <div class="card page" id="page1">
        <div class="stemplen__container">
        </div>
        <section class="card__logo">
            <div class="card__logo-inner">
                <div class="card__logo-img">
                    <img :src="/user/firmlogo.png" alt="firm-logo">
                </div>
            </div>
        </section>
        <section class="card__info">
            <div class="stemplen__container">
                <h5 class="card__info-sub-title">
                    карта принадлежит
                </h5>
                <h2 class="card__info-title">
                    Вася Пупкин
                </h2>
                <div class="card__info-img-inner">
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                    <div class="card__info-img">
                        <img :src="/user/cardlogo.png" alt="img">
                    </div>
                </div>
                <p class="card__info-text">
                    Купите 9 чашек кофе и 10-я будет в подарок!
                </p>
                <div style="height: 50px;"></div>
            </div>
        </section>
    </div>
    <!-- Register -->
    <!-- Login -->
    <stamp />
    <card-info />
    <profile />
    <!-- push -->
    <about />
    <div class="main__slider-page page" id="page11">
        <section class="main__slider">
            <div class="main__swip-slider swiper-container">
                <div class="main__swip-slider-wrapper swiper-wrapper">
                    <div class="main__swip-slide swiper-slide">
                        <div class="main__swip-slide-container ">
                            <img :src="/user/slider1.jpg" alt="banner">
                        </div>
                    </div>
                    <div class="main__swip-slide swiper-slide">
                        <div class="main__swip-slide-container">
                            <img :src="/user/slider1.jpg" alt="banner">
                        </div>
                    </div>
                    <div class="main__swip-slide swiper-slide">
                        <div class="main__swip-slide-container">
                            <img :src="/user/slider1.jpg" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main__logo">
            <div class="stemplen__container">
                <div class="main__logo-inner">
                    <div class="main__logo-img">
                        <img :src="/user/firmlogo.png" alt="">
                    </div>
                    <div class="main__logo-img">
                        <img :src="/user/firmlogo.png" alt="">
                    </div>
                    <div class="main__logo-img">
                        <img :src="/user/firmlogo.png" alt="">
                    </div>
                    <div class="main__logo-img">
                        <img :src="/user/firmlogo.png" alt="">
                    </div>
                    <div class="main__logo-img">
                        <img :src="/user/firmlogo.png" alt="">
                    </div>
                    <div class="main__logo-img">
                        <img :src="/user/firmlogo.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <div></div>
    </div>
    <div class="discont page " id="page22">
        <div class="stemplen__container">
            <div class="discont__banner footer__logo" data-tab="#page111">
                <img :src="/user/slider1.jpg" alt="banner">
            </div>
            <div class="discont__logo-inner">
                <div class="discont__logo  footer__logo" data-tab="#page111">
                    <img :src="/user/banner.jpg" alt="logo">
                </div>
                <div class="discont__logo  footer__logo" data-tab="#page111">
                    <img :src="/user/banner.jpg" alt="logo">
                </div>
                <div class="discont__logo  footer__logo" data-tab="#page111">
                    <img :src="/user/banner.jpg" alt="logo">
                </div>
                <div class="discont__logo  footer__logo" data-tab="#page111">
                    <img :src="/user/banner.jpg" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div class="info page" id="page111">
        <div class="stemplen__container">
            <div class="main__logo-img info__logo">
                <img :src="/user/firmlogo.png" alt="">
            </div>
            <div class="info__set-title-inner">
                <h3 class="stemple__set-title">Фирма Мипель</h3>
                <div class="info__setting-inner">
                    <div class="info__setting-img">
                        <img :src="/user/street.svg" alt="icon">
                    </div>
                    <p class="info__setting-text">Ул Советская д. 10 87267 Москва</p>
                </div>
                <div class="info__setting-inner">
                    <div class="info__setting-img">
                        <img :src="/user/web.svg" alt="icon">
                    </div>
                    <a href="#" class="info__setting-text">интернет-сайт.ру</a>
                </div>
                <div class="info__setting-inner">
                    <div class="info__setting-img">
                        <img :src="/user/email.svg" alt="icon">
                    </div>
                    <a href="#" class="info__setting-text">емейл адрес</a>
                </div>
                <div class="info__setting-inner">
                    <div class="info__setting-img">
                        <img :src="/user/phone.png" alt="icon">
                    </div>
                    <a href="tel:0123234567" class="info__setting-text">0123-234567</a>
                </div>
                <div class="info__setting-inner">
                    <div class="info__setting-img">
                        <img :src="/user/calendar.svg" alt="icon">
                    </div>
                    <p class="info__setting-text">Пн-Пт:10:00 - 18:00<br>Суб.:10:00 - 13:00<br>Вск.:выходной</p>
                </div>
            </div>
            <div style="height: 50px;"></div>
        </div>
    </div>
    </tempate>
    <script>
    import Layout from './Components/Layout'
    import Profile from './Components/Profile'
    import CardInfo from './Components/CardInfo'
    import Stamp from './Components/Stamp'
    import About from './Components/About'
    import { Link } from '@inertiajs/inertia-vue'

    export default {
        components: {
            Link,
            Profile,
            CardInfo,
            Stamp,
            About
        },
        layout: Layout
    }

    </script>
