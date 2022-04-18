<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Tambah Cara</h5>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= site_url('terimacara') ?>" class="btn btn-sm btn-primary float-end">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="<?= site_url('terimacara/process')?>" method="post">
                            <div class="form-group">
                                <label for="">Nama Cara</label>
                                <input type="hidden" name="id" value="<?= $row->user_id?>" >
                                <input type="text" name="nama_cara" value="<?= $row -> nama ?>" class="form-control" required >
                            </div><br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success me-3" name="<?= $page?>"> Save</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>  
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>