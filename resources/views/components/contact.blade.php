
@include('components.header')
@include('components.layout')

<section class="trial-section style-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
            
                <!-- Image Column -->
                {{-- <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="color-box-one"></div>
                        <div class="color-box-two"></div>
                        <div class="icon-layer-one" style="background-image:url{{asset('assets/images/icons/pattern-10.png')}}"></div>
                        <div class="icon-layer-two" style="background-image:url{{asset('assets/images/icons/icon-3.png')}}"></div>
                        <div class="image titlt" data-tilt data-tilt-max="4">
                            <img src="{{asset('assets/images/resource/trial.png')}}" alt="" />
                        </div>
                    </div>
                </div> --}}
                
                <!-- Form Column -->
                <div class="form-column mx-auto col-8 col-md-8 col-lg-8">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="color-box"></div>
                        <h3 style="color: #2eb0f2" class="text-center">Contact Us!</h3>
                        
                        <!-- Default Form -->
                        <div class="default-form style-two">
                            @if(session()->has('message'))
                             <h3 style="color: #2eb0f2">{{session()->get('message')}}</h3>
                            @endif
                            <form method="post" action="/contact-us">
                                @csrf
                                <!-- Form Group -->
                                
                                
                                <!-- Form Group -->
                                @error('name')
                                <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                @enderror
                                <div class="form-group">
                                    <input type="text" name="name" value="" placeholder="Name" required>
                                </div>
                                
                                <!-- Form Group -->
                                @error('email')
                                <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                @enderror
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>
                                
                                <!-- Form Group -->
                                @error('message')
                                <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                @enderror
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your Personal Message"></textarea>
                                </div>
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="txt">Send now</span></button>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section> 
@include('components.footer')