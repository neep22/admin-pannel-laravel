@extends('Admin.Admin_layout.MasterApp')
@section("title", "Add User")
@section("content")

<!-- Page Sidebar Start -->
            <div class="page-body">
                <!-- New User start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-8 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="title-header option-title">
                                                <h5>Add New User</h5>
                                            </div>
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-home"
                                                        type="button">Account</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                        type="button">Pernission</button>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form" action="{{route('add.newAdmin')}}" method="post">
                                                        @csrf
                                                        <div class="card-header-1">
                                                            <h5>Product Information</h5>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">First
                                                                    Name</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input name="name" id="name" class="form-control" type="text">
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                                    Address</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input name="email" id="email" class="form-control" type="email">
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input name="password" id="password" class="form-control" type="password">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Mobile Phone</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input name="phonenumber" id="phonenumber" class="form-control" type="number">
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Gender</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <select name="gender" id="gender" style="width: 100%" class="form-control mb-2">
                                                                        <option value="">Select a value</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">User Type</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <select name="usertype" id="usertype" style="width: 100%" class="form-control mb-2">
                                                                        <option value="">Select a value</option>
                                                                        <option value="Editor">Editor</option>
                                                                        <option value="SubEditor">Sub Editor</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary user_information mt-4" style="padding: 10px 80px;">Submit</button>
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                                    <div class="card-header-1">
                                                        <h5>Product Related Permition</h5>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Add Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Update Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Delete Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Apply Discount</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="card-header-1">
                                                        <h5>Category Related Permition</h5>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Add Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Update Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Delete Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Apply Discount</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New User End -->

                <!-- footer start -->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer end -->
            </div>
            <!-- Page Sidebar End -->  
            @include("Admin.Users.js.userAjax");

@endsection