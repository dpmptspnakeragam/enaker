<div class="modal fade" id="ModalBKK" tabindex="-1" role="dialog" aria-labelledby="ModalBKK" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penempatan BKK</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/penempatan_bkk/tambah" method="post" enctype="multipart/form-data">
                    <?php foreach ($idmax->result() as $row) {
                    ?>
                        <div class="form-group" hidden>
                            <label class=" control-label">Id</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->idmax + 1; ?>">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label class="control-label" for="nama_sekolah">Nama Sekolah</label>
                        <select required name="nama_sekolah" class="form-control">
                            <?php foreach ($sekolah->result() as $row) {
                            ?>
                                <option value="<?= $row->nama_sekolah; ?>"><?= $row->nama_sekolah; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nama">Nama</label>
                        <input class="form-control" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pr">Jenis Kelamin</label>
                        <select required name="jk" class="form-control">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="umur">Umur</label>
                        <input class="form-control" name="umur" placeholder="Masukkan Umur" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="jurusan">Jurusan</label>
                        <input class="form-control" name="jurusan" placeholder="Masukkan Jurusan" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="posisi">Posisi</label>
                        <input class="form-control" name="posisi" placeholder="Masukkan Posisi" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="perusahaan">Perusahaan</label>
                        <input class="form-control" name="perusahaan" placeholder="Masukkan Perusahaan" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>