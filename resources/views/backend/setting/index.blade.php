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
                                        <a class="nav-link active" data-toggle="tab" href="#tabe-25"><i aria-hidden="true" class="fa fa-shield"></i> <span class="hidden-xs">Basic</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-26"><i aria-hidden="true" class="fa fa-camera"></i> <span class="hidden-xs">Assets</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-asterisk"></i> <span class="hidden-xs">System</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-envelope"></i> <span class="hidden-xs">Mail</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-user-circle-o"></i> <span class="hidden-xs">Role</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-lock"></i> <span class="hidden-xs">Permissions</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-paw"></i> <span class="hidden-xs">Authentication </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-weixin"></i> <span class="hidden-xs">Chatting</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-soccer-ball-o"></i> <span class="hidden-xs">Pusher</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-bell-o"></i> <span class="hidden-xs">Notification</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-27"><i aria-hidden="true" class="fa fa-users"></i><span class="hidden-xs">Social Network</span></a>
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
                                <div id="tabe-25" class="container tab-pane active">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet</p>
                                </div>
                                <div id="tabe-26" class="container tab-pane fade">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                </div>
                                <div id="tabe-27" class="container tab-pane fade">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div id="tabe-28" class="container tab-pane fade">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                </div>
                                <div id="languages-area" class="container tab-pane fade">
                                   @include('backend.setting.partials.language')
                                </div>
                                <div id="currency-area" class="container tab-pane fade">
                                   <h1><b>{{ 'Under developed' }}</b></h1>
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
