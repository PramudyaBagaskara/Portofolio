    <?php  echo "<h1>ini View Pegawai</h1>"; ?>
    <!-- <?php  // print_r($pegawai); ?> -->
    <div class="card">
                  <div class="card-header">
                    <h4>Striped</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Light</div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">NIK</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Jenis Kelamin</th>
                          <th scope="col">Modify</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($pegawai as $row) {?>
                        <tr>
                          <th scope="row"><?php echo $row->id; ?></th>
                          <td><?php echo $row->nik; ?></td>
                          <td><?php echo $row->nama; ?></td>
                          <td><?php echo $row->jk; ?></td>
                          <td><?php echo anchor("admin/editpegawai/$row->id",'Edit',"class='btn btn-warning'"); ?>
                          <a href="<?php echo site_url("admin/hapuspegawai/$row->id"); ?>" class="btn btn-danger  fas fa-trash "></a> </td>
                        </tr>
                      <?php }?>
                      </tbody>
                    </table>
                  
