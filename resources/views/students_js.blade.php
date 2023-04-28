<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





 <script>

    $(document).ready(function(){


      var table=  $('#myTable').DataTable({

            "processing": true,
            ajax:"{{url('/fetch_students')}}",

            columns:[
                {"data":"id"},
                {"data":"name"},
                {"data":"email"},
                {"data":"phone"},
                {"data":"course"},
                {
                        "data": null,
                        render: function(data, type, row) {

                            return '<button value="'+row.id+'" class="edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">edit</button>';


                        }
                    },
                    {
                        "data": null,
                        render: function(data, type, row) {

                            return '<button value="'+row.id+'"  class="delete btn btn-danger">delete</button>';
                        }
                    },
            ]
        });



        $(document).on('click','.delete',function(e){

            e.preventDefault();
            var id= $(this).val();
            //console.log(id);
            $('#delete_id').val(id);
            $('#deleteModal').modal('show')


        });

        $(document).on('click','.delete_student',function(e){

            e.preventDefault();
            var id= $('#delete_id').val();
           // console.log(id)
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                        });


            $.ajax({
                type: "DELETE",
                url: "/delete_student/"+id,

                success: function (response){

                    console.log(response);
                    if(response.status==200){
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                    $('#deleteModal').modal('hide');
                    table.ajax.reload();

                    }



                }



            });



        });




        $(document).on('click','.edit',function(e){
        e.preventDefault();
        var id= $(this).val();
        //console.log(id);
        $('#editModal').modal('show')


        $.ajax({
            type:"GET",
            url:"/edit-students/"+id,
            success:function(response){
              //console.log(response)
               if(response.status==404){
               $('#success_message').html("");
                $('#success_message').addClass('alert alert-danger');
                $('#success_message').text(response.message);
               }
               else{
                $('#edit_name').val(response.student.name);
                $('#edit_email').val(response.student.email);
                $('#edit_phone').val(response.student.phone);
                $('#edit_course').val(response.student.course);
                $('#edit_id').val(id);

               }



            }


        });

        });



        $(document).on('click','.update_student',function(e){
        e.preventDefault();
        var id = $('#edit_id').val();

        var data={
            'name': $('#edit_name').val(),
            'email': $('#edit_email').val(),
            'phone': $('#edit_phone').val(),
            'course': $('#edit_course').val(),

        }
        console.log(data)
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
                type: "PUT",
                url: "/update-student/"+id,
                data: data,
                dataType: "json",
                success: function (response){
                console.log(response)
                if(response.status==400)
                {

                    $('#updateform_errlist').html("");
                    $('#updateform_errlist').addClass('alert alert-danger');
                    $.each(response.errors,function(key,err_values){
                        $('#updateform_errlist').append('<li>'+err_values+'<li>');



                    });

                }
                else if(response.status==404)
                {
                    $('#updateform_errlist').html("");
                    $('#updateform_errlist').addClass('alert alert-success');
                    $('#updateform_errlist').text(response.message)


                }
                else{
                    $('#updateform_errlist').html("");
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message)
                    $('#editModal').modal('hide');
                   // $('#editModal').find('input').val("");
                    table.ajax.reload();
                }


            }




        });

        });







    $(document).on('click','.add_student',function(e){
        e.preventDefault();


        var data={
            'name': $('.name').val(),
            'email': $('.email').val(),
            'phone': $('.phone').val(),
            'course': $('.course').val(),

        }
        //console.log(data)

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
            type:"POST",
            url:"/students",
            data: data,
            dataType:"json",
            success:function(response){
                //console.log(response)
                if(response.status==400)
                {

                    $('#saveform_errlist').html("");
                    $('#saveform_errlist').addClass('alert alert-danger');
                    $.each(response.errors,function(key,err_values){
                        $('#saveform_errlist').append('<li>'+err_values+'<li>');



                    });

                }
                else{
                    $('#saveform_errlist').html("");
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message)
                    $('#AddstudentModal').modal('hide');
                    $('#AddstudentModal').find('input').val("");
                    table.ajax.reload();


                }


            }


        });

    });







    });
 </script>
