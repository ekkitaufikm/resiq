<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Jenis Plastik</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('jenisplastik/add') ?>" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th width="5%"> </th>
                                <th>Jenis</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bening</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="#" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kresek</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="#" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
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