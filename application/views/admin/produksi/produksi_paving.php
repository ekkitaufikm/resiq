<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Produksi Paving</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="display" id="basic-1">
                        <thead class="table-light">
                            <tr>
                            <th scope="col"> </th>
                            <th scope="col">Kode Produksi</th>
                            <th scope="col">Bentuk Paving</th>
                            <th scope="col">Kekuatan Paving</th>
                            <th scope="col">Jumlah Paving</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>456543123</td>
                                <td>Paving Block Cacing</td>
                                <td>K200</td>
                                <td>100</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="<?= site_url('produksi/detail_produksi') ?>" class="btn btn-info" title="Detail Data">Detail</a>
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