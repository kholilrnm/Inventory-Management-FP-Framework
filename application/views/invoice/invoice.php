<!DOCTYPE html>
 <head>
  <style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:auto;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
  
  </style>
 </head>
 
 <body>
  <div id="wrapshopcart" id="printableArea">
   <h1>Invoice </h1>
   <p>Silahkan save halaman ini ... </p>
   <?php  
   foreach($data->result_array() as $i):

                          $id=$i['id'];
                          $namapengantar=$i['namapengantar'];
                          $suppliers=$i['suppliers'];
                          $email=$i['email'];
                          $hp=$i['hp'];
                          $alamat=$i['alamat'];
                          $namabarang=$i['namabarang'];
                          $jumlahbarang=$i['jumlahbarang']
                         
    ?>

   <h3>Berikut adalah data lengkap Anda : </h3>
   <label>Nama : <?php echo $namapengantar ?>  </label><br />
   <label>Email        : <?php echo $email ?> </label><br />
   <label>No HP        :<?php echo $hp ?> </label><br />
   <label>Alamat       :<?php echo $alamat ?></label><br />
   
   <h3>Produk Yang Anda Beli : </h3>
   <table>
    <tr><th width="70%">Nama Barang</th><th width="10%">Jumlah</th><th width="20%">Asal</th></tr>
    

     <tr><td><?php echo $namabarang ?></td><td><?php echo $jumlahbarang ?></td><td><?php echo $suppliers ?></td></tr>
    
    <tr class="total"><td></td><td >Total</td><td><?php echo $jumlahbarang ?> </td></tr>
   </table>   
   
    <H5>Silahkan Print Halaman Ini tekan (ctrl + p) </H5>
   <a href="<?= base_url();?>core/dashboard"><p>Kembali</p></a>
    <?php endforeach;?>
   
  </div>

 </body>

 <script>

</script>
</html>
