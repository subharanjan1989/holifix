<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>
  <link rel="icon" type="image/x-icon" href="{{asset('adminassets')}}/images/favicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <link rel="stylesheet" href="{{asset('adminassets')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{asset('adminassets')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('adminassets')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="spinner-2" id="mloader">
        <span></span>
    </div>
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
            <div class="login-logo">
                <a href="{{ route('user.login') }}"><img src="{{asset('adminassets')}}/images/logo.png" width="150px"></a>
            </div>
            <p class="login-box-msg">Sign in to start your session</p>
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                </div>
            @endif

            <form action="#" method="POST">
                <div class="input-group mb-1">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="text-danger mb-2" id="error_email"></div>

                <div class="input-group mb-1 mt-2">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text" onclick="passwordToogle()">
                        <span class="fas fa-eye-slash" id="password_eye"></span>
                        </div>
                    </div>
                </div>        
                <div class="text-danger mb-2" id="error_password"></div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                        <input type="checkbox" name="remember" id="remember" value="1">
                        <label for="remember">
                            Remember Me
                        </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="button" onclick="userLogin()" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
            <p class="mb-1">
                <a href="#">I forgot my password</a>
            </p>
            </div>
        </div>
    </div>
    <script src="{{asset('adminassets')}}/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('adminassets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('adminassets')}}/dist/js/adminlte.min.js"></script>

    <script>
        function passwordToogle() {
            var pass = document.getElementById("password");
            var eye = document.getElementById("password_eye");

            if (pass.type === "password") {
            pass.type = "text";
            document.getElementById("password_eye").classList.add('fa-eye');
            document.getElementById("password_eye").classList.remove('fa-eye-slash');
            } else {
            pass.type = "password";
            document.getElementById("password_eye").classList.add('fa-eye-slash');
            document.getElementById("password_eye").classList.remove('fa-eye');
            }
        }

        $(document).ready(function() {
            $("#mloader").hide();
        });

        function userLogin() {       
            $(".text-danger").html('');
            $("#mloader").show();

            var email = $("#email").val();
            var password = $("#password").val();
            let remember = document.getElementById("remember").checked;

            $.ajax({
                url: "{{ route('user.login.submit') }}",
                type: 'POST',
                dataType: "json",
                data: {
                    email: email,
                    password: password,
                    remember: remember,
                    _token: '{{ csrf_token() }}',
                },
                success: function(resp) {
                    if(resp.status==false) {
                        $("#mloader").hide();
                        var errors = resp.errors;
                        $.each(errors, function (key, value) {
                            $("#error_"+key).html(value[0]);
                        });
                    }else{
                        window.location.href = resp.redirect_url;
                    }
                }
            });
        }
    </script>
</body>
</html>
