@extends('layouts.frontend.app')

@section('FrontendContent')
      
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Blog</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
          </a>
          <div class="text mt-3 px-4">
            <div class="posted mb-3 d-flex">
              <div class="img author" style="background-image: url(images/person_2.jpg);"></div>
              <div class="desc pl-3">
                <span>Posted by John doe</span>
                <span>04 March 2020</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
          </a>
          <div class="text mt-3 px-4">
            <div class="posted mb-3 d-flex">
              <div class="img author" style="background-image: url(images/person_3.jpg);"></div>
              <div class="desc pl-3">
                <span>Posted by John doe</span>
                <span>04 March 2020</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
          </a>
          <div class="text mt-3 px-4">
            <div class="posted mb-3 d-flex">
              <div class="img author" style="background-image: url(images/person_1.jpg);"></div>
              <div class="desc pl-3">
                <span>Posted by John doe</span>
                <span>04 March 2020</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_4.jpg');">
          </a>
          <div class="text mt-3 px-4">
            <div class="posted mb-3 d-flex">
              <div class="img author" style="background-image: url(images/person_2.jpg);"></div>
              <div class="desc pl-3">
                <span>Posted by John doe</span>
                <span>04 March 2020</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_5.jpg');">
          </a>
          <div class="text mt-3 px-4">
            <div class="posted mb-3 d-flex">
              <div class="img author" style="background-image: url(images/person_3.jpg);"></div>
              <div class="desc pl-3">
                <span>Posted by John doe</span>
                <span>04 March 2020</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_6.jpg');">
          </a>
          <div class="text mt-3 px-4">
            <div class="posted mb-3 d-flex">
              <div class="img author" style="background-image: url(images/person_1.jpg);"></div>
              <div class="desc pl-3">
                <span>Posted by John doe</span>
                <span>04 March 2020</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection