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
        $(document).on('submit', '#addparentcat', function(event){
            event.preventDefault();
            // let catname=$('#catname').val();
            // console.log(catname);
            // let formData = new FormData(this);
            let formData = new FormData(this);

            $.ajax({
                url:"{{route('add.parentcat')}}",
                method:"post",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(response){
                    if(response.status = "success"){
                        // $('#addParentCat')[0].reset();
                        // $('.load').load(location.href + ' .load');

                        Command: toastr["success"]("Category Added", "Success")

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
                error:function(err){
                    // console.log(err)
                      /*  console.log(err)
                      console.log(err.responseJSON)
                      console.log(err.responseJSON.errors)
                      $.each(err.responseJSON.errors, function(key, value){
                          $('.errorMsg').append('<p class="text-danger">'+value+'</p>');
                      }); */
                    // let formError = err.responseJSON.errors
                    // console.log(formError);

                    // for(let error in formError){
                    //     $('.' + error + '._err').html(formEroor[error][0]);

                    // }
                }
            });
        });

    });

    


    
</script>
