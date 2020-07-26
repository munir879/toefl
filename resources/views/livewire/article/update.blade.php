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
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$QuesSegmen->test_segments->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Question Quota</label>

                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$CountQuestion}} / {{$QuesSegmen->question_quota}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Article Quota</label>

                    <div class="col-sm-7">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$CountArticle}} / {{$QuesSegmen->article_quota ? : 0}}">
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
