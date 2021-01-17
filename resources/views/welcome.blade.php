
<!DOCTYPE html>
<html>
    <head>
         <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       @include('links.front_css')
       <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCi82DDWkY-_hwoBcUp84sIcnP8pUx8lLc&callback=initMap&libraries=places&v=weekly"
  defer
></script> 
        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
        <style>
            .rat {
    width: 135px;
    unicode-bidi: bidi-override;
    direction: rtl;
    text-align: center;
    position: relative;
}
.rat input {
    padding: 20px;
    background: #f7f8fa 0% 0% no-repeat padding-box;
    font-size: 16px;
    color: #4e4e4e;
    margin-bottom: 30px;
    border-radius: 5px;
}
input[type=radio] {
    background-color: #fff;
    border: 1px solid #d4d4d4;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    height: 16px;
    width: 16px;
    position: relative;
    outline: none;
    vertical-align: middle;
    margin-right: 5px;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
}
.rat > label {
    display: inline;
    padding: 0;
    margin: 0;
    position: relative;
    width: 1em;
    cursor: pointer;
    color: #000;
    font-size: 25px;
}
        </style>
    </head>
    <body id="home">
        <!-- Preloader -->
        
        <!-- /.Preloader -->  


        <!-- Main Wrapper -->        
        <main class="wrapper">


            <!-- Header -->
            

            @include('front.pages.header')
            <!-- /.Header -->

            <!-- Content Wrapper -->
            
            @yield('content')

            <!-- /.Content Wrapper -->

            <!-- Footer -->
              @include('front.pages.footer')
            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong> DSP </strong> for getting all details </p>                        


                        <div class="login-form clrbg-before">

                             <form action="{{route('clientlogin')}}" method="post"  enctype="multipart/form-data" class="login" data-parsley-validate="">
                             {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" placeholder="Mobile No" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign in now </button>
                                </div>

                                 @if (Session('userchklogin')!='0')
                                  <p>
                                      {{Session::get('userchklogin')}}
                                      </p>
                                
                                @endif
                            </form>
                             


                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Don’t have an account? </a>  
                        <h2 class="title-2"> <a href="{{url('/clientregister')}}" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->




       @include('links.front_js') 
       @yield('script')
    </body>
</html>
