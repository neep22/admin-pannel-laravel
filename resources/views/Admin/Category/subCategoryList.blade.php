@extends('Admin.Admin_layout.MasterApp')
@section("title", "Category")
@section("content")

<!-- Container-fluid starts-->
<div class="page-body">
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Category</h5>
                            <form class="d-inline-flex">
                                <a href="{{url('/admin/add-new-category')}}"
                                    class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>
                        <div class="successMessage mb-4 text-danger" style="text-align: center">
                            @if(Session::has('msg'))
                                <h2 class="text-success">{{Session::get('msg')}}</h2>
                            @endif
                        </div>
                        <div class="table-responsive category-table">
                            <div>
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Sub Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($subCategories as $data)
                                        <tr>
                                            <td>
                                                    {{$data->subcatname}}
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" 
                                                        class="upSubCatForm" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#editSubModal"
                                                        data-addcategory-id="{{ $data->addcategory_id	}}"
                                                        data-subcatname="{{ $data->subcatname }}"
                                                        data-id="{{ $data->id }}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{url('/admin/delete-sub-cat',$data->id)}}"
                                                            onclick="return confirm('Are you sure to delete this sub category')"
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
    </div> <!-- All User Table Ends-->
    @include("Admin.Category.modal.editSubModal");
    @include('Admin.Category.js.edit.editSubCatJs');
    @include('Admin.Category.js.delete.setTimeJs');
    {!! Toastr::message() !!}
    {{ $subCategories->links() }}
</div>
@endsection


               