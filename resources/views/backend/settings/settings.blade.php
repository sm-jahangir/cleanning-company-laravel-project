@extends('layouts.backend.app')
@section('MainBackendContent')


@push('css')

<link rel="stylesheet" href="{{asset('toastr')}}/toastr.min.css">
@endpush
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.dashboard') }}"><em
                                        class="icon ni ni-arrow-left"></em><span>Back To Dashboard</span></a></div>
                            <h2 class="nk-block-title fw-normal">Admin Settings</h2>
                            <div class="nk-block-des">
                                <p class="lead">Use the Bootstrap tab javascript plugin to extend navigationa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">

                        <div class="card card-preview">
                            <div class="card-inner">
                                <ul class="nav nav-tabs mt-n3">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em
                                                class="icon ni ni-user"></em><span>Personal</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabItem6"><em
                                                class="icon ni ni-lock-alt"></em><span>Security</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabItem7"><em
                                                class="icon ni ni-bell"></em><span>Notifications</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabItem8"><em
                                                class="icon ni ni-link"></em><span>Connect</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabItem5">



                                        <div class="card-inner">
                                            <div class="preview-block">
                                                <span class="preview-title-lg overline-title">Post Edit</span>
                                                <form action="{{ route('admin.settings.updateprofile') }}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row gy-4">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-01">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="name" class="form-control" id="default-01" value="{{ Auth::user()->name }}" placeholder="User Name">
                                                                    <small style="color: red;">
                                                                        <strong>
                                                                            @error('name')
                                                                            {{ $message }}
                                                                            @enderror
                                                                        </strong>
                                                                     </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-011">Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" id="default-011" placeholder="User Email">
                                                                    <small style="color: red">
                                                                        <strong>
                                                                            @error('email')
                                                                            {{ $message }}
                                                                            @enderror
                                                                        </strong>
                                                                     </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-textarea">Bio</label>
                                                                <div class="form-control-wrap">

                                                                    <div class="card card-bordered">
                                                                        <div class="card-inner">
                                                                            <textarea name="about" class="form-control">{{ Auth::user()->about }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">File Upload</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file" name="image" multiple class="custom-file-input" id="customFile">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                        <small style="color: red">
                                                                            <strong>
                                                                                @error('image')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </strong>
                                                                         </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <img style="width: 200px;height:auto" src="{{asset('storage/backend/profile').'/'.Auth::user()->image}}" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-lg btn-primary">Save
                                                                    Informations</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>




                                    </div>
                                    <div class="tab-pane" id="tabItem6">
                                        

                                        <div class="card-inner">
                                            <div class="preview-block">
                                                <span class="preview-title-lg overline-title">Password Edit</span>
                                                <form action="{{ route('admin.settings.updatepassword') }}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row gy-4">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-01">Old Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" name="old_password" class="form-control" id="default-01"  placeholder="User old_password">
                                                                    <small style="color: red;">
                                                                        <strong>
                                                                            @error('old_password')
                                                                            {{ $message }}
                                                                            @enderror
                                                                        </strong>
                                                                     </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-012">New Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" name="password" class="form-control" id="default-012" placeholder="User New password">
                                                                    <small style="color: red">
                                                                        <strong>
                                                                            @error('password')
                                                                            {{ $message }}
                                                                            @enderror
                                                                        </strong>
                                                                     </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-013">Confirmation Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" name="password_confirmation" class="form-control" id="default-013" placeholder="User password_confirmation password">
                                                                    <small style="color: red">
                                                                        <strong>
                                                                            @error('password_confirmation')
                                                                            {{ $message }}
                                                                            @enderror
                                                                        </strong>
                                                                     </small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-lg btn-primary">Save
                                                                    Informations</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabItem7">
                                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute
                                            qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis
                                            Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem
                                            do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna
                                            commodo est ea veniam consectetur.</p>
                                    </div>
                                    <div class="tab-pane" id="tabItem8">
                                        <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit
                                            consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur
                                            commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit
                                            consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet.
                                            Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor
                                            commodo eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="{{asset('toastr')}}/2.2.4/jquery.min.js"></script>
<script src="{{asset('toastr')}}/toastr.min.js"></script>
{!! Toastr::message() !!}
@endpush