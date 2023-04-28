

  <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> edit update student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul id= "updateform_errlist"></ul>

            <input type="hidden" id="edit_id" />

            <div class="form-group mb-3">
                <label for="">Name</label>
                <input type="text" id="edit_name" class="name form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="email" id="edit_email" class="email form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Phone</label>
                <input type="text"id="edit_phone" class="phone form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Course</label>
                <input type="text" id="edit_course"class="course form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button"id="" class="btn btn-primary update_student">update</button>
        </div>
      </div>
    </div>
  </div>
