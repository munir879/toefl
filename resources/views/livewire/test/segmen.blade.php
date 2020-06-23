<div class="row">
    <div class="col-xl col-lg">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#QuesSegmen">
                    Launch demo modal
                </button>
                <br>
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
                            @foreach($TestSegmen as $data)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->question_segment->direction}}</td>
                                <td>{{$data->question_segment->question_quota}}</td>
                                <td>{{$data->question_segment->article_quota}}</td>
                                <td><a class="btn btn-primary" role="button" href="{{route('questions.create', $data->question_segment)}}">Add Quest</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<livewire:questions.segmen />

@push('scripts')
<script type="text/javascript">
    window.livewire.on('testStore', () => {
        $('#QuesSegmen').modal('hide')
    })
</script>
@endpush