<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Profil</li>
			     <li class="breadcrumb-item active" aria-current="page">Regulasi</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info"><i class="fa fa-book"></i> Regulasi</h3>
			<hr>
			<div class="span12">
			<div class="table-responsive">
                <table id="dataTables-example" class="table table-hover table-borderless table-striped">
                  <thead class="bg-info text-light">
                    <tr>
                      <th width="40%" >Nama Peraturan
                      </th>
                      <th width="40%" >Hal
                      </th>
                      <th width="20%" >File
                      </th>
                    </tr>
                  </thead>
                  <tbody class="text-info">
                    <?php foreach ($peraturan->result() as $row) {
                    ?>
                    <tr>
                      <td>
                        <?= $row->nama_peraturan; ?>
                      </td>
                      <td>
                        <?= $row->isi_peraturan; ?>, 
                      </td>
                      <td center>
                        <button href="<?= base_url(); ?>assets/fileupload/<?= $row->peraturan; ?>" class="btn btn-small btn-outline-success">
                          <i class="fa fa-download ">
                          </i> Unduh
                        </button>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              </div><hr>
        	</div>
		</div>
	</div>
</div>