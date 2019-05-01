    <section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    Managemen Artikel
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add New Article</h2>
                        </div>
                        <div class="body">
                            <?= $this->session->flashdata('message') ?>
                            <form action="<?= base_url('dashboard/addartc') ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" required autocomplete="off">
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-inline">
                                        <label class="form-label">Cover</label><br>
                                        <small>Masukkan cover berukuran 1200 x 675</small><br>
                                        <small>Hanya masukkan cover dengan format .jpg</small>
                                        <input class="form-control" type="file" name="cover" value="" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="url" required autocomplete="off">
                                        <label class="form-label">URL</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" name="status">
                                        <option value="" disabled selected>Choose Status</option>
                                        <option value="10">Featured</option>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Description</label>
                                    <div class="form-line">
                                        <textarea id="tinymce" name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="author" required autocomplete="off">
                                        <label class="form-label">Author</label>
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