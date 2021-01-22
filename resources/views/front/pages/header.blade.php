 <header class="header-main">

                <!-- Header Topbar -->
                <div class="top-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                
                                <ul class="list-items fs-10">

                                @if (session('userchklogin')!=0)
                                    <li>
                                        <a href="{{url('/userprofile')}}">Profile</a>
                                    </li>
                                @endif

                                @if (session('driverchklogin')!=0)
                                    <li>
                                        <a href="{{url('/driverprofile')}}">Profile</a>
                                    </li>
                                @endif

                                    <!--
                                    <li class="active"><a href="#">Privacy</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    -->

                                </ul>
                                     
                            </div>
                            <div class="col-md-6 col-sm-7 fs-12">
                                <p class="contact-num">  <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> +880-1624-213-417 </span> </p>
                            </div>
                        </div>
                    </div>

 @if (session('userchklogin')==0)
                    
                            <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav ">

                                        <li class="dropdown sign-in fs-12 theme-clr-bg">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sign in </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{url('/clientloginpage')}}">User</a></li>
                                                <li><a href="{{url('/driverloginpage')}}">Rider</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                            </div>



@endif


@if (session('userchklogin')!=0)
 <a data-toggle="" href="{{url('/clientlogout')}}" class="sign-in fs-12 theme-clr-bg"> Logout </a>
@endif

@if (session('driverchklogin')!=0)
 <a data-toggle="" href="{{url('/driverlogout')}}" class="sign-in fs-12 theme-clr-bg"> Logout </a>
@endif

                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-logo" href="#"> <img src="{{URL::to('front/assets/img/logo/logo2.jpg')}}" alt="logo" /> </a>
                            </div>
                            <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">

                                         <li class="active"> <a href="{{url('/')}}">Home</a> </li>

                                        

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Services </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{url('/bike')}}">Bike</a></li>
                                                 <li><a href="{{url('/car')}}">Car</a></li>
                                               

                                            </ul>
                                        </li>



                                       
                                        
                                       
                                        <li> <a href="{{url('/contact')}}"> contact </a> </li>
                                         
                                         @if(Session::has('driverchklogin'))
                                         <li> <a href="{{url('/bike/pending')}}"> Pending Rides ({{\DB::select('select count(*) as count from bike_trips where status=0 and bike_id=(select id from drivers where mobile_number="'.Session::get('driverchklogin').'")')[0]->count}}) </a> </li> 
                                         @endif
                                        <li><span class=""> </span></li>
                                    </ul>                                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>