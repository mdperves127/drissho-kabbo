@extends('layouts.frontend_app')
@section('home')
    active
@endsection
@section('title')
Drisshokabbo
@endsection
@section('frontend_content')
    
    <!-- Banner -->
    <div class="banner-wrap">
        <div class="banner-slider owl-theme owl-carousel">
            <div class="banner-area banner-img-one">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="banner-content">
                            <h1>One More Day Till I Fade</h1>
                            <p>Moovi Is High Quality Production House</p>
                            <a class="banner-btn" href="{{ route('application') }}">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-area banner-img-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="banner-content">
                            <h1>Get the best movies here</h1>
                            <p>Moovi Is High Quality Production House</p>
                            <a class="banner-btn" href="{{ route('application') }}">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-area banner-img-three">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="banner-content">
                            <h1>Let's make great things</h1>
                            <p>Moovi Is High Quality Production House</p>
                            <a class="banner-btn" href="{{ route('application') }}">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-social">
            <span>Follow us on:</span>
            <ul>
                <li>
                    <a href="#" target="_blank">
                        <i class='bx bxl-facebook'></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class='bx bxl-pinterest-alt'></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class='bx bxl-instagram'></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Work -->
    <section class="work-area work-area-three pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <a href="#">
                        <div class="work-item">
                            <img src="{{ asset("frontend_asset") }}/img/01.jpg" alt="Work">
                            <div class="work-content">
                                <h3>My Dream Stranger</h3>
                                <span>Music ViDEO</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <a href="#">
                        <div class="work-item">
                            <img src="{{ asset("frontend_asset") }}/img/02.jpg" alt="Work">
                            <div class="work-content">
                                <h3>Back To You</h3>
                                <span>Advertising Music Video</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <a href="#">
                        <div class="work-item">
                            <img src="{{ asset("frontend_asset") }}/img/03.jpg" alt="Work">
                            <div class="work-content">
                                <h3>We Make it awesome</h3>
                                <span>Commercial Music Video</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <a href="#">
                        <div class="work-item">
                            <img src="{{ asset("frontend_asset") }}/img/04.jpg" alt="Work">
                            <div class="work-content">
                                <h3>My Dream Girl</h3>
                                <span>Commercial Music Video</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <a href="#">
                        <div class="work-item">
                            <img src="{{ asset("frontend_asset") }}/img/05.jpg" alt="Work">
                            <div class="work-content">
                                <h3>Love Me Like You</h3>
                                <span>Romantic Music ViDEO</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <a href="#">
                        <div class="work-item">
                            <img src="{{ asset("frontend_asset") }}/img/06.jpg" alt="Work">
                            <div class="work-content">
                                <h3>Shape Of You</h3>
                                <span>Advertising Music Video</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <a href="#">
                        <div class="work-item">
                            <img src="{{ asset("frontend_asset") }}/img/07.JPG" alt="Work">
                            <div class="work-content">
                                <h3>Imagine Dragons - Believer</h3>
                                <span>Commercial Music Video</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <a href="#">
                        <div class="work-item">
                            <img src="{{ asset("frontend_asset") }}/img/08.jpg" alt="Work">
                            <div class="work-content">
                                <h3>In The End</h3>
                                <span>Commercial Music Video</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->
@endsection