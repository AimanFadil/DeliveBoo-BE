<div class="modal " tabindex="-1" id="modal_delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cancellazione auto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id='text_delete'></p>
            </div>
            <div class="modal-footer">

                <form action="" method="POST" id="form_delete">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger">elimina</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
