@extends('layouts.backend.app')

@push('css')

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('MainBackendContent')



<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-block-head nk-block-head-lg wide-sm">
            <div class="nk-block-head-content">
                <div class="nk-block-head-sub"><a class="back-to" href="{{route('admin.dashboard')}}"><em
                            class="icon ni ni-arrow-left"></em><span>Back To Dashboard</span></a></div>
                <h2 class="nk-block-title fw-normal">Post List</h2>
                <div class="nk-block-des">
                    <p class="lead">Using <a href="https://datatables.net/" target="_blank">DataTables</a>,
                        add advanced interaction controls to your HTML tables.</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->

        <div class="nk-block nk-block-lg">
            <div class="card card-preview">
                <div class="card-inner">
                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid">
                                        <label class="custom-control-label" for="uid"></label>
                                    </div>
                                </th>
                                <th class="nk-tb-col"><span class="sub-text">Post Title</span></th>
                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Author</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">visibility</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Is Approved</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span>
                                </th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                <th class="nk-tb-col nk-tb-col-tools text-right">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $key => $post)

                            <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                        <label class="custom-control-label" for="uid1"></label>
                                    </div>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="user-card">
                                        <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                            <img style="width: 100px"
                                                src="{{asset('storage/post').'/'.$post['image']}}" />
                                        </div>
                                        <div class="user-info">
                                            <span class="tb-lead">{{ Str::limit($post->title, 20) }}<span
                                                    class="dot dot-success d-md-none ml-1"></span></span>
                                            <span>{{ Str::limit($post->slug, 20) }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                    <span class="tb-amount">{{ $post->user->name }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $post->view_count }}</span>
                                </td>

                                <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                    @if($post->is_approved == true)
                                    <span class="badge badge-pill badge-primary">Approved</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Pending</span>
                                    @endif
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                    {{ $post->updated_at->diffForHumans() }}
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    @if($post->status == true)
                                    <span class="tb-status text-success">Active</span>
                                    @else
                                    <span class="tb-status text-danger">Unactive</span>
                                    @endif
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden">
                                            <a href="{{ route('admin.post.edit',$post->id) }}"
                                                class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="Edit">
                                                <em class="icon ni ni-edit-alt-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="{{ route('admin.post.destroy',$post->id) }}"
                                                class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="Delete"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $post->id }}').submit();">
                                                <em class="icon ni ni-cross-fill-c"></em>
                                            </a>
                                        </li>
                                        <form id="delete-form-{{ $post->id }}"
                                            action="{{ route('admin.post.destroy',$post->id) }}" method="POST"
                                            style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>

                                        @if ($post->is_approved == false)
                                            <li class="nk-tb-action-hidden">
                                                <a href="{{ route('admin.post.approve', $post->id) }}" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                    <em class="icon ni ni-view-grid-fill"></em>
                                                </a>
                                            </li>
                                        @else
                                            <li class="nk-tb-action-hidden">
                                                <a href="{{ route('admin.post.approve', $post->id) }}" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                    <em class="icon ni ni-view-grid-fill"></em>
                                                </a>
                                            </li>
                                        @endif

                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick
                                                                    View</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-repeat"></em><span>Transaction</span></a>
                                                        </li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-activity-round"></em><span>Activities</span></a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-shield-star"></em><span>Reset
                                                                    Pass</span></a></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-shield-off"></em><span>Reset
                                                                    2FA</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend
                                                                    User</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr><!-- .nk-tb-item  -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- .card-preview -->
        </div> <!-- nk-block -->
    </div>
</div>
<!-- content @e -->

@endsection
@push('js')
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@endpush
