<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure you want to delete it?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>There is no way to recover it, after deletion</p>
            </div>
            <div class="modal-footer">

                <form method="POST" action="" id="confirmationForm">
                    @csrf
                    <button type="submit" class="btn btn-primary">Ok</button>
                </form>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
