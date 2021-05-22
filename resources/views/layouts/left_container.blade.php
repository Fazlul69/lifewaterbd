
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Life Water BD</span>
    </a>
<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="{{asset('images/light.jpg')}}" class="" alt="User Image"> -->
        </div>
        <div class="info">
        </div>
      </div>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
        
          <!--Reverse  -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Reverse Osmosys System
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ro.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
            </ul>
          </li>
          <!--Under Counter  -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
              Under Counter System
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('under.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Single Filter -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Single Filter System
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('single.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Accessories -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
              Accessories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('accessories.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- client -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
              Client
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('client.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
             
            </ul>
          </li>
        </ul>
      </nav>