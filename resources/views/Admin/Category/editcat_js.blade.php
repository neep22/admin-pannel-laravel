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

        //Show category Information in Modal
        $(document).on('click', '.update_category_form', function(event){
            event.preventDefault();
            let id=$(this).data('id');
            let addcategory_id=$(this).data('addcategory-id');
            // let catname=$(this).data('catname');
            let subcatname=$(this).data('subcatname');

            // $('#catname').val(catname)
            $('#up_id').val(id);
            $('#subcatname').val(subcatname);

            console.log(id);
            console.log(addcategory_id);
            // console.log(catname);
            console.log(subcatname);
        });

        // Update Subcategory Information
        $(document).on('click', '.update_category', function(event){
           
            event.preventDefault();
            let up_id = $('#up_id').val();
            let addcategory_id = $('#addcategory_id').val();
            let subcatname = $('#subcatname').val();

            $.ajax({
                url:"{{route('update.subCat')}}",
                method:"post",
                data:{
                    up_id:up_id,
                    addcategory_id:addcategory_id,
                    subcatname:subcatname
                }
                // success:function(response){

                // },
                // error:function(err){

                // }
            });
        });
    })
</script>