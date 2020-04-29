
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="<?= base_url();?>core/dashboard" 
                class="<?php if($title == 'Dashboard Admin'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
<!--               <li class="sidebar-list-item"><a href="charts.html" class="sidebar-link text-muted"><i class="o-sales-up-1 mr-3 text-gray"></i><span>Charts</span></a></li> -->

                 <li class="sidebar-list-item"><a href="<?= base_url();?>core/data_input" class="<?php if($title == 'Data Input'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Input Stock</span></a></li>

              <li class="sidebar-list-item"><a href="<?= base_url();?>core/history" class="<?php if($title == 'Stock Items'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-table-content-1 mr-3 text-gray"></i><span>History Input</span></a></li>

              <li class="sidebar-list-item"><a href="<?= base_url();?>core/stock" class="<?php if($title == 'Stock Furniture'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-database-1 mr-3 text-gray"></i><span>Stock Furniture</span></a></li>

              <li class="sidebar-list-item"><a href="<?= base_url();?>core/editstock" class="<?php if($title == 'Edit Stock'){echo 'sidebar-link text-muted active';} else{echo 'sidebar-link text-muted';} ?>"><i class="o-survey-1 mr-3 text-gray"></i><span> Edit Stock</span></a></li>


             <!--  <li class="sidebar-list-item"><a href="<?= base_url();?>core/stock" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Edit Stock</span></a></li> -->
         <!--  <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Pages</span></a>
            <div id="pages" class="collapse">
              <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5"><?php  $title; ?>Page one</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page two</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page three</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page four</a></li>
              </ul>
            </div> -->
          </li>
              <li class="sidebar-list-item"><a href="login.html" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Lain Lain</span></a></li>
        </ul>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">EXTRAS</div>
        <!-- <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-database-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Demo</span></a></li>
        </ul> -->
      </div>