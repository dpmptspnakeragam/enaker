<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">HI & Produktifitas</li>
			     <li class="breadcrumb-item active" aria-current="page">Sarana HI</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info"><i class="fa fa-globe"></i> Sarana HI</h3>
			<hr>
			<div class="span12">
			<div class="table-responsive">
                <table id="dataTables-example" class="data table table-hover table-borderless table-striped">
              <thead class="bg-info text-light">
                <tr>
                  <th class="text-center" width="20%" >Nama Perusahaan
                  </th>
                  <th class="text-center" width="20%" >Jumlah Tenaga Kerja
                  </th>
                  <th class="text-center" width="20%" >BPJS
                  </th>
                  <th class="text-center" width="10%" >Serikat Pekerja
                  </th>
                  <th class="text-center" width="10%" >PP
                  </th>
                  <th class="text-center" width="10%" >PKB
                  </th>
                  <th class="text-center" width="10%" >LKS Bipartit
                  </th>
                </tr>
              </thead>
              <tbody class="text-info">
                <?php foreach($saranahi->result() as $row) {
                ?>
                <tr class="odd gradeX">
                  <td>
                    <?= $row->nama_perusahaan; ?>
                  </td>
                  <td>
                    <?= $row->jmlh_pekerja; ?> Orang
                  </td>
                  <td>
                    <?= $row->bpjs; ?> Orang
                  </td>
                  <td>
                    <?= $row->serikat; ?>
                  </td>
                  <td>
                    <?= $row->pp; ?>
                  </td>
                  <td>
                    <?= $row->pkb; ?>
                  </td>
                  <td>
                    <?= $row->lks; ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
              </div><hr>
              </div>
        	</div>
		</div>
	</div>
</div>