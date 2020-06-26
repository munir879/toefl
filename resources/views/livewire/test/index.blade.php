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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($test as $data)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$data->name}}</td>

                                <td>{{$data->is_active = true ? 'aktif': 'tidak aktif'}}</td>

                                <td>
                                    <button wire:click="$emit('editTest', {{$data->id}})" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                        edit
                                    </button>
                                    @if($confirming===$data->id)
                                    <button wire:click="kill({{ $data->id }})" type="button" class="btn btn-danger">Sure?</button>
                                    @else
                                    <button wire:click="confirmDelete({{ $data->id }})" type="button" class="btn btn-warning">Delete</button>
                                    @endif
                                    <a class="btn btn-primary" href="{{route('test.segmen', $data->id)}}" role="button">Test Segmen</a>
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
<livewire:test.create />
<livewire:test.edit />

@push('scripts')
<script type="text/javascript">
    window.livewire.on('testStore', () => {
        $('#exampleModal').modal('hide')
    })
    window.livewire.on('testUpdate', () => {
        $('#editModal').modal('hide')
    })
</script>
@endpush
