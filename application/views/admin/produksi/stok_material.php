<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Stok Material</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>"> <i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Produksi</li>
                <li class="breadcrumb-item active">Stok Material</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row second-chart-list third-news-update">
        <div class="col-sm-12 col-xl-6 box-col-6">
            <div class="card">
                <div class="card-header">
                    <h5>Pasir</h5><br>
                    <div class="">
                        <a href="<?= site_url('produksi/tambahstok_material1')?>" class="btn btn-primary btn-flat">
                            <span>Tambah Stock</span> 
                        </a>
                        <a href="<?= site_url('produksi/mutasi_material1')?>" class="btn btn-success btn-flat pull-right">
                            <span>Mutasi</span> 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Total Stock</th>
                                <th>Terpakai</th>
                                <th>Belum Terpakai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100</td>
                                <td >30</td>
                                <td >70</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6 box-col-6">
            <div class="card">
                <div class="card-header">
                    <h5>Semen</h5><br>
                    <div class="">
                        <a href="<?= site_url('produksi/tambahstok_material2')?>" class="btn btn-primary btn-flat">
                            <span>Tambah Stock</span> 
                        </a>
                        <a href="<?= site_url('produksi/mutasi_material2')?>" class="btn btn-success btn-flat pull-right">
                            <span>Mutasi</span> 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Total Stock</th>
                                <th>Terpakai</th>
                                <th>Belum Terpakai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100</td>
                                <td >30</td>
                                <td >70</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
