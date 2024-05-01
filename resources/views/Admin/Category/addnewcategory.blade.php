@extends('Admin.Admin_layout.MasterApp')
@section("title", "Category")
@section("content")

<div class="page-body">

                <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row load">
                                <div class="col-sm-8 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Category Information</h5>
                                            </div>

                                            <form action="{{route('add.parentcat')}}" method="post" class="theme-form theme-form-2 mega-form" id="addparentcat" enctype= multipart/form-data>
                                                @csrf
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" name="catname" id="catname" type="text"
                                                            placeholder="Category Name">
                                                        <span class="text-danger catname_err"></span>
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Category
                                                        Image</label>
                                                    <div class="form-group col-sm-9">
                                                        <div class="dropzone-wrapper">
                                                            <div class="dropzone-desc">
                                                                <i class="ri-upload-2-line"></i>
                                                                <p>Choose an image file or drag it here.</p>
                                                            </div>
                                                            <input type="file" class="dropzone"  name="catimage" id="catimage">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary add_category">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Category Information</h5>
                                            </div>

                                            <form action="{{route('add.subcat')}}" method="post" class="theme-form theme-form-2 mega-form" id="subCategory">
                                                @csrf
                                                <!-- <button id="12" onclick="getId(this.id)">Get Id</button> -->
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Add Parent Category</label>
                                                    <div class="col-sm-9">
                                                        <!-- <input class="form-control" type="text"
                                                            placeholder="Category Name"> -->
                                                            <select name="addcategory_id" id="addcategory_id">
                                                                <option value="">Select Parent Category</option>
                                                                 @foreach($data as $datas)
                                                                    <option value="{{$datas->id}}">{{$datas->catname}}</option>
                                                                @endforeach 
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Sub Category</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control"  name="subcatname" id="subcatname" type="text"
                                                            placeholder="Category Name">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary add_sub_category">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
                @include('Admin.Category.js.category_js')
                @include('Admin.Category.js.subcategory_js')
                {!! Toastr::message() !!}
        <!-- Page Body End -->
@endsection