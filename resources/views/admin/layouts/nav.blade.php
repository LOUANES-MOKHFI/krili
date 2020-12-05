 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/images/'.getsetting()->logo)}}" alt="{{getsetting()->site_name}}" class="brand-image img-circle elevation-7"
           style="opacity: .9">
      <span class="brand-text font-weight-light">{{getsetting()->site_name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{url('/admin')}}" class="nav-link active">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Accueil</p>
                </a>
              </li>
              @if(Auth::user()->id == 1)
              <li class="nav-item">
                <a href="{{url('/admin/sitesetting')}}" class="nav-link active">
                  <i class="fas fa-tachometer-alt"></i>
                  <p>  Parametres de site</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/admin/wilaya')}}" class="nav-link active">
                  <i class="fa fa-map-marker"></i>
                  <p>  Wilaya</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/admin/agence')}}" class="nav-link active">
                  <i class="fas fa-car"></i>
                  <p>  Agences</p>
                </a>
              </li>
              @endif
               @if(Auth::user()->type_agence == 'LOCATION DES VEHICULES' || Auth::user()->id == 1)
              <li class="nav-item">
                <a href="{{url('/admin/category')}}" class="nav-link active">
                  <i class="fas fa-car"></i>
                  <p>  Categories des vehicules</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/admin/cars')}}" class="nav-link active">
                  <i class="fas fa-car"></i>
                  <p>  vehicules</p>
                </a>
              </li>
              @endif
               @if(Auth::user()->type_agence == 'LOCATION DES APPARTEMENTS' || Auth::user()->id == 1 )
              <li class="nav-item">
                <a href="{{url('/admin/appartements')}}" class="nav-link active">
                  <i class="fa fa-bank"></i>
                  <p>  Appartements</p>
                </a>
              </li>
              @endif
          
        </ul>
      </nav>
    </div>
  </aside>
