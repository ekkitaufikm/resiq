<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <div class="row">
        <!-- Individual column searching (text inputs) Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">List Produk</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('ecommerce/tambahproduk') ?>" class="btn btn-sm btn-primary float-end">Tambah Produk</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="table-responsive product-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="<?= base_url() ?>assets/landing/assets/images/produk/paving2.jpg" width="100px"></td>
                                    <td>
                                        <h6> Paving Block Rumput </h6>
                                    </td>
                                    <td>Rp 22.000 - Rp 24.000</td>
                                    <td>
                                        <div class="btn-group btn-group-square" role="group" aria-label="">
                                            <a href="#" class="btn btn-primary" title="Edit Data">Edit</a>
                                            <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                        </div>
                                    </td> 
                                </tr>
                                <tr>
                                    <td><img src="<?= base_url() ?>assets/landing/assets/images/produk/paving3.jpg" width="100px"></td>
                                    <td>
                                        <h6> Paving Block Bata </h6>
                                    </td>
                                    <td>Rp 125.000 - Rp 195.000</td>
                                    <td>
                                        <div class="btn-group btn-group-square" role="group" aria-label="">
                                            <a href="#" class="btn btn-primary" title="Edit Data">Edit</a>
                                            <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                        </div>
                                    </td> 
                                </tr>
                                <tr>
                                    <td><img src="<?= base_url() ?>assets/landing/assets/images/produk/paving4.jpg" width="100px"></td>
                                    <td>
                                        <h6> Paving Block Cacing </h6>
                                    </td>
                                    <td>Rp 125.000 - Rp 135.000</td>
                                    <td>
                                        <div class="btn-group btn-group-square" role="group" aria-label="">
                                            <a href="#" class="btn btn-primary" title="Edit Data">Edit</a>
                                            <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                        </div>
                                    </td> 
                                </tr>
                                <tr>
                                    <td><img src="<?= base_url() ?>assets/landing/assets/images/produk/paving5.jpg" width="100px"></td>
                                    <td>
                                        <h6> Paving Block Segi Enam(Hexagon) </h6>
                                    </td>
                                    <td>Rp 135.000 - Rp 150.000</td>
                                    <td>
                                        <div class="btn-group btn-group-square" role="group" aria-label="">
                                            <a href="#" class="btn btn-primary" title="Edit Data">Edit</a>
                                            <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                        </div>
                                    </td> 
                                </tr>
                                <tr>
                                    <td><img src="<?= base_url() ?>assets/landing/assets/images/produk/paving6.jpg" width="100px"></td>
                                    <td>
                                        <h6> Paving Block Topi(Uskup) </h6>
                                    </td>
                                    <td>Rp 29.700 - Rp 33.000</td>
                                    <td>
                                        <div class="btn-group btn-group-square" role="group" aria-label="">
                                            <a href="#" class="btn btn-primary" title="Edit Data">Edit</a>
                                            <a href="#" class="btn btn-danger" title="Hapus Data">Hapus</a>
                                        </div>
                                    </td>   
                                </tr>
                                <tr>
                                    <td><img src="<?= base_url() ?>assets/landing/assets/images/produk/paving7.jpg" width="100px"></td>
                                    <td>
                                        <h6> Paving Block Kanstin </h6>
                                    </td>
                                    <td>Rp 29.000 - Rp 39.000</td>
                                    <td>
                                        <div class="btn-group btn-group-square" role="group" aria-label="">
                                            <a href="#" class="btn btn-primary" title="Edit Data">Edit</a>
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
        <!-- Individual column searching (text inputs) Ends-->
    </div>
</div>
<!-- Container-fluid Ends-->