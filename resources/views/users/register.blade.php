@include('components.header')


<section class="contact-page-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                
                <!-- Info Column -->
                {{-- <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="color-layer"></div>
                        <div class="pattern-layer-one" style="background-image: url(images/icons/pattern-20.png)"></div>
                        <div class="pattern-layer-two" style="background-image: url(images/icons/pattern-20.png)"></div>
                        <div class="pattern-layer-three" style="background-image: url(images/icons/arrow-4.png)"></div>
                        <div class="title">GET IN TOUCH</div>
                        <h2>Visit one of our agency <br> contact us today</h2>
                        <ul class="info-box">
                            <li>
                                <span class="icon flaticon-map"></span>
                                <strong>Address</strong>
                                56 Glassford Street Glasgow G1 1UL New York
                            </li>
                            <li>
                                <span class="icon flaticon-phone-call"></span>
                                <strong>Our Phone</strong>
                                Telephone : <a href="tel:+028577101">028577101</a><br>
                                Mobile : <a href="tel:+01781648101">01781648101</a>
                            </li>
                            <li>
                                <span class="icon flaticon-send"></span>
                                <strong>Our Email</strong>
                                Telephone : <a href="tel:+028577101">028577101</a><br>
                                Mobile : <a href="tel:+01781648101">01781648101</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                
                <!-- Form Column -->
                {{-- row justify-content-center --}}
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-four" style="background-image: url(images/icons/pattern-20.png)"></div>
                        <h3>Register Page</h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit arcu in pretium.</div> --}}
                        <!-- Contact Form -->
                        <div class="contact-form">
                           
                                
                                <form action="/store" method="post" class="form" >
                                    @csrf
                                    
                                    @error('full_name')
                                    <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                    @enderror
                                <div class="form-group">
                                    <input type="text" name="full_name" placeholder="Full Name">
                                </div>

                                    @error('email')
                                    <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                    @enderror
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                @error('password')
                                <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                @enderror
                                <div class="form-group">
                                    <input type="text" name="password" placeholder="Password">
                                </div>

                                @error('password')
                                <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                @enderror
                                <div class="form-group">
                                    <input type="text" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                
                                {{-- <div class="form-group">
                                    <textarea class="" name="message" placeholder="Comment"></textarea>
                                </div> --}}
                                
                                <div class="form-group">
                                    <button class="theme-btn btn-style-five" type="submit" style="color: white">Register</button>
                                    {{-- <button class="theme-btn btn-style-five" type="submit" name="submit-form"><span class="txt">Login</span></button> --}}
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

@include('components.layout')

@include('components.footer')