@extends('layouts.frontend.app')
@push('frontendcss')
<style>
    .favorite_posts {
        color: red;
    }

</style>
@endpush
@section('FrontendContent')

<section class="hero-wrap hero-wrap-2"
    style="background-image: url('{{ asset('storage/category').'/'. 'default-cat.png' }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Blog <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">{{$tag->name}}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    @if ($tag->posts->count() > 0)
    <div class="container">
        <div class="row d-flex">
            @foreach ($tag->posts as $post)

            <div style="margin-bottom: 25px;" class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="card card-bordered">
                    <div class="card-body">

                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('post.blog.details', $post->slug) }}" class="block-20 rounded"
                                style="background-image: url('{{asset('storage/post').'/'.$post['image']}}');">
                            </a>
                            <div class="text mt-3 px-4">
                                <div class="posted mb-3 d-flex">
                                    <div class="img author"
                                        style="background-image: url('{{asset('storage/backend/profile').'/'.$post->user->image}}');">
                                    </div>
                                    <div class="desc pl-3">
                                        <span>Posted by {{ $post->user->name }}</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">{{ $post->title }}</a></h3>
                                <p>{{ Str::limit($post->title, 50) }}</p>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: -25px;" class="card-footer border-top text-muted">
                        <div class="row">
                            @guest
                            <div class="col-4"><a href="#"><i class="fa fa-heart"></i></a><strong
                                    style="font-size: 10px"> {{ $post->favorite_to_user->count() }}</strong></div>
                            <div class="col-4"><a href="#">View</a><strong style="font-size: 10px">
                                    {{ $post->view_count }}</strong></div>
                            <div class="col-4"><a href="#"><i class="fa fa-thumbs-up"></i></a><strong
                                    style="font-size: 10px"> 21</strong></div>
                            @else
                            <div class="col-4">
                                <a href="javascript:void(0);"
                                    onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
                                    class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}"><i
                                        class="fa fa-heart"></i></a><strong style="font-size: 10px">
                                    {{ $post->favorite_to_user->count() }}</strong>
                                <form id="favorite-form-{{ $post->id }}" method="POST"
                                    action="{{ route('admin.post.favorite',$post->id) }}" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                            <div class="col-4"><a href=""><i class="fa fa-eye"></i></a><strong style="font-size: 10px">
                                    {{ $post->view_count }}</strong></div>
                            <div class="col-4"><a href=""><i class="fa fa-thumbs-up"></i></a><strong
                                    style="font-size: 10px"> 21</strong></div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
    @else
    <h2>{{ __('There is no post in this Tag')}}</h2>
    @endif
</section>

@endsection
