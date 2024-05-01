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


        //Add Product
        $(document).on('keyup','#search',function(event){
            event.preventDefault();

            let search_string = $('#search').val();

            console.log(search_string);

            $.ajax({
                url: "{{route('search.product')}}",
                method: "GET",
                data: {search_string: search_string},
                success:function(res){
                    // console.log(res)
                    $('.table-data').html(res);

                    if(res.status == 'nothing_found'){
                        $('.table-data').html('<span class="text-danger">Nothing Found</span>')
                    }
                }
            });
        });
    });
</script>
