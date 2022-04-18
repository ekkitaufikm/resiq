<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Tambah Produk</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('ecommerce/produk') ?>" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <form class="form theme-form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Upload File</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Nama Barang</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_cara" class="form-control" required >
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Harga</label>
                                        <div class=" col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text">Rp </span><input type="text" name="harga" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>