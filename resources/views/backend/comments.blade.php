@extends('layouts.backend.app')
@section('MainBackendContent')


<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">

                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span class="sub-text"></span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">User</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">By</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Post</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools text-right">

                                        </div>
                                    </div><!-- .nk-tb-item -->

                                    @foreach ($comments as $key=>$comment)

                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                <label class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary">
                                                        <span>
                                                            <img src="{{ asset('storage/backend/profile').'/'. $comment->user->image }}"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{ $comment->user->name }} <span
                                                                class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span>{{ $comment->user->email }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            <h4>VS</h4>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary">
                                                        <span>
                                                            <img style="width: 200px;"
                                                                src="{{ asset('storage/post').'/'. $comment->post->image }}"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{ Str::limit($comment->post->title,80) }}
                                                            <span class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span>{{ Str::limit($comment->post->body,80) }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Active</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Delete"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $comment->id }}').submit();">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>
                                                <form id="delete-form-{{ $comment->id }}" action="{{ route('admin.comment.destroy', $comment->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    @endforeach
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><span class="page-link"><em
                                                        class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                        <div
                                            class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select class="form-select form-select-sm" data-search="on"
                                                    data-dropdown="xs center">
                                                    <option value="page-1">1</option>
                                                    <option value="page-2">2</option>
                                                    <option value="page-4">4</option>
                                                    <option value="page-5">5</option>
                                                    <option value="page-6">6</option>
                                                </select>
                                            </div>
                                            <div>OF 102</div>
                                        </div>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@endsection
