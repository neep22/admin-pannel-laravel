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

        $(document).on('change', '.getCatId', function(event){
            event.preventDefault();
            let cat_id=$('#cat_id').val();
            console.log(cat_id);
      
            $.ajax({
                url: "{{route('cat.id')}}",
                method:"post",
                data:{
                    cat_id:cat_id,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){
                    console.log(response);
                    $('#subcat_id').html('<option value="">Select Category</option>');
                    $.each(response.subcategorys,function(index, val){
                    $('#subcat_id').append('<option value="'+val.id+'"> '+val.subcatname+' </option>');
                    });

                    // let subcategori = response.subcategorys->count();
                    // console.log(subcategori);
                    // let subcategories = response.subcategorys[0].subcatname;
                    // console.log(subcategories);
                    
                    // for (let subcategoy in subcategories) {
                    //     console.log(subcategoy.subcatname);
                        // for(let result in subcategoy){
                        //     console.log(result);
                        // }
                        // // $('.' + error + '_err').html(formError[error][0]);
                    // }
                }
            });
        });
    });
</script>
