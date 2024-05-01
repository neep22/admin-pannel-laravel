@extends("Admin.Admin_layout.MasterApp")
@section("title", "Add new Product")
@section("content")

<div class="page-body">
<!-- New Product Add Start -->
    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <form action="{{route('update.product')}}" method="post" class="theme-form theme-form-2 mega-form" enctype="multipart/form-data" id="productForm">
                            @csrf  
                            @foreach($product as $products)
                                <input type="text" class="form-control" value="{{$products->id}}" name="up_id" id="up_id">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Information</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div>
                                                <h2>Test</h2>
                                                <p>{{$products->category->catname}}</p>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Product
                                                    Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="{{$products->pname}}" name="pname" id="pname" type="text"
                                                        placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-sm-3 col-form-label form-label-title">Category</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100 getSubcat" name="cat_id" id="cat_id">
                                                        <option value="{{$products->category->id}}">{{$products->category->catname}}</option>
                                                        @foreach($categories as $category)
                                                        <option  name="id" value="{{$category->id}}">{{$category->catname}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-sm-3 col-form-label form-label-title">Subcategory</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100" name="subcat_id"  id="subcat_id">
                                                        <option value="{{$products->subCategory->id}}">{{$products->subCategory->subcatname}}</option>
                                                       
                                                       @foreach($subCategories->category->subCategory as $subcategory)
                                                        <option value="">{{$subcategory->subcatname}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Tags</label>
                                                <div class="col-sm-9">
                                                    <div class="bs-example">
                                                        <input type="text" class="form-control" value="{{$products->tags}}"
                                                            placeholder="Type tag & hit enter" id="tags" name="tags"
                                                            data-role="tagsinput">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-sm-3 col-form-label form-label-title">Exchangeable</label>
                                                <div class="col-sm-9">
                                                    <label class="switch">
                                                        <input type="checkbox" value="{{$products->exchange}}" name="exchange" id="exchange"><span class="switch-state"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <label
                                                    class="col-sm-3 col-form-label form-label-title">Refundable</label>
                                                <div class="col-sm-9">
                                                    <label class="switch">
                                                        <input type="checkbox" value="{{$products->efund}}" name="refund" id="refund"><span
                                                            class="switch-state"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Description</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <label class="form-label-title col-sm-3 mb-0">Product
                                                            Description</label>
                                                        <div class="col-sm-9">
                                                            <div id="editor"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Images</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-sm-3 col-form-label form-label-title">Images</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control form-choose" type="file" value="{{$products->pimage}}"
                                                    name="pimage" id="pimage" multiple>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                                    Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control form-choose" type="file" name="pthumbnail" value="{{$products->ptumbnail}}"
                                                        id="pthumbnail" multiple>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Videos</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <!-- <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Video
                                                    Provider</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100" name="state">
                                                        <option>Vimeo</option>
                                                        <option>Youtube</option>
                                                        <option>Dailymotion</option>
                                                        <option>Vimeo</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Video
                                                    Link</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" name="pvideo" id="pvideo" value="{{$products->pvideo}}"
                                                        placeholder="Video Link">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Shipping</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Weight
                                                    (kg)</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="number" value="{{$products->shipweight}}" name="shipweight" id="shipweight" placeholder="Weight">
                                                </div>
                                            </div>

                                            <!-- <div class="row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Dimensions
                                                    (cm)</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100" name="state">
                                                        <option>Length</option>
                                                        <option>Width</option>
                                                        <option>Height</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Price</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 form-label-title">price</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="{{$products->price}}" type="number" name="price" id="price" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Inventory</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Stock
                                                    Status</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100" value="{{$products->stock}}" name="stock" id="stock">
                                                        <option value="In Stock">In Stock</option>
                                                        <option value="Out Of Stock">Out Of Stock</option>
                                                        <option value="On Backorder">On Backorder</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" value="{{$products->quantity}}" name="quantity" id="quantity">
                                                </div>
                                            </div>
                                        </div>               
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <!-- <div class="card-header-2">
                                            <h5>Search engine listing</h5>
                                        </div>

                                        <div class="seo-view">
                                            <span class="link">https://fastkart.com</span>
                                            <h5>Buy fresh vegetables & Fruits online at best price</h5>
                                            <p>Online Vegetable Store - Buy fresh vegetables & Fruits online at best
                                                prices. Order online and get free delivery.</p>
                                        </div> -->

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Page title</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="search" value="{{$products->pagetitle}}" name="pagetitle" id="pagetitle"
                                                        placeholder="Fresh Fruits">
                                                </div>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-label-title col-sm-3 mb-0">Meta
                                                    description</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="3" value="{{$products->metadesc}}" name="metadesc" id="metadesc"></textarea>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="form-label-title col-sm-3 mb-0">URL handle</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="search" value="{{$products->meta_url}}" name="meta_url" id="meta_url"
                                                        placeholder="https://fastkart.com/fresh-veggies">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary add_product">Save product</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Toastr::message() !!}
</div>
<!-- New Product Add End -->
@endsection