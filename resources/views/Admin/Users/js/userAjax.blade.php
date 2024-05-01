<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> -->
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    </script>



<script>
    $(document).ready(function(){
        $(document).on('click','.user_information',function(){

            let name=$('#name').val();
            let email=$('#email').val();
            let password=$('#password').val();
            let phonenumber=$('#phonenumber').val();
            let gender=$('#gender').val();
            let uesrtype=$('#usertype').val();
            
            // alert(email);
            console.log(name)
            console.log(email)
            console.log(password)
            console.log(phonenumber)
            console.log(gender)
            console.log(usertype)

            $.ajax({
                url:"{{route('add.newAdmin')}}",
                method:"post",
                data:{
                    name:name,
                    email:email,
                    password:password,
                    phonenumber:phonenumber,
                    gender:gender,
                    usertype:usertype
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){

                },
                error:function(err){

                }



            });

        });

    });











    
</script>