    <div class="container">
      <h4 class="light center grey-text text-darken-3 font-pompadour">Contact <span class="teal-text">Us</span></h4>
      <div class="row">
          <div class="col s12 m6">
            <ul class="collapsible popout">
              <li class="z-depth-5 active">
                <div class="collapsible-header black-text"><i class="material-icons">email</i>Email</div>
                <div class="collapsible-body white black-text"><span>info@mahlultech.com</span></div>
              </li>
              <li class="z-depth-5">
                <div class="collapsible-header black-text"><i class="material-icons">location_on</i>Address</div>
                <div class="collapsible-body white black-text">
                  <p class="center-align">
                    Jl.Raya Pondok Bitung Kp.Sela'awi Desa Sukaharja Kecamatan Cijeruk Kab.Bogor,<br>
                     Jawa Barat Indonesia 16740 <br>
                     ( <a class="blue-text" target="_blank" href="https://www.google.com/maps/place/Jl.+Raya+Pondok+Bitung,+Sukaharja,+Cijeruk,+Bogor,+Jawa+Barat/@-6.6613413,106.7722066,21z/data=!4m5!3m4!1s0x2e69cf0a18381cbf:0xc126c10ca292e57d!8m2!3d-6.658056!4d106.7673073">Open Map</a> )
                  </p>
                </div>
              </li>
              <li class="z-depth-5">
                <div class="collapsible-header black-text"><i class="material-icons">whatshot</i>Social Media</div>
                <div class="collapsible-body white black-text">
                  <p class="left-align">
                    <i class="icon-social-facebook"></i> Mahlul Tech  <br>
                    <i class="icon-social-instagram"></i> mahlultech <br>
                    <i class="icon-social-linkedin"></i> Mahlul Tech  <br>
                    <i class="icon-social-twitter"></i> mahlultech <br>
                    <i class="icon-social-youtube"></i> Mahlul Tech  <br>
                  </p>
                </div>
              </li>
            </ul>
          </div>

          <div class="col s12 m6">
            <div class="card white z-depth-2">
              <div class="card-content white-text">
                  <?= $this->session->flashdata('message'); ?>
                  <form method="post" action="<?= base_url('contact/send_email') ?>">
                  
                    <div class="textbox">
                      <input id="name" type="text" name="name" placeholder="Nama" required>
                    </div>
                  
                  
                    <div class="textbox">
                      <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>
                  
                  
                    <div class="textbox">
                      <input id="subject" type="text" name="subject" required placeholder="Subject">
                    </div>
                  
                  
                    <div class="textbox">
                      <textarea name="message" id="textarea2" class="materialize-textarea" maxlength="250" required placeholder="Message"></textarea>
                    </div>
                    <div class="right-align">
                      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>