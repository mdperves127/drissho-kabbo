@extends('layouts.frontend_app')
@section('title')
Driesshokabbo | Contact
@endsection
@section('contact')
    active
@endsection
@section('frontend_content')
     <!-- Page Title -->
     <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>Contact</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact -->
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-item">
                        
                        @if (session('contact_form_done'))
                        <p class="text-success">{{ session('contact_form_done') }}</p>
                        @endif
                        <h2>Get In Touch</h2>
                        <form action="{{ route('contact.form.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please enter your number" class="form-control"
                                            placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="msg_subject" class="form-control"
                                            required data-error="Please enter your subject" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                            required data-error="Write your message" placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <button type="submit" class="contact-btn btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-item">
                        <h2>Know More</h2>

                        <div class="contact-address">
                            <div class="contact-inner">
                                <i class='bx bx-current-location icon'></i>
                                <h4>Address:</h4>
                                <span>3254-425 NW-2nd Ave, Miami USA</span>
                            </div>
                            <div class="contact-inner">
                                <i class='bx bx-phone-call icon'></i>
                                <h4>Phone:</h4>
                                <a href="tel:882569756">882-569-756</a>
                            </div>
                            <div class="contact-inner">
                                <i class='bx bx-mail-send icon'></i>
                                <h4>Email:</h4>
                                <a
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#0c65626a634c6163637a65226f6361"><span
                                        class="__cf_email__"
                                        data-cfemail="d5bcbbb3ba95b8babaa3bcfbb6bab8">[email&#160;protected]</span></a>
                            </div>
                            <div class="contact-inner">
                                <i class='bx bx-support icon'></i>
                                <h4>Support:</h4>
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
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End  Contact -->

    <!-- Map -->
    <div class="map-area">

        <iframe id="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3742975152836!2d90.40266491498106!3d23.734028384597405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f3c71e91f5%3A0x88feb9895abe3a81!2sBangladesh%20Shilpakala%20Academy!5e0!3m2!1sen!2sbd!4v1660803157431!5m2!1sen!2sbd"
            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- End Map -->
@endsection