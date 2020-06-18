<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input wire:model="name" name="data" type="text" class="form-control" id="recipient-name">
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Status</label>
                    <select wire:model="status" class="form-control">
                        <option selected value=1>Aktif</option>
                        <option value=0>Non Aktif</option>
                    </select>
                </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button wire:click="store" type="button" id="save" class="btn btn-secondary">save</button>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script type="text/javascript">
    window.livewire.on('testStore', () => {
        $('#exampleModal').modal('hide')
    })
</script>
@endpush
