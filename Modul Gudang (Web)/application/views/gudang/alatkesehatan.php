<?php  echo "<h1>Form Alat Kesehatan</h1>"; ?>

<script>
	function del() {
		alert("Data Alat Kesehatan Dihapus ");
	}

</script>

<div class="card">
	<div class="card-header">
		<a href="<?php echo site_url("admin/tambahalatkesehatan"); ?>" class="btn btn-success">Tambah Alat Kesehatan</a>
	</div>
	<div class="card-body">
		<div class="section-title mt-0">Data Alat Kesehatan</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">ID</th>
					<th scope="col">Nama Alat Kesehatan</th>
					<th scope="col">Cara Pemakaian</th>
					<th scope="col">Harga Alat Kesehatan</th>
					<th scope="col">Stok</th>
					<th scope="col">Modify</th>

				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($alatkesehatan->result() as $row) {?>
				<tr>
          <th><?php  echo $no ?></th>
					<th scope="row"><?php echo $row->id_alatkesehatan; ?></th>
					<td><?php echo $row->nama_alatkesehatan; ?></td>
					<td><?php echo $row->cara_pemakaian; ?></td>
					<td><?php echo $row->harga_alatkesehatan; ?></td>
					<td><?php echo $row->stock; ?></td>
					<td><a href="<?php echo site_url("admin/editalatkesehatan/$row->id_alatkesehatan"); ?>" class="btn btn-warning  far fa-edit "
							 title="Edit"></a>
						<a href="<?php echo site_url("admin/hapusalat/$row->id_alatkesehatan"); ?>" class="btn btn-danger  far fa-trash-alt "
							onclick="del()" title="Delete"></a> </td>
				</tr>
				<?php $no++; }?>
			</tbody>
		</table>
