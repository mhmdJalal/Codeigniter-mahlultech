    <section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    MANAGEMEN USER
                </h2>
            </div>
            <?= $this->session->flashdata('message') ?>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah User Baru</h2>
                        </div>
                        <div class="body">
                            <form action="<?= base_url('dashboard/adduser') ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" required autocomplete="off">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required autocomplete="off">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" name="role">
                                        <option value="" disabled selected>Choose Role</option>
                                        <?php foreach ($role->result_array() as $result): ?>
                                            <option value="<?= $result['id'] ?>"><?= $result['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
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
                            <h2>
                                User
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=1;foreach ($user->result_array() as $result): ?>
                                            <tr>
                                                <td><?= $id++ ?></td>
                                                <td><?= $result['username'] ?></td>
                                                <td><?= $result['nama'] ?></td>
                                                <td width="100">
                                                    <a href="<?= base_url('dashboard/deluser/'.$result['id']) ?>" class="btn btn-danger waves-effect waves-light delete" href=""><i class="material-icons">delete</i></a>
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
        </div>
    </section>