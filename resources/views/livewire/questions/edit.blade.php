<div class="row">
    <div class="col-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Question Segments</h6>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Name</label>

                    <div class="col-sm-7">
<<<<<<< HEAD
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$QuesSegmen->test_segments->name}}">
=======
                        <input type="text" readonly class="form-control-plaintext" value="{{$QuesSegmen->test_segments->name}}">
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Question Quota</label>

                    <div class="col-sm-7">
<<<<<<< HEAD
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$CountQuestion}} / {{$QuesSegmen->question_quota}}">
=======
                        <input type="text" readonly class="form-control-plaintext" value="{{$CountQuestion}} / {{$QuesSegmen->question_quota}}">
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Article Quota</label>

                    <div class="col-sm-7">
<<<<<<< HEAD
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$QuesSegmen->int ? : 0}} / {{$CountArticle}}">
=======
                        <input type="text" readonly class="form-control-plaintext" value="{{$QuesSegmen->int ? : 0}} / {{$CountArticle}}">
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
                    </div>
                </div>

            </div>
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>

    </div>
    <div class="col-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
            </div>
            <div class="card-body">

                <h4>Article</h4>


                <div class="form-group">
                    <select wire:model="ArticleId" class="form-control" id="exampleFormControlSelect1">
                        <option value="0">None</option>
                        @foreach($Articles as $data)
                        <option value="{{$data->id}}">{{$data->id}}</option>
                        @endforeach
                    </select>
                </div>
                @if($ArticleId > 0)
                <div class="form-group">
                    <textarea class="form-control" readonly rows="3">{{$Article->content}}</textarea>
                </div>
                @endif


                <h4>Questions</h4>



                <div class="form-group">

                    <textarea wire:model="Question" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                @error('Questions')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror


                <div class="text-center">
                    <h4>Answer</h4>
                </div>
                <br>
                <div class="form-group row">

                    <div class="col-sm-1"></div>

                    <div class="col-sm-1 form-check form-check-inline">
                        <input wire:model="answers.option.0" class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1" value=true>
                    </div>
                    <div class="col-sm-9">
                        <input wire:model="answers.answer.0" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                </div>
                @error('answers.answer.1')
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                </div>
                @enderror

                <div class="form-group row">

                    <div class="col-sm-1"></div>

                    <div class="col-sm-1 form-check form-check-inline">
                        <input wire:model="answers.option.1" class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1" value=true>
                    </div>
                    <div class="col-sm-9">
                        <input wire:model="answers.answer.1" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                </div>

                @error('answers.answer.2')
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                </div>
                @enderror

                <div class="form-group row">

                    <div class="col-sm-1"></div>

                    <div class="col-sm-1 form-check form-check-inline">
                        <input wire:model="answers.option.2" class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1" value=true>
                    </div>
                    <div class="col-sm-9">
                        <input wire:model="answers.answer.2" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                </div>

                @error('answers.answer.3')
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                </div>
                @enderror

                <div class="form-group row">

                    <div class="col-sm-1"></div>

                    <div class="col-sm-1 form-check form-check-inline">
                        <input wire:model="answers.option.3" class="form-check-input checkbox" type="checkbox" id="inlineCheckbox1" value=true>
                    </div>
                    <div class="col-sm-9">
                        <input wire:model="answers.answer.3" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                </div>

                @error('answers.answer.1')
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                </div>
                @enderror

                @error('answers.option')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
                @error('answers.answer')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
                <button type="button" wire:click="Update" class="btn btn-primary  btn-block">save</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    window.livewire.on('reset', () => {
        $('.checkbox').prop('checked', false);
    })
</script>
@endpush
