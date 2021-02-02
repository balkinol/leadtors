    <!-- Footer start -->
    <footer class="footer">
      <div class="container footer-inner">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="footer-item clearfix">
              <h1>JOBB</h1>
              <ul class="contact-info">
                <li>
                  <i class="fas fa-map-marker-alt"></i>20/F Green Road,
                  Dhanmondi, Dhaka
                </li>
                <li>
                  <i class="fas fa-envelope"></i
                  ><a href="#">info@themevessel.com</a>
                </li>
                <li>
                  <i class="fas fa-globe"></i
                  ><a href="#">info@themevessel.com</a>
                </li>
                <li>
                  <i class="fas fa-phone-volume"></i
                  ><a href="#">+0477 85X6 552</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
            <div class="footer-item">
              <h4>Helpful Links</h4>
              <ul class="links">
                <li>
                  <a href="#">About Us</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
                <li>
                  <a href="#">Terms & Conditions</a>
                </li>
                <li>
                  <a href="#">Privacy Policy</a>
                </li>
                <li>
                  <a href="#">Blog</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
            <div class="footer-item">
              <h4>Job Seekers</h4>
              <ul class="links">
                <li>
                  <a href="#">Create Account</a>
                </li>
                <li>
                  <a href="#">Career Counseling</a>
                </li>
                <li>
                  <a href="#">My Oficiona</a>
                </li>
                <li>
                  <a href="#">FAQ</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
            <div class="footer-item">
              <h4>Employers</h4>
              <ul class="links">
                <li>
                  <a href="#">Create Account</a>
                </li>
                <li>
                  <a href="#">Products $ Service</a>
                </li>
                <li>
                  <a href="#">Post a Task</a>
                </li>
                <li>
                  <a href="#">FAQ</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-8 col-sm-12">
            <div class="footer-item clearfix">
              <h4>Newsletter</h4>
              <div class="Subscribe-box">
                <p>
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa
                  qui officia deserunt mollit.
                </p>
                <form class="form-inline" action="#" method="GET">
                  <input
                    type="text"
                    class="form-control mb-sm-0"
                    id="inlineFormInputName3"
                    placeholder="Email Address"
                  />
                  <button type="submit" class="btn">
                    <i class="fa fa-paper-plane"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Sub footer start -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <p class="copy">
              © 2019 <a href="#">Theme Vessel.</a> Trademarks and brands are the
              property of their respective owners.
            </p>
          </div>
          <div class="col-lg-4 col-md-4">
            <ul class="social-list clearfix">
              <li>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#" class="rss"><i class="fa fa-rss"></i></a>
              </li>
              <li>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub footer end -->

    <a href="#" id="scroll">
      <i class="fas fa-chevron-up"></i>
    </a>
    <!--Script-->
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript" src="./assets/js/slick.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('.slick-carousel').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3,
        });

        $(function () {
          $(document).scroll(function () {
            var $nav = $('.navbar-fixed-top');
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
          });
        });
      });

      $(document).ready(function () {
        $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
          } else {
            $('#scroll').fadeOut();
          }
        });
        $('#scroll').click(function () {
          $('html, body').animate({ scrollTop: 0 }, 600);
          return false;
        });
      });
    </script>

    <!---Counter--->
    <script src="./assets/js/main.js"></script>
  </body>
</html>