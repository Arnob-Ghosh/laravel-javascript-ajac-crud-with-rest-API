 <!-- Modal -->
 <div class="modal fade" id="AddstudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul id= "saveform_errlist"></ul>

            <div class="form-group mb-3">
                <label for="">Name</label>
                <input type="text" class="name form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="email" class="email form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Phone</label>
                <input type="text" class="phone form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Course</label>
                <input type="text" class="course form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_student">Save </button>
        </div>
      </div>
    </div>
  </div>
