 @include('components.header')
@include('components.layout')

  <!-- Page Title Section -->

<!-- End Page Title Slider -->

<!-- Blog Page Section -->


<h1></h1>

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
            <div class="content-side right-sidebar col-lg-12 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="inner-box">
                        {{-- <div class="title">Business Motivation</div> --}}
                        <h2>TITLE: {{$post->title}} </h2>
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="author-info">
                                    <div class="author-image">
                                        <img src="images/resource/author-8.jpg" alt="" />
                                    </div>
                                    <strong>Post By: Adedamola Balami</strong>
                                    {{date('jS M Y', strtotime($post->updated_at))}}
                                </div>
                            </div>
                            <div class="pull-right">
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="twitter"><a target="_blank" href="http://twitter.com/" class="fa fa-twitter"></a></li>
                                    <li class="pinterest"><a target="_blank" href="http://pinterest.com/" class="fa fa-pinterest-p"></a></li>
                                    <li class="facebook"><a target="_blank" href="http://facebook.com/" class="fa fa-facebook-f"></a></li>
                                    <li class="dribbble"><a target="_blank" href="http://dribbble.com/" class="fa fa-dribbble"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blockquote-box">
                            <div class="row clearfix">
                                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="images/resource/news-22.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="blockquote-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-column">
                                        <span class="quote-icon"><img src="images/icons/quote-icon-1.png" alt="" /></span>
                                        {{-- <p>Why is culture so important to a business? Here is a simple way to frame it. The stronger the culture, the less corporate process a company needs. When the culture is strong, you can trust everyone to do the right thing.”</p> --}}
                                        <p>Description: {{$post->description}}</p>
                                        <span class="quote-icon-two"><img src="images/icons/quote-icon-2.png" alt="" /></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="bold-text">{{$post->description}}</div> --}}
                        <div class="bold-text">{{$post->content}}</h4>
                        {{-- <p>otam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,</p> --}}
                        
                        {{-- <ul class="numbering-list">
                            <li>1. Create activities: Creating challenges for your employees will motivate them to demonstrate their skills. You can also offer a small reward for the winners, such as a gift card or a dinner voucher. Consider gift ideas to surprise your employees.</li>
                            <li>2. Outdoor day: organize a team building day for your employees where their families can join. Whether it’s a picnic day in the suburbs, a day at the pool or a sports day. This will make stronger working relationships outside of work and create that unique bond. Give your employees a breath of fresh air.</li>
                            <li>3. Employee climate survey: Carry out surveys every two months based on your work environment.</li>
                        </ul>
                        <p>It is important to project appreciation and respect and to treat others the way you want to be treated. Manage a humble leadership, </p>
                        <p>Without discrediting or enlarging yourselves, but on the contrary, rejoice the achievements of your colleagues. Respect, self-respect, and love others must be cultivated within the organization. Remember: “we reap what we sow</p>
                        <p>organize a team building day for your employees where their families can join. Whether it’s a picnic day in the suburbs, a day at the pool or a sports day. This will make stronger working relationships outside of work and create that unique bond. Give your employees a breath of fresh air.</p>
                        <!-- Post Share Options-->
                        <div class="post-share-options">
                            <ul class="tags">
                                <li><span class="icon fa fa-tag"></span></li>
                                <li><a href="#">Motivation</a></li>
                                <li><a href="#">Course</a></li>
                                <li><a href="#">Business </a></li>
                            </ul>
                        </div>
                        
                        <!-- Related Projects -->
                        <div class="related-projects">
                            <div class="three-item-carousel owl-carousel owl-theme">
                                
                                <!-- News Block Five -->
                                <div class="news-block-five">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/news-23.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <h6><a href="#">Should all consultants bill in the same way?</a></h6>
                                            <div class="text">Keeping on top of bills is an essential part of your day to day life as a consultant</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- News Block Five -->
                                <div class="news-block-five">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/news-24.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <h6><a href="#">How defining a niche can help you land new clients?</a></h6>
                                            <div class="text">Keeping on top of bills is an essential part of your day to day life as a consultant</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- News Block Five -->
                                <div class="news-block-five">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/news-25.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <h6><a href="#">Should you pay someone to do something already do?</a></h6>
                                            <div class="text">Keeping on top of bills is an essential part of your day to day life as a consultant</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- News Block Five -->
                                <div class="news-block-five">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/news-23.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <h6><a href="#">Should all consultants bill in the same way?</a></h6>
                                            <div class="text">Keeping on top of bills is an essential part of your day to day life as a consultant</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- News Block Five -->
                                <div class="news-block-five">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/news-24.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <h6><a href="#">How defining a niche can help you land new clients?</a></h6>
                                            <div class="text">Keeping on top of bills is an essential part of your day to day life as a consultant</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- News Block Five -->
                                <div class="news-block-five">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/news-25.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <h6><a href="#">Should you pay someone to do something already do?</a></h6>
                                            <div class="text">Keeping on top of bills is an essential part of your day to day life as a consultant</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div> --}}
                        
                        <!-- Comment Form -->
                        <div class="comment-form">
									
                            <div class="group-title"><h4>Leave A Comment</h4></div>
                            
                            <!--Comment Form-->
                            <form method="post" action="blog.html">
                                <div class="row clearfix">
                                
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="topic" placeholder="Topic" required="">
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="" name="message" placeholder="Type your comment"></textarea>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Save my name, email, and website in this browser for the next time I comment.</label></div>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Post comment</span></button>
                                    </div>
                                </div>
                            </form>
                                
                        </div>
                        
                        
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