@include('components.header')
@include('components.layout')
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
 	
    <!-- Main Header -->
   
    <!-- End Main Header -->
	
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
							<li><a href="{{route('home')}}">Home</a></li>
							<li>Blog Post</li>
						</ul>
						<h1>Edit Blog<br>Post.</h1>
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
    <!-- End Page Title Slider -->
	
	<!-- Contact Page Section -->
	
    <section class="contact-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
				
					@if($errors->any())
					@foreach($errors->all() as $error)
					{{$error}}
					@endforeach
					@endif
					<!-- Form Column -->
					<div class="form-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="pattern-layer-four" style="background-image: url(images/icons/pattern-20.png)"></div>
							<h3>Edit Blog Post</h3>
							{{-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit arcu in pretium.</div> --}}
							<!-- Contact Form -->

							<div class="contact-form">
								<form method="post" action="/blog/{{$post->id}}" enctype ="multipart/form-data" id="contact-form">
									@csrf
                                    @method('PUT')
									<div class="form-group">
										<input type="text" name="title" value="{{$post->title}}">
									</div>
									
									<div class="form-group">
										<input type="text" name="description" value="{{$post->description}}">
									</div>
									
									<div class="form-group">
										{{-- <input type="file" name= "picture" > --}}
										<span>Select a picture for post {{$post->picture}}</span> <br>
										<input type="file" class="hidden" name="picture" value="{{$post->picture}}">
									</div>
									
									<div class="form-group">
										<textarea class="" name="content" >{{$post->content}}</textarea>
									</div>
									
									<div class="form-group">
										<button class="theme-btn btn-style-five" type="submit" ><span class="txt">Edit Post</span></button>
									</div>
									
								</form>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	
	<!-- Map Contact Section -->
	
	<!-- End Map Contact Section -->
	
	
<!-- End Header Search -->

<!-- Scroll To Top -->
{{-- <div class="scroll-to-tops scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div> --}}

@include('components.footer')