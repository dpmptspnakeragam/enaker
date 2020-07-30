<div class="modal fade" id="ModalCetakPenempatan" tabindex="-1" role="dialog" aria-labelledby="ModalCetakPenempatan" aria-hidden="true">
    <div class="modal-dialog modal-lg shadow" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Data Penempatan Kerja Perusahaan</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/penempatan_kerja/cetak_perusahaan" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group" hidden>
                            <label for="nama_perusahaan">Nama Perusahaan</label>
                            <?php foreach ($nama_perusahaan as $row2) {
                            ?>
                                <input readonly class="form-control" name="nama_perusahaan" placeholder="Jumlah Laki-laki" value="<?php echo $row2->nama_company; ?>" required>
                            <?php } ?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="umur">Bulan</label>
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
                            <label>Tahun</label>
                            <input class="form-control" name="tahun" placeholder="Tahun" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-download"></i> Unduh</button>
            </div>
            </form>
        </div>
    </div>
</div>