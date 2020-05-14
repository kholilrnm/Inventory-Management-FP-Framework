   <!-- form -->



      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
            
              <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Buat Invoice</h3>
                  </div>
                  <?= form_open_multipart('v_stock/addinvoice') ?>
                  <div class="card-body">
                    <form class="form-horizontal">
                      
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Pengantar</label>
                        <div class="col-md-9">
                          <input name="nama" type="text" placeholder="Masukan Nama" class="form-control" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Suppliers Barang</label>
                        <div class="col-md-9 select mb-3">
                          <select name="suplay" class="form-control" >
                            <option>PT. Atlas Megah</option>
                            <option>PT. Adi Nusantara</option>
                            <option>PT. Mas Giencue</option>
                            <option>PT. Sak Onok E</option>
                            <option>PT. Smart Techtex</option>
                          </select>
                        </div>
                      </div>

                     
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Email</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Email" name="email" class="form-control" required="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomer Hp</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Masukan Nomer" name="hp" class="form-control" required="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Alamat</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Masukan Alamat" name="alamat" class="form-control" required="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Barang</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Masukan Nama Barang" name="namabarang" class="form-control" required="">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Jumlah Barang</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Masukan Jumlah" name="jumlah" class="form-control" required="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="submit" class="btn btn-primary">Buat</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        
        