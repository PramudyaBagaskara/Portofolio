<?php  echo "<h1>Form Pegawai</h1>"; ?>

<script>
	function del() {
		alert("Data Pegawai Dihapus ");
	}

</script>

<div class="card">
	<div class="card-header">
		<a href="<?php echo site_url("admin/tambahpegawaii"); ?>" class="btn btn-success fas fa-user-plus" title="Add User"></a>
	</div>
	<div class="card-body">
		<div class="section-title mt-0">Data Staff</div>
		<table class="table table-striped mt-3 text-center" id="myTable">
			<thead>
				<tr>
					<th scope="col" width="10">No</th>
					<th scope="col" width="10">ID</th>
					<th scope="col" width="150">Nama</th>
					<th scope="col">Jenis Kelamin</th>
					<th scope="col">Tempat Lahir</th>
					<th scope="col">Tanggal Lahir</th>
					<th scope="col">Alamat</th>
					<th scope="col">Mulai Kerja</th>
					<th scope="col">Status Hadir</th>

					<th scope="col">Modify</th>

				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($pegawaii->result() as $row) {?>
				<tr>
          <th><?php  echo $no ?></th>
					<th scope="row"><?php echo $row->id_pegawai; ?></th>
					<td><?php echo $row->nama; ?></td>
					<td><?php echo $row->jk; ?></td>
					<td><?php echo $row->tmp_lahir; ?></td>
					<td><?php echo $row->tgl_lahir; ?></td>
					<td><?php echo $row->alamat; ?></td>
					<td><?php echo $row->mulai_kerja; ?></td>
					<td><?php echo $row->status_hadir; ?></td>
					<td class="text-center"><a href="<?php echo site_url("admin/editpegawaii/$row->id_pegawai"); ?>" 	style="margin-bottom:20px; margin-top:20px;" class="btn btn-warning  fas fa-user-edit " 	
							 title="Edit"></a>
						<a href="<?php echo site_url("admin/hapuspeg/$row->id_pegawai"); ?>"  style="margin-bottom:20px; margin-top:20px;" class="btn btn-danger  fas fa-user-times "
							onclick="del()" title="Delete"></a> </td>
				</tr>
				<?php $no++; }?>
			</tbody>
		</table>
