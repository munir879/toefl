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
<<<<<<< HEAD
                    <input wire:model="name" name="data" type="text" class="form-control" id="recipient-name">
=======
                    <input wire:model="name" name="data" type="text" class="form-control">
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">direction:</label>
<<<<<<< HEAD
                    <input wire:model="direction" name="data" type="text" class="form-control" id="recipient-name">
=======
                    <input wire:model="direction" name="data" type="text" class="form-control">
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
                    @error('direction')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Question Quota:</label>
<<<<<<< HEAD
                    <input wire:model="question_quota" name="data" type="number" class="form-control" id="recipient-name">
=======
                    <input wire:model="question_quota" name="data" type="number" class="form-control">
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
                    @error('question_quota')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Article Quota</label>
<<<<<<< HEAD
                    <input wire:model="article_quota" name="data" type="number" class="form-control" id="recipient-name">
=======
                    <input wire:model="article_quota" name="data" type="number" class="form-control">
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
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
<<<<<<< HEAD
    $('.modal-backdrop fade show').remove();
=======
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
    window.livewire.on('testStore', () => {
        $('#QuesSegmen').modal('hide')
    })
</script>
@endpush
