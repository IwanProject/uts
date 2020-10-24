<div class="container">
    <h1><?= $title ?></h1>

    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <!-- Tombol Tambah Mahasiswa -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Mahasiswa
            </button>
        </div>
    </div>
    <!-- Tabel -->
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Angkatan</th>


            </tr>
        </thead>
        <?php
        $i = 1;
        ?>
        <tbody>


            <!--  data $mahasiswa ini diambil dari controller selanjutnya di proses di model kemudian di kembalikan ke view   -->
            <!-- $mhs adalah variabel alias dari data $mahasiswa kemudian di panggil pada setiap kolomnya sesuai dengan name -->
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['jenkel'] ?></td>
                    <td><?= $mhs['angkatan'] ?></td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- data yang diinput akan dikirimkan ke MahasiswaController pada function upload untuk di proses. -->
                <form action="<?= base_url() ?>MahasiswaController/upload" method="post">

                    <div class=" form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="jenkel">Jenis Kelamin</label>
                        <select class="form-control" id="jenkel" name="jenkel">
                            <option>L</option>
                            <option>P</option>
                        </select>



                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <input type="text" class="form-control" id="angkatan" name="angkatan" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </form>


            </div>

        </div>
    </div>
</div>