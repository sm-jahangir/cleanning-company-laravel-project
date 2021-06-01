	<div class="wrap">
	    <div class="container">
	        <div class="row justify-content-between">
	            <div class="col-12 col-md d-flex align-items-center">
	                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span
	                        class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
	            </div>
	            <div class="col-12 col-md d-flex justify-content-md-end">
	                <div class="social-media">
	                    <p class="mb-0 d-flex">
	                        <a href="#" class="d-flex align-items-center justify-content-center"><span
	                                class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
	                        <a href="#" class="d-flex align-items-center justify-content-center"><span
	                                class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
	                        <a href="#" class="d-flex align-items-center justify-content-center"><span
	                                class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
	                        <a href="#" class="d-flex align-items-center justify-content-center"><span
	                                class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	        <a class="navbar-brand" href="{{url('/')}}">Cleaning<span>company</span></a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
	            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="fa fa-bars"></span> Menu
	        </button>
	        <div class="collapse navbar-collapse" id="ftco-nav">
	            <ul class="navbar-nav ml-auto">
	                <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
	                <li class="nav-item"><a href="{{route('about.page')}}" class="nav-link">About</a></li>
	                <li class="nav-item"><a href="{{route('services.page')}}" class="nav-link">Services</a></li>
	                <li class="nav-item"><a href="{{route('portfolio.page')}}" class="nav-link">Portfolio</a></li>
	                <li class="nav-item"><a href="{{route('pricing.page')}}" class="nav-link">Pricing</a></li>
	                <li class="nav-item"><a href="{{ route('post.blog.index') }}" class="nav-link">Blog</a></li>
	                <li class="nav-item"><a href="{{route('contact.page')}}" class="nav-link">Contact</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>
