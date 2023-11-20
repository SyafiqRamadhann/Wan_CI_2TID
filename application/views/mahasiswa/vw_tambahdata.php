<br><div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Tambah Data Mahasiswa
            </div><br>

            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?= set_value('nama')?>" class="form-control" id="nama" placeholder="Nama">
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" value="<?= set_value('nim')?>" class="form-control" id="nim" placeholder="NIM">
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin')?>" class="form-control" id="jenis_kelamin" class="form-control">
                            <option value="">Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?= set_value('email')?>" class="form-control" id="email" placeholder="Email">
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <select name="prodi" class="form-control" id="prodi" value="<?= set_value('prodi')?>"class="form-control">
                            <option value="">Pilih Prodi</option>
                            <?php foreach ($prodi as $p) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['nama_prodi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" value="<?= set_value('asal_sekolah')?>" class="form-control" id="no_hp" placeholder="Asal Sekolah">
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" name="no_hp" value="<?= set_value('no_hp')?>" class="form-control" id="no_hp" placeholder="NO HP">
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?= set_value('alamat')?>" class="form-control" id="alamat" placeholder="Alamat"><br><br>
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Mahasiswa </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div><br>