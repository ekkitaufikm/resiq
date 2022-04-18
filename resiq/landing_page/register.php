<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/cuba/theme/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Feb 2021 13:21:45 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= base_url() ?>assets/admin/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/admin/assets/images/favicon.png" type="image/x-icon">
    <title>Halaman Register | Resiq</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/responsive.css">
</head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
        <div class="select2-drpdwn">
            <div class="row m-0">
                <div class="col-12 p-0">    
                    <div class="login-card">
                        <div>
                            <div class="login-main"> 
                                <form action="<?=site_url('regis/add')?>" method="post">
                                    <h4>Create your account</h4>
                                    <p>Enter your personal details to create account</p>
                                    <div class="form-group">
                                        <label for="">Level *</label>
                                        <select class="form-select form-control-info" name="level">
                                        <option value="">- Pilih Jenis -</option>
                                            <option value="1">Supplier</option>
                                            <option value="2">Pembeli</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" value="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" value="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password Confirmation *</label>
                                        <input type="password" name="passconf" value="password confirmation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input type="text" name="email" value="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Hp</label>
                                        <input type="text" name="no_hp" value="no hp" class="form-control">
                                    </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                                </div>
                                <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="login.html">Sign in</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
      <script src="<?= base_url() ?>assets/admin/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>assets/admin/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url() ?>assets/admin/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="<?= base_url() ?>assets/admin/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url() ?>assets/admin/assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    </div>
  </body>

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Feb 2021 13:21:45 GMT -->
</html>