@extends('layouts.auth.app')
@push('title') Login @endpush
@section('content')
    <div class="card card-primary card-authentication1 mx-auto my-5 animated bounceInDown">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="card-title text-uppercase text-center pb-2">{{ __('Login') }}</div>
                <form id="login-form">
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input type="text" id="email" class="form-control form-control-rounded" placeholder="your_name@mail.com">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input type="password" id="password" class="form-control form-control-rounded" placeholder="Password">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mr-0 ml-0">
                        <div class="form-group col-6">
                            <div class="demo-checkbox">
                                <input type="checkbox" id="remember" class="filled-in chk-col-primary" checked="" />
                                <label for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group col-6 text-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            @endif

                        </div>
                    </div>
                    <button type="button" id="login-button" class="btn btn-primary btn-round btn-block waves-effect waves-light">Sign In</button>
                    <div class="text-center pt-3">
                        @if (Route::has('register'))
                            <p>or Sign in with</p>
                            <a href="javascript:void()" class="btn-social btn-social-circle btn-facebook waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:void()" class="btn-social btn-social-circle btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:void()" class="btn-social btn-social-circle btn-twitter waves-effect waves-light m-1"><i class="fa fa-twitter"></i></a>
                            <hr>
                            <p class="text-muted">Do not have an account? <a href="{{ route('register') }}"> {{ __('Register') }}</a></p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ====== Page label script ====== -->
    <script>
        $(document).ready(function() {
            $('#login-button').click(function(){
                var formData = new FormData();
                formData.append('email', $('#email').val())
                formData.append('password', $('#password').val())
                formData.append('remember', $('#remember').val())
                $.ajax({
                    method: 'POST',
                    url: "{{ route('login') }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function (){
                        $("#login-button").html('<i class="fa fa-spinner fa-spin text-primary"></i>');
                        $("#login-button").prop("disabled",true);
                    },
                    complete: function (){
                        $("#login-button").html('Sign In');
                        $("#login-button").prop("disabled",false);
                    },
                    success: function (data) {
                        if (data.type == 'success'){
                            $('#login-form').trigger("reset");
                            Swal.fire({
                                position: 'top-end',
                                icon: data.type,
                                title: data.message,
                                showConfirmButton: false,
                                timer: 1500
                            })
                            setTimeout(function() {
                                location.replace(data.url);
                            }, 800);//
                        }else{
                            Swal.fire({
                                icon: data.type,
                                title: 'Oops...',
                                text: data.message,

                            })
                        }
                    },
                    error: function (xhr) {
                        var errorMessage = '<div class="card bg-danger">\n' +
                            '                        <div class="card-body text-center p-5">\n' +
                            '                            <span class="text-white">';
                        $.each(xhr.responseJSON.errors, function(key,value) {
                            errorMessage +=(''+value+'<br>');
                        });
                        errorMessage +='</span>\n' +
                            '                        </div>\n' +
                            '                    </div>';
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            footer: errorMessage
                        })
                    },
                })
            });
        });
    </script>
@endsection
