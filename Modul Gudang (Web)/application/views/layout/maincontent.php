      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Default Layout</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Default Layout</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title"><?php echo $title;?></h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>
            <div class="card">
              <div class="card-header">
                <h4><?php echo $title;?></h4>
              </div>
              <div class="card-body">
               <?php
               if(isset($page)){
                if($page=='pegawai'){
                  $this->load->view('pegawai/viewPegawai', $pegawai);
                  
                }elseif($page=='inputpegawai'){
                  $this->load->view('pegawai/inputPegawai');
                
                }elseif($page=='gudang'){
                  $this->load->view('gudang/gudang');
  
                }elseif($page=='tambahpegawaii'){
                  $this->load->view('gudang/tambahpegawaii');
  
                }elseif($page=='obat'){
                  $this->load->view('gudang/obat');

                }elseif($page=='pengeluaran'){
                  $this->load->view('gudang/pengeluaran');

                }elseif($page=='tambahobat'){
                  $this->load->view('gudang/tambahobat');  
                
                }elseif($page=='gudang'){
                  $this->load->view('gudang/editgudang');  
                
                }elseif($page=='editobat'){
                  $this->load->view('gudang/editobat');  
                
                }elseif($page=='alatkesehatan'){
                  $this->load->view('gudang/alatkesehatan');  
                
                }elseif($page=='tambahalatkesehatan'){
                  $this->load->view('gudang/tambahalatkesehatan');  
                
                }elseif($page=='pegawaii'){
                  $this->load->view('gudang/pegawaii');  
                
                }elseif($page=='editalatkesehatan'){
                  $this->load->view('gudang/editalatkesehatan');  
                
                }elseif($page=='editpegawaii'){
                  $this->load->view('gudang/editpegawaii');  
                
                }else{
                    echo "<h1>Admin Dashboard</h1>";
                }
              }
                                    

               ?>
              </div>
              <div class="card-footer bg-whitesmoke">
                This is card footer
              </div>
            </div>
          </div>
        </section>
      </div>



              
              