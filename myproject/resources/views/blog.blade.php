@extends('layout')

@section('title')Блог@endsection
@section('body__class', 'no-background')
@section('under_main_content')
    <div class="container">
        <div class="blog">
            <h2 class="blog_main-title"><span>list of articles<span></h2>
        </div>

        @foreach ($posts as $post)
            <div class="blog_inner">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    </div>
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
