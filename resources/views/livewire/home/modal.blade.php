<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input wire:model="data" name="data" type="text" class="form-control" id="recipient-name">

                @error('data') <span class="error">{{ $message }}</span> @enderror

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button wire:click="save" type="button" id="save" class="btn btn-success">save</button>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script type="text/javascript">
    window.livewire.on('postAdded', () => {
        $('#exampleModal').modal('hide')
    })
</script>
@endpush
