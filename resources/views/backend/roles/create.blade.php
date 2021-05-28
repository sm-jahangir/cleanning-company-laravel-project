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
                            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.roles.index') }}"><em
                                        class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                            <h2 class="nk-block-title fw-normal">Role</h2>
                            <div class="nk-block-des">
                                <p class="lead">Form is most esential part of your project. We styled out nicely so you
                                    can build your form so quickly.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">New Role Create</h5>
                                </div>
                                <form method="POST" action="{{ route('admin.roles.store') }}" class="">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name-1">Role Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="name" class="form-control"
                                                        id="full-name-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            @foreach ($all_permissions as $permission)
                                            <div class="form-group">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" name="permissions[]"
                                                        class="custom-control-input" value="{{$permission->name}}"
                                                        id="side-off-{{$permission->id}}">
                                                    <label class="custom-control-label"
                                                        for="side-off-{{$permission->id}}">
                                                        <span style="font-size: 13px;"
                                                            class="badge badge-primary">{{$permission->name}}</span>
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Save
                                                    Informations</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@endsection
