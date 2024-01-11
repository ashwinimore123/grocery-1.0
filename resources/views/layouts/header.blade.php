<style type="text/css">
.main-header {
    position: fixed;
    height: 54px;
    /*background-color: #ffba57;*/
}
.main-img-user {

    top: 7px;
}
.main-header-left{
  position: relative;
    left: 16%;
}

 @media (max-width: 576px) {

.main-header>.container, .main-header>.container-fluid {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 2px;
    padding-right: 66px;
}
}
</style>
<div class="main-header side-header sticky sticky-pin" style="margin-bottom: -64px;">
          <div class="container-fluid">
            <div class="main-header-left">
              <a class="main-logo d-lg-none" href="index.html">
              </a>
              <a class="main-header-menu-icon" href=""><span></span></a>
            </div>
            <div class="main-header-right">
              <div class="dropdown main-profile-menu">
                <a class="main-img-user" href=""><h6 style="margin-left: -30px;">{{Auth::user()->name}} </h6></a>
                <div class="dropdown-menu">
                  <div class="header-navheading">
                    
                  </div>
                  <a class="dropdown-item border-top" href="{{config('app.baseURL')}}/profile">
                    <i class="fe fe-user"></i> My Profile
                  </a>
                  <a class="dropdown-item" href="">
                    <i class="fe fe-edit"></i> Edit Profile
                  </a>
                  <a class="dropdown-item" href="{{config('app.baseURL')}}/logout">
                    <i class="fe fe-power"></i> Sign Out
                  </a>
                </div>
              </div>
              <div class="dropdown d-md-flex header-settings">
                <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                </a>
              </div>
            </div>
          </div>
        </div>