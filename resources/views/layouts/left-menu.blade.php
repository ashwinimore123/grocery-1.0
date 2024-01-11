<!--admin panel left menu links using user role  nav menu-tabs -->

<div class="main-sidebar main-sidebar-sticky side-menu ps ps--active-y">
    <div class="sidemenu-logo">
        <a class="main-logo" href="{{config('app.baseURL')}}/lead">
            Assesment
        </a>
    </div>
        <div class="main-sidebar-body">
          <ul class="nav">
           
            <li class="nav-item">
                <a class="nav-link" href="{{config('app.baseURL')}}/admin/user/all"><i
                        class="fas fa-lg fa-street-view"></i><span class="sidemenu-label">Users</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{config('app.baseURL')}}/admin/role/all"><i
                        class="fas fa-lg fa-user-friends"></i><span class="sidemenu-label">Role</span></a>
            </li>

               <li class="nav-sub-item">
                        <a class="nav-link" href="{{config('app.baseURL')}}/source"><i
                                class="fas fa-lg fa-globe"></i><span class="sidemenu-label">Lead Source</span></a>
                    </li>
                    
                    <li class="nav-sub-item">
                        <a class="nav-link" href="{{config('app.baseURL')}}/calling"><i class='fas fa-phone'></i><span
                                class="sidemenu-label">Lead Calling</span></a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-link" href="{{config('app.baseURL')}}/stage"><i class="fe fe-database"></i><span
                                class="sidemenu-label">Lead Stage</span></a>
                    </li>
           
              
         </div></div>
