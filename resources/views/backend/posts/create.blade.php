@extends('layouts.backend.app')
@section('MainBackendContent')



<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="{{route('admin.post.index')}}"><em
                                        class="icon ni ni-arrow-left"></em><span>Back To Post List</span></a>
                            </div>
                            <h2 class="nk-block-title fw-normal">Post Add</h2>
                            <div class="nk-block-des">
                                <p class="lead">Examples and usage guidelines for form control styles,</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">

                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <span class="preview-title-lg overline-title">Post Add</span>
                                    <form action="{{ route('admin.post.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row gy-4">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="default-01">Title</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="title" class="form-control"
                                                            id="default-01" placeholder="Input placeholder">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="default-textarea">Body</label>
                                                    <div class="form-control-wrap">

                                                        <div class="card card-bordered">
                                                            <div class="card-inner">
                                                                <textarea name="body"
                                                                    class="form-control tinymce-basic">Hello, World!</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="default-06">File Upload</label>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" name="image" multiple
                                                                class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Choose Category</label>
                                                    <div class="form-control-wrap">
                                                        <select name="categories[]" class="form-select"
                                                            multiple="multiple"
                                                            data-placeholder="Select Multiple options">
                                                            @foreach ($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Choose Tags</label>
                                                    <div class="form-control-wrap">
                                                        <select name="tags[]" class="form-select" multiple="multiple"
                                                            data-placeholder="Select Multiple options">
                                                            @foreach ($tags as $tag)
                                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="preview-block">
                                                    <span class="preview-title overline-title">Status</span>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" name="status"
                                                            class="custom-control-input" value="1" checked=""
                                                            id="customSwitch2">
                                                        <label class="custom-control-label"
                                                            for="customSwitch2">Active</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Save
                                                        Informations</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- .card-preview -->

                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->


@endsection
@push('js')
<link rel="stylesheet" href="{{ asset('backend') }}/assets/css/editors/tinymce.css?ver=2.1.0">
<script src="{{ asset('backend') }}/assets/js/libs/editors/tinymce.js?ver=2.1.0"></script>
<script src="{{ asset('backend') }}/assets/js/editors.js?ver=2.1.0"></script>
@endpush
