
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
             
           
              <div class="col-lg-12 mb-4">
                <div class="card">
                  <div class="card-header">
                    <h6 class="text-uppercase mb-0">Stock Kursi 
                      <a href="../core/stock"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Back</button></a></h6>
                    
                  </div>
                  <div class="card-body" style="padding:10px; overflow:auto; width:100%; height:400px;">  
                                         
                     <table class="table table-bordered table-striped" id="mydata">
                      <thead>
                        <tr align="center">
                          <td>Nama Barang</td>
                          <td>Asal Barang</td>
                          <td>Total Barang</td>
                          <td>Sisa Stock</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                       foreach($data->result_array() as $i):

                          $id=$i['id'];

                          $namaBarang=$i['namaBarang'];
                          $asalBarang=$i['asalBarang'];
                          $jumlahBarang=$i['jumlahBarang'];
                          $stock=$i['stock'];
                          ?>

                        <tr align="center">
                          <td><?php echo $namaBarang ?></td>
                          <td><?php echo $asalBarang ?></td>
                          <td style="background: blue"><?php echo $jumlahBarang ?></td>
                          <td style="background: red"><?php echo $stock ?></td>
                          
                        
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                    
                  </div>