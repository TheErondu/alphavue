@extends('layouts.app')
@section('content')

   <!-- Get in touch section start -->
   <section class="small-section get-in-touch">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 contact-img">
                               <img src="assets/images/CU.png" class="img-fluid ml-2" alt="" style="width:80%">

          </div>
          <div class="col-lg-6">
             <div class="log-in">
                <div class="mb-4 text-start text-center">
                   <h2>Let's Get In Touch</h2>
                   <p>Find out more about our latest UK property opportunities get in touch with our team.</p>
                </div>
                <form class="row gx-3" action="https://baroncabot.com/save/website/inquiry" method="POST" >
                   <input type="hidden" name="_token" value="F1nqjeE2Oaqe2T7LK0HUltAM6g3dCea1g47DPMji">                     <div class="col-md-6">
                      <div class="form-group">
                         <input type="text" class="form-control" name="first_name" placeholder="Enter your name" required="">
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <input type="text" class="form-control" name="last_name" placeholder="Enter Last name" required="">
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <input type="email" class="form-control" name="email" placeholder="email address" required="">
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <input type="tel" name="phone_number" id="phone2" class="form-control" required>
                         <span id="valid-msg2" class="hide">✓ Valid</span>
                         <span id="error-msg2" class="hide"></span>
                      </div>
                   </div>
                   <div class="form-group col-md-12">
                      <label>Message</label>
                      <textarea class="form-control" placeholder="" rows="6" name="inquiry"></textarea>
                      <input type="hidden" name="page" value="Contact us" class="form-control" required>
                   </div>
                   <script src="../www.google.com/recaptcha/apid41d.js?" async defer></script>

                   <div data-sitekey="6LfqNxEiAAAAAG_0YC_kwiF2tWAwY7Rx_FOJWu4G" class="g-recaptcha"></div>
                                        <div class="col-md-12 submit-btn">
                      <center><button type="submit" class="btn btn-warning hide" id="submitForm2">Submit Information</button></center>
                      <center><small class="text-danger hide" id="phone_valid2">Your Phone Number is invalid</small></center>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Get in touch section end -->

 <!-- contact details section start -->
 <section class="small-section contact_section pt-0 contact_bottom">
    <div class="container">
       <div class="row">
          <div class="col-lg-4 col-sm-6">
             <div class="contact_wrap">
                <i data-feather="map-pin"></i>
                <h3>International Office</h3>
                <p class="font-roboto">501 Swiss tower, cluster Y, JLT Dubai<br>
                   <a href="tel:+971 4 568 6572">+971 4 568 6572</a>
                </p>
             </div>
          </div>
          <div class="col-lg-4 col-sm-6">
             <div class="contact_wrap">
                <i data-feather="map-pin"></i>
                <h3>UK Office</h3>
                <p class="font-roboto">Salisbury House 29 Finsbury Circus UNIT FC.394 <br> London England EC2M 5QQ <br>
                <a href="tel:+4402038079708">+44(0)203 807 9708</a>
                </p>
             </div>
          </div>
          <div class="col-lg-4 col-sm-6">
             <div class="contact_wrap">
                <i data-feather="mail"></i>
                <h3>Online service</h3>
                <ul>
                   <p>
                      Inquiries: info@baroncabot.com</br>

                      <a href="telto:+4402038079708">+44(0)203 807 9708</a>
                   </p>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- contact details section end -->
@endsection
