<div class="row">
    <div class="col-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Articles Segments</h6>
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
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$CountArticle}} / {{$QuesSegmen->article_quota ? : 0}}">
=======
                        <input type="text" readonly class="form-control-plaintext" value="{{$CountArticle}} / {{$QuesSegmen->article_quota ? : 0}}">
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
                    </div>
                </div>

            </div>
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            @if (session()->has('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
            @endif
        </div>

    </div>
    <div class="col-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Articles</h6>
            </div>
            <div class="card-body">

                <div class="form-group">

                    <textarea wire:model="Article" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                @error('Article')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror


                <button type="button" wire:click="Update" class="btn btn-primary  btn-block">save</button>
            </div>
        </div>
    </div>
</div>
