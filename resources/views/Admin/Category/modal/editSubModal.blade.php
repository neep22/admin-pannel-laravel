<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editSubModal" tabindex="-1" aria-labelledby="editSubModalLabel" aria-hidden="true">
    <form action="{{route('update.subCat')}}" method="post" class="theme-form theme-form-2 mega-form" id="updateProductForm">
    @csrf
    <input type="text" id="up_id">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
            <h1 class="modal-title fs-5" id="editSubModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>    
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Category Information</h5>
                                </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-2" style="width: 100%">Category</label>
                                        <div class="col-sm-9" style="width: 100%">
                                            <!-- <input class="form-control" type="text"
                                                placeholder="Category Name"> -->
                                            <select name="addcategory_id" id="addcategory_id">
                                                <option value="">Select Category</option>

                                                @foreach($categories as $data)
                                                <option value="{{$data->id}}">{{$data->catname}}</option>
                                                @endforeach 

                                            </select>
                                        </div>
                                    </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-2"  style="width: 100%">Sub Category</label>
                                    <div class="col-sm-9"  style="width: 100%">
                                        <input class="form-control"  name="subcatname" id="subcatname" type="text"
                                            placeholder="Category Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary update_subcategory">Save changes</button>
            </div>
        </div>
    </div>
    </form>
</div>