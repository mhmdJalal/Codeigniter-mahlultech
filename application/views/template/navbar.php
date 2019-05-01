    <header class="navbar-fixed">
      <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <!-- Logo -->
          <div class="hide-on-small-only">
            <a id="logo-container" href="<?= base_url() ?>" class="brand-logo grey-text text-darken-2">Mahlul Tech</a>
          </div>
          <div class="hide-on-med-and-up">
            <a id="logo-container" class="brand-logo responsive-img" href="<?= base_url() ?>" style="margin-top: 5px"><img src="<?= base_url('assets/img/mahlul.png') ?>" alt="" width="35" height="35"></a>
          </div>

          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons grey-text">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <?php if ($halaman): ?>
              <li><a class="grey-text text-darken-2" href="#services">Services</a></li>
              <li><a class="grey-text text-darken-2" href="#ourteam">Our Team</a></li>
            <?php endif; ?>
            <?php if (!$halaman): ?>
              <li><a class="grey-text text-darken-2" href="<?= base_url() ?>">Home</a></li>
            <?php endif ?>
            <li><a class="grey-text text-darken-2" href="<?= base_url('portfolio') ?>">Portfolio</a></li>
            <li><a class="grey-text text-darken-2" href="<?= base_url('blog') ?>">Blog</a></li>
            <li><a class="grey-text text-darken-2" href="<?= base_url('contact') ?>">Contact</a></li>
            <li><a class="grey-text text-darken-2" href="<?= base_url('about') ?>">About Us</a></li>
          </ul>
        </div>
      </nav>
    </header><!-- /header -->

    <!-- Sidenav -->
    <ul class="sidenav" id="nav-mobile">
      <?php if ($halaman): ?>
        <li><a class="waves-effect" href="#services">Services</a></li>
        <li><a class="waves-effect" href="#ourteam">Our Team</a></li>
      <?php endif; ?>
      <?php if (!$halaman): ?>
        <li><a class="waves-effect" href="<?= base_url() ?>">Home</a></li>
      <?php endif ?>
      <li><a class="waves-effect" href="<?= base_url('portfolio') ?>">Portfolio</a></li>
      <li><a class="waves-effect" href="<?= base_url('blog') ?>">Blog</a></li>
      <li><a class="waves-effect" href="<?= base_url('contact') ?>">Contact</a></li>
      <li><a class="waves-effect" href="<?= base_url('about') ?>">About Us</a></li>
    </ul>
