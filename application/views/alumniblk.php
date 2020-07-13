<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">UPT Balai Latihan Kerja</li>
			     <li class="breadcrumb-item active" aria-current="page">Alumni</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info"><i class="fas fa-users"></i> Alumni Pelatihan Kerja</h3>
			<hr>
			<div class="span12">
			<div class="table-responsive">
                <table id="dataTables-example" class="table table-hover table-borderless table-striped">
              <thead class="bg-info text-light">
                <tr class="danger">
                  
                  <th width="20%">Nama
                  </th>
                  <th width="20%">Tempat, Tanggal Lahir
                  </th>
                  <th width="20%">Alamat
                  </th>
                  <th width="10%">Agama
                  </th>
                  <th width="10%">Kontak
                  </th>
                  <th width="10%">Pekerjaan
                  </th>
                  <th width="10%">Perusahaan
                  </th>
                </tr>
              </thead>
              <tbody class="text-info">
                <?php foreach($alumni->result() as $row) { ?>
                <tr>
                 
                  <td>
                    <?= $row->nama_alumni; ?>
                  </td>
                  <td>
                    <?= $row->tp_lahir; ?>, 
                    <?= $row->tl_lahir; ?>
                  </td>
                  <td>
                    <?= $row->alamat; ?>
                  </td>
                  <td>
                    <?= $row->agama; ?>
                  </td>
                  <td>
                    <?= $row->phone; ?>
                  </td>
                  <td>
                    <?= $row->pekerjaan; ?>
                  </td>
                  <td>
                    <?= $row->perusahaan;?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
              </div>
              </div>
        	</div>
		</div><hr>
	</div>
</div>

 <script>
    $(document).ready(function () {
      $('#dataTables-example').DataTable();
    }
                     );
  </script>