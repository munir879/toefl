<div class="row">
    <div class="col-xl col-lg">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Test</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <a class="btn btn-success btn-icon-split" href="{{route('questions.create', $Question_segment)}}">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add Data</span>
                </a>
                <div class="my-2"></div>
                <br>

                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width:20px">No</th>
                                <th>Question</th>
                                <th>Article</th>
                                <th colspan="4">Answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($Questions as $data)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$data->question}}</td>
                                @if($data->Article)
                                <td>{{$data->Article->content}}</td>
                                @else
                                <td></td>
                                @endif

                                @foreach($data->Aswers as $aswer)
                                @if($aswer->is_correct)

                                <td>
                                    <span class="badge badge-success">{{$aswer->answer}}</span>
                                </td>
                                @else
                                <td>
                                    <span class="badge badge-danger">{{$aswer->answer}}</span>
                                </td>
                                @endif

                                @endforeach
                                <td>
                                    <a class="btn btn-success" role="button" href="{{route('questions.edit',$data->id )}}">
                                        edit
                                    </a>
                                    @if($confirming===$data->id)
                                    <button wire:click="kill({{ $data->id }})" type="button" class="btn btn-danger">Sure?</button>
                                    @else
                                    <button wire:click="confirmDelete({{ $data->id }})" type="button" class="btn btn-danger">Delete</button>
                                    @endif

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
