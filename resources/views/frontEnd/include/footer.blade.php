<footer class="section footer-classic">
        <div class="footer-classic-body section-lg">
          <div class="container">
            <div class="row row-40 row-md-50 justify-content-xl-between">
              <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight">
                <div class="footer-classic-brand"><a class="brand" href="{{ url('index') }}"><img class="brand-logo-dark" src="{{url('upload/site_logo/'.$site[0]['logo'])}}" alt="" width="249" height="52"/><img class="brand-logo-light" src="images/logo-inverse-249x52.png" alt="" width="249" height="52"/></a>
                </div>
                <ul class="list-schedule">
                  <li><span>Weekdays:</span><span>08:00am - 08:00pm</span></li>
                  <li><span>Weekends:</span><span>10:00am - 06:00pm</span></li>
                </ul>
                <div class="footer-classic-social">
                  <div class="group-lg group-middle">
                    <p>Get Social</p>
                    <div>
                      <ul class="list-inline list-social list-inline-sm">
                        <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                        <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                        <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                        <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
                <h4 class="footer-classic-title">Contacts</h4>
                <ul class="contacts-creative">
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a href="#">{{ $site[0]['address'] }}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                      <div class="unit-body"><a href="tel:{{ $site[0]['phone_number'] }}">{{ $site[0]['phone_number'] }}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                      <div class="unit-body"><a href="mailto::{{ $site[0]['email'] }}"><span class="__cf_email__" data-cfemail="">{{ $site[0]['email'] }}</span></a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                <h4 class="footer-classic-title">Newsletter</h4>
                <p>Subscribe to our newsletter to receive weekly news, updates, special offers, and exclusive discounts.</p>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform rd-form-inline rd-form-inline-2" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"/>
                    <label class="form-label" for="subscribe-form-2-email">Enter your e-mail</label>
                  </div>
                  <div class="form-button">
                    <button class="button button-icon-2 button-zakaria button-primary" type="submit"><span class="fl-bigmug-line-paper122"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-classic-panel">
          <div class="container">
            <div class="row row-10 align-items-center justify-content-sm-between">
              <div class="col-md-auto">
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Clothing Park</span><span>.&nbsp;</span><span>All rights reserved</span></p>
              </div>
              <!-- <div class="col-md-auto order-md-1"><a href="privacy-policy.html">Privacy Policy</a></div> -->
              <div class="col-md-auto">
                <div class="group-sm group-middle"><img src="{{ url('frontEnd') }}/images/payment-1-45x15.png" alt="" width="45" height="15"/><img src="{{ url('frontEnd') }}/images/payment-2-46x28.png" alt="" width="46" height="28"/><img src="{{ url('frontEnd') }}/images/payment-3-62x17.png" alt="" width="62" height="17"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>