<?php foreach ($bursa_khusus->result() as $row) {
?>
    <div class="modal fade" id="EditBkk<?php echo $row->id_bkk; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalBKK" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Penempatan BKK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/penempatan_bkk/tambah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <label class=" control-label">Id</label>
                            <input type="text" class="form-control" id="id" name="id_bkk" value="<?php echo $row->id_bkk; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nama_sekolah">Nama Sekolah</label>
                            <?php foreach ($nama as $row2) {
                            ?>
                                <input readonly class="form-control" name="nama_sekolah" placeholder="" value="<?php echo $row2->nama_sekolah; ?>" required>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nama">Nama</label>
                            <input class="form-control" name="nama" placeholder="Masukkan Nama" value="<?php echo $row->nama; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pr">Jenis Kelamin</label>
                            <select required name="jk" class="form-control">
                                <option value="<?php echo $row->jk; ?>" selected><?php echo $row->jk; ?></option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="umur">Umur</label>
                            <input class="form-control" name="umur" placeholder="Masukkan Umur" value="<?php echo $row->umur; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="jurusan">Jurusan</label>
                            <input class="form-control" name="jurusan" placeholder="Masukkan Jurusan" value="<?php echo $row->jurusan; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="posisi">Posisi</label>
                            <input class="form-control" name="posisi" placeholder="Masukkan Posisi" value="<?php echo $row->posisi; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="perusahaan">Perusahaan</label>
                            <input class="form-control" name="perusahaan" placeholder="Masukkan Perusahaan" value="<?php echo $row->perusahaan; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="bulan">Bulan</label>
                            <select required name="bulan" class="form-control" required>
                                <option value="<?php echo $row->bulan; ?>" selected><?php echo $row->bulan; ?></option>
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="tahun">Tahun</label>
                            <input class="form-control" name="tahun" placeholder="Masukkan tahun" value="<?php echo $row->tahun; ?>" required>
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
<?php } ?>