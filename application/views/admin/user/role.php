<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <div class="row project-cards">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Data Role</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('user/tambah_role') ?>" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-block row">
                                        <div class="col-sm-12 col-lg-12 col-xl-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-light">
                                                        <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1;
                                                        foreach($row->result() as $key => $data ){ ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $data->level == 1 ? "Super Admin" : "Supplier" ?></td>
                                                            <td class="text-center" width="160px">
                                                                <div class="btn-group btn-group-square" role="group" aria-label="">
                                                                    <a href="#" class="btn btn-primary" title="Ubah Data">Edit</a>
                                                                    <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php 
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->