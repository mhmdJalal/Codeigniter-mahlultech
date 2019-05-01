<section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    Managemen Portpolio
                </h2>
            </div>
           
            <?php if ($edit): ?>
            <!-- Edit Portpolio -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Portpolio</h2>
                        </div>
                        <div class="body">
                            <form action="<?= base_url('dashboard/updateport/'.$edit_portpolio['id']) ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" value="<?= $edit_portpolio['nama'] ?>" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required><?= $edit_portpolio['keterangan'] ?></textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Image</h2>
                        </div>
                        <div class="body">
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('dashboard/updateimage/'.$edit_portpolio['id']) ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <label class="form-label">Image</label>
                                    <img class="img-responsive" src="<?= base_url('assets/img/portpolio/'.$edit_portpolio['image'].".jpg") ?>" alt="">
                                    <small>Masukkan image berukuran 1200 x 675</small>
                                    <input class="form-control" type="file" name="cover" required>
                                </div>
                                <button class="btn btn-primary waves-effect waves-light" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Edit Portpolio -->
            <?php else: ?>    
             <!-- Add new Portpolio -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add New Portpolio</h2>
                        </div>
                        <div class="body">
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('dashboard/addportp') ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-inline">
                                        <label>Image</label><br>
                                        <small>Masukkan cover berukuran 1200 x 675</small><br>
                                        <small>Hanya masukkan cover dengan format .jpg</small>
                                        <input type="file" name="image" value="" placeholder="" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Add new Portpolio -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <!-- <div class="header">
                            <h2>
                                ARTIKEL
                            </h2>
                        </div> -->
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Name</th>
                                            <th>Keterangan</th>
                                            <th>Foto</th>
                                            <th width="80">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=1;foreach ($portpolio->result_array() as $result): ?>
                                            <tr>
                                                <td><?= $id++ ?></td>
                                                <td><?= $result['nama'] ?></td>
                                                <td><span class="truncate"><?= $result['keterangan'] ?></span></td>
                                                <td><img class="responsive-img" src="<?= base_url('assets/img/portpolio/'.$result['image'].'.jpg') ?>" alt=""></td>
                                                <td>
                                                    <a href="<?= base_url('dashboard/deleteport/'.$result['id']) ?>" class="btn btn-danger waves-effect waves-light delete" href=""><i class="material-icons">delete</i></a>
                                                    <a href="<?= base_url('dashboard/portpolio/edit/'.$result['id']) ?>" class="btn btn-primary waves-effect waves-light" href=""><i class="material-icons">edit</i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PORTPOLIO
                            </h2>
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <?php foreach ($portpolio->result_array() as $result): ?>
                                <div class="col l4 m4 s6">
                                    <a data-toggle="tooltip" data-placement="bottom" title="<?= $result['nama'] ?>" href="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>" data-sub-html="<?= $result['keterangan'] ?>">
                                        <img class="img-responsive thumbnail" src="<?= base_url('assets/img/portpolio/'.$result['image'].".jpg") ?>">
                                    </a>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 center"> -->
              <?php // $this->pagination->create_links(); ?>
            <!-- </div> -->
            <?php endif ?>

        </div>
    </section>