<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Dashboard</h3>
      </div>
      <div class="col-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
          <li class="breadcrumb-item">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h5>Request Permintaan</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="date-picker">
            <form class="theme-form">
              <div class="mb-3 row g-3">
                <label class="col-sm-3 col-form-label text-sm-end">Nama</label>
                <div class="col-xl-5 col-sm-9">
                  <div class="input-group">
                    <input class="form-control" type="text" name="nama">
                  </div>
                </div>
              </div>
              <div class="mb-3 row g-3">
                <label class="col-sm-3 col-form-label text-sm-end">Jenis Kelamin</label>
                <div class="col-xl-5 col-sm-9">
                  <select class="form-select form-control-info" name="level">
                  <option value="">- Pilih Jenis -</option>
                      <option value="1">Pria</option>
                      <option value="2">Wanita</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row g-3">
                <label class="col-sm-3 col-form-label text-sm-end">Jenis Plastik</label>
                <div class="col-xl-5 col-sm-9">
                  <select class="form-select form-control-info" name="level">
                  <option value="">- Pilih Jenis -</option>
                      <option value="1">Organik</option>
                      <option value="2">An Organik</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row g-3">
                <label class="col-sm-3 col-form-label text-sm-end">Range Berat</label>
                <div class="col-xl-5 col-sm-9">
                  <div class="input-group">
                  <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)"><span class="input-group-text">Kg  </span>
                  </div>
                </div>
              </div>
              <div class="mb-3 row g-3">
                <label class="col-sm-3 col-form-label text-sm-end">Cara Terima</label>
                <div class="col-xl-5 col-sm-9">
                  <select class="form-select form-control-info" name="level">
                  <option value="">- Pilih Jenis -</option>
                      <option value="1">Diantar</option>
                      <option value="2">Dijemput</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row g-3">
                <label class="col-sm-3 col-form-label text-sm-end">Alamat Permintaan</label>
                <div class="col-xl-5 col-sm-9">
                  <div class="input-group">
                  <textarea class="form-control" id="validationTextarea" required=""></textarea>
                  </div>
                </div>
              </div>
              <div class="mb-3 row g-3 mb-0">
                <label class="col-sm-3 col-form-label text-sm-end">Tanggal Permintaan</label>
                <div class="col-sm-3">
                  <div class="datepicker-here" data-language="en"></div>
                </div>
              </div>
              <div id="map">
                <div class="mb-3 row g-3">
                  <label class="col-sm-3 col-form-label text-sm-end">Latitude :</label>
                  <div class="col-xl-5 col-sm-9">
                    <div class="input-group">
                      <input class="form-control" type="text" id="lat" name="lat" value=""> 
                    </div>
                  </div>
                </div>
                <div class="mb-3 row g-3">
                  <label class="col-sm-3 col-form-label text-sm-end">Longitude</label>
                  <div class="col-xl-5 col-sm-9">
                    <div class="input-group">
                      <input class="form-control" type="text" id="lng" name="lng" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div id="googleMap" style="width:100%;height:380px;"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->

