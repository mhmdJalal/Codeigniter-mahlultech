    <footer class="page-footer grey lighten-4 grey-text text-darken-2">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 >Company Bio</h5>
            <p class="light">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


          </div>
          <div class="col l3 s12">
            <h5>Settings</h5>
            <ul>
              <li><a class="grey-text text-darken-2" href="#!">Link 1</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 2</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 3</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 4</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5>Connect</h5>
            <ul>
              <li><a class="grey-text text-darken-2" href="#facebook"><i class="icon-social-facebook"></i> Facebook</a></li>
              <li><a class="grey-text text-darken-2" href="#instagram"><i class="icon-social-instagram"></i> Instagram</a></li>
              <li><a class="grey-text text-darken-2" href="#twitter"><i class="icon-social-twitter"></i> Twitter</a></li>
              <li><a class="grey-text text-darken-2" href="#linkedin"><i class="icon-social-linkedin"></i> Linkedin</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright grey lighten-3">
        <div class="container">
          <div class="right-align hide-on-med-and-down grey-text text-darken-3">
            <span class="left">Copyright &copy; 2018 <a class="teal-text" href="<?= base_url() ?>">Mahlul Tech</a>. All rights reserved.</span>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Services" href="<?= base_url()."#services" ?>">Services</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Team" href="<?= base_url()."#ourteam" ?>">Our Team</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Portfolio" href="<?= base_url('portfolio') ?>">Portfolio</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Blog Post's" href="<?= base_url('blog') ?>">Blog</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Contact" href="<?= base_url('contact') ?>">Contact</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see About Us" href="<?= base_url('about') ?>">About</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Floating Action Button -->
    <div class="fixed-action-btn">
      <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a class="btn-floating green modal-trigger" data-target="subscribe" data-toggle="tooltip" title="Subscribe"><i class="material-icons">subscriptions</i></a></li>
        <li><a class="btn-floating blue modal-trigger" data-target="modal1" data-toggle="tooltip" title="Kirim Feedback"><i class="material-icons">feedback</i></a></li>
      </ul>
    </div>

  <!-- Modal Send Feedback -->
  <div id="modal1" class="modal white">
    <div class="modal-content">
      <h4>Feedback</h4>
      <p>Silahkan kirimkan laporan bug / saran disini :)</p>
      <form method="post" action="<?= site_url('contact/send_feedback') ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>
              <input class="with-gap" name="kategori" type="radio" required value="1"/>
              <span>Masalah</span>
            </label>
            <label>
              <input class="with-gap" name="kategori" type="radio"  required value="2"/>
              <span>Saran dan Masukkan</span>
            </label>
          </div>
          <div class="textbox">
            <input id="email" type="email" class="" name="email" placeholder="Email" required>
          </div>

          <div class="textbox">
            <textarea name="message" class="materialize-textarea" required placeholder="Jelaskan masalah yang terjadi"></textarea>
          </div>

          <div class="file-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="foto" required>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Tambahkan foto sebagai bukti">
            </div>
          </div>

          <div class="right-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
      </form>
    </div>
  </div>

  <!-- Modal Subscribe -->
  <div id="subscribe" class="modal white">
    <div class="modal-content">
      <h4>Subscribe</h4>
      <p>
        Subscribe with us to get the latest news <br>
        <span class="red-text">*Silakan cek pada email anda setelah melakukan subscribe untuk proses aktivasi</span>
      </p>
      <form class="subscribe" method="post" action="<?= site_url('index/subscribe') ?>">
          <div class="textbox">
            <input id="email" type="email" class="" name="email" placeholder="Email" required>
          </div>

          <div class="right-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
      </form>
    </div>
  </div>
        