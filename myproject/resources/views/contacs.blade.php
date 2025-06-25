@extends('layout')

@section('title')Контакты@endsection

@section('body__class', 'no-background')

@section('under_main_content')
    <section class="contacts_main">
        <div class="container">
            <div class="text-contacts">
                <div class="text-contacts__inner-title">
                    <p class="text__over">You can always contact us!</p>
                </div>
                <div class="text-contacts__inner-undertitle">
                    <p class="text__under">To do this, fill out the form and <a href="#send-btn">send</a> it to us.</p>
                </div>
            </div>
            <div id="send-btn" class="form">
                <div class="form__table">
                    <form class="form__inner" method="post" action="/contacs/check">
                        <div class="form__inner-title">
                            <p>form</p>
                        </div>
                        @if($errors->any())
                            <div class="alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="form__inner-over">
                            <input class="contacts__title-item" type="email" name="email" id="email" placeholder="E-MAIL">
                            <input class="contacts__title-item" type="text" name="subject" id="subject" placeholder="TOPIC">
                            <textarea class="textarea contacts__title-item" name="message" id="message"
                                placeholder="MESSAGE"></textarea>
                        </div>
                        <div class="form__inner-under">
                            <button class="contacts__btn" type="submit">send</button>
                        </div>
                        @if(session('success'))
                            <div style="color: green; fontsize: 24px; margin:30px;">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
                </div>
                <div class="form__address">
                    <p class="form__address-text">Get in touch</p>
                    <div class="form__address-images-back">
                        <img class="images-back" src="/images/wave1.svg" alt="">
                    </div>
                    <div class="form__address-images">
                        <ul class="images__items">
                            <li class="images__item">
                                <a href="" class="images__item-link">
                                    <img src="/images/map-image.svg" alt="" class="item-link__image">
                                </a>
                                <p class="images__item-text">Vilamoura - Algarve - Portugal</p>
                            </li>
                            <li class="images__item">
                                <a href="" class="images__item-link">
                                    <img src="/images/phone-image.svg" alt="" class="item-link__image">
                                </a>
                                <p class="images__item-text">(+351) 912568342</p>
                            </li>
                            <li class="images__item">
                                <a href="" class="images__item-link">
                                    <img src="/images/mail-image.svg" alt="" class="item-link__image">
                                </a>
                                <p class="images__item-text">vilamourasurf@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer footer-contacts">
        <div class="footer__inner">
            <div class="footer__top">
                <h1 class="footer__title">
                    VILAMOURA SURF SCHOOL
                </h1>
                <a href="#" class="footer__logo">
                    <img src="/images/logo.png" alt="">
                </a>
            </div>
            <div class="footer__info">
                <dl class="footer__info-list">
                    <div class="footer__info-item">
                        <dt>Surf School</dt>
                        <dd>
                            <span>record n.325</span>
                            Portuguese Surfing Federation
                        </dd>
                        <dd>RNAAT registration 986/2016</dd>
                    </div>
                    <div class="footer__info-item">
                        <dt>Adress</dt>
                        <dd>
                            <span>record n.325</span>
                            Portuguese Surfing Federation
                        </dd>
                        <dd>Vilamoura - Algarve - Portugal</dd>
                    </div>
                    <div class="footer__info-item">
                        <dt>Contacts</dt>
                        <dd>
                            <span>Mobil and wattsapp</span>
                            <a href="tel: +351912568342">
                                (+351) 912568342
                            </a>
                        </dd>
                        <dd>
                            <a href="mailto: vilamourasurf@gmail.com">
                                vilamourasurf@gmail.com
                            </a>
                        </dd>
                    </div>
                </dl>
            </div>
            <div class="footer__bottom">
                <ul class="social-list">
                    <li class="social-item">
                        <a href="#" class="social-link">
                            <img src="/images/facebook-w.svg" alt="">
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="#" class="social-link">
                            <img src="/images/instagram-w.svg" alt="">
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="#" class="social-link">
                            <img src="/images/youtube-w.svg" alt="">
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="#" class="social-link">
                            <img src="/images/whatsapp-w.svg" alt="">
                        </a>
                    </li>
                </ul>
                <ul class="footer__nav">
                    <li class="footer__nav-item">
                        <a href="#" class="footer__nav-link">
                            Terms and conditions
                        </a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="#" class="footer__nav-link">
                            Privacy policy
                        </a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="#" class="footer__nav-link">
                            Complaint book
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
@endsection
