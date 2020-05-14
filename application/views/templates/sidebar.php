
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-black-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold large headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="<?= base_url();?>core/dashboard" 
                class="<?php if($title == 'Dashboard Admin'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-home-1 mr-3 text-gray"></i><span>&nbsp;&nbsp;Home</span></a></li>
<!--               <li class="sidebar-list-item"><a href="charts.html" class="sidebar-link text-muted"><i class="o-sales-up-1 mr-3 text-gray"></i><span>Charts</span></a></li> -->

              <li class="sidebar-list-item"><a href="<?= base_url();?>core/data_input" class="<?php if($title == 'Data Input'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-paperwork-1 mr-3 text-gray"></i><span>&nbsp;&nbsp;Input Stock</span></a></li>

              <li class="sidebar-list-item"><a href="<?= base_url();?>core/editstock" class="<?php if($title == 'Edit Stock'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-survey-1 mr-3 text-gray"></i><span>&nbsp;&nbsp;&nbsp;Edit Stock</span></a></li>
              <li class="sidebar-list-item"><a href="<?= base_url();?>core/barangkeluar" class="<?php if($title == 'Barang Keluar'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-exit-1 mr-3 text-gray"></i><span>&nbsp;&nbsp;Out Stock</span></a></li>


              <li class="sidebar-list-item"><a href="<?= base_url();?>core/history" class="<?php if($title == 'Stock Items'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-table-content-1 mr-3 text-gray"></i><span>&nbsp;&nbsp;History Input</span></a></li>

              <li class="sidebar-list-item"><a href="<?= base_url();?>core/stock" class="<?php if($title == 'Stock Furniture'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-database-1 mr-3 text-gray"></i><span>&nbsp;&nbsp;&nbsp;Stock Furniture</span></a></li>

              <li class="sidebar-list-item"><a href="<?= base_url();?>core/suppliers" class="<?php if($title == 'Suppliers'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-wireframe-1 mr-3 text-gray"></i><span>&nbsp;&nbsp;Suppliers</span></a></li>

 
         <!--  <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Pages</span></a> -->

          <!-- </li>
              <li class="sidebar-list-item"><a href="login.html" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Barang Keluar</span></a></li> -->
        </ul>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family"><a href="<?= base_url();?>v_stock/invoice">Buat Invoice</a></div>
        <!-- <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-database-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Demo</span></a></li>
        </ul> -->
      </div>