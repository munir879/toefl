<div wire:ignore.self class="modal fade" id="QuesSegmenUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input wire:key="name" wire:model="name" name="data" type="text" class="form-control">
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">direction:</label>
                    <input wire:key="direction" wire:model="direction" name="data" type="text" class="form-control">
                    @error('direction')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Question Quota:</label>
                    <input wire:key="question_quota" wire:model="question_quota" name="data" type="number" class="form-control">
                    @error('question_quota')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Article Quota</label>
                    <input wire:key="article_quota" wire:model="article_quota" name="data" type="number" class="form-control">
                    @error('article_quota')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>






            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button wire:click="Update" type="button" id="save" class="btn btn-success">save</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {

        window.livewire.on('SegmenUpdate', () => {
            $('#QuesSegmenUpdate').modal('hide')
        })
    });
</script>
@endpush
