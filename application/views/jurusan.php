<div class="container">
    <h1><?= $title ?><br></h1>

    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Jurusan
            </button>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Jurusan</th>
                <th scope="col">Nama Jurusan</th>


            </tr>
        </thead>
        <?php
        $i = 1;
        ?>
        <tbody>
            <?php foreach ($jurusan as $jrs) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $jrs['id_jurusan'] ?></td>
                    <td><?= $jrs['nm_jurusan'] ?></td>
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
                <form action="<?= base_url() ?>JurusanController/tambah" method="post">

                    <div class="form-group">
                        <label for="id_jurusan">ID Jurusan</label>
                        <input type="text" class="form-control " id="id_jurusan" name="id_jurusan" required>
                    </div>

                    <div class="form-group">
                        <label for="nm_jurusan">Nama Jurusan</label>
                        <input type="text" class="form-control" id="nm_jurusan" name="nm_jurusan" required>
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