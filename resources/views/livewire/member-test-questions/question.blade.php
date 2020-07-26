<div class="card shadow mb-4">
    <div class="card-header py-2">
        <h6 class="m-0 font-weight text-primary">
            <center>Questions {{$IdQuestion}}</center></b>
        </h6>


    </div>
    <div class="card-body">
        <a href=""></a>
        @if($ques->total() != 0)
        <div class="form-group">
            <div class="progress progress-sm mr-2">
                <div class="progress-bar bg-info" aria-valuenow="{{$ques->currentPage()}}" aria-valuemin="0" aria-valuemax="{{$ques->total()}}" style="width: {{$ques->currentPage()/$ques->total()*100}}%" role="progressbar"></div>
            </div>
        </div>
        @endif
        <h6>
            <center>{{$ques->currentPage()}} Out Of {{$ques->total()}}</center>
        </h6>


        @foreach($ques as $data)
        @if($data->Article)
        <div class="card-body">
            <h5 class="m-0 font-weight">{{$data->Article->content}}</b></h5>
        </div>
        @endif
        <div class="card-body">
            <h5 class="m-0 font-weight">{{$data->question}}</b></h5>
        </div>
        <br>
        @foreach($data->Aswers as $index => $Aswers)
        <div class="form-group col-9">
            <button wire:click="Aswer({{$Aswers->question_id}}, {{$Aswers->id}})" class="btn btn-google btn-block text-left @if($data->member_test_question){{$data->member_test_question->answer_id == $Aswers->id ?'active' :'asd'}}@endif">{{$Aswers->answer}}</button>
        </div>

        @endforeach

        @endforeach

        <!-- <br>
                <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                    <span class="text">Next</span>
                    <span class="icon text-white-40">
                      <i class="fas fa-play"></i>
                    </span>
                  </a> -->
<<<<<<< HEAD

        <div class="col-sm-12">
            {{$ques->links()}}
        </div>
=======
        <div class="row">
            <div class="col-sm-3">
                @if($currentPage > 1 )
                <button wire:click="$emit('previousPage')" type="button" class="btn btn-primary">Previous Test Segmen</button>
                @endif
            </div>
            <div class="col-sm-6">
                {{$ques->links()}}
            </div>
            <div class="col-sm-3">
                @if($total - $currentPage > 0 )
                <button wire:click="$emit('nextPage')" type="button" class="btn btn-primary">Next Test Segmen</button>
                @endif
            </div>
        </div>

>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
    </div>
</div>
