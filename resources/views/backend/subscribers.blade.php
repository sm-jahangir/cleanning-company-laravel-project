@extends('layouts.backend.app')
@push('css')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('MainBackendContent')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">

        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Login History - With Action</h4>
                    <p>The following table can be use for <strong class="text-primary">Login Activity, Browser
                            Session</strong> related table.</p>
                </div>
            </div>
            <div class="card card-bordered card-preview">
                <table class="table table-ulogs">
                    <thead class="thead-light">
                        <tr style="text-align: center">
                            <th class="tb-col-os"><span class="overline-title">Subscriber Email <span class="d-sm-none">/
                                        IP</span></span></th>
                            <th class="tb-col-ip"><span class="overline-title">Subscriber At</span></th>
                            <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscribers as $subscriber)
                            <tr style="text-align: center">
                                <td class="tb-col-os">{{ $subscriber->email }}</td>
                                <td class="tb-col-ip"><span class="sub-text">{{ $subscriber->created_at->diffForHumans() }}</span></td>
                                <td class="tb-col-action"><a href="{{ route('admin.subscibers.destroy', $subscriber->id) }}" class="link-cross mr-sm-n1"><em
                                            class="icon ni ni-cross"></em></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- .card-preview -->
        </div><!-- nk-block -->
    </div>
</div>
<!-- content @e -->

@endsection

@push('js')
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@endpush