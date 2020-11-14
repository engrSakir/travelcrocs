@extends('layouts.backend.app')
@push('title') Dashboard @endpush
@section('content')
   <!--Start Dashboard Content-->
   <div class="row mt-4">
       <div class="col-12 col-sm-6 col-lg-6 col-xl-6">
           <div class="card bg-primary shadow-primary">
               <div class="card-body p-4">
                            <div class="media">
                       <div class="media-body text-left">
                           <h4 class="text-white">Hello {{ auth()->user()->name }}!</h4>
                           <span class="text-white"><b>This page is now under development mood</b></span>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div><!--End Row-->
   <!--End Dashboard Content-->
@endsection
@push('foot')

@endpush
