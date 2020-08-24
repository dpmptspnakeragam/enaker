<?php foreach ($peserta_magang->result() as $row) {
?>
    <div class="modal fade" id="EditPesertaMagang<?php echo $row->id_pesertamagang; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalPesertaMagangLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Peserta Magang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url(); ?>admin/peserta_magang/ubah" method="post" enctype="multipart/form-data">
                        <div class="form-group" hidden>
                            <label>Id</label>
                            <input type="text" class="form-control" id="id" name="id_pesertamagang" value="<?php echo $row->id_pesertamagang; ?>">
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label>Keterangan Kelulusan</label>
                                <select required name="ket" class="form-control">
                                    <option><?php echo $row->ket; ?></option>
                                    <option>LULUS</option>
                                    <option>TIDAK LULUS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input class="form-control" name="nama_peserta" placeholder="Nama Peserta" value="<?php echo $row->nama_peserta; ?>" required>

                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $row->alamat; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">No. KTP</label>
                            <input class="form-control" name="no_ktp" placeholder="No. KTP" value="<?php echo $row->no_ktp; ?>" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label>Jenis Kelamin</label>
                                <select required name="jenis_kelamin" class="form-control" value="<?php echo $row->jenis_kelamin; ?>">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">Tempat Lahir</label>
                            <input class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir" value="<?php echo $row->tmpt_lahir; ?>" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="no_ktp">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $row->tgl_lahir; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. HP</label>
                            <input class="form-control" name="no_hp" placeholder="No. HP" value="<?php echo $row->no_hp; ?>" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label>Pendidikan Terakhir</label>
                                <select required name="pendidikan" class="form-control" value="<?php echo $row->pendidikan; ?>">
                                    <option value="<?php echo $row->pendidikan; ?>" selected><?php echo $row->pendidikan; ?></option>
                                    <option>Tidak Sekolah</option>
                                    <option>SD / Sederajat</option>
                                    <option>SMP / Sederajat</option>
                                    <option>SMA / Sederajat</option>
                                    <option>D1 / D2 / D3 </option>
                                    <option>S1 / S2 / S3 </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label class="control-label" for="id_jenis">Program Magang</label>
                                <select required name="magang" class="form-control">
                                    <option value="<?= $row->id_magang; ?>"><?= $row->judul; ?></option>
                                    <?php foreach ($jenis_magang->result() as $row2) {
                                    ?>
                                        <option value="<?= $row2->id_magang; ?>"><?= $row2->judul; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>