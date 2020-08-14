<?php foreach ($berita->result() as $row) {
?>
    <div class="modal fade" id="EditInfo<?php echo $row->id_berita; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/informasi/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <input type="text" class="form-control hidden" id="id" name="id" value="<?php echo $row->id_berita; ?>">
                        </div>
                        <div class="form-group">
                            <label for="judul_berita">Judul Informasi</label>
                            <input class="form-control" name="judul_berita" placeholder="Judul Informasi" value="<?php echo $row->judul_berita; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="tanggal">Tanggal Berita</label>
                            <input class="form-control col-lg-3" type="date" name="tanggal_berita" value="<?php echo $row->tgl_berita; ?>">
                        </div>
                        <div class="form-group">
                            <label for="konten_berita">Ringkasan Informasi</label>
                            <input class="form-control" name="konten_berita" placeholder="Ringkasan Informasi" value="<?php echo $row->konten_berita; ?>">
                        </div>
                        <div class="form-group">
                            <label for="isi_berita">Isi Informasi</label>
                            <textarea id="edit_berita" rows="10" class="form-control" type="text" name="isi_berita" required><?php echo $row->isi_berita; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="syarat">Keterangan</label>
                            <textarea class="form-control" name="syarat" rows="3"><?php echo $row->syarat; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="syarat">Link Terkait</label>
                            <input class="form-control" name="alamat" value="<?php echo $row->alamat; ?>">
                        </div>
                        <!--<div class="form-group">
              <label for="jenis">Jenis Informasi</label>
                  <select required name="jenis" id="jenis" class="form-control" onchange="">
                      <?php
                        $sql1 = pg_query("select * from jenis_berita");
                        while ($row1 = pg_fetch_array($sql1)) {
                            if ($id_jenis == $row1['id_jenis']) {
                                echo "<option value=\"$row1[id_jenis]\" selected>$row1[nama_jenis]</option>";
                            } else {
                                echo "<option value=\"$row1[id_jenis]\">$row1[nama_jenis]</option>";
                            }
                        }
                        ?>
                  </select>
              </div>-->
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Gambar</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" width='80' height='60' />
                                    <input name="gambar" type="file" id="gambar" />
                                    <input name="old" type="hidden" id="old" value="<?php echo $row->gambar; ?>" />
                                </div>
                            </div>
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