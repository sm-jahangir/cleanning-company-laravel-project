@extends('layouts.frontend.app')

@section('FrontendContent')


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('frontend') }}/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('/')}}">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{ route('post.blog.index') }}">Blog
                            <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p>
                    <img src="{{asset('storage/post').'/'.$post['image']}}" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3">{{ $post->title }}</h2>
                <div>
                    {!! html_entity_decode($post->body) !!}
                </div>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                      @foreach ($tags as $tag)
                          
                        <a href="{{ route('tag.by.post', $tag->slug) }}" class="tag-cloud-link">{{ $tag->name }}</a>
                      @endforeach
                    </div>
                </div>

                <div class="pt-5 mt-5">
                    @if ($post->comments->count() <= 1)
                        <h3 class="mb-5">{{ $post->comments->count() }} Comment</h3>
                    @else
                        <h3 class="mb-5">{{ $post->comments->count() }} Comments</h3>
                    @endif

                    @if ($post->comments->count() > 0)
                        <ul class="comment-list">
                            @foreach ($post->comments as $comment)
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ asset('storage/backend/profile'). '/' . $comment->user->image }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>{{ $comment->user->name }}</h3>
                                    <div class="meta">{{ $comment->created_at->diffForHumans() }}</div>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                        <!-- END comment-list --> 
                    @else
                        <p>No Comment Yet, Be the First :)</p>
                    @endif

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>

                        @guest
                            <form action="{{ route('admin.comment.store', $post->id) }}" method="POST" class="p-5 bg-light">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" name="website" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        @else
                            
                            <form action="{{ route('admin.comment.store', $post->id) }}" method="POST" class="p-5 bg-light">
                                @csrf
                                <div class="form-group">
                                    <label for="message">Comment Message</label>
                                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        @endguest



                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box">
                    <form action="{{ route('blog.search') }}" method="GET" class="search-form">
                        <div class="form-group">
                            <span class="fa fa-search"></span>
                            <input type="text" name="query" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Category</h3>
                        @foreach ($categories as $category)
                        <li><a href="{{ route('category.by.post', $category->slug) }}">{{ $category->name }} <span class="fa fa-chevron-right"></span></a></li>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    @foreach ($randomposts as $randompost)
                      <div class="block-21 mb-4 d-flex">
                          <a class="blog-img mr-4"
                              style="background-image: url({{asset('storage/post').'/'.$randompost['image']}});"></a>
                          <div class="text">
                              <h3 class="heading"><a href="{{ route('post.blog.details', $randompost->slug) }}">{{ $randompost->title }}</a>
                              </h3>
                              <div class="meta">
                                  <div><a href="#"><span class="icon-calendar"></span>{{ $randompost->created_at->diffForHumans() }}</a></div>
                                  <div><a href="#"><span class="icon-person"></span> {{ $randompost->user->name }}</a></div>
                                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                              </div>
                          </div>
                      </div>
                    @endforeach
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        @foreach ($tags as $tag)
                        <a href="{{ route('tag.by.post', $tag->slug) }}" class="tag-cloud-link">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->

@endsection
