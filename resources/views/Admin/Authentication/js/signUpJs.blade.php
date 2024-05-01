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
        $(document).on('click', '.user_information', function(event){
            event.preventDefault();
            let name=$('#name').val();
            let email=$('#email').val();
            let password=$('#password').val();
            let phonenumber=$('#phonenumber').val();
            let gender=$('#gender').val();
            console.log(name);
            console.log(email);
            console.log(password);
            console.log(phonenumber);
            console.log(gender);

            $.ajax({
                url:"{{route('add.userInfo')}}",
                method:"post",
                data: {
                    name: name,
                    email: email,
                    password: password,
                    phonenumber: phonenumber,
                    gender: gender
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){
                    if(response.status = "success"){

                        $('#signupform')[0].reset();

                        // Command: toastr["success"]("Registration Successfully Done", "Success")

                        // toastr.options = {
                        // "closeButton": true,
                        // "debug": false,
                        // "newestOnTop": false,
                        // "progressBar": true,
                        // "positionClass": "toast-top-right",
                        // "preventDuplicates": false,
                        // "onclick": null,
                        // "showDuration": "300",
                        // "hideDuration": "1000",
                        // "timeOut": "5000",
                        // "extendedTimeOut": "1000",
                        // "showEasing": "swing",
                        // "hideEasing": "linear",
                        // "showMethod": "fadeIn",
                        // "hideMethod": "fadeOut"
                        // }
                    }
                },
                // error:function(err){
                    // console.log(err)
                        // console.log(err)
                        // console.log(err.responseJSON)
                        // console.log(err.responseJSON.errors)
                        // $.each(err.responseJSON.errors, function(key, value){
                        //     $('.errorMsg').append('<p class="text-danger">'+value+'</p>');
                    //   }); 
                    // let formError = err.responseJSON.errors
                    // console.log(formError);

                    // for(let error in formError){
                    //     $('.' + error + '._err').html(formEroor[error][0]);

                    // }
                // }
            });
        });

    }); 
</script>
