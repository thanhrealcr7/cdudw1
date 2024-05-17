@extends('layouts.site')
@section('title','Contact')
@section('content')
<!-- Contact Start -->
<div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Contact Us</h6>
                <h1 class="display-5 text-uppercase mb-0">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0 px-4 py-3" rows="8" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="bg-light mb-5 p-5">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1">Our Office</h6>
                                <span>Phuoc Long C - Thu Duc</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1">Email Us</h6>
                                <span>thanhjp0108.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1">Call Us</h6>
                                <span>0865138321</span>
                            </div>
                        </div>
                        <div>
                            <iframe class="position-relative w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4748302820485!2d106.69357131526094!3d10.77688909232443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752edd8d25c313%3A0x69fd97e3d4a3a8d7!2sHo%20Chi%20Minh%20City%2C%20Vietnam!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">

                                </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection