<table class="table table-striped mt-3 text-center" id="myTable">
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
				<?php $no=1; foreach($obat->result() as $row) {?>
				<tr>
          <th><?php  echo $no ?></th>
					<th scope="row"><?php echo $row->id_obat; ?></th>
					<td><?php echo $row->nama_obat; ?></td>
					<td><?php echo $row->jenis_obat; ?></td>
					<td><?php echo $row->cara_pemakaian; ?></td>
					<td><?php echo $row->harga_obat; ?></td>
					<td><?php echo $row->stock; ?></td>
					<td><a href="<?php echo site_url("admin/editobat/$row->id_obat"); ?>" class="btn btn-warning  far fa-edit "
							 title="Edit"></a>
						<a href="<?php echo site_url("admin/hapusobat/$row->id_obat"); ?>" class="btn btn-danger  fas fa-trash-alt "
							onclick="del()" title="Delete"></a> </td>
				</tr>
				<?php $no++; }?>
			</tbody>
		</table>