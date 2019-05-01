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
            <?php if (!$edit): ?>
            <div class="row clearfix">
                <div class="col m5 s12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Role Baru</h2>
                        </div>
                        <div class="body">
                            <form action="<?= base_url('dashboard/addrole') ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required autocomplete="off">
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php else: ?>
            <div class="row clearfix">
                <div class="col m5 s12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Role</h2>
                        </div>
                        <div class="body">
                            <form action="<?= base_url('dashboard/updaterole/'.md5($edit_role->id)) ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required autocomplete="off" value="<?= $edit_role->nama ?>">
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endif ?>
                <div class="col m7 s12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Role
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=1;foreach ($role->result_array() as $result): ?>
                                            <tr>
                                                <td><?= $id++ ?></td>
                                                <td><?= $result['nama'] ?></td>
                                                <td width="100">
                                                    <a href="<?= base_url('dashboard/delrole/'.$result['id']) ?>" class="btn btn-danger waves-effect waves-light delete" href=""><i class="material-icons">delete</i></a>
                                                    <a href="<?= base_url('dashboard/managerole/edit/'.md5($result['id'])) ?>" class="btn btn-info waves-effect waves-light" href=""><i class="material-icons">edit</i></a>
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