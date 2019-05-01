    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    MANAGEMEN ARTIKEL
                </h2>
            </div>

            <div class="row">
                <a class="btn btn-info waves-effect waves-light btn-lg" href="<?= base_url('dashboard/newarticle') ?>">Buat artikel baru</a>
                <a class="btn btn-info waves-effect waves-light btn-lg" href="https://disqus.com/home/forums/mahlultech/" target="_blank">Lihat Diskusi Artikel</a>
            </div>
            <?php if ($edit): ?>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Article</h2>
                        </div>
                        <div class="body">
                            <form action="<?= base_url('dashboard/updateartc/'.$edit_article['id']) ?>" id="form_validation" method="post">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" value="<?= $edit_article['title'] ?>" required autocomplete="off">
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="url" value="<?= $edit_article['url'] ?>" required autocomplete="off">
                                        <label class="form-label">URL</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" name="status">
                                        <option value="<?= $edit_article['status'] ?>" selected><?= $edit_article['status'] ?></option>
                                        <option value="" disabled>Choose Status</option>
                                        <option value="1">Featured</option>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Description</label>
                                    <div class="form-line">
                                        <textarea id="tinymce" name="description" cols="30" rows="5" class="form-control no-resize" required><?= $edit_article['content'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="author" value="<?= $edit_article['author'] ?>" required autocomplete="off">
                                        <label class="form-label">Author</label>
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
                            <h2>Edit Cover</h2>
                        </div>
                        <div class="body">
                            <form action="<?= base_url('dashboard/updatecover/'.$edit_article['id']) ?>" id="form_validation" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <label class="form-label">Cover</label>
                                    <img class="responsive-img" src="<?= base_url("assets/img/blog/".$edit_article['cover'].".jpg") ?>" alt="">
                                    <small>Masukkan cover berukuran 1200 x 675</small><br>
                                    <small>Hanya masukkan cover dengan format .jpg</small>
                                    <input class="form-control" type="file" name="cover" required>
                                </div>
                                <button class="btn btn-primary waves-effect waves-light" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <!-- All Article -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ARTIKEL
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Viewer</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=1;foreach ($article->result_array() as $result): ?>
                                            <tr>
                                                <td><?= $id++ ?></td>
                                                <td>
                                                    <a id="delartc" class="waves-effect waves-light" href="<?= base_url('dashboard/detailarticle/'.$result['url']) ?>" data-toggle="tooltip" data-placement="right" title="Lihat Detail"><?= $result['title'] ?></a>
                                                </td>
                                                <td><?= $result['author'] ?></td>
                                                <td><?= $result['view'] ?></td>
                                                <td><?= $result['date'] ?></td>
                                                <td width="100">
                                                    <a href="<?= base_url('dashboard/deleteartc/'.$result['id']) ?>" class="btn btn-danger waves-effect waves-light delete" href=""><i class="material-icons">delete</i></a>
                                                    <a class="btn btn-primary waves-effect waves-light" href="<?= base_url('dashboard/article/edit/'.$result['id']) ?>"><i class="material-icons">edit</i></a>
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
            <!-- #END# All Article-->
            <!-- Populat Article -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Popular Artikel
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Viewer</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=1;foreach ($popular->result_array() as $result): ?>
                                            <tr>
                                                <td><?= $id++ ?></td>
                                                <td>
                                                    <a id="delartc" class="waves-effect waves-light" href="<?= base_url('dashboard/detailarticle/'.$result['url']) ?>" data-toggle="tooltip" data-placement="right" title="Lihat Detail"><?= $result['title'] ?></a>
                                                </td>
                                                <td><?= $result['author'] ?></td>
                                                <td><?= $result['view'] ?></td>
                                                <td><?= $result['date'] ?></td>
                                                <td width="100">
                                                    <a href="<?= base_url('dashboard/deleteartc/'.$result['id']) ?>" class="btn btn-danger waves-effect waves-light delete" href=""><i class="material-icons">delete</i></a>
                                                    <a class="btn btn-primary waves-effect waves-light" href="<?= base_url('dashboard/article/edit/'.$result['id']) ?>"><i class="material-icons">edit</i></a>
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
            <!-- #END# Popular Article-->
            <!-- Artikel Featured -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Artikel Featured
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $id=1;foreach ($featured->result_array() as $result): ?>
                                            <tr>
                                                <td><?= $id++ ?></td>
                                                <td>
                                                    <a id="delartc" class="waves-effect waves-light" href="<?= base_url('dashboard/detailarticle/'.$result['url']) ?>" data-toggle="tooltip" data-placement="right" title="Lihat Detail"><?= $result['title'] ?></a>
                                                </td>
                                                <td><?= $result['author'] ?></td>
                                                <td><?= $result['date'] ?></td>
                                                <td width="100">
                                                    <a href="<?= base_url('dashboard/deleteartc/'.$result['id']) ?>" class="btn btn-danger waves-effect waves-light delete" href=""><i class="material-icons">delete</i></a>
                                                    <a class="btn btn-primary waves-effect waves-light" href="<?= base_url('dashboard/article/edit/'.$result['id']) ?>"><i class="material-icons">edit</i></a>
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
            <!-- #END# Artikel Featured -->
            <?php endif ?>
        </div>
    </section>