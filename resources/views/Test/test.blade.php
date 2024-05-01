@extends('Admin.Admin_layout.MasterApp')
@section("title", "Category")
@section("content")

    <div class="page-body">
        <div class="row">
            <div class="col-md-12">
            <div class="row align-items-center">
                <h1>Testing</h1>
                <label class="form-label-title col-sm-3 mb-0"  style="width: 100%">Add Parent Category</label>
                <div class="col-sm-9"  style="width: 100%">
                    <select name="addcategory_id" id="addcategory_id">
                        <option value="">Select Parent Category</option>
                        @foreach($categories as $data) 
                            
                        <option value="">{{$data->catname}}</option>
                     @endforeach
                    </select>
                </div>
            </div>
            </div>
        </div>
        <!-- @include('Admin.Category.category_js') -->
    </div>


@endsection 
