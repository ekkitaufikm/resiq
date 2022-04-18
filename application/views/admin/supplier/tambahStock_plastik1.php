<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Tambah Plastik Kresek</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('supplier/stok') ?>" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <form action="http://resiq.id/lingkar/responden/update/1" method="post">
                    <input type="hidden" name="_token" value="Qk9IJZuTq52cLm4oRrIxNAicdM4TX9PbAKXTG3Ch">                <input type="hidden" name="_method" value="PUT">                <div class="card-body">
                        <div class="form-group">
                            <label>Tambah Stok</label>
                            <input type="text" id="i-nama" class="form-control" name="nama" placeholder="Tambah Stok">
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>