<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="logo-mini">
          <div class="logo-image-small">
            <img src="assets-2/img/mike.jpg" class="avatar">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="logo-normal">
          Ho Gia Bao
          <!-- <div class="logo-image-big">
            <img src="assets-2/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="dashboard">
            <a href="{{ route('Dashboardindex') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="userprofile">
            <a href="{{route('UserAdminindex')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="tables">
            <a href="{{route('Tablesindex')}}">
              <i class="nc-icon nc-tile-56"></i>
            <p>Tables</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
