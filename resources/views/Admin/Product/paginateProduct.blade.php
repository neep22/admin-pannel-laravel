<div class="table-responsive">
    <table class=" table all-package theme-table table-product" id="table_id">
        <thead>
            <tr>
                <!-- <th>Product Image</th> -->
                <th>Product Name</th>
                <th>Price</th>
                <th>Current Qty</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($getProduct as $product)
            <tr>
                <!-- <td>
                    <div class="table-image">
                        <img src="{{asset('Admin/svg/vegetable.svg')}}" class="img-fluid"
                            alt="">
                    </div>
                </td> -->

                <td>{{$product->pname}}</td>

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