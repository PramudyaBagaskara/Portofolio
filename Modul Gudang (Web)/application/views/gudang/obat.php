<?php  echo "<h1>Form Obat</h1>"; ?>

<script>
	function del() {
		alert("Data Obat Dihapus ");
	}

</script>

<div class="card">
	<div class="card-header">
		<a href="<?php echo site_url("admin/tambahobat"); ?>" class="btn btn-success">Tambah Obat</a>
		<a href="<?php echo site_url("admin/export"); ?>" class="btn btn-info ml-3">Export Excel</a>
	</div>
	<div class="card-body" style="overflow:auto;">
		<div class="section-title mt-0">Data Obat</div>
		<table class="table table-striped mt-3 text-center" id="table">
			<thead>
				<tr>
					<th scope="col" width="100">No</th>
					<th scope="col" width="100">ID</th>
					<th scope="col" width="100">Nama Obat</th>
					<th scope="col" width="100">Jenis Obat</th>
					<th scope="col" width="100">Cara Pemakaian</th>
					<th scope="col" width="100">Harga Obat</th>
					<th scope="col" width="100">Stok</th>
					<th scope="col" width="100">Modify</th>

				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>

	
		<script type="text/javascript">
			$(document).ready(function () {

				$('#table').DataTable({
					"processing": true,
					"serverSide": true,
					"info": false,
					"order": [],

					"ajax": {
						"url": "<?php echo site_url('admin/ajaxobat')?>",
						"type": "POST"
					},


					"columnDefs": [{
						"targets": [0],
						"orderable": false,
					},
					
					 ],

				});


			})

		</script>
