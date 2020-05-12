
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
                  <table class="table table-bordered table-striped" id="mydata">
                      <thead>
                        <tr align="center">
                          <td>Type Barang</td>
                          <td>Nama Barang</td>
                          <td>Total Barang</td>
                          <td>Sisa Stock</td>
                          <td>Asal Barang</td>
                          <td>Tanggal Input</td>
                          <td>Foto</td>
                          <td>Edit</td>
                          <td>Delete</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                       foreach($data->result_array() as $i):

                          $id=$i['id'];
                          $tipeBarang=$i['tipeBarang'];
                          $namaBarang=$i['namaBarang'];
                          $asalBarang=$i['asalBarang'];
                          $tanggalInput=$i['tanggalInput'];
                          $jumlahBarang=$i['jumlahBarang'];
                          $stock=$i['stock'];
                          $uploadFoto=$i['uploadFoto']
                          ?>

                        <tr align="center">
                         <td><?php echo $tipeBarang ?></td>
                          <td><?php echo $namaBarang ?></td>
                          <td><?php echo $jumlahBarang ?></td>
                          <td><?php echo $stock ?></td>
                          <td><?php echo $asalBarang ?></td>
                          <td><?php echo $tanggalInput ?></td>
                          <td><img src="<?php echo base_url('uploads/'.$uploadFoto.'');?>" height="50px" width="50px"></td>
                          <td><a class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal_edit<?php echo $id;?>"> Edit</a></td>
                          <td>
                            <form action="<?php echo base_url('operasi/delete') ?>" method="post">
                               <button class="btn btn-danger" type="sumbit" name="hapus" value="<?php echo $id ?>" >Del</button>
                            </form>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                    
                  </div>


    

    <!-- ============ MODAL EDIT BARANG =============== -->
    <?php 
        foreach($data->result_array() as $i):
                          $id=$i['id'];
                          $tipeBarang=$i['tipeBarang'];
                          $namaBarang=$i['namaBarang'];
                          $tanggalInput=$i['tanggalInput'];
                          $jumlahBarang=$i['jumlahBarang'];
                          $asalBarang=$i['asalBarang'];
                          $uploadFoto=$i['uploadFoto']
        ?>
            <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
<<<<<<< HEAD
<<<<<<< HEAD
                  <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
=======
>>>>>>> 10cd265bfb8fb86d5b2731b7f3307109121be4a4
=======
>>>>>>> 10cd265bfb8fb86d5b2731b7f3307109121be4a4
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'core/newsave'?>">
                    <div class="modal-body">

                      <div class="form-group">
                            <label class="control-label col-xs-3" >Id</label>
                            <div class="col-xs-8">
                                <input name="id" value="<?php echo $id;?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Type Barang</label>
                            <div class="col-xs-8">
                                <input name="tipeBarang" value="<?php echo $tipeBarang;?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Nama Barang</label>
                            <div class="col-xs-8">
                                <input name="namaBarang" value="<?php echo $namaBarang;?>" class="form-control" type="text" placeholder="Nama Barang..." required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-xs-3" >Tanggal Input</label>
                            <div class="col-xs-8">
                                <input name="tanggalInput" value="<?php echo $tanggalInput;?>" class="form-control" type="text" placeholder="Harga..." required readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Jumlah Barang</label>
                            <div class="col-xs-8">
                                <input name="jumlahBarang" value="<?php echo $jumlahBarang;?>" class="form-control" type="text" placeholder="Harga..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Asal Barang</label>
                            <div class="col-xs-8">
                                <input name="asalBarang" value="<?php echo $asalBarang;?>" class="form-control" type="text" placeholder="Harga..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Foto</label>
                            <div class="col-xs-8" style="text-align: center;">
                                <img src="<?php echo base_url('uploads/'.$uploadFoto.'');?>" height="50px" width="50px">
                            
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info">Update</button>
                    </div>
                </form>
                </div>
                </div>
            </div>

        <?php endforeach;?>

          </div>
        </div>
      </div>
    </section>
</div>

