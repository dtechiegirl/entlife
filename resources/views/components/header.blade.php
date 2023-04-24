
<header class="main-header header-style-three alternate">
    
    <!-- Header Lower -->
    <div class="header-lower">
        <div class="outer-container">
            <div class="inner-container clearfix">
                
                <div class="pull-left logo-box">
                    <div class="logo"><a href="index.html"><img src="{{asset('assets/images/el-logo.png')}}" alt="" title=""></a></div>
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
                                    {{-- <ul>
                                        <li><a href="index.html">Business Motivation</a></li>
                                        <li><a href="index-2.html">Relationship Consultant</a></li>
                                        <li><a href="index-3.html">Life Coach</a></li>
                                        <li><a href="index-4.html">Business Consulting </a></li>
                                    </ul> --}}
                                </li>
                                <li class=""><a href="{{route('about-us')}}">About us</a>
                                    {{-- <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="about-2.html">About us 02</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="faq.html">Faq's</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li><a href="services.html">Services</a></li> --}}
                                <!-- <li class="dropdown"><a href="#">Events</a>
                                    <ul>
                                        <li><a href="events.html">Events</a></li>
                                        <li><a href="events-single.html">Events Single</a></li>
                                    </ul>
                                </li> -->
                                <li class=""><a href="{{route('courses')}}">Courses</a>
                                    {{-- <ul>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="courses-2.html">Courses V2</a></li>
                                        <li><a href="courses-3.html">Courses V3</a></li>
                                        <li><a href="courses-single.html">Courses Single</a></li>
                                    </ul> --}}
                                </li>
                                <li class=""><a href="{{route('blog')}}">Blog</a>
                                  
                                </li>
                                <!-- <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Details</a></li>
                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="{{route('contact-us')}}">Contact us</a></li>
                                <li class="dropdown"><a href="#">ACTION</a>
                                    <ul>
                                        @auth
                                        {{-- <li>Hello, {{auth()->user()->full_name}}</li> --}}
                                       @if(auth()->user()->is_admin == 1)
                                       <a href="{{route('create-post')}}" class="">Create Post</a><br>
                                       <a href="{{route('messages')}}">See Messages</a>
                                         @endif 
                                        
                                        <li> <form action="/logout" method="POST">
                                            @csrf
                    
                                        <button type="submit" class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold" style="backgroud-color: #fc9a36"> Logout</button>
                                    </form></li>
                                        
                                        @else
                                        <li><a href="{{route('login')}}" class="login">Login</a></li>
                                        <li><a href="{{route('register')}}" class="register">Sign Up</a></li>
                                        <a href="{{route('create-post')}}" class="">Create Post</a><br>
                                        @endauth
                                        
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
            <div class="nav-logo"><a href="index.html"><img src="{{asset('assets/images/logo-2.png')}}" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
@include('components.layout')