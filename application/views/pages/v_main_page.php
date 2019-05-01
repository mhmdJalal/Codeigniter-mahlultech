    <!-- Slider -->
    <div class="slider" id="slider">
      <ul class="slides">
        <li>
          <img src="<?= base_url('assets/img/image-14.jpg') ?>">
          <div class="caption left-align">
            <h3>Who Are We?</h3>
            <h5 class="light grey-text text-lighten-3">We're <span class="teal-text">Mahlul Tech</span>, resolve your problem with us.</h5>
            <a href="<?= base_url('about') ?>" class="btn blue waves-effect">About Us</a>
          </div>
        </li>
        <li>
          <img src="<?= base_url('assets/img/image-13.jpg') ?>">
          <div class="caption center-align">
            <h3><span class="teal-text">Contact</span> Us!!</h3>
            <h5 class="light grey-text text-lighten-3">Do you need our help to resolve your problem?</h5>
            <a href="<?= base_url('contact') ?>" class="btn blue waves-effect">Contact Us</a>
          </div>
        </li>
        <li>
          <img src="<?= base_url('assets/img/image-8.jpg') ?>">
          <div class="caption right-align">
            <h3>Our <span class="teal-text">Services</span> is The Best Handler</h3>
            <h5 class="light grey-text text-lighten-3">What services is available?</h5>
            <a href="#services" class="btn blue waves-effect">Our Services</a>
          </div>
        </li>
        <li>
          <img src="<?= base_url('assets/img/image-7.jpg') ?>">
          <div class="caption center-align">
            <h3><span class="teal-text">Mahlul</span> Technology</h3>
            <hr width="150px">
            <h5 class="light grey-text text-lighten-3">With Mahlul make your wish come true.</h5>
          </div>
        </li>
        <li>
          <img src="<?= base_url('assets/img/image-15.jpg') ?>">
          <div class="caption right-align">
            <h3>Subscribe</h3>
            <h5 class="light grey-text text-lighten-3">subscribe with us to get the latest news</h5>
            <div class="row">
              <div class="col s12">
                <div class="col m6 right">
                  <form method="post" action="<?= site_url('index/subscribe') ?>">
                    <div class="textbox">
                      <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="right-align">
                      <button class="btn blue waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div> <!-- End Slider -->

      <!-- Services -->
      <div class="container scrollspy" id="services">
        <div class="section">
          <h4 class="center">Services</h4>
          <!--   Icon Section   -->
          <div class="row"> 
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                <h5 class="center">Speeds up development</h5>
                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                <h5 class="center">User Experience Focused</h5>
                <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                <h5 class="center">Easy to work with</h5>
                <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- End Services -->

      <!-- Quotes -->
      <div class="parallax-container" style="height: auto;">
        <div class="container">
          <div class="section">
            <h4 class="center white-text text-shadow">Our <span class="teal-text">Team</span></h4>
                <!--   Icon Section   -->

            <div class="row white-text" style="margin-top: 40px">
              <div class="col s12 m4" style="padding: 0px 20px">
                <div class="icon-block scrollspy" id="ourteam">
                  <div class="center">
                    <img src="<?= base_url('assets/img/team/bams.JPG') ?>" alt="" class="hoverable circle responsive-img" width="150" height="150">
                    <h5>Bambang Setiawan</h5>
                    <h6>Marketing</h6>
                  </div>

                  <!-- <div class="row">
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                  </div> -->
                  
                </div>
              </div>

              <div class="col s12 m4" style="padding: 0px 20px">
                <div class="icon-block">
                  <div class="center">
                    <img src="<?= base_url('assets/img/team/jalal.JPG') ?>" alt="" class="hoverable circle responsive-img" width="150" height="150">
                    <h5>Muhamad Jalaludin</h5>
                    <h6>Developer</h6>
                  </div>

                  <!-- <div class="row">
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                  </div> -->
                </div>
              </div>

              <div class="col s12 m4" style="padding: 0px 20px">
                <div class="icon-block">
                  <div class="center">
                    <img src="<?= base_url('assets/img/team/agus.JPG') ?>" alt="" class="hoverable circle responsive-img" width="150" height="150">
                    <h5>Muhamad Agus Fikri</h5>
                    <h6>Designer</h6>
                  </div>

                  <!-- <div class="row">
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                    <span class="">Management</span>
                    <div class="progress">
                      <div class="determinate" style="width: 70%"></div>
                    </div>
                  </div> -->

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="parallax"><img src="<?= base_url('assets/img/image-15.jpg') ?>"></div>
      </div> <!-- End Quotes -->
      
      <!-- OurTeam -->
      <div class="container">
        <div class="section">
          <h4 class="center" style="margin-bottom: 50px">Quotes</h4> 
          <!--   Icon Section   -->
          <div class="row">
            <div class="col s12">
              <div class="owl-carousel owl-theme">

                  <div class="col s12">
                    <div class="col s2 hide-on-med-and-down">
                      <img src="<?= base_url('assets/img/team/jalal.JPG') ?>" alt="" class="circle responsive-img">
                    </div>
                    <div class="col s10 center-align">
                      <blockquote class="italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</blockquote>
                      <h5 class="center">Muhamad Jalaludin</h5>
                      <span class="italic">CEO and CO-FOUNDER</span>
                    </div>
                  </div>

                  <div class="col s12">
                    <div class="col s2 hide-on-med-and-down">
                      <img src="<?= base_url('assets/img/team/bams.JPG') ?>" alt="" class="circle responsive-img">
                    </div>
                    <div class="col s10 center-align">
                      <blockquote class="italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</blockquote>
                      <h5 class="center">Bambang Setiawan</h5>
                      <span class="italic">CEO and CO-FOUNDER</span>
                    </div>
                  </div>

                  <div class="col s12">
                    <div class="col s2 hide-on-med-and-down">
                      <img src="<?= base_url('assets/img/team/agus.JPG') ?>" alt="" class="circle responsive-img">
                    </div>
                    <div class="col s10 center-align">
                      <blockquote class="italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</blockquote>
                      <h5 class="center">Muhamad Agus Fikri</h5>
                      <span class="italic">CEO and CO-FOUNDER</span>
                    </div>
                  </div>

                </div>
            </div>
          </div>

        </div>
      </div> <!-- End OurTeam -->
