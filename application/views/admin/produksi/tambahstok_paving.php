<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Tambah Stok Paving</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('produksi/stok_paving') ?>" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <form class="form theme-form">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Paving</label>
                            <input type="text" id="i-nama_jenis" class="form-control" name="tambahpaving" placeholder="Nama Paving" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Paving</label>
                            <input type="text" id="i-nama_jenis" class="form-control" name="tambahjumlahpaving" placeholder="Jumlah Paving" autofocus>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>