
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
             

              <div class="col-lg-12 mb-4">
                <div class="card">
                  <div class="card-header">
                    <h6 class="text-uppercase mb-0">History Input Furniture</h6>
                  </div>
                  <div class="card-body" style="padding:10px; overflow:auto; width:100%; height:450px;">                           
                    <table class="table table-striped table-striped card-text" align="text-center">
                      <thead align="text-center">
                        <tr>
                           <th>No</th>
                          <th>Type Barang</th>
                          <th>Nama Barang</th>
                          <th>Asal Barang</th>
                          <th>Total Barang</th>
                          <th>Stock Tersisa</th>
                          <th>Tanggal Input</th>
                          <th>Photo</th>
                        </tr>
                        <?php  $nomer=0 ?>
                        <?php foreach($data as $u){
                          $nomer++;
                         ?>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?=$nomer?></td>
                          <td><?php echo $u->tipeBarang ?></td>
                          <td><?php echo $u->namaBarang ?></td>
                          <td><?php echo $u->asalBarang ?></td>
                          <td><?php echo $u->jumlahBarang ?></td>
                          <td><?php echo $u->stock ?></td>
                          <td><?php echo $u->tanggalInput ?></td>
                          <td><img src="<?php echo base_url('uploads/'.$u->uploadFoto.'');?>" height="50px" width="50px"></td>
                      
                        </tr>
                     </tbody>
                     <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            
            </div>
          </section>
        </div>

        
    
   