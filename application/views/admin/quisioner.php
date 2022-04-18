<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Data Responden</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('quisioner/add') ?>" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="display" id="basic-1">
                        <thead class="table-light">
                            <tr>
                            <th scope="col"> </th>
                            <th scope="col">Jenis Responden</th>
                            <th scope="col">Jumlah Pertanyaan</th>
                            <th scope="col">Jumlah Pengisi</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Rumah Tangga</td>
                                <td>11</td>
                                <td>5</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="<?= site_url('quisioner/edit_responden1') ?>" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        <a href="<?= site_url('quisioner/pertanyaan1') ?>" class="btn btn-info" title="Detail Data">Detail</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Pengepul</td>
                                <td>11</td>
                                <td>5</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="<?= site_url('quisioner/edit_responden2') ?>" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        <a href="<?= site_url('quisioner/pertanyaan2') ?>" class="btn btn-info" title="Detail Data">Detail</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Pemulung</td>
                                <td>11</td>
                                <td>5</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="<?= site_url('quisioner/edit_responden3') ?>" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        <a href="<?= site_url('quisioner/pertanyaan3') ?>" class="btn btn-info" title="Detail Data">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->