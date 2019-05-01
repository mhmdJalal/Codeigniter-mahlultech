    <section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    EMAIL
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Kirim Email kepada subscriber</h2>
                        </div>
                        <div class="body">
                            <?= $this->session->flashdata('message') ?>
                            <form action="<?= base_url('dashboard/sendmail') ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="subject" required autocomplete="off">
                                        <label class="form-label">Subject</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Message</label>
                                    <div class="form-line">
                                        <textarea id="tinymce" name="message" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>