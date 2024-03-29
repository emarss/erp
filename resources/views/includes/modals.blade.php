<div class="modal" id="confirmDelete" tabindex="-1" role="dialog">
  <div class="modal-dialog rounded-0" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a type="button" href="#" id="actionButton" class="btn btn-danger">Yes</a>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="logoutModal" tabindex="-1" role="dialog">
    <div class="modal-dialog rounded-0" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h5 class="modal-title">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Click the logout button belor to proceed.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a type="button" href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
  </div>
