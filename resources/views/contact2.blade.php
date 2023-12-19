@extends('layouts.layout')
@section('content')
    <style>
     .c2{
        box-sizing: 40px 40px 40px 40px;
        box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.535);
     }
     .box{
        box-sizing: 40px 40px 40px 40px;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.624);
     }
     .box a{
        text-decoration: none;
     }
     .slider{
      background-image: url(contact\ pic.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: top;
      height: 100%;
     }
    </style>
<!-- body -->
      <section>
        <div class="slider " style="padding: 8%;">
        
            <h1 style="color: #00B4CC; " class="text-center pt-5 fs-1" ><b>Contact Us</b></h1>

            <p class="container ps-5 text-center"><b>This is our Medical Haven's contact page.We're here to assist you. Reach out to us for any queries,  appointments, or concerns.Use the form below</b>  <br> <p class="container text-center"><b>to send us a message. We'll respond promptly to your inquiries.</b></p></p>
      
        </div>
<br><br>
        <div class="container">
            <div class="row row-cols-7 row-cols-md-5 g-4">
                <div class="col-lg-7 c2 pb-5 pt-4 ps-5 pe-4">
                    <h3 class="section-subtitle"><b style="color: #00B4CC;">Contact Form</b></h3>
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message mb-5">Message</label>
                            <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
                        </div>
                        <p>By submitting this form:You agree to the processing of the submitted personal data in accordance with our Insta's Privacy Policy including the transfer of data to our Medical Haven Managers and Doctors.</p>
                        <button type="submit" class="btn" style="background-color:#00B4CC">Submit</button>
                    </form>
                </div>

      <div class="col-lg-4">
                <div class="box ms-4 pb-5 ps-5 pt-5 pe-5">
                    <ul class="social-media-list">
                        <li><a href="#" target="_blank"><b style="color: #00B4CC;"><i class="fa fa-facebook"></b></i><b
                                    style="color: #00B4CC;"> Facebook</b></a></li>
                        <li><a href="#" target="_blank"><b style="color: #00B4CC;"><i class="fa fa-twitter"></b></i><b
                                    style="color: #00B4CC;"> Twitter</b></a></li>
                        <li><a href="#" target="_blank"><b style="color: #00B4CC;"><i class="fa fa-linkedin"></b></i><b
                                    style="color: #00B4CC;"> LinkedIn</b></a></li>
                        <li><a href="#" target="_blank"><b style="color: #00B4CC;"><i class="fa fa-instagram"></b></i><b
                                    style="color: #00B4CC;"> Instagram</b></a></li>
                    </ul>
                    <h6><b>Already with insta?</b></h6>
                    <p>Chat with us in MyInsta and get an instant reply.
                    </p>
                </div>
            </div>
            </div>
        </div>
      </section><br><br>
      <section>

        <div class="container">
            <h1 class="text-center"><b style=" color: #00B4CC;">Our Location</b></h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.668271597795!2d74.25822881482177!3d31.567358755803054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391902d7cc854965%3A0x26e931c38e01c5fc!2sUniversity%20of%20Engineering%20and%20Technology%20Lahore!5e0!3m2!1sen!2s!4v1627024972062!5m2!1sen!2s"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </section><br><br>
@endSection
