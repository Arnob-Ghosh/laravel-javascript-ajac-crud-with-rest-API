
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title></title>
  </head>
  <body>



    <div class="container py-5">
        <div class="row">
            <div id="success_message"></div>
            <div class="card">
                <div class="card-header">
                    <h4>Students data
                        <a href="#" data-bs-toggle="modal" data-bs-target="#AddstudentModal" class="btn btn-primary float-end btn-sm">add students</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-success table-striped">
                        <thead>
                          <tr>
                            <th >id</th>
                            <th >Name</th>
                            <th >Email</th>
                            <th >Phone</th>
                            <th >Course</th>
                            <th>Edit</th>
                            <th>Delete</th>


                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>





                </div>


            </div>

        </div>

    </div>

    @include('add_student_modal')
    @include('edit_student_modal')
    @include('delete_student_modal')
    @include('students_js')




  </body>
</html>
