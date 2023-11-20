

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
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" method="POST" action="<?= site_url('Auth'); ?>">
                                    <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" value="<?=set_value('email'); ?>" name="email" class="form-control" id="email" placeholder="Masukkan Email">
                                    <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                                </div><br>
                                    
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" value="<?= set_value('nama'); ?>" name="password" class="form-control" id="password"  placeholder= "Masukkan Password">
                                    <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                                </div><br>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login -->
                                        <!-- </a> -->
                                        <button type="submit" class="btn btn_primary btnuser bt-block">Login</button>
                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Lupa Password</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= site_url('auth/registrasi'); ?>">Buat Akun</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

