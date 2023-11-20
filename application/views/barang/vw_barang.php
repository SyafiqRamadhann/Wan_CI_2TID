
<br><div class = "container-fluid">
    <hh1 class="h3 mb-4 text-gray-800"></h1>
    <div class="row">
        <dic class="col-md-6"><a href="<?= site_url('Barang/tambah')?>" class="btn btn-info mb-2">Tambah Data Pengiriman Barang</a></div><br>
        <?= $this->session->flashdata('message');?><br>
        <h1>Data Penerima</h1>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Awal</td>
                        <td>Nama Akhir</td>
                        <td>Alamat Penerima</td>
                        <td>Provinsi</td>
                        <td>Kabupaten</td>
                        <td>Kode Pos</td>
                        <td>Telepon</td>
                        <td>Nama Pengirim</td>
                        <td>Aksi</td>
                    </tr>
                <thead>
                <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($Barang as $us ) : ?>

                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama_awal_penerima']; ?></td>
                                <td><?= $us['nama_akhir_penerima']; ?></td>
                                <td><?= $us['alamat_penerima']; ?></td>
                                <td><?= $us['provinsi_penerima']; ?></td>
                                <td><?= $us['kabupaten_penerima']; ?></td>
                                <td><?= $us['kode_pos_penerima']; ?></td>
                                <td><?= $us['telepon_penerima']; ?></td>
                                <td><?= $us['nama_awal_pengirim']; ?></td>
                                <td>
                                    <a href="<?= site_url('Barang/hapus/') . $us['id']; ?> " class="btn btn-danger">Hapus</a>
                                    <a href="<?= site_url('Barang/edit/') . $us['id']; ?>  " class="btn btn-warning">Edit</a>
                                </td>
                            
                            <?php $i++;?>
                        <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div><br>
        <h1>Data Pengirim</h1>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <td>No</td>
                        <td>Nama Awal</td>   
                        <td>Nama Akhir</td>
                        <td>Alamat Pengirim</td>
                        <td>Provinsi</td>
                        <td>Kabupaten</td>
                        <td>Kode Pos</td>
                        <td>Telepon</td>
                        <td>Nama Penerima</td>
                        <td>Aksi</td>
                    </tr>
                <thead>
                <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($Barang as $us ) : ?>

                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama_awal_pengirim']; ?></td>
                                <td><?= $us['nama_akhir_pengirim']; ?></td>
                                <td><?= $us['alamat_pengirim']; ?></td>
                                <td><?= $us['provinsi_pengirim']; ?></td>
                                <td><?= $us['kabupaten_pengirim']; ?></td>
                                <td><?= $us['kode_pos_pengirim']; ?></td>
                                <td><?= $us['telepon_pengirim']; ?></td>
                                <td><?= $us['nama_awal_penerima']; ?></td>
                                <td>
                                    <a href="<?= site_url('Barang/hapus/') . $us['id']; ?> " class="btn btn-danger">Hapus</a>
                                    <a href="<?= site_url('Barang/edit/') . $us['id']; ?>  " class="btn btn-warning">Edit</a>
                                </td>
                            
                            <?php $i++;?>
                        <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
