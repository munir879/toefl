{{$this->asd(123)}}
<div class="row">
    <div class="col-4">
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <!-- <h6 class="m-0 font-weight-bold text-primary">About Your Test</h6> -->
                <a href="#" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-40">
                        <i class="fas fa-play"></i>
                    </span>
                    <span class="text">Start</span>
                </a>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Name : {{$Test->name}}</label>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Date : </label>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Segments : </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight text-primary">
                    <center>Questions <b>1 out of 10</center></b>
                </h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="m-0 font-weight">(directions) atau (Article)</b></h5>
                </div>
                <div class="card-body">
                    <h5 class="m-0 font-weight">What do you want … with all these books?</b></h5>
                </div>
                <br>

                <div class="form-group col-9">
                    <a href="#" class="btn btn-google btn-block text-left">Me to do</a>
                </div>

                <div class="form-group col-9">
                    <a href="#" class="btn btn-google btn-block text-left">I do</a>
                </div>

                <div class="form-group col-9">
                    <a href="#" class="btn btn-google btn-block text-left">I'll do</a>
                </div>

                <div class="form-group col-9">
                    <a href="#" class="btn btn-google btn-block text-left">Me do</a>
                </div>
                <br>

                <!-- <br>
                <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                    <span class="text">Next</span>
                    <span class="icon text-white-40">
                      <i class="fas fa-play"></i>
                    </span>
                  </a> -->

                <div class="col-sm-12">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">

                        <ul class="pagination">
                            <li class="paginate_button page-item previous" id="dataTable_previous">
                                <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link"><span class="icon text-white-40">
                                        <i class="fas fa-caret-left"></i> Prev</a>
                            </li>

                            <li class="paginate_button page-item next" id="dataTable_next">
                                <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next <span class="icon text-white-40">
                                        <i class="fas fa-caret-right"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>





            </div>
        </div>
    </div>
</div>
