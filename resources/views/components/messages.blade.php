@include('components.header')
@include('components.layout')

  <!-- Page Title Section -->

<!-- End Page Title Slider -->

<!-- Blog Page Section -->




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
                    <h1>Blog<br> Page.</h1>
                </div>
            </div>
            
            <!-- Image Column -->
            <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="color-layer"></div>
                    <div class="color-layer-two"></div>
                    <div class="color-layer-two"></div>
                    <div class="icon-layer-five" style="background-image:url({{asset('assets/images/icons/icon-12.png')}}"></div>
                    <div class="icon-layer-six" style="background-image:url({{asset('assets/images/icons/icon-22.png')}}"></div>
                    <div class="icon-layer-seven" style="background-image:url({{asset('assets/images/icons/pattern-10.png')}}"></div>
                    <div class="icon-layer-eight" style="background-image:url({{asset('assets/images/icons/pattern-19.png')}}"></div>
                    {{-- <div class="image">
                        <img src="images/resource/page-title-2.png" alt="" />
                    </div> --}}
                </div>
            </div>
            
        </div>
    
    </div>
</section>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Sidebar Side -->
           
            
            <!-- Content Side -->
         
                     
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Sent At</th>
                                    <th scope="col">Messages</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td> {{date('jS M Y', strtotime($contact->created_at))}}</td>
                                    <td>{{$contact->message}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- End Blog Page Section -->

<!-- Newsletter Section Two -->

<!-- End Newsletter Section Two -->
@include('components.footer')

