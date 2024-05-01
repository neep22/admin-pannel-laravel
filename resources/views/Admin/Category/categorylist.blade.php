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
                            <h5>Category</h5>
                            <form class="d-inline-flex">
                                <a href="{{url('/admin/add-new-category')}}"
                                    class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive category-table">
                            <div>
                                <table class="my-table table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $data)
                                        {{-- @foreach($data as $data) --}}
                                        <tr>
                                            <td>
                                                {{$data->catname}}
                                            </td>
                                            {{--  <td>
                                                {{$data->catname}}
                                            </td>
                                            <td>
                                                @foreach($data->subCategory as $data)
                                                    <span style="display: block">
                                                        {{$data->subcatname}}
                                                    </span>
                                                @endforeach
                                            </td> --}}
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" 
                                                        class="upCatForm" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#editCatModal"
                                                        data-catname="{{ $data->catname }}"
                                                        data-id="{{ $data->id }}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{url('/admin/delete-cat',$data->id)}}" 
                                                        class="delete_cat"
                                                        data-id="{{$data->id}}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All User Table Ends-->
    @include("Admin.Category.modal.editCatModal");
    @include('Admin.Category.js.edit.editCatJs');
    @include('Admin.Category.js.delete.deleteCatJs');
    {!! Toastr::message() !!}
    {{ $categories->links() }}
    
</div>

@endsection