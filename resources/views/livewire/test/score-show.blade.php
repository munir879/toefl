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
                    <label for="staticEmail" class="col-sm-5 col-form-label">Name : {{$test->name}}</label>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-7 col-form-label">Avarage score : {{$test->avgScore}}</label>
                </div>

            </div>
        </div>

    </div>

    <div class="col-8">

        <div class="card shadow mb-8">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight text-primary">
                    <center>Member score</center></b>
                </h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Time</th>
                            <th scope="col">Score</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($memberTest as $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->member->name}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->score}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
