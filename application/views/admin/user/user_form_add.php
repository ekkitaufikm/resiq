<div class="container-fluid pt-4">
                    <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="card-title">Tambah User</h5>
                    </div>
                    <div class="col-lg-6">
                        <a href="<?= site_url('user') ?>" class="btn btn-sm btn-primary float-end">Kembali</a>
                    </div>
                </div>
            </div>
            <form action="http://resiq.id/lingkar/user/store" method="post">
                <input type="hidden" name="_token" value="Qk9IJZuTq52cLm4oRrIxNAicdM4TX9PbAKXTG3Ch">                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="i-nama" class="form-control" name="nama" placeholder="Nama Lengkap" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" id="i-username" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="i-password" class="form-control" name="password" placeholder="****" required>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Hak Akses</label>
                                <select id="select-role" class="form-control" name="role" required>
                                    <option value="">Pilih</option>
                                    <option value="1">Super Admin</option>
                                    <option value="2">Supplier</option>
                                    <option value="3">Admin Suplier</option>
                                    <option value="4">Admin Produksi</option>
                                    <option value="5">Admin eCommerce</option>
                                    <option value="6">Pembeli</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select id="select-status" class="form-control" name="status" required>
                                    <option value="">Pilih</option>
                                    <option value="1">Aktif</option>
                                    <option value="2">Tidak Aktif</option>
                                    <option value="3">Diblokir</option>
                            </select>
                            </div>
                        </div>
    
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
