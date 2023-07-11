@include('components.header')
@include('layouts.app')

  <!-- Page Title Section -->
  <section class="page-title-section">
    <div class="icon-layer-one" style="background-image:url({{asset('assets/images/background/pattern-15.png')}}"></div>
    <div class="icon-layer-two" style="background-image:url({{asset('assets/images/background/pattern-16.png')}}"></div>
    <div class="icon-layer-three" style="background-image:url({{asset('assets/images/icons/icon-3.png')}}"></div>
    <div class="icon-layer-four" style="background-image:url({{asset('assets/images/icons/icon-3.png')}}"></div>
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Title Column -->
            <div class="title-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                    <h1>Blog <br> Posts.</h1>
                </div>
            </div>
            
            <!-- Image Column -->
            <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="color-layer"></div>
                    <div class="color-layer-two"></div>
                    <div class="icon-layer-five" style="background-image:url({{asset('assets/images/icons/icon-12.png')}}"></div>
                    <div class="icon-layer-six" style="background-image:url({{asset('assets/images/icons/icon-22.png')}}"></div>
                    <div class="icon-layer-seven" style="background-image:url({{asset('assets/images/icons/pattern-10.png')}}"></div>
                    <div class="icon-layer-eight" style="background-image:url({{asset('assets/images/icons/pattern-19.png')}}"></div>
                    {{-- <div class="image">
                        <img src="{{asset('assets/images/resource/page-title-2.png')}}" alt="" />
                    </div> --}}
                </div>
            </div>
            
        </div>
    
    </div>
</section>
@if(session()->has('message'))
<p style="color: green">{{session()->get('message')}}</p>
@endif
<!-- End Page Title Slider -->

<!-- Blog Page Section -->


<section class="blog-page-section">
    <div class="outer-container">
        <div class="row clearfix">
            
            <!-- News Block Three -->
            @foreach($posts as $post)
            <div class="news-block-three">
                <div class="inner-box">
                    <div class="image">
                        <a href="/blog/{{$post->slug}}"><img src="{{asset('images/' . $post->picture)}}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="author-info">
                            {{-- <span class="author-image"><img src="{{asset('assets/images/resource/author-11.jpg')}}" alt="" /></span> --}}
                             POST BY : Adedamola Balami
                            <span class="date"> Created At : {{date('jS M Y', strtotime($post->updated_at))}}</span>
                        </div>
                        {{-- <div class="category">Business</div> --}}
                        <h5>{{$post->title}}</h5>
                        <h5>{{$post->description}}</h5>
                          <p><a href="/blog/{{$post->slug}}">Read More...</p>
                            {{-- @if(auth()->user()->is_admin == 1) --}}
                            @auth
                            {{-- <li>Hello, {{auth()->user()->full_name}}</li> --}}
                           @if(auth()->user()->is_admin == 1)
                           {{-- <a href="{{route('create-post')}}" class="">Create Post</a> --}}
                           <a href="/blog/{{$post->id}}/edit">Edit Post</a>
                           <a href="/blog/{{$post->slug}}/delete">Delete Post</a>
                             @endif 
                             @endauth
                   
                    {{-- @endif --}}
                        {{-- <p><a href="/blog/{{$post->slug}}">Read More></p> --}}

                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Post Share Options -->
        {{-- <div class="styled-pagination text-center">
            <ul class="clearfix">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-double-right"></span> </a></li>
            </ul>
        </div> --}}
        
    </div>
</section>




@include('components.footer')