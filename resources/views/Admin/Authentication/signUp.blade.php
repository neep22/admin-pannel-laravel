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
                            <h3>Sign Up</h3>
                            <p>Welcome to Log In page</p>
                            <form action="{{route('add.userInfo')}}" method="post" id="signupform">
                                @csrf
                                <div class="row mb-4 mt-5">
                                    <label class="form-label-title col-sm-3 mb-0 text-start">Email</label>
                                    <div class="col-md-6">
                                        <input class="form-control"  name="name" id="name" type="text"
                                            placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="row mb-4 mb-4">
                                    <label class="form-label-title col-sm-3 mb-0 text-start">Email</label>
                                    <div class="col-md-6">
                                        <input class="form-control"  name="email" id="email" type="text"
                                            placeholder="Enter your email address">
                                        <p class="form-text" style="float: left">We'll never share your email with anyone else.</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label-title col-sm-3 mb-0 text-start">Password</label>
                                    <div class="col-md-6">
                                        <input class="form-control mb-2"  name="password" id="password" type="text"
                                            placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label-title col-sm-3 mb-0 text-start">Phone Number</label>
                                    <div class="col-md-6">
                                        <input class="form-control mb-2"  name="phonenumber" id="phonenumber" type="number"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label-title col-sm-3 mb-0 text-start">Gender</label>
                                    <div class="col-md-6">
                                        <select name="gender" id="gender" style="width: 100%" class="form-control mb-2">
                                            <option value="">Select a value</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary user_information" style="padding: 10px 80px;">Sign Up</button>
                            </form>
                            <p class="mt-3">Already Have an Account ? <span><a href="{{url('/login')}}" style="text-decoration: none">Log in</a></span></p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    @include("Admin.Authentication.js.signUpJs")

</body>
</html>