<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

</head>
<body>

    <div class="">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="card" style="width: 60%; margin: 0 auto;">
                    <div class="card-body">

                        <div style="text-align: center">
                            <h3>Log In</h3>
                            <p>Welcome to Log In page</p>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(Session::has('err'))
                                <p class="class-danger">{{Session::get('err')}}</p>
                            @endif

                            <form action="{{ url('admin-login') }}" method="post">
                                @csrf
                                <div class="row mb-4 mt-5">
                                    <label class="form-label-title col-sm-3 mb-0 text-end">Email</label>
                                    <div class="col-md-6">
                                        <input class="form-control"  name="email" id="email" type="text"
                                            placeholder="Enter your email address">
                                        <!-- <p class="form-text" style="float: left">We'll never share your email with anyone else.</p> -->
                                    </div>
                                </div>
                                <div class="row mb-4">b 
                                    <label class="form-label-title col-sm-3 mb-0 text-end">Password</label>
                                    <div class="col-md-6">
                                        <input class="form-control mb-2"  name="password" id="password" type="text"
                                            placeholder="Enter Password">
                                            <a href="" style="float: left; text-decoration: none">Forgot Password?</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="padding: 10px 80px;">Log in</button>
                            </form>
                            <div class="mt-5">
                                <span class="">or contiue with google</span>
                            </div>
                            <div class="icon mb-5">
                                <a href=""><i class="fa-brands fa-google"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></i></a>
                            </div>
                            <p>Dont't Have an Account ? <span><a href="{{url('/signup')}}" style="text-decoration: none">Sing Up</a></span></p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

</body>

    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
</html>