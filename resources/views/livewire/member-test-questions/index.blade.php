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
<<<<<<< HEAD
                    <label for="staticEmail" class="col-sm-5 col-form-label">Date : </label>
=======
                    <label for="staticEmail" class="col-sm-5 col-form-label">Date : {{date("Y/m/d")}}</label>
                </div>
                <div wire:poll="time" class="form-group row">
                    <label class="col-sm-5 col-form-label">Time : {{$Time}}</label>
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
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
<<<<<<< HEAD
        @livewire('member-test-questions.question', ['question' => $data->question_segment->id, 'MemberTest' =>$MemberTestId ], key($data->question_segment->id))
        @endforeach
    </div>

</div>
=======
        @livewire('member-test-questions.question',
        ['question' => $data->question_segment->id,
        'MemberTest' =>$MemberTestId,
        'currentPage' => $Question->currentPage(),
        'total' => $Question->total()
        ],
        key($data->question_segment->id))
        @endforeach
    </div>

</div>
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
