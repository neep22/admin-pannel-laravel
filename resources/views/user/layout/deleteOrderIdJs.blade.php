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

        $(document).on('click', '.delete-order-id', function (event) {
            event.preventDefault();
            let order_id = $(this).data('order_id');
            console.log(order_id);
            
            $.ajax({
                url: "{{route('delete.order')}}",
                type: "post",
                data: { 
                    _token: @json(csrf_token()),
                    order_id:order_id
                },
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    // if(response.status = 'succes'){
                    //     $('.view-product').load(location.href + ' .view-product');
                    // }
                },
                error: function (error) {
                    // console.error("Error updating quantity: ", error);
                }
            });
        });
    });
</script>