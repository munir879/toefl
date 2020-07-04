<div class="row">
    <div class="col-xl col-lg">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Test Segment</h6>
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
                <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#QuesSegmen">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add Data</span>
                </button>
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
                                <th>Nama</th>
                                <th>Direction</th>
                                <th>Question Quota</th>
                                <th>Article Quota</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($question_segments as $data)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$data->test_segmen->name}}</td>
                                <td>{{$data->question_segment->direction}}</td>
                                <td>{{$data->question_segment->question_quota}}</td>
                                <td>{{$data->question_segment->article_quota}}</td>
                                <td>
                                    <a class="btn btn-primary" role="button" href="{{route('questions.create', $data->question_segment)}}">Add Quest</a>
                                    <a class="btn btn-primary" role="button" href="{{route('articles.create', $data->question_segment)}}">Add Articles</a>
                                    <a class="btn btn-primary" role="button" href="{{route('articles.index', $data->question_segment->id)}}">All Articles</a>
                                    <a class="btn btn-primary" role="button" href="{{route('questions.index', $data->question_segment->id)}}">All Question</a>
                                    <button wire:click="$emit('EditSegmen', {{$data->id}})" type="button" class="btn btn-primary" data-toggle="modal" data-target="#QuesSegmenUpdate">
                                        Edit Quesion Segmen
                                    </button>
                                    @if($confirm===$data->id)
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
<livewire:questions.segmen :id="$IdTest" :wire:key="1" />
<livewire:questions.segmen-update />
