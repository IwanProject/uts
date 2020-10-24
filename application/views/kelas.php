<div class="container">
    <h1><?= $title ?><br></h1>

    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Kelas
            </button>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Kelas</th>
                <th scope="col">Nama Kelas</th>


            </tr>
        </thead>
        <?php
        $i = 1;
        ?>
        <tbody>
            <?php foreach ($kelas as $kls) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $kls['id_kls'] ?></td>
                    <td><?= $kls['nm_kls'] ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>KelasController/tambah" method="post">

                    <div class="form-group">
                        <label for="id_kls">ID Kelas</label>
                        <input type="text" class="form-control " id="id_kls" name="id_kls" required>
                    </div>

                    <div class="form-group">
                        <label for="nm_kls">Nama Kelas</label>
                        <input type="text" class="form-control" id="nm_kls" name="nm_kls" required>
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