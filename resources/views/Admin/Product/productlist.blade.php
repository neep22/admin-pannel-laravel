@extends("Admin.Admin_layout.MasterApp")
@section("title","Dashboard")
@section("content")

<div class="search-msg page-body">
    <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
                <!-- <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                placeholder="Search Fastkart .." name="q" title="" autofocus>
                            <i class="close-search" data-feather="x"></i>
                            <div class="spinner-border Typeahead-spinner" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div> -->
            <input type="text" name="search" id="search" class="form-control mb-2 mb-3" placeholder="Search Here......." style="width: 33%">
        </div>
       </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Products List</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">import</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Export</a>
                                    </li>
                                    <li>
                                        <a class="btn btn-solid" href="{{url('/admin/add-new-product')}}">Add Product</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-data table-responsive">
                            <table class="table all-package theme-table table-product" id="table_id">
                                <thead>
                                    <tr>
                                        <!-- <th>Product Image</th> -->
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Price</th>
                                        <th>Current Qty</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($getProduct as $product)
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img style="width: 150px" src="{{ asset ('Admin/images/'.$product->pimage) }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </td>

                                        <td>{{$product->pname}}</td>

                                        <td>{{$product->category->catname}}</td>

                                        <td>{{$product->subCategory->subcatname}}</td>

                                        <td class="td-price">{{$product->price}}</td>

                                         <td>{{$product->quantity}}</td>

                                        <td class="status-danger">
                                            <span>Pending</span>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="order-detail.html">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{url('/admin/edit-product',$product->id)}}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{url('/admin/delete-product',['id' => $product->id])}}" 
                                                    >
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $getProduct->links() }}
    @include("Admin.Product.js.searchProductJs")
</div>
@endsection