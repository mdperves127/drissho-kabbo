@extends('layouts.frontend_app')
@section('application')
    active
@endsection
@section('title')
Driesshokabbo | Application Form
@endsection
@section('frontend_content')
     <!-- Contact -->
     <div class="contact-area pt-100 pb-70 application-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-item">
                        <div class="page-title-item">
                            <h2>Application Form</h2>
                            <p>ইউসুফ হাসান অর্ক রূপান্তরিত উইলিয়াম শেক্সপিয়র এর রোমীয় জুলিয়েট নাটক মঞ্চায়নের লক্ষে ৪ মাস ব্যাপী অভিনয় অনুশীলন কোর্স। ভর্তি কার্যক্রমে অংশগ্রহণের সময় সাথে ছবি, এনআইডি এর ফটোকপি এবং আবেদন
                                ফর্ম ফি ১০০
                                টাকা নিয়ে আসতে হবে।</p>
                        </div>
                        @if (session('application_done'))
                        <p class="text-success">{{ session('application_done') }}</p>
                        @endif
                        <form action="{{ route('application.form.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="আপনার নাম লিখুন" placeholder="নাম">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="number" id="number" required
                                            data-error="আপনার ফোন নাম্বার লিখুন" class="form-control"
                                            placeholder="ফোন নাম্বার">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="fname" class="form-control" required
                                            data-error="আপনার পিতার নাম লিখুন" placeholder="পিতার নাম">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="mname" id="mname" class="form-control" required
                                            data-error="আপনার মাতার নাম লিখুন" placeholder="মাতার নাম">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="date" name="dob" id="dob" class="form-control" required
                                            data-error="আপনার জন্ম তারিখ লিখুন" placeholder="জন্ম তারিখ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="education_qualification" id="education_qualification" class="form-control" required
                                            data-error="আপনার শিক্ষাগত যোগ্যতা লিখুন" placeholder="শিক্ষাগত যোগ্যতা">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="present_address" id="present_address" class="form-control" required
                                            data-error="আপনার বর্তমান ঠিকানা লিখুন" placeholder="বর্তমান ঠিকানা">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="occupation" id="occupation" class="form-control" required
                                            data-error="আপনার পেশা লিখুন" placeholder="পেশা">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="blood_group" id="blood_group" class="form-control" required
                                            data-error="আপনার রক্তের গ্রুপ লিখুন" placeholder="রক্তের গ্রুপ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="experience">
                                            <option selected>অভিজ্ঞতা</option>
                                            <option value="আবৃতি">আবৃতি</option>
                                            <option value="গান">গান</option>
                                            <option value="নৃত্য">নৃত্য </option>
                                            <option value="বাদ্যযন্ত্র">বাদ্যযন্ত্র</option>
                                            <option value="অন্যান্য">অন্যান্য</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>



                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea name="purpose" class="form-control" id="purpose" cols="30" rows="8"
                                            required data-error="নাট্য কর্মশালায় অংশগ্রহণের উদ্দেশ্য লিখুন"
                                            placeholder="নাট্য কর্মশালায় অংশগ্রহণের উদ্দেশ্য"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <button type="submit" class="contact-btn btn">
                                        Apply Now
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
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
@section('footer_script')
<script src="{{ asset("frontend_asset") }}/js/applicationForm.js"></script>
@endsection