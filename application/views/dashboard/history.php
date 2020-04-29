
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
             

              <div class="col-lg-12 mb-4">
                <div class="card">
                  <div class="card-header">
                    <h6 class="text-uppercase mb-0">History Input Furniture</h6>
                  </div>
                  <div class="card-body">                           
                    <table class="table table-striped table-hover card-text">
                      <thead align="text-center">
                        <tr>
                        
                          <th>Type Barang</th>
                          <th>Nama Barang</th>
                          <th>Asal Barang</th>
                          <th>Jumlah Barang</th>
                          <th>Tanggal Input</th>
                          <th>Photo</th>
                        </tr>
                        <?php foreach($data as $u){ ?>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $u->tipeBarang ?></td>
                          <td><?php echo $u->namaBarang ?></td>
                          <td><?php echo $u->asalBarang ?></td>
                          <td><?php echo $u->jumlahBarang ?></td>
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
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Your company &copy; 2018-2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>


   