
 @guest
       @if (Route::has('register')) 
          @endif   
          @else
<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">


                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>

                             <li class="nav-item ">
                                <a class="nav-link active" href="{{url('/')}}" data-toggle=" " aria-expanded="false" data-target=" " aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Home  </a>
                                 
                            </li>



                              
                            
                                 <li class="nav-item ">
                                <a class="nav-link active" href="{{url('/admin')}}" data-toggle=" " aria-expanded="false" data-target=" " aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                                 
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                         

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/#')}}">Form Name</a>
                                        </li>
                                          

                                    </ul>
                                </div>
                            </li>

                            
    
                                <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                          <li class="nav-item">
                                            <a class="nav-link" href="{{url('/Aparcel')}}">Parcel</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/Adriver')}}">Driver</a>
                                        </li>


                                        

                                         

                                    </ul>
                                </div>
                            </li>
                          
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div> @endguest
        