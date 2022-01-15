<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single Post</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"  crossorigin="anonymous"/>

	<link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu text-right">
							<ul>
                                @auth
                                <li class="current-list-item"><a href="{{route('home')}}">Home</a>
									
								</li>
								<li>
									<a href="{{url('save-post-form')}}">Add Post</a>
								</li>
								<li>
									<a href="{{url('manage-posts')}}">Manage Posts</a>
								</li>
								<li>
									<a href="{{url('all-categories')}}">Categories</a>
								</li>
									
								</li>

								<li>
									<a href="{{route('logout')}}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">Logout</a>
									 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>
                               
								
                                @endauth

                                @guest
                                <li class="current-list-item"><a href="{{route('home')}}">Home</a>
									
								</li>
								<li><a href="about.html">About</a></li>
									
								</li>
									
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="shop.html">Shop</a>
									
								</li>
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                                @endguest
                               
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Read the Details</p>
						<h1>Single Article</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	
	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 ">
                    @if(Session::has('success'))
					  <p class="text-success">{{session('success')}}</p>
				    @endif
                    <h5 class="card-header">
						{{$post->title}}
					<div class="float-right"><span class="  badge badge-success">{{$post->views}} </span>  <span class=" fa fa-eye"> </span></div>
					</h5>
					<div class="single-article-section">
						<div class="single-article-text">
							<div  class="single-artcile-bg mb-5"><img src="{{asset('imgs/full/'.$post->full_img)}}" alt="" ></div>
							<p class="blog-meta">
								@if ($post->user)
								<span class="author"><i class="fas fa-user"></i>{{$post->user->name}}</span>

								@else
								<span class="author"><i class="fas fa-user"></i>Admin</span>

								@endif
								<span class="date"><i class="fas fa-calendar"></i>{{$post->created_at->diffForHumans()}}</span>
							</p>
							<h2>{!! $post->title !!}</h2>
                            <p>{!! $post->detail !!}</p>
							
						</div>
                        <div style="margin-right: -400px;">
                            <div class="comments-list-wrap ">
                                {{-- <h3 class="comment-count-title">3 Comments</h3> --}}
                                <h5 class="card-header text-center">Total Comments: <span class="badge badge-dark">{{count($post->comments)}}</span></h5>
    
                                <div class="comment-list">
                                    <div class="single-comment-body">
                                        <div class="comment-user-avater">
                                            <img src="assets/img/avaters/avatar1.png" alt="">
                                        </div>
                                        @foreach ($post->comments as  $comment)
                                            <div class="comment-text-body">
                                                <h4>{{$comment->user->name}}<span class="comment-date">{{$comment->created_at->diffForHumans()}}</span> <a href="#">reply</a></h4>
                                                <p class=" ">{{$comment->comment}}</p>
                                            </div>
                                        @endforeach
                                        
                                        {{-- <div class="single-comment-body child">
                                            <div class="comment-user-avater">
                                                <img src="assets/img/avaters/avatar3.png" alt="">
                                            </div>
                                            <div class="comment-text-body">
                                                <h4>Simon Soe <span class="comment-date">Aprl 27, 2020</span> <a href="#">reply</a></h4>
                                                <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
                                            </div>
                                        </div> --}}
                                    </div>
                                    
                                </div>
                            </div>
    
                            @auth
                                <div class="comment-template ">
                                    <h4>Leave a comment</h4>
                                    <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                                    <form method="post" action="{{url('save-comment/'.Str::slug($post->title).'/'.$post->id)}}">
                                        @csrf
                                        
                                        <p><textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your Message"></textarea></p>
                                        <p><input type="submit" value="Submit"></p>
                                    </form>
                                </div>
                                
                            @endauth

                        </div>

						

						
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Recent Posts</h4>
							<ul>
                                @foreach ($recent_post as $recent )
                                 <li><a href="{{route('single.post',$recent->id)}}">{{$recent->title}}</a></li>

                                @endforeach
								
							</ul>
						</div>
						<div class="archive-posts">
							<h4>Popular Posts</h4>
							<ul>
                                @foreach ($popular_posts as $popular )
                                <li><a  href="{{route('single.post',$popular->id)}}">{{$popular->title}}</a> <span class="badge badge-success float-right">{{$popular->views}}</span></li>

                                @endforeach
								
							</ul>
						</div>
						<div class="tag-section">
							<h4>Previous Post</h4>
							<ul>
								@if ($previous_post)
                                <a href="{{route('single.post',$previous_post->id)}}">
                                    <span>Previous</span>{{$previous_post->title}}
                                </a>
                                    
                                @endif
								
							</ul>
                            <h4>Next Post</h4>
							<ul>
								@if ($next_post)
                                <a href="{{route('single.post',$next_post->id)}}">
                                    <span>Next</span>{{$next_post->title}}
                                </a>
                                    
                                @endif
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single article section -->

	
	<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2021 - <a target="_blank" href="http://sajedulcu43.ezyro.com/">Sajedul Islam</a>,  All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->


	
<script src="{{asset('frontend/assets/js/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- count down -->
<script src="{{asset('frontend/assets/js/jquery.countdown.js')}}"></script>
<!-- isotope -->
<script src="{{asset('frontend/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
<!-- waypoints -->
<script src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- mean menu -->
<script src="{{asset('frontend/assets/js/jquery.meanmenu.min.js')}}"></script>
<!-- sticker js -->
<script src="{{asset('frontend/assets/js/sticker.js')}}"></script>
<!-- main js -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>
</html>