@extends('frontEnd.layout.master')
@section('title','Home')

@section('content')
      <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ url('frontEnd/images/contact.jpg') }}">
          <div class="breadcrumbs-custom-body parallax-content context-dark darken-overlay">
            <div class="container">
              <h2 class="breadcrumbs-custom-title">Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('index') }}">Home</a></li>
              <!-- <li><a href="#">Elements</a></li> -->
              <li class="active">Contact Us</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Get in touch-->
      <section class="section section-xl bg-default text-md-left">
        <div class="container">
          <div class="title-classic">
            <h3 class="title-classic-title">Get in touch</h3>
            <p class="title-classic-subtitle">We are available 24/7 by fax, e-mail or by phone. You can also use our <br class="d-none d-lg-block">quick contact form to ask a question about our products.</p>
          </div>

          <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="">
            <div class="row row-20 row-md-30">
              <div class="col-lg-8">
                <div class="row row-20 row-md-30">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      {{csrf_field()}}
                      <input class="form-input" id="contact-first-name-2" type="text" name="fname" data-constraints="@Required"/>
                      <label class="form-label" for="contact-first-name-2">First Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name-2" type="text" name="lname" data-constraints="@Required"/>
                      <label class="form-label" for="contact-last-name-2">Last Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"/>
                      <label class="form-label" for="contact-email-2">E-mail</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"/>
                      <label class="form-label" for="contact-phone-2">Phone</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required">@if(isset($proname))
Requesting Product Detail: 
Product Name: {{ $proname[0]['name'] }}
                    @endif
                  </textarea>
                </div>
              </div>
            </div>
            <button class="button button-lg button-secondary button-zakaria" type="submit">Send Message</button>
            {{-- <input type="submit" name="submit" value="Send Message" class="button button-lg button-secondary button-zakaria"> --}}
          </form>
        </div>
      </section>

      <!-- Get in touch-->
      <section class="section section-xl bg-gray-4">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-4">
              <h4>Phones</h4>
              <ul class="contacts-classic">
                <li>Office <a href="tel:{{ $site[0]['phone_number'] }}">{{ $site[0]['phone_number'] }}</a></li>
                <!-- <li>Fax <a href="tel:#">+1 (409) 987–5874</a></li> -->
              </ul>
            </div>
            <div class="col-sm-6 col-md-4">
              <h4>Address</h4>
              <div class="contacts-classic"><a href="#">{{ $site[0]['address'] }} </a></div>
            </div>
            <div class="col-sm-6 col-md-4">
              <h4>E-mails</h4>
              <ul class="contacts-classic">
                <li><a href="mailTo:{{ $site[0]['email'] }}"><span class="__cf_email__" data-cfemail="">{{ $site[0]['email'] }}</span></a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <!-- RD Google Map-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1447.9321596409006!2d90.40074132720028!3d23.869737676488096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRoad%3A10+Sector%3A06+Uttara!5e0!3m2!1sen!2sbd!4v1564861269975!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       
      </section>

@endsection