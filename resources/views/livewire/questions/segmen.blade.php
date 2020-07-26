<div wire:ignore.self class="modal fade" id="QuesSegmen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label for="recipient-name" class="col-form-label">nama:</label>
                    <input wire:model="name" name="data" type="text" class="form-control" id="recipient-name">
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">direction:</label>
                    <input wire:model="direction" name="data" type="text" class="form-control" id="recipient-name">
                    @error('direction')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Question Quota:</label>
                    <input wire:model="question_quota" name="data" type="number" class="form-control" id="recipient-name">
                    @error('question_quota')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Article Quota</label>
                    <input wire:model="article_quota" name="data" type="number" class="form-control" id="recipient-name">
                    @error('article_quota')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>






            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button wire:click="store" type="button" id="save" class="btn btn-success">save</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    $('.modal-backdrop fade show').remove();
    window.livewire.on('testStore', () => {
        $('#QuesSegmen').modal('hide')
    })
</script>
@endpush
