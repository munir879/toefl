<div class="row">
    <div class="col-4">
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight text-primary">
                    <center>Test</center></b>
                </h6>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Name : {{$Test->name}}</label>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Date : </label>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary">Test Segmen</h6>

            </div>
            <div class="card-body">
                {{$Question->links()}}
            </div>
        </div>
    </div>

    <div class="col-8">
        @foreach($Question as $data)
        @livewire('member-test-questions.question', ['question' => $data->question_segment->id, 'MemberTest' =>$MemberTestId ], key($data->question_segment->id))
        @endforeach
    </div>

</div>
