<br><div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"> 
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Edit Mahasiswa
            </div><br>

            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <input type ="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                        <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" value="<?= $mahasiswa ['nim'];?> "class="form-control" id="nim" placeholder="NIM">
                        <?= form_error('nim','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" value="<?= $mahasiswa ['jenis_kelamin'];?> "class="form-control" id="jenis_kelamin" class="form-control">
                        <option value="">Jenis Kelamin</option>
                        <option value="Laki-Laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-Laki") {
                            echo "selected";
                        } ?>>Laki-Laki</option>
                        <option value="Perempuan"<?php if ($mahasiswa['jenis_kelamin'] == "Perempuan") {
                            echo "selected";
                        } ?>>Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?= $mahasiswa ['email'];?> " class="form-control" id="email" placeholder="Email">
                        <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <select name="prodi" value="<?= $mahasiswa ['prodi'];?> "class="form-control" id="prodi" class="form-control">
                        <?php foreach ($prodi as $p) : ?>
                            <option value ="<? $p['id']; ?> " <?php if ($mahasiswa['prodi'] == $p['id']) {
                                                                        echo "selected";
                                                                    } ?>><?= $p['nama_prodi']; ?></option>
                        <?php endforeach; ?>
                        </select>  
                        <?= form_error('prodi','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" value="<?= $mahasiswa ['asal_sekolah'];?> " class="form-control" id="no_hp" placeholder="NO HP">
                        <?= form_error('asal_sekolah','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" name="no_hp" value="<?= $mahasiswa ['no_hp'];?> "class="form-control" id="no_hp" placeholder="NO HP">
                        <?= form_error('no_hp','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?= $mahasiswa ['alamat'];?> " class="form-control" id="alamat" placeholder="Alamat"><br><br>
                        <?= form_error('alamat','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <a href="<?= site_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Edit </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<br>