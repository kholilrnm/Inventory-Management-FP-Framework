   <!-- form -->



      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
            
              <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Input Barang Gudang</h3>
                  </div>
                  <?= form_open_multipart('operasi/add') ?>
                  <div class="card-body">
                    <form class="form-horizontal">
                       <div class="form-group row">
                          <label class="col-md-3 form-control-label">ID Bulan</label>
                          <div class="col-md-9">
                          <input readonly="" name="bulan" value="<?php echo date("m")  ?> " class="form-control">
                       </div>
                       </div>
                      
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Type Barang</label>
                        <div class="col-md-9 select mb-3">
                          <select name="type" class="form-control" >
                            <option>Meja</option>
                            <option>Kursi</option>
                            <option>Lemari</option>
                            <option>Kitchen Set</option>
                            <option>Pintu</option>
                            <option>Tempat Tidur</option>
                            <option>Triplek</option>
                            <option>Rak Buku</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Barang</label>
                        <div class="col-md-9">
                          <input name="nama" type="text" placeholder="Masukan Nama" class="form-control" required="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Suppliers Barang</label>
                        <div class="col-md-9 select mb-3">
                          <select name="asal" class="form-control" >
                            <option>PT. Atlas Megah</option>
                            <option>PT. Adi Nusantara</option>
                            <option>PT. Mas Giencue</option>
                            <option>PT. Sak Onok E</option>
                            <option>PT. Smart Techtex</option>
                          </select>
                        </div>
                      </div>

                     
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Jumlah Barang</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Masukan Jumlah" name="jumlah" class="form-control" required="">
                        </div>
                      </div>
                      <div class="form-group row r" >
                        <label class="col-md-3 form-control-label">Tanggal Input</label>
                        <div class="col-md-9">
                          <input readonly="" name="tanggal" value="<?php echo date("Y/m/d")  ?> " class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Upload Foto</label>
                        <div class="col-md-9">
                          <?= form_upload("uploadFoto", set_value("uploadFoto"), "class='form-control'", "required=''") ?>
                        </div>
                      </div>



                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        