<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <div class="row project-cards">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Data Plastik Cara</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('terimacara/add') ?>" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Nama</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dijemput</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="https://resiq.id/lingkar/plastik-cara/edit/1" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mengantar Sendiri</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="https://resiq.id/lingkar/plastik-cara/edit/2" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>rojee</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="https://resiq.id/lingkar/plastik-cara/edit/3" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-danger" title="Hapus Data">Hapus</a>
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