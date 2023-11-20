<br><div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Tambah Data Prodi
            </div><br>

            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label for="nama_prodi">Nama nama_prodi</label>
                        <input type="text" name="nama_prodi" value="<?= set_value('nama_prodi')?>" class="form-control" id="nama_prodi" placeholder="Nama Prodi">
                        <?= form_error('nama_prodi','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" value="<?= set_value('ruangan')?>" class="form-control" id="ruangan" placeholder="Ruangan">
                        <?= form_error('ruangan','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" value="<?= set_value('jurusan')?>" class="form-control" id="jurusan" placeholder="Jurusan">
                        <?= form_error('jurusan','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="akreditasi">Akreditasi</label>
                        <input type="text" name="akreditasi" value="<?= set_value('akreditasi')?>" class="form-control" id="akreditasi" placeholder="Akreditasi">
                        <?= form_error('akreditasi','<small class="text-danger pl-3">','</small>');?>       
                    </div><br>
                    <div class="form-group">
                        <label for="tahun">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" value="<?= set_value('tahun_berdiri')?>" class="form-control" id="tahun" placeholder="Tahun Berdiri">
                        <?= form_error('tahum_berdiri','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="lulusan">Output Lulusan</label>
                        <input type="text" name="output_lulusan" value="<?= set_value('output_lulusan')?>" class="form-control" id="lulusan" placeholder="lulusan">
                        <?= form_error('output_lulusan','<small class="text-danger pl-3">','</small>');?>
                    </div><br><br>
                    <div class="form-group">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" name="gambar" class="custom-file-input" id="gambar">
                        <label for="gambar" class="custom-file-input"></label>
                    </div><br><br>
                    <a href="<?= site_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div><br><br>