
<header class="main-header header-style-three alternate">
    
    <!-- Header Lower -->
    <div class="header-lower">
        <div class="outer-container">
            <div class="inner-container clearfix">
                
                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/images/el-logo.png')}}" alt="" title=""></a></div>
                </div>
                <!-- Language Nav -->
                <ul class="language-nav">
                    <li><a href="#">Eng</a></li>
                    <li><a href="#">Dut</a></li>
                </ul>
                
                <div class="pull-right nav-outer clearfix">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        {{-- <h3>Welcome,  {{auth()->user()->full_name}}</h3> --}}
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class=""><a href="{{route('home')}}">Home</a>
                                  
                                </li>
                                <li class=""><a href="{{route('about-us')}}">About us</a>
                                  
                                </li>
                               
                                <li class=""><a href="{{route('courses')}}">Courses</a>
                                   
                                </li>
                                <li class=""><a href="{{route('blog')}}">Blog</a>
                                  
                                </li>
                                
                                <li><a href="{{route('contact-us')}}">Contact us</a></li>
                                <li class="dropdown"><a href="#">ACTION</a>
                                    <ul>
                                        @auth
                                        {{-- <li>Hello, {{auth()->user()->full_name}}</li> --}}
                                       @if(auth()->user()->is_admin == 1)
                                       <a href="{{route('create-post')}}"c lass="">Create Post</a><br>
                                       <a href="{{route('messages')}}">See Messages</a>
                                         @endif 
                                         @endauth
                                        <li><form action="/logout" method="POST">
                                            @csrf
                    
                                        <button type="submit" class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold" style="backgroud-color: #fc9a36"> Logout</button>
                                    </form></li>
                                  
                                        {{-- @else --}}
                                        <li><a href="{{route('login')}}" class="login">Login</a></li>
                                        <li><a href="{{route('register')}}" class="register">Sign Up</a></li>
                                            {{-- @endif --}}
                                    </ul>
                                </li>
                             </ul>
                        </div>
                    </nav>
                  
                   
                    
                </div>
                
            </div>
        </div>
    </div> 
    <!--End Header Upper-->
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('home')}}"><img src="{{asset('assets/images/el-logo.png')}}" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
@include('components.layout')