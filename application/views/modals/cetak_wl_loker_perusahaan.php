<div class="modal fade" id="ModalWLLoker" tabindex="-1" role="dialog" aria-labelledby="ModalCetakPenempatan" aria-hidden="true">
    <div class="modal-dialog modal-lg shadow" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Data Wajib Lapor Lowongan Kerja</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url(); ?>admin/wajib_lapor_loker/cetak_wl_loker" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group" hidden>
                            <label for="nama_perusahaan">Nama Perusahaan</label>
                            <?php foreach ($nama_perusahaan as $row2) {
                            ?>
                                <input readonly class="form-control" name="nama_perusahaan" placeholder="Jumlah Laki-laki" value="<?php echo $row2->nama_company; ?>" required>
                            <?php } ?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="umur">Tanggal Awal</label>
                            <input type="date" class="form-control" name="tgl_awal" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal AKhir</label>
                            <input type="date" class="form-control" name="tgl_akhir" placeholder="Tahun" required>
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