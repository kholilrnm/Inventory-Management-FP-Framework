
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
             

              <div class="col-lg-12 mb-4">
                <div class="card">
                  <div class="card-header">
                    <h6 class="text-uppercase mb-0">History Barang Diambil</h6>
                  </div>
                  <div class="card-body" style="padding:10px; overflow:auto; width:100%; height:450px;">                           
                  <table class="table table-bordered table-striped" id="mydata">
                      <thead>
                        <tr align="center">
                          <td>Type Barang</td>
                          <td>Nama Barang</td>
                          <td>Total Barang </td>
                          <td>Barang Diambil</td>
                          <td>Tanggal Diambil</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                       foreach($data->result_array() as $i):

                          $id=$i['id'];
                          $tipeBarang=$i['tipeBarang'];
                          $namaBarang=$i['namaBarang'];
                          $tanggalInput=$i['tanggalInput'];
                          $jumlahBarang=$i['jumlahBarang'];
                          $stock=$i['stock'];
                          ?>

                        <tr align="center">
                         <td><?php echo $tipeBarang ?></td>
                          <td><?php echo $namaBarang ?></td>
                          <td><?php echo $jumlahBarang ?></td>
                          <td><?php echo $stock ?></td>
                          <td><?php echo $tanggalInput ?></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                    
                  </div>


    

