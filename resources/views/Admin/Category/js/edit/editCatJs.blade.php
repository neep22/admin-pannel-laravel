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

        //Show Subcategory Information in Modal
        $(document).on('click', '.upCatForm', function(event){
            event.preventDefault();
            let id=$(this).data('id');
            let catname=$(this).data('catname');

            $('#up_id').val(id);
            $('#catname').val(catname);

            console.log(id);
            console.log(catname);
        });

        // Update Subcategory Information
        $(document).on('click', '.update_category', function(event){
            event.preventDefault();
            let up_id = $('#up_id').val();
            let catname = $('#catname').val();

            $.ajax({
                url:"{{route('update.cat')}}",
                method:"post",
                data:{
                    up_id:up_id,
                    catname:catname
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    // $('.updateMsg').append('<span class="text-success">Update Data Insert</span>')
                    if (res.status = 'success') {
                        $('#editCatModal').modal('hide');
                        $('#updateProductForm')[0].reset();
                        $('.my-Table').load(location.href + ' .my-Table');

                        Command: toastr["success"]("Category Updated", "success")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                },
                error: function (err) {
                    // let formError = err.responseJSON.errors;
                    // console.log(formError)
                    // for (let error in formError) {
                    //     console.log(error)
                    //     $('.' + error + '_err').html(formError[error][0]);
                    // }
                }
            });
        });
    });
</script>