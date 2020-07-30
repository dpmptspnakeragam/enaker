<div class="modal fade" id="ModalPenempatan" tabindex="-1" role="dialog" aria-labelledby="ModalPenempatan" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Penempatan Kerja</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/penempatan_kerja/tambah" method="post" enctype="multipart/form-data">
                    <?php foreach ($idmax->result() as $row) {
                    ?>
                        <div class="form-group" hidden>
                            <label>Id</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax + 1; ?>">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label class="control-label" for="nama_sekolah">Nama Perusahaan</label>
                        <select required name="nama_perusahaan" class="form-control">
                            <?php foreach ($company->result() as $row) {
                            ?>
                                <option value="<?= $row->nama_company; ?>"><?= $row->nama_company; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input class="form-control" name="posisi" placeholder="Posisi" required>
                    </div>
                    <div class="form-group">
                        <label for="penempatan">Penempatan</label>
                        <input class="form-control" name="penempatan" placeholder="Penempatan" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label>Pendidikan</label>
                            <select required name="pendidikan" class="form-control">
                                <option>Tidak Sekolah</option>
                                <option>SD / Sederajat</option>
                                <option>SMP / Sederajat</option>
                                <option>SMA / Sederajat</option>
                                <option>D1 / D2 / D3 </option>
                                <option>S1 / S2 / S3 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input class="form-control" name="umur" placeholder="Usia" required>
                    </div>
                    <div class="form-group">
                        <label for="usia">Laki-Laki</label>
                        <input class="form-control" name="lk" placeholder="Jumlah Laki-Laki" required>
                    </div>
                    <div class="form-group">
                        <label for="usia">Perempuan</label>
                        <input class="form-control" name="pr" placeholder="Jumlah Perempuan" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="status_karyawan">Status Karyawan</label>
                            <select required name="status" class="form-control">
                                <option>PKWT</option>
                                <option>PKWTT</option>
                                <option>Harian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gaji">Bulan</label>
                        <select required name="bulan" class="form-control" required>
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
                        <label for="gaji">Tahun</label>
                        <input class="form-control" name="tahun" placeholder="Masukan Tahun" required>
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