    <section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Change your password</h2>
                        </div>
                        <div class="body">
                            <?= $this->session->flashdata('message') ?>
                            <form action="<?= base_url('dashboard/updatepass/'.md5($this->session->userdata('id'))) ?>" id="form_validation" method="post">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="oldpass" required autocomplete="off">
                                        <label class="form-label">Old Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="newpass" required autocomplete="off">
                                        <label class="form-label">New Password</label>
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