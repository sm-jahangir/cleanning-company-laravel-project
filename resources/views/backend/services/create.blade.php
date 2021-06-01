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
                            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.tags.index') }}"><em
                                        class="icon ni ni-arrow-left"></em><span>Back To Service List</span></a>
                            </div>
                            <h2 class="nk-block-title fw-normal">Services</h2>
                            <div class="nk-block-des">
                                <p class="lead">Examples and usage guidelines for form control styles.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <span class="preview-title-lg overline-title">Service Add</span>
                                    <form action="{{ route('admin.service.store') }}" method="post">
                                        @csrf
                                        <div class="row gy-4">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="default-03">Service Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="name" class="form-control" id="default-03"
                                                            placeholder="User Name Here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 offset-lg-5">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Save
                                                        Information</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <hr class="preview-hr">
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