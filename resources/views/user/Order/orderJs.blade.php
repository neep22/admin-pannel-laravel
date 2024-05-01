<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
</script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
</script>

<script>


    $(document).ready(function(){
        // alert('hi');
        $(document).on('click', '.orderId', function(event){
            event.preventDefault();
            let product_id=$(this).data('id');
            let price=$(this).data('price');

            // console.log(product_id);
            // console.log(price);

            $.ajax({
                url:"{{route('add.order')}}",
                method:"post",
                data:{
                    product_id:product_id,
                    price:price
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    console.log(response);
                    if(response.status = 'succes'){
                        $('.view-product').load(location.href + ' .view-product');
                    }

                    // Assuming you have an element with id "status-container" to display the result
                    // $('#status-container').text(response); 


                      // You can also check the value and conditionally disable the button
                        // if (response) {
                        //     $('.orderId').prop('disabled', true);
                        // }
                    // $('#subcat_id').html('<option value="">Select Category</option>');
                    // $.each(response.subcategorys,function(index, val){
                    // $('#subcat_id').append('<option value="'+val.id+'"> '+val.subcatname+' </option>');
                    // });
                }
            });

         
        });

        //update quantity

        $(document).on('click', '.add_quantity', function () {
            // Find the closest input field within the same parent div
            let inputField = $(this).closest('.qty-box').find('.qty-input');

            // Get the current value of the input field
            let currentValue = inputField.val();

            // Get the product ID
            let product_id = $(this).data('product_id');
            let price = $(this).data('price');

            let update_price = currentValue * price;

            // console.log(inputField);
            console.log("currentValue"+currentValue);
            console.log("product id"+product_id);
            console.log("price"+price);
            console.log("update price"+update_price);
            $.ajax({
                url: "{{route('update.quantity')}}",
                type: "POST",
                data: { 
                    _token: @json(csrf_token()),
                    quantity:currentValue,
                    product_id:product_id,
                    update_price:update_price
                },
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    if(response.status = 'succes'){
                        $('.view-product').load(location.href + ' .view-product');
                    }
                },
                error: function (error) {
                    // console.error("Error updating quantity: ", error);
                }
            });
        });
    });
</script>