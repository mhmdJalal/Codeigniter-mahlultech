<section class="portfolio" id="portfolio">
  <div class="container">
    <h4 class="light center grey-text text-darken-3 font-pompadour">Our <span class="teal-text">Portfolio</span></h4>
    <div class="row">
      <div class="col s6">
        <ul id="tabs-swipe-demo" class="tabs">
          <li class="tab col s3"><a class="teal-text active" href="#all">All</a></li>
          <li class="tab col s3"><a class="teal-text" href="#mobile">Mobile</a></li>
          <li class="tab col s3"><a class="teal-text" href="#website">Website</a></li>
          <li class="tab col s3"><a class="teal-text" href="#design">Design</a></li>
        </ul>
      </div>
      <div id="all" class="col s12">
        <div class="row">
          <div class="col s12">
            <div id="aniimated-thumbnials" class="list-unstyled">
                <?php foreach ($portpolio as $result): ?>
                <div class="col m4 s4">
                    <a data-toggle="tooltip" title="<?= $result['nama'] ?>" href="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>" data-sub-html="<?= $result['keterangan'] ?>">
                        <img class="portpolio-box responsive-img" src="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>">
                    </a>
                </div>
                <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      <div id="mobile" class="col s12">
        <div class="row">
          <div class="col s12">
            <div id="aniimated-thumbnials" class="list-unstyled">
                <?php foreach ($mobile->result_array() as $result): ?>
                <div class="col m4 s4">
                    <a data-toggle="tooltip" title="<?= $result['nama'] ?>" href="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>" data-sub-html="<?= $result['keterangan'] ?>">
                        <img class="portpolio-box responsive-img" src="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>">
                    </a>
                </div>
                <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      <div id="website" class="col s12">
        <div class="row">
          <div class="col s12">
            <div id="aniimated-thumbnials" class="list-unstyled">
                <?php foreach ($website->result_array() as $result): ?>
                <div class="col m4 s4">
                    <a data-toggle="tooltip" title="<?= $result['nama'] ?>" href="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>" data-sub-html="<?= $result['keterangan'] ?>">
                        <img class="portpolio-box responsive-img" src="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>">
                    </a>
                </div>
                <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      <div id="design" class="col s12">
        <div class="row">
          <div class="col s12">
            <div id="aniimated-thumbnials" class="list-unstyled">
                <?php foreach ($design->result_array() as $result): ?>
                <div class="col m4 s4">
                    <a data-toggle="tooltip" title="<?= $result['nama'] ?>" href="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>" data-sub-html="<?= $result['keterangan'] ?>">
                        <img class="portpolio-box responsive-img" src="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>">
                    </a>
                </div>
                <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col s12 center">
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</section>