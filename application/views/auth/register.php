

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <!-- <div class="col-xl-10 col-lg-12 col-md-9"> -->

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6"> --> <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Halaman Register</h1>
                            </div>
                            <form class="user" method="POST" action="<?= site_url('auth/registrasi'); ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= set_value('nama');?>" class="form-control" id="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                            </div><br>
                                <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="<?= set_value('email');?>" class="form-control" id="email" placeholder="alamat Email">
                                <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                            </div><br>
                                <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" name="password" value="<?= set_value('password');?>"class="form-control" id="password" placeholder="Password">
                                <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                                <button type="submit" class="btn btn_primary btnuser bt-block">daftar Akun</button>
                         
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?=site_url ('Auth'); ?>">Sudah Punya Akun ? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

