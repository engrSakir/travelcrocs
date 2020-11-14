@extends('layouts.auth.app')
@push('title') Registration @endpush
@section('content')
    <div id="wrapper">
        <div class="card card-primary card-authentication1 mx-auto my-5 animated bounceInDown">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="card-title text-uppercase text-center pb-2">Sign Up</div>
                    <form>
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" id="name" class="form-control form-control-rounded" placeholder="Name">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="email" class="sr-only">Email ID</label>
                                <input type="text" id="email" class="form-control form-control-rounded" placeholder="Email ID">
                                <div class="form-control-position">
                                    <i class="icon-envelope-open"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="password" class="sr-only">Password</label>
                                <input type="text" id="password" class="form-control form-control-rounded" placeholder="Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="password_confirmation" class="sr-only">Retry Password</label>
                                <input type="password" id="password_confirmation" class="form-control form-control-rounded" placeholder="Retry Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="signup-button" class="btn btn-primary btn-round btn-block waves-effect waves-light">Sign Up</button>
                        <div class="text-center pt-3">
                            <p>or Sign up with</p>
                            <a href="javascript:void()" class="btn-social btn-social-circle btn-facebook waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:void()" class="btn-social btn-social-circle btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:void()" class="btn-social btn-social-circle btn-twitter waves-effect waves-light m-1"><i class="fa fa-twitter"></i></a>
                            <hr>
                            <p class="text-muted">Already have an account? <a href="{{ route('login') }}"> Sign In here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
    </div>
    <!-- ====== Page label script ====== -->
    <script>
        $(document).ready(function() {
            $('#signup-button').click(function(){
                var formData = new FormData();
                formData.append('name', $('#name').val())
                formData.append('email', $('#email').val())
                formData.append('password', $('#password').val())
                formData.append('password_confirmation', $('#password_confirmation').val())
                $.ajax({
                    method: 'POST',
                    url: "{{ route('register') }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function (){
                        $("#login-button").html('<i class="fa fa-spinner fa-spin text-primary"></i>');
                        $("#login-button").prop("disabled",true);
                    },
                    complete: function (){
                        $("#login-button").html('Sign Up');
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
