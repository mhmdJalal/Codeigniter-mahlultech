    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    FEEDBACK
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Kategori Masalah
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Email</th>
                                            <th>Deskripsi</th>
                                            <th>Date</th>
                                            <th>Foto</th>
                                            <th width="40">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=1;foreach ($feed_masalah->result_array() as $result): ?>
                                            <tr>
                                                <td><?= $id++ ?></td>
                                                <td><?= $result['email'] ?></td>
                                                <td><?= $result['isi'] ?></td>
                                                <td><?= $result['date'] ?></td>
                                                <td><img class="responsive-img" src="<?= base_url('assets/img/feedback/'.$result['foto'].".jpg") ?>" alt=""></td>
                                                <td>
                                                    <a href="<?= base_url('dashboard/deletefeedback/'.$result['id']) ?>" class="btn btn-danger waves-effect waves-light delete" href=""><i class="material-icons">delete</i></a>
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
            <!-- #END# Exportable Table -->
             <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Kategori Saran dan Masukkan
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Email</th>
                                            <th>Deskripsi</th>
                                            <th>Date</th>
                                            <th>Foto</th>
                                            <th width="40">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=1;foreach ($feed_saran->result_array() as $result): ?>
                                            <tr>
                                                <td><?= $id++ ?></td>
                                                <td><?= $result['email'] ?></td>
                                                <td><?= $result['isi'] ?></td>
                                                <td><?= $result['date'] ?></td>
                                                <td><img class="responsive-img" src="<?= base_url('assets/img/feedback/'.$result['foto'].".jpg") ?>" alt=""></td>
                                                <td>
                                                    <a href="<?= base_url('dashboard/deletefeedback/'.$result['id']) ?>" class="btn btn-danger waves-effect waves-light delete" href=""><i class="material-icons">delete</i></a>
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
            <!-- #END# Exportable Table -->
        </div>
    </section>