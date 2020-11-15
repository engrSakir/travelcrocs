@extends('layouts.backend.app')
@push('title') Setting @endpush
@section('content')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Application setting &amp; configuration</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Application name</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Administrative</a></li>
                <li class="breadcrumb-item active" aria-current="page">Application setting &amp; configuration</li>
            </ol>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="tabs-vertical tabs-vertical-warning">
                                <ul class="nav nav-tabs flex-column top-icon">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#basic-area"><i aria-hidden="true" class="fa fa-shield"></i> <span class="hidden-xs">Basic</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#assets-area"><i aria-hidden="true" class="fa fa-camera"></i> <span class="hidden-xs">Assets</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#system-area"><i aria-hidden="true" class="fa fa-asterisk"></i> <span class="hidden-xs">System</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#mail-area"><i aria-hidden="true" class="fa fa-envelope"></i> <span class="hidden-xs">Mail</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#role-area"><i aria-hidden="true" class="fa fa-user-circle-o"></i> <span class="hidden-xs">Role</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#permissions-area"><i aria-hidden="true" class="fa fa-lock"></i> <span class="hidden-xs">Permissions</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#authentication-area"><i aria-hidden="true" class="fa fa-paw"></i> <span class="hidden-xs">Authentication </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#chatting-area"><i aria-hidden="true" class="fa fa-weixin"></i> <span class="hidden-xs">Chatting</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#pusher-area"><i aria-hidden="true" class="fa fa-soccer-ball-o"></i> <span class="hidden-xs">Pusher</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#notification-area"><i aria-hidden="true" class="fa fa-bell-o"></i> <span class="hidden-xs">Notification</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#social-networks-area"><i aria-hidden="true" class="fa fa-users"></i><span class="hidden-xs">Social Networks</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#languages-area"><i class="zmdi zmdi-globe-alt"></i> <span class="hidden-xs">Languages</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#currency-area"><i aria-hidden="true" class="fa fa-money"></i> <span class="hidden-xs">Languages</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="basic-area" class="container tab-pane active">
                                     @include('backend.setting.partials.basic')
                                </div>
                                 <div id="assets-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.assets')
                                 </div>
                                 <div id="system-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.system')
                                 </div>
                                 <div id="mail-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.mail')
                                 </div>
                                 <div id="role-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.role')
                                 </div>
                                 <div id="permissions-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.permissions')
                                 </div>
                                 <div id="authentication-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.authentication')
                                 </div>
                                 <div id="chatting-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.chatting')
                                 </div>
                                 <div id="pusher-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.pusher')
                                 </div>
                                 <div id="notification-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.notification')
                                 </div>
                                 <div id="social-networks-area" class="container tab-pane fade">
                                      @include('backend.setting.partials.social')
                                 </div>
                                <div id="languages-area" class="container tab-pane fade">
                                   @include('backend.setting.partials.language')
                                </div>
                                <div id="currency-area" class="container tab-pane fade">
                                    @include('backend.setting.partials.currency')
                                </div>
                            </div>
                        </div>
                    </div><!--End Row-->
                </div>
            </div>
        </div>
    </div><!--End Row-->

@endsection
@push('foot')

@endpush
