<br><div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Tambah Data Pengiriman Brang
            </div><br>

            <div class="card-body">
                <form action="" method="POST">
                    <h2>Data Penerima</h2>
                    <div class="form-group">
                        <label for="nama_awal_penerima">Nama Awal</label>
                        <input type="text" name="nama_awal_penerima" value="<?= set_value('nama_awal_penerima')?>" class="form-control" id="nama_awal_penerima" placeholder="Nama Awal">
                        <?= form_error('nama_awal_penerima','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="nama_akhir_penerima">Nama Akhir</label>
                        <input type="text" name="nama_akhir_penerima" value="<?= set_value('nama_akhir_penerima')?>" class="form-control" id="nama_akhir_penerima" placeholder="Nama Akhir">
                        <?= form_error('nama_akhir_penerima','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="alamat_penerima">Alamat Penerima</label>
                        <input type="text" name="alamat_penerima" value="<?= set_value('alamat_penerima')?>" class="form-control" id="alamat_penerima" placeholder="Alamat Penerima">
                        <?= form_error('alamat_penerima','<small class="text-danger pl-3">','</small>');?>
                    </div><br>                    
                    <div class="form-group">
                        <label for="provinsi_penerima">Provinsi</label>
                        <input type="text" name="provinsi_penerima" value="<?= set_value('provinsi_penerima')?>" class="form-control" id="no_hp" placeholder="Provinsi">
                        <?= form_error('provinsi_penerima','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="kabupaten_penerima">Kabupaten</label>
                        <input type="text" name="kabupaten_penerima" value="<?= set_value('kabupaten_penerima')?>" class="form-control" id="kabupaten_penerima" placeholder="Kabupaten">
                        <?= form_error('kabupaten_penerima','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="kode_pos_penerima">Kode Pos</label>
                        <input type="text" name="kode_pos_penerima" value="<?= set_value('kode_pos_penerima')?>" class="form-control" id="kode_pos_penerima" placeholder="Kode Pos">
                        <?= form_error('kode_pos_penerima','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="telepon_penerima">Telepon</label>
                        <input type="text" name="telepon_penerima" value="<?= set_value('telepon_penerima')?>" class="form-control" id="telepon_penerima" placeholder="Telepon">
                        <?= form_error('telepon_penerima','<small class="text-danger pl-3">','</small>');?>
                    </div><br><br><br>
                    <h2>Data Pengirim</h2>
                    <div class="form-group">
                        <label for="nama_awal_pengirim">Nama Awal</label>
                        <input type="text" name="nama_awal_pengirim" value="<?= set_value('nama_awal_pengirim')?>" class="form-control" id="nama_awal_pengirim" placeholder="Nama Awal">
                        <?= form_error('nama_Awal_pengirim','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="nama_akhir_pengirim">Nama Akhir</label>
                        <input type="text" name="nama_akhir_pengirim" value="<?= set_value('nama_akhir_pengirim')?>" class="form-control" id="nama_akhir_pengirim" placeholder="Nama Akhir">
                        <?= form_error('nama_akhir_pengirim','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="alamat_pengirim">Alamat Pengirirm</label>
                        <input type="text" name="alamat_pengirim" value="<?= set_value('alamat_pengirim')?>" class="form-control" id="alamat_pengirim" placeholder="Alamat Pengirim">
                        <?= form_error('alamat_pengirim','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="provinsi_pengirim">Provinsi</label>
                        <input type="text" name="provinsi_pengirim" value="<?= set_value('provinsi_pengirim')?>" class="form-control" id="provinsi_pengirim" placeholder="Provinsi Pengirim">
                        <?= form_error('provinsi_pengirim','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="kabupaten_pengirim">Kabupaten</label>
                        <input type="text" name="kabupaten_pengirim" value="<?= set_value('kabupaten_pengirim')?>" class="form-control" id="kabupaten_pengirim" placeholder="Kabupaten Pengirim">
                        <?= form_error('kabupaten_pengirim','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="kode_pos_pengirim">Kode Pos</label>
                        <input type="text" name="kode_pos_pengirim" value="<?= set_value('kode_pos_pengirim')?>" class="form-control" id="kode_pos_pengirim" placeholder="Kode Pos">
                        <?= form_error('kode_pos_pengirim','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <div class="form-group">
                        <label for="telepon_pengirim">Telepon</label>
                        <input type="text" name="telepon_pengirim" value="<?= set_value('telepon_pengirim')?>" class="form-control" id="telepon_pengirim" placeholder="Telepon">
                        <?= form_error('telepon_pengirim','<small class="text-danger pl-3">','</small>');?>
                    </div><br>
                    <a href="<?= site_url('Barang') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div><br>